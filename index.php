<?php

/**
 * ARCHIVO INDEX 
 * @author "Imagen Web" <raul.ramirez@imagenwebhq.com>
 * @version 1
 */
#utf8 header
header('Content-Type: text/html; charset=utf-8');

#definimos el timezone
date_default_timezone_set('America/Asuncion');

#mostrar errores
error_reporting(E_ALL);
ini_set('display_errors', '1');
ob_start();

require 'config.php';
require 'util/Auth.php';

// Also spl_autoload_register (Take a look at it if you like)
function __autoload($class) {
    require LIBS . $class . ".php";
}

Session::init();

//cargarmos las librerias a ser utilizadas en todo el sistema
require 'util/Helper.php';

// Load the Bootstrap!
$bootstrap = new Bootstrap();

// Optional Path Settings
//$bootstrap->setControllerPath();
//$bootstrap->setModelPath();
//$bootstrap->setDefaultFile();
$bootstrap->setErrorFile();

$bootstrap->init();

ob_end_flush();