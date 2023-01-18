<?php
namespace App\Helpers;

class Helpers
{

    // public static function  getUserIP() {
    //     $ipaddress="";
    //     if (isset($_SERVER['HTTP_CLIENT_IP']))
    //         $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    //     else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    //         $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //     else if(isset($_SERVER['HTTP_X_FORWARDED']))
    //         $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    //     else if(isset($_SERVER['HTTP_X_CLUSTER_CLIENT_IP']))
    //         $ipaddress = $_SERVER['HTTP_X_CLUSTER_CLIENT_IP'];
    //     else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
    //         $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    //     else if(isset($_SERVER['HTTP_FORWARDED']))
    //         $ipaddress = $_SERVER['HTTP_FORWARDED'];
    //     else if(isset($_SERVER['REMOTE_ADDR']))
    //         $ipaddress = $_SERVER['REMOTE_ADDR'];
    //     else
    //         $ipaddress="UNKNOWN";
    //     return $ipaddress;
    // }

    // public static function getIp() {
    //     $ip = $_SERVER['REMOTE_ADDR'];
     
    //     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    //         $ip = $_SERVER['HTTP_CLIENT_IP'];
    //     } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    //         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    //     }
     
    //     return $ip;
    // }
    
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

    // you can use this function with Helpers::sidebarProfile
    public static function sidebarProfile() {
        $sidebar = [
            [
                "collaps" => "Akun & Keamanan",
                "menu_collaps" => [
                    [
                        "url" => url('/profile'),
                        "title" => "Profile",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-user.png'),
                    ],
                    [
                        "url" => url('/profile/password'),
                        "title" => "Profile",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-lock-closed.pn'),
                    ],
                    [
                        "url" => url('/profile/pin'),
                        "title" => "Atur PIN",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-subtract.png'),
                    ],
                ]
            ],
            [
                "collaps" => "Aktivitas",
                "menu_collaps" => [
                    [
                        "url" => url('/profile/list-transaction'),
                        "title" => "Riwayat Transaksi",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-history.png'),
                    ],
                    [
                        "url" => url('/profile/activity'),
                        "title" => "Aktivitas Anda",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-history.png'),
                    ]
                ]
            ],
            [
                "collaps" => "Pusat Bantuan",
                "menu_collaps" => [
                    [
                        "url" => "https://api.whatsapp.com/send?phone=+628118748886&text=Halo Umra, saya mau bertanya..",
                        "title" => "Customer Service",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-history.png'),
                    ],
                    [
                        "url" => url('/faq'),
                        "title" => "FAQ",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-history.png'),
                    ],
                    [
                        "url" => "#",
                        "title" => "Kebijakan Privasi",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-history.png'),
                    ],
                    [
                        "url" => "#",
                        "title" => "Syarat dan Ketentuan",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-history.png'),
                    ],
                    [
                        "url" => url('/logout'),
                        "title" => "Keluar",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-history.png'),
                    ]
                ]
            ],
        ];

        return ;
    }
}