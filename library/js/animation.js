var textWrapper = document.getElementById('welcomeTitle');      // Get the location of the text "Bienvenue"
var textWrapper2 = document.getElementById('clickToGo');        // Get the location of the text "Cliquez pour entrer"

textWrapper.innerHTML = textWrapper.textContent.replace(/\S/g, "<span class='letter'>$&</span>");       // Add <span> between all letters
textWrapper2.innerHTML = textWrapper2.textContent.replace(/\S/g, "<span class='letter'>$&</span>");     // Add <span> between all letters

anime.timeline({ loop: false })
    .add({
        targets: '#welcomeTitle .letter',
        opacity: [0,1],
        easing: "easeInOutQuad",
        duration: 100,
        delay: (el, i) => 50 * (i+1)
    });

anime.timeline({ loop: false })
    .add({
        targets: '#clickToGo .letter',
        opacity: [0,1],
        easing: "easeInOutQuad",
        duration: 50,
        delay: (el, i) => 25 * (i+1)
    });

