<?php

class controllerNav
{

    public static function runNavigation()
    {

        switch (key($_GET)) {   // If in the url there is :
            case null:
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
                    $mail->sendMail($mail->getLastname(), $mail->getFirstname(), $mail->getEmailAdress(), $mail->getObject(), $mail->getMessage());

                    $_SESSION["mailReturn"] = "Votre message a bien été envoyé !";
                    $_SESSION["mailConfirm"] = true;

                    header('location: index.php?contact');     // Go to page "view/whoami.php"
                } else {

                    $_SESSION["lastName"]   = $_POST["lastName"];
                    $_SESSION["firstName"]  = $_POST["firstName"];
                    $_SESSION["email"]      = $_POST["email"];
                    $_SESSION["object"]     = $_POST["object"];
                    $_SESSION["message"]    = $_POST["message"];

                    $_SESSION["mailReturn"]     = "Erreur lors de l'envoi de votre message, contactez-moi sur marquet_pierre@yahoo.fr.";
                    $_SESSION["mailConfirm"]    = false;

                    header('location: index.php?contact');     // Go to page "view/whoami.php"
                }
                break;

            default:
                header('location: index.php');     // Go to page "view/whoami.php"
                break;
        }
    }
}
