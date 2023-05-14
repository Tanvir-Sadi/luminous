<?php

require("../vendor/autoload.php");
session_start();
session_regenerate_id();
require_once __DIR__.'/../luminous/Helper/helper.php';
require_once __DIR__ . '/../app/Route/routes.php';
