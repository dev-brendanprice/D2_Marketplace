
const textList = ["Weapon<br>", "Armour<br>", "Items<br>"];
// get cycle element
const cycle = document.querySelector("#cycle");

// set counter to 0
let i = 0;
// define function (short-hand syntax)
const cycleText = () => {
    // change text to array item
    cycle.innerHTML = textList[i];
    // update counter
    i = ++i % textList.length;
};

cycleText();
var seconds = 8; // seconds between each change
// run function on an interval
// setInterval takes milliseconds by default
setInterval(cycleText, seconds * 1000);

// make custom randInt function
function randInt(max) {
    // use javascript math function get random number
    return Math.floor(Math.random() * max);
}

const imgs = ["warlock1", "warlock2", "titan1", "titan2", "hunter1", "hunter2"];

function getRandomImage() {

    var check = false;
    do {
        var num1 = randInt(6);
        var num2 = randInt(6);
        // console.log(num1, num2)

        if (num1 != num2) {
            document.getElementById("imgHolder1").id = `${imgs[num1]}`
            document.getElementById("imgHolder2").id = `${imgs[num2]}`
            check = true;
            return;
        }

        if (num1 == num2) {
            check = false;
        }

    }
    while (check == false);
}

window.addEventListener('load', (event) => {
    getRandomImage();
});

// choose random integer for header picture on window load
// disable header picture, picture change and header text change on mobile devices


// function openInNewWindow() {
//     window.open('https://www.bungie.net/en/oauth/authorize?client_id="35544"&response_type=code', 'popup', 'width=600,height=600'); return false;
// }