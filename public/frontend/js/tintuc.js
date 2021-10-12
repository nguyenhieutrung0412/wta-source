function open_menu() {
    document.getElementById("Sidenav").style.width = "100%";
    document.getElementById("hide").style.display = "none";
    document.getElementById("hide2").style.display = "none";
}

function closeNav() {
    document.getElementById("Sidenav").style.width = "0";
    document.getElementById("hide").style.display = "block";
    document.getElementById("hide2").style.display = "block";

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
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
        0: {
            items: 1
        },
        768: {
            items: 2
        }
    }
})