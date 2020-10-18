<?php

switch (key($_GET)) {   // If in the url there is :
    case 'accueil':
        require_once('view/home.php');       // Go to page "view/whoami.php"
        break;

    case 'presentation':
        require_once('view/whoami.php');       // Go to page "view/whoami.php"
        break;

    case 'parcours':
        require_once('view/mycareer.php');     // Go to page "view/mycareer.php"
        break;

    case 'infographies':
        require_once('view/infographics.php');     // Go to page "view/mycareer.php"
        break;

    case 'web':
        require_once('view/web.php');     // Go to page "view/web.php"
        break;

    default:
        header('location: index.php?accueil');     // Go to page "view/whoami.php"
        break;
}