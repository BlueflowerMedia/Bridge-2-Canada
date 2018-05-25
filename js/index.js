function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    }
    else {
        x.className = "topnav";
    }
}

function goToByScroll(id) {
    // Reove "link" from the ID
    id = id.replace("link", "");
    // Scroll
    $('html,body').animate({
        scrollTop: $("#" + id).offset().top
    },
        'slow');
}

$("#myTopnav > a").click(function (e) {
    // Prevent a page reload when a link is pressed
    e.preventDefault();
    // Call the scroll function
    goToByScroll($(this).attr("id"));
});
