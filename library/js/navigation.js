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

function linkActive(url) {

    let link = document.getElementsByClassName('nav-link');

    switch (url) {
        case 'mycareer':
            link[0].classList.add("active");
            link[1].classList.remove("active");
            link[2].classList.remove("active");
            break;

        case 'infographics':
            link[0].classList.remove("active");
            link[1].classList.add("active");
            link[2].classList.remove("active");
            break;

        case 'web':
            link[0].classList.remove("active");
            link[1].classList.remove("active");
            link[2].classList.add("active");
            break;

        default:
            link[0].classList.remove("active");
            link[1].classList.remove("active");
            link[2].classList.remove("active");
            break;
    }
}

function navigationTitle(url) {

    let currentTitle = document.getElementsByTagName('title')[0];

    switch (url) {
        case 'whoami':
            currentTitle.innerHTML = "Pierre Marquet - Qui suis-je";
            break;

        case 'mycareer':
            currentTitle.innerHTML = "Pierre Marquet - Parcours";
            break;

        case 'infographics':
            currentTitle.innerHTML = "Pierre Marquet - Productions graphiques";
            break;

        case 'web':
            currentTitle.innerHTML = "Pierre Marquet - Productions web";
            break;

        default:
            break;
    }
}

/*********************************************************************************/
/********************************* PRINCIPAL CODE ********************************/
/*********************************************************************************/

window.addEventListener('DOMContentLoaded', function () {
    window.onload = currentPage = getUrl();
    window.onload = linkActive(currentPage);
    window.onload = navigationTitle(currentPage);
});
