let hour = new Date().getHours();

function greet() {
    if (hour < 12) {
        document.getElementById("greeting").innerHTML = "Goedemorgen!";
    } else if (hour < 18) {
        document.getElementById("greeting").innerHTML = "Goedemiddag!";
    } else {
        document.getElementById("greeting").innerHTML = "Goedenavond!";
    }
}

greet();

console.log(hour);