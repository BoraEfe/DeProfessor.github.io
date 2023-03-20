function toggleMenu() {
    var divName = document.getElementById("slideMenu");
    if (divName.style.display === "block") {
        divName.style.display = "none";
    }   else {
        divName.style.display = "block";
    }
}