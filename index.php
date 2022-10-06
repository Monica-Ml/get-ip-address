<?php  
$ip = getIPAddress();  
echo 'User Real IP Address - '.$ip;  

function getIPAddress() {  
    if(!empty($_SERVER['HTTP_CLIENT_IP'])) {                //whether ip is from the share internet  
        $ip = $_SERVER['HTTP_CLIENT_IP'];  
    }elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {    //whether ip is from the proxy
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
    }else{                                                  //whether ip is from the remote address
        $ip = $_SERVER['REMOTE_ADDR'];  
    }  
    return $ip;  
}
?>