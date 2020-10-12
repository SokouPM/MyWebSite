<?php

declare(strict_types=1);    // to impose "types" on variables and methods.

header('content-type: text/html; charset=utf-8');   // to get accents

require_once 'controller/controllerNavigation.php';     // To call controllerNavigation class

(new controllerNavigation())->runNavigation();   // Call function runNavigation() from "Controller/controllerNavigation.php"