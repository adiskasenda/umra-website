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

    // you can use this function with Helpers::convertPhone($nohp)
    public static function convertPhone($nohp) {
        // kadang ada penulisan no hp 0811 239 345
        $nohp = str_replace(" ","",$nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace("(","",$nohp);
        // kadang ada penulisan no hp (0274) 778787
        $nohp = str_replace(")","",$nohp);
        // kadang ada penulisan no hp 0811.239.345
        $nohp = str_replace(".","",$nohp);

        // cek apakah no hp mengandung karakter + dan 0-9
        if(!preg_match('/[^+0-9]/',trim($nohp))){
                // cek apakah no hp karakter 1-3 adalah +62
                if(substr(trim($nohp), 0, 3)=='62'){
                    $hp = trim($nohp);
                }
                // cek apakah no hp karakter 1 adalah 0
                elseif(substr(trim($nohp), 0, 1)=='0'){
                    $hp = '62'.substr(trim($nohp), 1);
                }
                // cek apakah no hp karakter 1 adalah 8
                elseif(substr(trim($nohp), 0, 1)=='8'){
                    $hp = '62'.trim($nohp);
                }
                // cek apakah no hp karakter 1 adalah +
                elseif(substr(trim($nohp), 0, 1)=='+'){
                    $hp = '62'.substr(trim($nohp), 1);
                }else{
                    $hp     = $nohp;
                }
        } else {
            $hp     = $nohp;
        }
        
        return $hp;
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
                        "title" => "Ganti Password",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-lock-closed.png'),
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
                        "icon" => asset('assets-web/img/icon/icon-sidebar-activity.png'),
                    ]
                ]
            ],
            [
                "collaps" => "Pusat Bantuan",
                "menu_collaps" => [
                    [
                        "url" => "https://api.whatsapp.com/send?phone=+628118748886&text=Halo Umra, saya mau bertanya..",
                        "title" => "Customer Service",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-customer-service.png'),
                    ],
                    [
                        "url" => url('/faq'),
                        "title" => "FAQ",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-faq.png'),
                    ],
                    [
                        "url" => "#",
                        "title" => "Kebijakan Privasi",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-privacy-police.png'),
                    ],
                    [
                        "url" => "#",
                        "title" => "Syarat dan Ketentuan",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-term-and-condition.png'),
                    ],
                    [
                        "url" => url('/logout'),
                        "title" => "Keluar",
                        "icon" => asset('assets-web/img/icon/icon-sidebar-logout.png'),
                    ]
                ]
            ],
        ];

        return $sidebar;
    }

    // you can use this function with Helpers::checkFlagUmroh
    public static function checkFlagUmroh($flagUmroh) {
        switch ($flagUmroh) {
            case '0':
                $category = 'umroh';
                break;
            case '1':
                $category = 'umrohplus';
                break;
            default:
                $category = 'wisatahalal';
        }
        
        return $category;
    }

    // you can use this function with Helpers::viewFlagUmroh
    public static function viewFlagUmroh($flagUmroh) {
        switch ($flagUmroh) {
            case '0':
                $category = 'Umroh';
                break;
            case '1':
                $category = 'Umroh Plus';
                break;
            default:
                $category = 'Wisata Halal';
        }
        
        return $category;
    }

    // you can use this function with Helpers::checkProfile
    public static function checkProfile($user) {
        if ( $user ) {
            return true;
        }
        
        return false;
    }

}
