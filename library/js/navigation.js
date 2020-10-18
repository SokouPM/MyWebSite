'use strict'

/*********************************************************************************/
/*********************************** VARIABLES ***********************************/
/*********************************************************************************/

var currentPage;

/*********************************************************************************/
/*********************************** FUNCTIONS ***********************************/
/*********************************************************************************/

function getUrl() {
    let url = document.location.href;       // Get the url of the current page
    url = url.substring(url.lastIndexOf("?") + 1);       // Get the word of the url after ?

    return url;     //return the url after treatments
}

function linkActive(url) {      // To change nav link selected

    let link = document.getElementsByClassName('nav-link');     // To get the location nav link

    switch (url) {
        case 'presentation':
            link[0].classList.add("active");
            link[1].classList.remove("active");
            link[2].classList.remove("active");
            link[3].classList.remove("active");
            break;

        case 'parcours':
            link[0].classList.remove("active");
            link[1].classList.add("active");
            link[2].classList.remove("active");
            link[3].classList.remove("active");
            break;

        case 'infographies':
            link[0].classList.remove("active");
            link[1].classList.remove("active");
            link[2].classList.add("active");
            link[3].classList.remove("active");
            break;

        case 'web':
            link[0].classList.remove("active");
            link[1].classList.remove("active");
            link[2].classList.remove("active");
            link[3].classList.add("active");
            break;

        default:
            break;
    }
}

/*********************************************************************************/
/********************************* PRINCIPAL CODE ********************************/
/*********************************************************************************/

window.addEventListener('DOMContentLoaded', function () {
    window.onload = currentPage = getUrl();         // run getUrl and assign the result in "currentPage"
    window.onload = linkActive(currentPage);        // run linkActive
});
