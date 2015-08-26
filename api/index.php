<?php

# === Para mostrar todos erros
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);
ini_set('display_errors','On');

# === Session
session_cache_limiter(false);
@session_start();

# === Constants
# ==================================================
define("_BASE", dirname(__FILE__).DIRECTORY_SEPARATOR );

# === Doctryne
# ==================================================
require 'Doctryne/Vendor/autoload.php';

# === Models
# ==================================================
require 'Doctryne/Models/Usuarios.php';

# === Slim
# ==================================================
require 'Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'mode' => 'development',
    'debug' => TRUE
));

# === Helpers
# ==================================================
require_once 'Middleware/Helpers/helpers.php';

# === Controllers
# ==================================================
require_once 'Middleware/Controllers/baseController.php';
require_once 'Middleware/Controllers/loginController.php';

# === Routes
# ==================================================
require_once 'Middleware/routes.php';

# === run slim
$app->run();