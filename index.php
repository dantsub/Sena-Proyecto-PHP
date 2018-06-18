<?php

require_once "controllers/controller.php";
require_once "models/ruta.php";
require_once "models/foto.php";
require_once "models/crud.php";

$mvc = new MvcController();
$mvc -> template();
