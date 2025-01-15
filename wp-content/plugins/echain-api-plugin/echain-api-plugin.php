<?php
/*
Plugin Name: ECHAIN Data Plugin
Description: Plugin untuk menampilkan data cabang dan trafik e-CHAIN.
Version: 1.1
Author: @adiariyantodev
Author URI: https://adiariyanto.my.id
*/

defined('ABSPATH') || exit;

// Fungsi untuk mendapatkan token
function echain_get_token() {
    //$response = wp_remote_post('http://172.20.9.102/echain-api/token/getAuth', [
    $response = wp_remote_post('https://e-chain.airnavindonesia.co.id/api_echain/token/getAuth', [
        'headers' => [
            'Content-Type' => 'application/x-www-form-urlencoded',
        ],
        'body' => [
            'username' => 'Website',
            //'password' => '123'
            'password' => 'W3bs!t3AirN4V'
        ],
    ]);

    if (is_wp_error($response)) {
        error_log('Error: ' . $response->get_error_message());
        return null;
    }


    $body = json_decode(wp_remote_retrieve_body($response));
    return $body->access_token ?? null;
}

// Fungsi untuk mendapatkan data cabang
function echain_get_data_cabang($token) {
    //$response = wp_remote_get('http://172.20.9.102/echain-api/website/datacabang', [
    $response = wp_remote_get('https://e-chain.airnavindonesia.co.id/api_echain/website/datacabang', [
        'headers' => [
            'Authorization' => "Bearer $token"
        ]
    ]);

    if (is_wp_error($response)) {
        return null;
    }

    return json_decode(wp_remote_retrieve_body($response))->data ?? null;
}

// Fungsi untuk mendapatkan data trafik
function echain_get_data_traffic($token) {
    $response = wp_remote_get('http://172.20.9.102/echain-api/website/datatraffic', [
        'headers' => [
            'Authorization' => "Bearer $token"
        ]
    ]);

    if (is_wp_error($response)) {
        return null;
    }

    return json_decode(wp_remote_retrieve_body($response))->data ?? null;
}

// Shortcode untuk menampilkan data cabang
function echain_display_data_cabang() {
    $token = echain_get_token();
    if (!$token) {
        return "Gagal mendapatkan token.";
    }

    $data_cabang = echain_get_data_cabang($token);
    if (!$data_cabang) {
        return "Gagal mendapatkan data cabang.";
    }

    // Simpan data cabang dalam JSON untuk diakses oleh JavaScript
    $data_json = json_encode($data_cabang);
    
    // Menyisipkan data ke dalam elemen script
    $output = '<script type="text/javascript">';
    $output .= 'var cabangData = ' . $data_json . ';';
    $output .= '</script>';

    return $output;
}
add_shortcode('echain_cabang', 'echain_display_data_cabang');


function echain_display_data_traffic() {
    $token = echain_get_token();
    if (!$token) {
        return "Gagal mendapatkan token.";
    }

    $data_traffic = echain_get_data_traffic($token);
    if (!$data_traffic) {
        return "Gagal mendapatkan data trafik.";
    }

    // Karena data_traffic adalah array, ambil item pertama
    $data = $data_traffic[0];

    $output = '<h3>Data Traffic</h3>';
    $output .= "<p>Jumlah Cabang: " . (!empty($data->jumlah_cabang) ? $data->jumlah_cabang : '0') . "</p>";
    $output .= "<p>Departure Domestic: " . (!empty($data->jumdep_dom) ? $data->jumdep_dom : '0') . "</p>";
    $output .= "<p>Arrival Domestic: " . (!empty($data->jumarr_dom) ? $data->jumarr_dom : '0') . "</p>";
    $output .= "<p>Departure International: " . (!empty($data->jumdep_int) ? $data->jumdep_int : '0') . "</p>";
    $output .= "<p>Arrival International: " . (!empty($data->jumarr_int) ? $data->jumarr_int : '0') . "</p>";

    return $output;
}


add_shortcode('echain_cabang', 'echain_display_data_cabang');
add_shortcode('echain_traffic', 'echain_display_data_traffic');

// Shortcode untuk jumlah_cabang
function echain_jumlah_cabang_shortcode() {
    $token = echain_get_token();
    if (!$token) {
        return 0;
    }

    $data_traffic = echain_get_data_traffic($token);
    return $data_traffic[0]->jumlah_cabang ?? 0;
}
add_shortcode('echain_jumlah_cabang', 'echain_jumlah_cabang_shortcode');

// Shortcode untuk jumdep_dom
function echain_jumdep_dom_shortcode() {
    $token = echain_get_token();
    if (!$token) {
        return 0;
    }

    $data_traffic = echain_get_data_traffic($token);
    return $data_traffic[0]->jumdep_dom ?? 0;
}
add_shortcode('echain_jumdep_dom', 'echain_jumdep_dom_shortcode');

// Shortcode untuk jumarr_dom
function echain_jumarr_dom_shortcode() {
    $token = echain_get_token();
    if (!$token) {
        return 0;
    }

    $data_traffic = echain_get_data_traffic($token);
    return $data_traffic[0]->jumarr_dom ?? 0;
}
add_shortcode('echain_jumarr_dom', 'echain_jumarr_dom_shortcode');

// Shortcode untuk jumdep_int
function echain_jumdep_int_shortcode() {
    $token = echain_get_token();
    if (!$token) {
        return 0;
    }

    $data_traffic = echain_get_data_traffic($token);
    return $data_traffic[0]->jumdep_int ?? 0;
}
add_shortcode('echain_jumdep_int', 'echain_jumdep_int_shortcode');

// Shortcode untuk jumarr_int
function echain_jumarr_int_shortcode() {
    $token = echain_get_token();
    if (!$token) {
        return 0;
    }

    $data_traffic = echain_get_data_traffic($token);
    return $data_traffic[0]->jumarr_int ?? 0;
}
add_shortcode('echain_jumarr_int', 'echain_jumarr_int_shortcode');

//FUNGSI CUSTOM LAIN
//function custom_login_redirect() {
  //  $login_url = home_url('/auth');
    //wp_redirect($login_url);
    //exit();
//}
//add_action('login_init', 'custom_login_redirect');

function remove_comments_menu() {
    remove_menu_page( 'edit-comments.php' );
}
add_action( 'admin_menu', 'remove_comments_menu' );

function remove_menu_appearance_for_all() {
    remove_menu_page('themes.php'); // Menghapus menu Tampilan dari dashboard
}
add_action('admin_menu', 'remove_menu_appearance_for_all', 999);

function remove_menu_tools_for_all() {
    remove_menu_page('tools.php'); // Menghapus menu Peralatan
}
add_action('admin_menu', 'remove_menu_tools_for_all', 999);

// Menambahkan CSS untuk halaman login
function custom_login_page_styles() {
    echo '<style type="text/css">
        body.login {
            background-image: url(' . plugin_dir_url(__FILE__) . 'images/bg.jpg);
            background-size: cover;
            background-position: center center;
            height: 100vh;
        }

        #login {
            background: rgba(255, 255, 255, 0.8);
            padding: 100px 50px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            width: 400px;
	    position:absolute;
	    height:-webkit-fill-available;
        }

        #login h1 a {
            background-image: url(' . plugin_dir_url(__FILE__) . 'images/logo.png);
            background-size: contain;
            height: 60px;
            width: 100%;
            margin-bottom: 30px;
        }

        .login form {
            margin-top: 0;
	padding:0;
	border:0;
	background:transparent;
        }

	.language-switcher {
	    display: none;
	}

        .login label {
            font-size: 14px;
            color: #333;
        }

	#nav{
	    display:none;
	}

        .login input[type="text"],
        .login input[type="password"] {
            font-size: 16px;
            padding: 10px;
            width: 100%;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login input[type="submit"] {
            padding: 3px 30px !important;
            border-radius: 50px;
            cursor: pointer;
	    margin-top:20px;
        }

        .login input[type="submit"]:hover {
            background-color: #005c8a;
        }

        .login #backtoblog,
        .login #nav {
            text-align: center;
        }
    </style>';
}
add_action('login_head', 'custom_login_page_styles');

// Menambahkan URL logo login
function custom_login_logo_url() {
    return home_url();
}
add_filter('login_headerurl', 'custom_login_logo_url');
