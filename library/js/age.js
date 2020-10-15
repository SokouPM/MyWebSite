'use strict'
/*********************************************************************************/
/*********************************** VARIABLES ***********************************/
/*********************************************************************************/

var currentAge;
var ageLocation;

/*********************************************************************************/
/*********************************** FUNCTIONS ***********************************/
/*********************************************************************************/

function getAge(birthDate) {

    ageLocation = document.getElementById('myAge');     // To get the location of my age

    let diff = Date.now() - birthDate.getTime();        // Calculate my age with my date of birth and today's
    let age = new Date(diff);   

    return Math.abs(age.getUTCFullYear() - 1970);
}

// /*********************************************************************************/
// /********************************* PRINCIPAL CODE ********************************/
// /*********************************************************************************/

window.addEventListener('DOMContentLoaded', function () {
    window.onload = currentAge = getAge(new Date(1993, 3, 28));     // run getAge with my date of birth
    window.onload = ageLocation.innerHTML = currentAge + " ans";    // Write my age on location
});