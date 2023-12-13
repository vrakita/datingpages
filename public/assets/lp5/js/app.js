// link for offer
const offerURL = "#";

// link for back button
const backURL = "#";

// CTA button listener 
window.addEventListener("DOMContentLoaded", () => {
    const elements = document.getElementsByClassName("go");
    Array.from(elements).forEach(function(element) {
        element.addEventListener("click", function(event) {
            window.onbeforeunload = null;
            window.location = `${offerURL}`;
        });
    });
});

// back button script
!function() {
    var t;
    try {
        const URL = window.location.href.split(/[#]/)[0];
        for (t = 0; 10 > t; ++t) history.pushState({}, "", URL + "#");
        onpopstate = function(event) {
            window.onbeforeunload = null;
            event.state && location.replace(`${backURL}`);
        };
    } catch (o) {
        console.log(o);
    }
}();

// Javascript for buttons
function scrollPage(b) {
    setTimeout(function() {
        $("html, body").animate({
            scrollTop: $(document).height()
        }, b);
    }, 3e3);
}

$(document).ready(function() {
    scrollPage(1e3);
    var d = $(".photo-block");
    function e() {
        var a = Number(d.attr("data-photo"));
        $(".step-item.is-active").removeClass("is-active").next().addClass("is-active");
        if (a < $(".slider-item").length) {
            d.attr("data-photo", a + 1);
        }
    }
    function f() {
        var a = setInterval(function() {
            $(".loader-text.is-active").removeClass("is-active").next().addClass("is-active");
            if ($(".loader-text.is-active").index() === -1) {
                clearInterval(a);
                e();
            }
        }, 1e3);
    }
    $(".btn").on("click", function() {
        e();
        if ($(".step-item.is-active").hasClass("step-loading")) {
            d.hide();
            f();
            scrollPage(1e3);
        }
    });
    $(".slider-item").on("click", function() {
        var a = $(this).attr("data-number");
        d.attr("data-photo", a);
    });
});