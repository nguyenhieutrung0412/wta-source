function open_menu() {
    document.getElementById("Sidenav").style.width = "100%";
    document.getElementById("owl-carousel").style.display = "none";
    document.getElementById("menu1").style.transform = "translate(0px, 0px)";
    document.getElementById("menu2").style.transform = "translate(0px, 0px)";
    document.getElementById("menu3").style.transform = "translate(0px, 0px)";
    document.getElementById("menu4").style.transform = "translate(0px, 0px)";
    document.getElementById("menu5").style.transform = "translate(0px, 0px)";
    document.getElementById("menu6").style.transform = "translate(0px, 0px)";
    document.getElementById("menu7").style.transform = "translate(0px, 0px)";
}

function closeNav() {
    document.getElementById("Sidenav").style.width = "0";
    document.getElementById("owl-carousel").style.display = "block";
    document.getElementById("menu1").style.transform = "translate(-100%, 0px)";
    document.getElementById("menu2").style.transform = "translate(-100%, 0px)";
    document.getElementById("menu3").style.transform = "translate(-100%, 0px)";
    document.getElementById("menu4").style.transform = "translate(-100%, 0px)";
    document.getElementById("menu5").style.transform = "translate(-100%, 0px)";
    document.getElementById("menu6").style.transform = "translate(-100%, 0px)";
    document.getElementById("menu7").style.transform = "translate(-100%, 0px)";
}
$('.owl-carousel').owlCarousel({
    items: 1,
    margin: 10,
    autoHeight: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 2000,
    autoplayHoverPause: true
});

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
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