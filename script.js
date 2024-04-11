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



let allProducts;

if (localStorage.getItem("cart")) {
    allProducts = JSON.parse(localStorage.getItem("cart"))
} else {
        allProducts = [
        { name: "Kingston FURY Beast RGB DDR4 3200MHz 16GB", price: 899, quantity: 0, id: "RAM16", img: "Bilder/Produkter/RAM-16g.png" },
        { name: "GOPro-case", price: 648, quantity: 0, id: "GOpro-case", img: "Bilder/Produkter/GOpro-case.png" },
        { name: "GoPro HERO10 Black", price: 5990, quantity: 0, id: "GOPRO", img: "Bilder/Produkter/GOpro.png" },
        { name: "Playstation VR2", price: 6690, quantity: 0, id: "PSVR2", img: "Bilder/Produkter/VR4.png" },
        { name: "Microsoft Office Home Student ", price: 1690, quantity: 0, id: "Soft", img: "Bilder/Produkter/Windos10.png" },
        { name: "ASUS TUF Gaming B650-PLUS WIFI Motherboard", price: 2490, quantity: 0, id: "Motherboard", img: "Bilder/Produkter/Hovedkort.png" },
        { name: "HTC VIVE PRO 2 Full Kit", price: 12899, quantity: 0, id: "HTC", img: "Bilder/Produkter/VR1.png" },
        { name: "HP Reverb G2 VR Headset", price: 9299, quantity: 0, id: "HP", img: "Bilder/Produkter/VR3.png" },
        { name: "Meta Quest 2 VR-briller", price: 5195, quantity: 0, id: "Meta", img: "Bilder/Produkter/VR2.png" },
        { name: "Pico 4 All-in-One VR-brille", price: 5395, quantity: 0, id: "Pico", img: "Bilder/Produkter/VR5.png" },
        { name: "Meta Quest 2 Elite-reim", price: 799, quantity: 0, id: "reim", img: "Bilder/Produkter/VR-Strap.png" },
        { name: "Wireless Adapter Full Pack with clip", price: 4499, quantity: 0, id: "Pack", img: "Bilder/Produkter/VR-utstyr.png" },
        { name: "HTC VIVE Base Station 2.0", price: 2490, quantity: 0, id: "VIVE", img: "Bilder/Produkter/VR-extra-bateri.png" },
        { name: "HTC VIVE Focus 3 Charging Carry Case", price: 2039, quantity: 0, id: "Case", img: "Bilder/Produkter/VR-case.png" },
        { name: "PlayStation VR2 Sense charging station", price: 529, quantity: 0, id: "Sense", img: "Bilder/Produkter/Sense.png" },
        { name: "Sony CyberShot RX100", price: 7195, quantity: 0, id: "Sony", img: "Bilder/Produkter/Kamera2.png" },
        { name: "Canon EOS 2000D Digital", price: 5595, quantity: 0, id: "Camon", img: "Bilder/Produkter/Kamera3.png" },
        { name: "Fujifilm Instax", price: 999, quantity: 0, id: "Fuji", img: "Bilder/Produkter/Kamera4.png" },
        { name: "Sony ZV-1F Digital Camera For Vlogging", price: 7495, quantity: 0, id: "ZV", img: "Bilder/Produkter/Kamera5.png" },
        { name: "GoPro Chesty", price: 399, quantity: 0, id: "strap", img: "Bilder/Produkter/GOpro-strap.png" },
        { name: "Sandstrøm DSLR Camera bag", price: 379, quantity: 0, id: "bag", img: "Bilder/Produkter/Kamera.til3.png" },
        { name: "Samyang AF 14mm", price: 7795, quantity: 0, id: "Samyang", img: "Bilder/Produkter/Kamera.til2.png" },
        { name: "Vlogger Shotgun Microphone - ECM-G1", price: 1615, quantity: 0, id: "Shotgun", img: "Bilder/Produkter/Accessories.png" },
        { name: "Adobe Creative Cloud 1-YEAR SUBSCRIPTION", price: 6999, quantity: 0, id: "Adobe", img: "Bilder/Produkter/adobe.png" },
        { name: "Samsung 870 QVO 2.5'' SSD 8TB", price: 6095, quantity: 0, id: "Samsung", img: "Bilder/Produkter/Samsung.png" },
            ]
}

if (location.href.includes("Index")) {
    document.getElementById("RAM16").addEventListener("click", function () { addToCart(0) });
    document.getElementById("GOpro-case").addEventListener("click", function () { addToCart(1) });
    document.getElementById("GOPRO").addEventListener("click", function () { addToCart(2) });
    document.getElementById("PSVR2").addEventListener("click", function () { addToCart(3) });
    document.getElementById("Soft").addEventListener("click", function () { addToCart(4) });
    document.getElementById("Motherboard").addEventListener("click", function () { addToCart(5) });
}

if (location.href.includes("VRs")) {
    document.getElementById("PSVR2").addEventListener("click", function () { addToCart(3) });
    document.getElementById("HTC").addEventListener("click", function () { addToCart(6) });
    document.getElementById("HP").addEventListener("click", function () { addToCart(7) });
    document.getElementById("Meta").addEventListener("click", function () { addToCart(8) });
    document.getElementById("Pico").addEventListener("click", function () { addToCart(9) });
}

if (location.href.includes("VR-Accessory")) {
    document.getElementById("reim").addEventListener("click", function () { addToCart(10) });
    document.getElementById("Pack").addEventListener("click", function () { addToCart(11) });
    document.getElementById("VIVE").addEventListener("click", function () { addToCart(12) });
    document.getElementById("Case").addEventListener("click", function () { addToCart(13) });
    document.getElementById("Sense").addEventListener("click", function () { addToCart(14) });
}

if (location.href.includes("Cameras")) {
    document.getElementById("GOPRO").addEventListener("click", function () { addToCart(2) });
    document.getElementById("Sony").addEventListener("click", function () { addToCart(15) });
    document.getElementById("Camon").addEventListener("click", function () { addToCart(16) });
    document.getElementById("Fuji").addEventListener("click", function () { addToCart(17) });
    document.getElementById("ZV").addEventListener("click", function () { addToCart(18) });
}

if (location.href.includes("Camera-Accessory")) {
    document.getElementById("GOpro-case").addEventListener("click", function () { addToCart(1) });
    document.getElementById("strap").addEventListener("click", function () { addToCart(19) });
    document.getElementById("bag").addEventListener("click", function () { addToCart(20) });
    document.getElementById("Samyang").addEventListener("click", function () { addToCart(21) });
    document.getElementById("Shotgun").addEventListener("click", function () { addToCart(22) });
}

if (location.href.includes("Hardware&Software")) {
    document.getElementById("Motherboard").addEventListener("click", function () { addToCart(5) });
    document.getElementById("RAM16").addEventListener("click", function () { addToCart(0) });
    document.getElementById("Soft").addEventListener("click", function () { addToCart(4) });
    document.getElementById("Adobe").addEventListener("click", function () { addToCart(23) });
    document.getElementById("Samsung").addEventListener("click", function () { addToCart(24) });
}

function displaycart() {
    let totalSum = 0;
    for (let index = 0; index < allProducts.length; index++) {
        const element = allProducts[index];
        if (element.quantity > 0) {

            console.log(element)

            console.log(element.img)
            totalSum += element.quantity * element.price;


            var tbodyRef = document.getElementById("table");
            var newRow = tbodyRef.insertRow();
            var newCell = newRow.insertCell();

            var newName = document.createTextNode(element.name + " ");
            var newPro = document.createElement("img");
            newPro.src = element.img
            newPro.style = "width: 150px;"
            newCell.appendChild(newName);
            newCell.appendChild(newPro);

            var newCell = newRow.insertCell();
            var newPrice = document.createTextNode(element.price);
            newCell.appendChild(newPrice);

            var newCell = newRow.insertCell();
            var newQuantity = document.createTextNode(element.quantity);
            newCell.appendChild(newQuantity);

            var newCell = newRow.insertCell();
            var newTotal = document.createTextNode(element.quantity * element.price + ",-");
            newCell.appendChild(newTotal);

            console.log(totalSum);
        }
    }
    document.getElementById("Sum").innerHTML += "<p>" + JSON.stringify(totalSum + ",-").replace(/"/g, '') + "</p>";

}

function addToCart(product) {
    allProducts[product].quantity++;
    console.log(allProducts)
    localStorage.setItem('cart', JSON.stringify(allProducts));
    allProducts = JSON.parse(localStorage.getItem("cart"))
}

function emptyCart() {
    window.localStorage.removeItem("cart");
    const table = document.getElementById("table")
    table.innerHTML = ''
    const Summen = document.getElementById("Summen")
    Summen.innerHTML = ''
    location.reload();
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
  coll[i].addEventListener("click", function() {
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