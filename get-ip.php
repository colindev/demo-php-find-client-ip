<?php

/***************************************************
用來比較proxy是否為我們的proxy,
if 是的話,則抓取$_SERVER['HTTP_X_FORWARDED_FOR']
else 抓取$_SERVER['REMOTE_ADDR']
***************************************************/
final class proxy_list
{
    public static $proxy_ip = array(
         "101.79.148.135"
        ,"101.79.151.107"
        ,"101.79.151.120"
        ,"101.79.151.71"
        ,"101.79.151.83"
        ,"101.79.154.103"
        ,"101.79.154.115"
        ,"101.79.154.66"
        ,"101.79.154.79"
        ,"103.248.0.111"
        ,"103.252.212.1"
        ,"103.252.212.10"
        ,"103.252.212.11"
        ,"103.252.212.12"
        ,"103.252.212.13"
        ,"103.252.212.14"
        ,"103.252.212.15"
        ,"103.252.212.16"
        ,"103.252.212.17"
        ,"103.252.212.18"
        ,"103.252.212.19"
        ,"103.252.212.2"
        ,"103.252.212.20"
        ,"103.252.212.21"
        ,"103.252.212.22"
        ,"103.252.212.23"
        ,"103.252.212.24"
        ,"103.252.212.25"
        ,"103.252.212.26"
        ,"103.252.212.27"
        ,"103.252.212.3"
        ,"103.252.212.4"
        ,"103.252.212.5"
        ,"103.252.212.6"
        ,"103.252.212.7"
        ,"103.252.212.8"
        ,"103.25.8.99"
        ,"103.27.124.201"
        ,"103.31.222.28"
        ,"103.31.222.29"
        ,"103.31.223.18"
        ,"103.31.223.19"
        ,"103.31.223.34"
        ,"103.48.83.55"
        ,"104.152.47.19"
        ,"104.152.47.20"
        ,"104.152.47.21"
        ,"104.152.47.22"
        ,"104.152.47.23"
        ,"104.152.47.24"
        ,"110.35.84.195"
        ,"110.35.84.218"
        ,"110.35.84.4"
        ,"110.35.84.4"
        ,"110.35.84.8"
        ,"110.35.84.8"
        ,"110.35.84.9"
        ,"110.35.84.9"
        ,"112.81.148.3"
        ,"112.82.240.201"
        ,"115.231.11.163"
        ,"115.231.11.165"
        ,"115.231.11.166"
        ,"115.231.11.190"
        ,"115.231.13.126"
        ,"115.231.13.138"
        ,"115.231.13.148"
        ,"115.231.13.151"
        ,"115.231.13.223"
        ,"115.231.174.63"
        ,"115.231.174.64"
        ,"115.231.174.76"
        ,"115.231.174.77"
        ,"115.231.174.78"
        ,"115.231.174.79"
        ,"115.231.174.80"
        ,"115.231.174.81"
        ,"115.231.174.82"
        ,"115.231.233.82"
        ,"115.238.241.140"
        ,"115.239.255.176"
        ,"115.239.255.177"
        ,"115.239.255.178"
        ,"115.239.255.179"
        ,"115.239.255.180"
        ,"115.239.255.181"
        ,"115.239.255.182"
        ,"115.239.255.183"
        ,"115.239.255.184"
        ,"115.239.255.185"
        ,"115.239.255.21"
        ,"116.31.119.137"
        ,"116.31.119.161"
        ,"116.31.119.179"
        ,"116.31.119.184"
        ,"116.31.119.230"
        ,"116.31.119.67"
        ,"116.31.119.73"
        ,"116.31.119.83"
        ,"117.27.250.15"
        ,"117.27.250.17"
        ,"117.27.250.45"
        ,"117.27.250.66"
        ,"118.184.7.64"
        ,"118.193.145.38"
        ,"118.193.145.76"
        ,"118.212.130.239"
        ,"119.164.255.21"
        ,"119.31.249.3"
        ,"119.31.249.4"
        ,"119.31.251.2"
        ,"119.31.251.3"
        ,"119.31.251.4"
        ,"119.31.251.5"
        ,"119.31.251.6"
        ,"119.59.127.28"
        ,"119.81.237.2"
        ,"119.90.134.229"
        ,"119.90.54.198"
        ,"120.195.110.197"
        ,"121.10.107.246"
        ,"121.11.81.70"
        ,"121.12.115.15"
        ,"121.12.115.16"
        ,"121.12.116.28"
        ,"121.14.212.131"
        ,"122.0.76.107"
        ,"122.10.98.11"
        ,"122.10.98.52"
        ,"122.152.177.217"
        ,"122.228.245.229"
        ,"122.228.245.230"
        ,"122.228.245.231"
        ,"122.228.245.232"
        ,"122.228.245.233"
        ,"122.228.245.234"
        ,"122.228.245.52"
        ,"122.228.245.55"
        ,"122.228.245.56"
        ,"122.228.80.222"
        ,"122.228.80.223"
        ,"122.228.80.224"
        ,"122.228.80.225"
        ,"123.129.255.96"
        ,"123.30.183.14"
        ,"123.30.183.15"
        ,"125.91.11.161"
        ,"14.0.33.244"
        ,"14.0.34.180"
        ,"14.0.34.243"
        ,"14.0.35.116"
        ,"14.0.36.116"
        ,"14.0.36.134"
        ,"14.0.36.149"
        ,"14.0.38.116"
        ,"14.0.42.180"
        ,"14.0.44.198"
        ,"14.0.44.213"
        ,"14.0.45.165"
        ,"14.0.45.180"
        ,"14.0.45.218"
        ,"14.0.45.34"
        ,"14.0.45.49"
        ,"14.0.52.161"
        ,"14.0.52.184"
        ,"14.0.57.3"
        ,"14.0.57.4"
        ,"14.0.58.2"
        ,"14.0.58.37"
        ,"14.0.58.4"
        ,"14.0.60.145"
        ,"14.0.60.6"
        ,"14.0.60.7"
        ,"14.0.62.132"
        ,"14.0.62.140"
        ,"14.0.62.2"
        ,"14.0.62.8"
        ,"14.0.62.9"
        ,"14.0.99.11"
        ,"14.0.99.13"
        ,"14.0.99.14"
        ,"14.128.0.131"
        ,"14.128.0.161"
        ,"14.128.0.191"
        ,"14.128.0.206"
        ,"14.128.0.221"
        ,"14.128.0.236"
        ,"152.101.90.66"
        ,"162.212.180.193"
        ,"162.212.180.23"
        ,"162.212.180.35"
        ,"162.212.180.89"
        ,"162.212.182.128"
        ,"162.212.182.140"
        ,"162.212.182.179"
        ,"162.212.182.192"
        ,"162.212.182.198"
        ,"162.212.182.211"
        ,"162.221.14.22"
        ,"162.221.15.213"
        ,"162.250.140.58"
        ,"162.250.140.59"
        ,"162.250.140.60"
        ,"162.250.140.61"
        ,"162.250.140.62"
        ,"162.250.140.82"
        ,"162.250.140.83"
        ,"162.250.140.84"
        ,"162.250.140.85"
        ,"162.250.140.86"
        ,"162.251.22.69"
        ,"167.114.61.11"
        ,"168.235.240.220"
        ,"168.235.240.221"
        ,"168.235.240.222"
        ,"168.235.240.223"
        ,"168.235.240.224"
        ,"168.235.240.225"
        ,"168.235.240.226"
        ,"168.235.240.227"
        ,"168.235.240.228"
        ,"168.235.240.229"
        ,"172.20.1.252"
        ,"172.20.1.253"
        ,"172.20.1.254"
        ,"175.41.10.149"
        ,"175.41.10.99"
        ,"175.41.15.221"
        ,"175.41.15.5"
        ,"175.41.15.6"
        ,"175.41.3.196"
        ,"175.41.3.206"
        ,"175.41.3.216"
        ,"175.41.4.28"
        ,"175.41.7.147"
        ,"175.41.7.2"
        ,"175.41.7.210"
        ,"175.41.7.3"
        ,"175.41.7.4"
        ,"175.41.7.5"
        ,"175.41.7.6"
        ,"175.41.9.228"
        ,"175.41.9.229"
        ,"180.97.171.35"
        ,"182.18.26.27"
        ,"183.131.69.101"
        ,"183.131.69.103"
        ,"183.131.69.104"
        ,"183.131.69.105"
        ,"183.131.69.106"
        ,"183.131.69.107"
        ,"183.131.69.108"
        ,"183.131.69.118"
        ,"183.131.69.12"
        ,"183.131.69.156"
        ,"183.131.69.20"
        ,"183.131.69.200"
        ,"183.131.69.203"
        ,"183.131.69.208"
        ,"183.131.69.26"
        ,"183.131.69.30"
        ,"183.131.69.36"
        ,"183.131.69.38"
        ,"183.131.69.39"
        ,"183.131.69.42"
        ,"183.131.69.44"
        ,"183.131.69.49"
        ,"183.131.69.52"
        ,"183.131.69.53"
        ,"183.131.69.55"
        ,"183.131.69.66"
        ,"183.131.69.72"
        ,"183.131.69.79"
        ,"183.182.64.144"
        ,"183.182.77.210"
        ,"183.60.106.99"
        ,"183.60.211.221"
        ,"183.61.176.227"
        ,"186.2.168.122"
        ,"186.2.168.138"
        ,"186.2.168.139"
        ,"186.2.168.140"
        ,"186.2.168.141"
        ,"186.2.168.142"
        ,"190.115.26.115"
        ,"190.115.26.116"
        ,"190.115.26.117"
        ,"190.115.26.118"
        ,"192.126.118.42"
        ,"192.126.118.82"
        ,"192.126.118.89"
        ,"192.168.11.201"
        ,"192.168.11.202"
        ,"192.168.11.203"
        ,"192.168.11.204"
        ,"192.168.5.151"
        ,"192.168.5.152"
        ,"192.168.5.153"
        ,"192.168.5.154"
        ,"192.184.60.162"
        ,"192.184.63.177"
        ,"202.158.65.2"
        ,"202.158.65.243"
        ,"202.158.65.3"
        ,"202.158.65.4"
        ,"202.55.16.98"
        ,"203.19.34.168"
        ,"203.19.35.47"
        ,"218.211.190.77"
        ,"218.25.59.145"
        ,"218.61.201.92"
        ,"219.87.178.29"
        ,"220.196.58.231"
        ,"222.175.114.139"
        ,"222.189.228.21"
        ,"222.189.237.38"
        ,"223.68.160.48"
        ,"23.234.32.29"
        ,"23.234.42.32"
        ,"36.250.12.246"
        ,"36.250.12.247"
        ,"36.250.12.248"
        ,"36.250.1.249"
        ,"36.250.13.149"
        ,"36.250.13.162"
        ,"36.250.13.165"
        ,"36.250.13.217"
        ,"36.250.13.220"
        ,"36.250.13.252"
        ,"42.117.8.10"
        ,"42.117.8.118"
        ,"42.117.8.80"
        ,"42.117.8.9"
        ,"45.61.231.35"
        ,"45.61.231.36"
        ,"45.61.231.37"
        ,"45.61.231.38"
        ,"45.61.231.39"
        ,"45.61.231.40"
        ,"45.61.231.41"
        ,"45.61.231.42"
        ,"45.61.231.43"
        ,"45.61.231.44"
        ,"5.254.111.226"
        ,"5.254.111.227"
        ,"5.254.111.228"
        ,"5.254.111.229"
        ,"5.254.111.230"
        ,"5.254.111.231"
        ,"5.254.111.232"
        ,"5.254.111.233"
        ,"5.254.111.234"
        ,"5.254.111.235"
        ,"5.254.111.236"
        ,"5.254.111.237"
        ,"5.254.111.238"
        ,"58.253.68.101"
        ,"59.56.111.42"
        ,"59.56.111.43"
        ,"59.56.111.44"
        ,"59.56.111.45"
        ,"59.56.111.46"
        ,"59.56.111.47"
        ,"59.56.111.48"
        ,"59.56.111.49"
        ,"59.56.111.50"
        ,"59.56.111.51"
        ,"59.56.76.12"
        ,"59.56.76.26"
        ,"59.56.76.27"
        ,"59.56.76.49"
        ,"59.56.76.92"
        ,"60.191.232.138"
        ,"61.110.219.129"
        ,"61.110.219.179"
        ,"61.110.219.229"
        ,"61.110.220.126"
        ,"61.110.220.176"
        ,"61.110.220.226"
        ,"61.110.220.26"
        ,"61.110.220.76"
        ,"61.152.188.53"
        ,"61.160.213.198"
        ,"61.160.250.73"
        ,"61.164.108.137"
        ,"61.164.149.131"
        ,"61.191.56.138"
        ,"61.191.56.153"
        ,"61.19.4.3"
        ,"61.19.4.4"
        ,"64.62.238.48"
        ,"69.172.87.51"
        ,"43.240.204.243"
    );

    public static $proxy_net = array(
        "2.16.217.0/24"
        ,"5.104.64.0/21"
        ,"23.200.86.0/24"
        ,"23.2.16.0/24"
        ,"23.201.102.0/24"
        ,"23.212.53.0/24"
        ,"23.215.63.0/24"
        ,"23.218.156.0/24"
        ,"23.218.157.0/24"
        ,"23.32.241.0/24"
        ,"23.32.248.0/24"
        ,"23.57.69.0/24"
        ,"23.62.109.0/24"
        ,"23.67.253.0/24"
        ,"23.73.180.0/24"
        ,"46.22.64.0/20"
        ,"46.33.75.0/24"
        ,"60.199.98.0/24"
        ,"60.254.131.0/24"
        ,"61.14.188.0/25"
        ,"61.14.191.0/25"
        ,"61.221.181.64/26"
        ,"63.151.119.0/24"
        ,"63.216.194.0/25"
        ,"68.232.32.0/20"
        ,"72.21.80.0/20"
        ,"72.246.188.0/24"
        ,"72.246.216.0/24"
        ,"72.246.56.0/24"
        ,"72.247.145.0/24"
        ,"88.194.45.128/26"
        ,"88.221.212.0/24"
        ,"93.184.208.0/20"
        ,"95.100.96.0/24"
        ,"96.17.155.0/24"
        ,"96.17.181.0/24"
        ,"96.7.54.0/2"
        ,"96.7.54.0/24"
        ,"96.7.55.0/24"
        ,"108.161.240.0/20"
        ,"110.232.176.0/22"
        ,"117.103.183.0/24"
        ,"117.18.232.0/21"
        ,"121.189.46.0/23"
        ,"122.146.153.0/24"
        ,"125.252.87.0/24"
        ,"172.16.0.0/16"
        ,"172.19.188.0/24"
        ,"180.240.184.0/24"
        ,"184.51.15.0/24"
        ,"184.51.198.0/24"
        ,"192.16.0.0/18"
        ,"192.168.11.0/24"
        ,"192.229.128.0/17"
        ,"192.30.0.0/19"
        ,"194.255.210.64/26"
        ,"198.7.16.0/20"
        ,"198.87.188.0/25"
        ,"202.153.196.128/25"
        ,"202.153.197.128/25"
        ,"203.192.174.0/24"
        ,"203.192.175.0/24"
        ,"203.74.4.64/26"
        ,"205.177.208.0/25"
        ,"213.64.234.0/26"
        ,"213.65.58.192/26"
        ,"10.0.0.0/8"  //針對公司內網
    );

	//檢查IP是否在我們的proxy裡面
	public static function net_match($network, $ip) {
		// determines if a network in the form of 192.168.17.1/16 or
		// 127.0.0.1/255.255.255.255 or 10.0.0.1 matches a given ip
		$ip_arr = explode('/', $network);
		$network_long = ip2long($ip_arr[0]);
		$x = ip2long($ip_arr[1]);
		$mask =  long2ip($x) == $ip_arr[1] ? $x : 0xffffffff << (32 - $ip_arr[1]);
		$ip_long = ip2long($ip);

		// echo ">".$ip_arr[1]."> ".decbin($mask)."\n";
		return ($ip_long & $mask) == ($network_long & $mask);
	}

	//使用者IP
	public static function getUserIP() {
		$net_chk = 0;
		foreach (self::$proxy_net as $key => $value){
			$net_chk = self::net_match($value,$_SERVER['REMOTE_ADDR']);
			if( $net_chk == 1 )
				break;
		}

		if((in_array($_SERVER['REMOTE_ADDR'],self::$proxy_ip) || $net_chk == 1) && !empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
			$ip_cfg = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
			$ip_cfg = $ip_cfg[0];
		}else{
			$ip_cfg = $_SERVER['REMOTE_ADDR'];
		}
		return $ip_cfg;
	}
}
function getUserIP()
{
	return proxy_list::getUserIP();
}
?>
