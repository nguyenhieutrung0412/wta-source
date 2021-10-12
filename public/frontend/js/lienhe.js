function open_menu() {
    document.getElementById("Sidenav").style.width = "100%";

}

function closeNav() {
    document.getElementById("Sidenav").style.width = "0";

}
var coll = document.getElementsByClassName("menu2");
var i;

for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.display === "block") {
            content.style.display = "none";
        } else {
            content.style.display = "block";
        }
    });
}