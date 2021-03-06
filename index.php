<?php

declare(strict_types=1);    // to impose "types" on variables and methods.

session_start();

header('content-type: text/html; charset=utf-8');   // to get accents

require_once('controller/controllerNav.php');       // to run function from "controller/controllerNav.php"
ControllerNav::toggleSnow();
ControllerNav::runNavigation();
