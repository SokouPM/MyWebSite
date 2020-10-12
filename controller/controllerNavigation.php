<?php

class controllerNavigation
{
    public function runNavigation(): void
    {
        /**** the condition "switch" will allow us to navigate between pages and make treatments through URLs ****/

        switch (key($_GET)) {   // If in the url there is :
            case 'whoami':
                include_once 'View/whoami.phtml';       // Go to page "view/whoami.phtml"
                break;

            case 'mycareer':
                include_once 'View/mycareer.phtml';     // Go to page "view/mycareer.phtml"
                break;

            case 'infographics':
                include_once 'View/infographics.phtml';     // Go to page "view/mycareer.phtml"
                break;

            case 'web':
                include_once 'View/web.phtml';     // Go to page "view/mycareer.phtml"
                break;

            default:
                header('location: index.php?whoami');     // Go to page "view/whoami.phtml"
                break;
        }
    }
}
