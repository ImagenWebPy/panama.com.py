<?php

/**
 * Archivo de configuraciones del MVC
 * @author Imagen Web <raul.ramirez@imagenwebhq.com>
 */
// Always provide a TRAILING SLASH (/) AFTER A PATH
$host = getHost();
switch ($host) {
    case '192.168.0.25':
        #CENTOS DESA
        define('URL', 'http://192.168.0.25/panama.com.py/');
        define('DB_NAME', 'panamaDB');
        define('DB_USER', 'root');
        define('DB_PASS', '2544386');
        break;
    case 'imagenwebhq.com':
        #CENTOS DESA
        define('URL', 'https://imagenwebhq.com/panama/');
        define('DB_NAME', 'raulimag_panama');
        define('DB_USER', 'raulimag_panama');
        define('DB_PASS', 'E0DQiK2fSB^%EZC+');
        break;
    case 'www.panama.com.py':
        define('URL', 'http://www.panama.com.py/');
        define('DB_NAME', 'panama');
        define('DB_USER', 'root');
        define('DB_PASS', '2544386');
        break;
    case '13.58.71.6':
        define('URL', 'http://13.58.71.6/panama.com.py/');
        define('DB_NAME', 'panama');
        define('DB_USER', 'web_desa');
        define('DB_PASS', 'DesaIWEB123321');
        break;
    case 'localhost':
        define('URL', 'http://localhost/panama.com.py/');
        define('DB_NAME', 'panama');
        define('DB_USER', 'root');
        define('DB_PASS', '');
        break;
}

define('LIBS', 'libs/');

define('DB_TYPE', 'mysql');
define('DB_HOST', 'localhost');


// The sitewide hashkey, do not change this because its used for passwords!
// This is for other hash keys... Not sure yet
define('HASH_GENERAL_KEY', 'MixitUp200');

// This is for database passwords only
define('HASH_PASSWORD_KEY', '!@123456789ABCDEFGHIJKLMNOPRSTWYZ[¿]{?}<->');

//CONFIGURACIONES VARIAS DEL SITIO
define('SITE_TITLE', 'Panamá Representaciones :: ');
define('IMG', URL . 'public/img/');
define('CSS', URL . 'public/css/');
define('JS', URL . 'public/js/');

/**
 * Funcion que obtiene el host (SERVER URL)
 * @return string
 */
function getHost() {
    $host = $_SERVER['HTTP_HOST'];
    return $host;
}
