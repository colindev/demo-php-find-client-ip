<?php

class CIDR {
    private $_range = 0;
    private $_mask = 0xffffffff;
    public function __construct(string $cidr)
    {
        [$prefix, $mask] = explode('/', $cidr);
        $mask_long = ip2long($mask);
        if ($mask_long === false) {
            $mask_long = 0xffffffff << (32 - (int)$mask);
        }
        $this->_mask = $mask_long;

        $prefix_long = ip2long($prefix);
        if ($prefix_long === false) {
            throw new Exception("${prefix} not ip");
        }

        $this->_range = $prefix_long;
    }

    public function maskLangth():int
    {
        return strlen(trim(decbin($this->_mask), "0"));
    }

    public function maskLong():int
    {
        return $this->_mask;
    }

    public function range():int
    {
        return $this->_range;
    }

    public function mask(string $ip)
    {
        $ip_long = ip2long($ip);
        if ($ip_long === false) return false;

        return $ip_long & $this->_mask;
    }

    public function match(string $ip):bool
    {
        return $this->_range === $this->mask($ip);
    }
}

class Network{

    private $proxies = array();
    public function __construct(array $proxies)
    {
        foreach ($proxies as $cidr) {
            $proxyCIDR = new CIDR($cidr);
            $maskLong = $proxyCIDR->maskLong();
            if ( ! array_key_exists($maskLong, $this->proxies)) {
                $this->proxies[$maskLong] = array();
            }
            $this->proxies[$maskLong][$proxyCIDR->range()] = true;
        }
    }

    public function __sleep()
    {
        return ['proxies'];
    }

    public function fromProxy(string $ip):bool
    {

        $ip_long = ip2long($ip);
        if ($ip_long === false) return false;

        foreach ($this->proxies as $maskLong => $arr) {

            $masked = $ip_long & $maskLong;
            if (array_key_exists($masked, $arr)) {
                return true;
            }

        }

        return false;
    }

    public function getUserIP(array $arr):string
    {
        $userIP = array_key_exists('REMOTE_ADDR', $arr)? $arr['REMOTE_ADDR']: '';

        if ( ! $this->fromProxy($userIP)) return $userIP;

        $xff = preg_split('/,\s*/', array_key_exists('HTTP_X_FORWARDED_FOR', $arr)? $arr['HTTP_X_FORWARDED_FOR']:'');
        $ip = '';
        for ($len = count($xff), $i = $len -1; $i >= 0; $i --) {
            $ip = $xff[$i];
            if (!$this->fromProxy($ip)) return $ip;
        }

        // return last ip
        return $ip;
    }
}
