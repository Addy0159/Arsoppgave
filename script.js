// This function logs messages received from PHP to the browser console
function logMessage(message) {
    console.log(message);
}



console.log(localStorage.getItem("darkmode"))

if (localStorage.getItem("darkmode") == "dark") {
    document.body.classList.toggle("dark");
}

function dark() {
    var element = document.body;
    element.classList.toggle("dark");
    if (element.classList.contains("dark")) {
        localStorage.setItem("darkmode", "dark");
        document.getElementById("Økern_Basket_IL_designmanual").src = "Bilder/Logo_til_okern_IL_w.png";
    }
    else {
        localStorage.setItem("darkmode", "light");
        document.getElementById("Økern_Basket_IL_designmanual").src = "Bilder/Logo_til_okern_IL.png";
    }
}

document.addEventListener("DOMContentLoaded", function () {
    const redirectButton = document.getElementById("redirectButton");

    redirectButton.addEventListener("click", function () {
        // Use the window.location.href to redirect to the desired URL.
        window.location.href = "http://localhost/Arsoppgave/login.php"; // Replace with your target URL
    });
});



function addToCart(productId) {
    fetch(`add_to_cart.php?id=${productId}`, { method: 'GET' })
        .then(response => response.json())
        .then(data => logMessage(data.message));
}

function Pro1() {
    var popup = document.getElementById("myPopup1");
    popup.classList.toggle("show");
}

function Pro2() {
    var popup = document.getElementById("myPopup2");
    popup.classList.toggle("show");
}

function Pro3() {
    var popup = document.getElementById("myPopup3");
    popup.classList.toggle("show");
}

var coll = document.getElementsByClassName("collapsible");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var head = this.nextElementSibling;
        if (head.style.display === "block") {
            head.style.display = "none";
        } else {
            head.style.display = "block";
        }
    });
}

console.log();