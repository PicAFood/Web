"use strict";

window.onload = function () {
    /*
    for (var i = 0; i < 15; i++){
        var box = document.createElement("div");
        box.setAttribute("class", "box");
        document.getElementById("container").appendChild(box);
    } 
    randomBoxes();
    */
}

function randomBoxes() {
    var boxes = document.querySelectorAll(".box");
    for (var i = 0; i < boxes.length; i++){
        var r = Math.floor(Math.random()*256);          // Random between 0-255
        var g = Math.floor(Math.random()*256);          // Random between 0-255
        var b = Math.floor(Math.random()*256);          // Random between 0-255
        var rgb = 'rgb(' + r + ',' + g + ',' + b + ')'; // Collect all to a string
        
        boxes[i].style.backgroundColor = rgb;
    }
}