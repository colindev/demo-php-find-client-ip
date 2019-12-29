<?php

class Net{
    
    public static function match($cidr, $ip):bool 
    {
        $source = ip2long($ip);
        if ($source === false) return false;

        // $cidr must be right formating
        [$prefix, $mask] = explode('/', $cidr);
        $mask_long = ip2long($mask);
        if ($mask_long === false) {
            $mask_long = 0xffffffff << (32 - (int)$mask);
        }

        $prefix_long = ip2long($prefix);
        if ($prefix_long === false) {
            throw new Exception("${prefix} not ip");
        }

        return ($source & $mask_long) === ($prefix_long & $mask_long);
    }

    private $proxies = array();
    public function __construct(array $proxies)
    {
        $this->proxies = $proxies;
    }

    private function fromProxy($ip):bool
    {
        foreach ($this->proxies as $cidr) {
            if (self::match($cidr, $ip)) {
                return true;
            }
        }
        return false;
    }

    public function getUserIP(array $arr):string
    {
        $userIP = array_key_exists('REMOTE_ADDR', $arr)? $arr['REMOTE_ADDR']: '';

        if ( ! $this->fromProxy($userIP)) return $userIP;
        if (! array_key_exists('HTTP_X_FORWARDED_FOR', $arr)) return $userIP;

        $xff = preg_split('/,\s*/', $arr['HTTP_X_FORWARDED_FOR']);
        $ip = '';
        for ($len = count($xff), $i = $len -1; $i >= 0; $i --) {
            $ip = trim($xff[$i]);
            if (!$this->fromProxy($ip)) return $ip;
        }

        // return last ip
        return $ip;
    }
}
