<?php
namespace App\Helpers;

class Helper
{

    public static function  getUserIP() {
        $ipaddress="";
        if (isset($_SERVER['HTTP_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_X_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
        else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
            $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
        else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
            $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
        else if(isset($_SERVER['HTTP_FORWARDED']))
            $ipaddress = $_SERVER['HTTP_FORWARDED'];
        else if(isset($_SERVER['REMOTE_ADDR']))
            $ipaddress = $_SERVER['REMOTE_ADDR'];
        else
            $ipaddress="UNKNOWN";
        return $ipaddress;
    }

    public static function getIp() {
        $ip = $_SERVER['REMOTE_ADDR'];
     
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
     
        return $ip;
    }
    
    // you can use this function with Helpers::imageBannerDefault()
    public static function imageBannerDefault() {
        return asset('assets-web/img/image/image-not-found.png');
    }

    // you can use this function with Helpers::imageCardDefault()
    public static function imageCardDefault() {
        return asset('assets-web/img/image/image-not-found.png');
    }

    // you can use this function with Helpers::avatarDefault()
    public static function avatarDefault() {
        return asset('assets-web/img/icon/avatar.png');
    }
}