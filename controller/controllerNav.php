<?php

switch (key($_GET)) {   // If in the url there is :
    case 'accueil':
        require_once('view/home.phtml');       // Go to page "view/home.php"
        break;

    case 'presentation':
        require_once('view/whoami.phtml');       // Go to page "view/whoami.php"
        break;

    case 'parcours':
        require_once('view/mycareer.phtml');     // Go to page "view/mycareer.php"
        break;

    case 'infographies':
        require_once('view/infographics.phtml');     // Go to page "view/mycareer.php"
        break;

    case 'web':
        require_once('view/web.phtml');     // Go to page "view/web.php"
        break;

    case 'contact':
        require_once('view/contact.phtml');     // Go to page "view/web.php"
        break;

    case 'contactPost':
        require_once('model/mailClass.php');       // to run functions from "model/mailCLass.php"

        if (!empty($_POST["lastName"]) && !empty($_POST["firstName"]) && !empty($_POST["email"]) && !empty($_POST["object"]) && !empty($_POST['message'])) {

            $mail = new Mail($_POST["lastName"], $_POST["firstName"], $_POST["email"], $_POST["object"], $_POST["message"]);
            $test = $mail->sendMail($mail->getLastname(), $mail->getFirstname(), $mail->getEmailAdress(), $mail->getObject(), $mail->getMessage());
            echo ($test);
        } else {

            $errorMsg = "tout remplir !";
            echo ($errorMsg);
        }
        break;

    default:
        header('location: index.php?accueil');     // Go to page "view/whoami.php"
        break;
}
