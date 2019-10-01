// !! JQUERY !!
// First function keeps the tabs closed on opening the webpage !!
$(document).ready(function () {
    $("#personalInformation").css("display", "none");
    $("#currentlyStudying").css("display", "none");
    $("#projectsCompleted").css("display", "none");
    $("#educationExperience").css("display", "none");
    $("#hobbiesInterests").css("display", "none");
    $("#contactClose").css("display", "none");
});
// One function for each div I want to slide down/up (open/close) !!
$(document).ready(function () {
    $("#func1").click(function () {
        $("#personalInformation").slideToggle("slow");
    });
});

$(document).ready(function () {
    $("#func2").click(function () {
        $("#currentlyStudying").slideToggle("slow");
    });
});

$(document).ready(function () {
    $("#func3").click(function () {
        $("#projectsCompleted").slideToggle("slow");
    });
});

$(document).ready(function () {
    $("#func4").click(function () {
        $("#educationExperience").slideToggle("slow");
    });
});

$(document).ready(function () {
    $("#func5").click(function () {
        $("#hobbiesInterests").slideToggle("slow");
    });
});

$(document).ready(function () {
    $("#func6").click(function () {
        $("#contactClose").slideToggle("slow");
    });
});
// END OF JQUERY


// This is the function etc for moving the bike on a click !! 
// First is the on-click call to action
function myMove() {
    var elem = document.getElementById("goBike");
    var pos = elem.offsetLeft;
    var id = setInterval(frame, .75);
    // var w = window.innerWidth * .75;
    var w = elem.offsetLeft * 2.5;
    // Then the function defining the action to be taken and for how long
    function frame() {
        if (pos >= w) {
            clearInterval(id);
        } else {
            pos++;
            elem.style.left = pos + 'px';
        }
    }
}

// The following five functions (the same with different IDs)
// change the display of each div, but like an on/off switch,
// meaning no gradual change between displays... which isn't what I wanted!

// function myFunction() {
//     var x = document.getElementById("personalInformation");
//     if (x.style.display === "none") {
//         x.style.display = "flex";
//     } else {
//         x.style.display = "none";
//     }
// }

// function myFunction2() {
//     var x = document.getElementById("currentlyStudying");
//     if (x.style.display === "none") {
//         x.style.display = "block";
//     } else {
//         x.style.display = "none";
//     }
// }

// function myFunction3() {
//     var x = document.getElementById("projectsCompleted");
//     if (x.style.display === "none") {
//         x.style.display = "flex";
//     } else {
//         x.style.display = "none";
//     }
// }

// function myFunction4() {
//     var x = document.getElementById("educationExperience");
//     if (x.style.display === "none") {
//         x.style.display = "flex";
//         document.getElementById("educationExperience");
//     } else {
//         x.style.display = "none";
//     }
// }

// function myFunction5() {
//     var x = document.getElementById("hobbiesInterests");
//     if (x.style.display === "none") {
//         x.style.display = "flex";
//     } else {
//         x.style.display = "none";
//     }
// }


// This is the "accordion" function, but again, I couldn't slow it down as I would have liked to.

// var acc = document.getElementsByClassName("accordion");
// var i;

// for (i = 0; i < acc.length; i++) {
//   acc[i].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var panel = this.nextElementSibling;
//     if (panel.style.display === "block") {
//       panel.style.display = "none";
//     } else {
//       panel.style.display = "block";
//     }
//   });
// }
