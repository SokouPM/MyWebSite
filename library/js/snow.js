
var snow = {

    number: 25,        // The number of flakes

    wind: 0,           // Wind. > 0, it shifts to the right, <0 to the left

    maxXrange: 50,    // The maximum value for which the flakes move horizontally
    minXrange: 10,     // The minimum value for which the flakes move horizontally

    maxSpeed: 2,       // The maximum speed with which the flakes descend
    minSpeed: 1,       // The minimum speed with which the flakes descend

    color: "#fff",     // The color of the snowflakes
    char: "*",         // The character used for flakes, also try "•"

    maxSize: 20,       // The maximum size of the snowflake
    minSize: 8,        // The minimum size of the snowflake

    flakes: [],        // The table that will contain ALL the flakes
    WIDTH: 0,          // Window width
    HEIGHT: 0,         // Window height

    /*********************************************************************************/
    /*********************************** FUNCTIONS ***********************************/
    /*********************************************************************************/

    init: function (nb) {       // The function called to create snow. It takes as a parameter the number of flakes required
        var o = this,                                   // o is a variable that will contain the snow object, like that, if it is ever needed in a function or this is equivalent to window, the variable o will be equal to the snow object
            frag = document.createDocumentFragment();   // frag is in fact a variable which allows to store the flakes in a fragment, and to add only the latter to the page, which saves a considerable amount of time.
        o.getSize();            // To get the window size


        for (var i = 0; i < nb; i++) {
            var flake = {
                x: o.random(o.WIDTH),
                y: - o.maxSize,
                xrange: o.minXrange + o.random(o.maxXrange - o.minXrange),
                yspeed: o.minSpeed + o.random(o.maxSpeed - o.minSpeed, 100),
                life: 0,
                size: o.minSize + o.random(o.maxSize - o.minSize),
                html: document.createElement("span")
            };

            flake.html.style.position = "absolute";
            flake.html.style.top = flake.y + "px";
            flake.html.style.left = flake.x + "px";
            flake.html.style.fontSize = flake.size + "px";
            flake.html.style.color = o.color;
            flake.html.appendChild(document.createTextNode(o.char));

            frag.appendChild(flake.html);
            o.flakes.push(flake);
        }

        document.body.appendChild(frag);
        o.animate();
        window.onresize = function () { o.getSize(); };
    },

    animate: function () {
        var o = this;
        for (var i = 0, c = o.flakes.length; i < c; i++) { // For each flakes

            var flake = o.flakes[i],        // The current snowflake
                top = flake.y + flake.yspeed,   // The distance between the snowflake and the top of the page
                left = flake.x + Math.sin(flake.life) * flake.xrange + o.wind;  // The distance between the side of the page and the snowflake, offset by the wind

            if (top < o.HEIGHT - flake.size - 10 && left < o.WIDTH - flake.size && left > 0) {      // If the snowflake doesn't stick out...

                // We position it in the page
                flake.html.style.top = top + "px";
                flake.html.style.left = left + "px";

                // We modify the variables
                flake.y = top;
                flake.x += o.wind;
                flake.life += .01;

            } else {

                flake.html.style.top = -o.maxSize + "px";   // We put it all the way up

                // We choose a random horizontal position
                flake.x = o.random(o.WIDTH);
                flake.y = -o.maxSize;
                flake.html.style.left = flake.x + "px";

                flake.life = 0;   // We reset its state

            }
        }
        setTimeout(function () {
            o.animate();
        }, 20);
    },

    random: function (range, num) {
        var num = num ? num : 1;
        return Math.floor(Math.random() * (range + 1) * num) / num;
    },

    getSize: function () {   // To get the window size
        this.WIDTH = document.body.clientWidth || window.innerWidth;        // IE || Other
        this.HEIGHT = document.body.clientHeight || window.innerHeight;     // IE || Other
    }
};

window.addEventListener('DOMContentLoaded', function () {
    window.onload = snow.init(snow.number);
});