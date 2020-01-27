<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

define("ROOT", $_SERVER['DOCUMENT_ROOT']);
//var_dump($_SERVER['DOCUMENT_ROOT']);
//exit;
define("CONTROLLER_PATH", ROOT."controllers/");
define("MODEL_PATH", ROOT."models/");
define("SERVICE_PATH", ROOT."services/");

require_once ("db.php");
require_once ("route.php");
require_once MODEL_PATH. 'Model.php';
require_once CONTROLLER_PATH. 'Controller.php';
require_once  SERVICE_PATH. 'CreateTreeServices.php';

Routing::buildRoute();