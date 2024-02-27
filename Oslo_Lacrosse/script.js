console.log(localStorage.getItem("darkmode"))

if (localStorage.getItem("darkmode") == "dark") {
    document.body.classList.toggle("dark");
}

function dark() {
    var element = document.body;
    element.classList.toggle("dark");
    if (element.classList.contains("dark")) {
        localStorage.setItem("darkmode", "dark");
    }
    else {
        localStorage.setItem("darkmode", "light");
    }
}

// help fra Even

