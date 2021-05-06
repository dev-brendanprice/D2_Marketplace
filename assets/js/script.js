const textList = ["Weapon<br>", "Armour<br>", "Levels<br>", "Content<br>"];
const cycle = document.querySelector("#cycle");
let i = 0;
const cycleText = () => {
    cycle.innerHTML = textList[i];
    i = ++i % textList.length;
};
cycleText();
var seconds = 8; // edit this for seconds
setInterval(cycleText, seconds * 1000);

function randInt(max) {
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

function onSignIn(googleUser) {
    var profile = googleUser.getBasicProfile();
    console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
    console.log('Name: ' + profile.getName());
    console.log('Image URL: ' + profile.getImageUrl());
    console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}

function onSuccess(googleUser) {
    console.log('Logged in as: ' + googleUser.getBasicProfile().getName());
}
function onFailure(error) {
    console.log(error);
}
function renderButton() {
    gapi.signin2.render('my-signin2', {
        'scope': 'profile email',
        'width': 175,
        'height': 30,
        'longtitle': true,
        'theme': 'dark',
        'onsuccess': onSuccess,
        'onfailure': onFailure
    });
}

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
        console.log('User signed out.');
    });
}

function openInNewWindow() {
    window.open('https://www.bungie.net/en/oauth/authorize?client_id="35544"&response_type=code', 'popup', 'width=600,height=600'); return false;
}

// Currency cookie manager
function currencyGBP() {
    document.cookie = "currencyCode=GBP; expires=Thu, 10 Dec 2030 12:00:00 UTC";
    document.cookie = "currencySymbol=&#163;; expires=Thu, 10 Dec 2030 12:00:00 UTC";
}
function currencyUSD() {
    document.cookie = "currencyCode=USD; expires=Thu, 10 Dec 2030 12:00:00 UTC";
    document.cookie = "currencySymbol=&#36;; expires=Thu, 10 Dec 2030 12:00:00 UTC";
}
function currencyRUB() {
    document.cookie = "currencyCode=RUB; expires=Thu, 10 Dec 2030 12:00:00 UTC";
    document.cookie = "currencySymbol=&#8381;; expires=Thu, 10 Dec 2030 12:00:00 UTC";
}
function currencyRMB() {
    document.cookie = "currencyCode=RMB; expires=Thu, 10 Dec 2030 12:00:00 UTC";
    document.cookie = "currencySymbol=&#165;; expires=Thu, 10 Dec 2030 12:00:00 UTC";
}
// End currency cookie manager


// new curr dropdown 
// function showContent() {
//     document.getElementById("myDropdown").classList.toggle("show");
// }
  
// // Close the dropdown if the user clicks outside of it
// window.onclick = function(e) {
// if (!e.target.matches('.dropbtn')) {
//     var myDropdown = document.getElementById("myDropdown");
//         if (myDropdown.classList.contains('show')) {
//         myDropdown.classList.remove('show');
//         }
//     }
// }