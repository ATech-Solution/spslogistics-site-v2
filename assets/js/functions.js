/*global jQuery */
/* Contents
// ------------------------------------------------>
	1.  Background INSERT
	2.  HEADER AFFIX
	3.	AJAX MAILCHIMP
	4.  AJAX CAMPAIGN MONITOR 
	5.  OWL CAROUSEL
	6.  SCROLL TO
	7.  WOW
	8.  Youtube Background
*/

$(window).load(function() {
    var cur_location = window.location.href;
        if(cur_location.includes("terms-and-conditions") || cur_location.includes("privacy-policy")){
        var idhash = decodeURI(location.hash.split('#')[1]);
        $(".navbar-nav > li.active").removeClass('active');
        $(".navbar-nav > li."+idhash+"-active").addClass('active');
        console.log("hash:"+idhash);
    }
});

function checkActiveSection()
{
    if ($(window).width() > 700) {
        var fromTop = $(window).scrollTop();
         console.log("fromTop "+fromTop);
    //          var input = document.getElementById("header-container");
    //          // Execute a function when the user presses a key on the keyboard
    //          input.addEventListener("keypress", function(event) {
    //              // If the user presses the "Enter" key on the keyboard
    //              if (event.key === "Enter") {
    //                  // Cancel the default action, if needed
    //                  event.preventDefault();
    //                  // Trigger the button element with a click
    //                  alert(fromTop);
    //              // document.getElementById("myBtn").click();
    //              }
    //          });
            //locate us scroll highlight home
            // var hT = $('.section').offset().top,
            // var hH = $('.section').outerHeight(),
            // var wH = $(window).height(),
            // var wS = $(this).scrollTop();
            // var hT = jQuery('#locate-us').offset().top,
            //             hH = jQuery('#locate-us').outerHeight(),
            //             wH = jQuery(window).height(),
            //             wS = jQuery(this).scrollTop();
            // //the team scroll highlight home
            // var hT1 = jQuery('#the-team').offset().top,
            //             hH1 = jQuery('#the-team').outerHeight(),
            //             wH1 = jQuery(window).height(),
            //             wS1 = jQuery(this).scrollTop();
            
    //          console.log('scroll coordinate');
             // console.log("scroll coordinate "+hT+" "+wH+" "+wS);
    //          if (wS > (hT+hH-wH)){
    // //           alert('you have scrolled to the locate-us');
    //              jQuery("#nav-wrapper li:first-child a").addClass("elementor-item-active");
    //          }
            
        $('.section').each(function(){
          var sectionOffset = $(this).offset();  
                // console.log("sectionOffset "+sectionOffset);       
                // if (wS > (hT+hH-wH)) {
                        // $(".navbar-nav li:first").addClass("active");
                // } else 
                if (fromTop === 0) {
                        $(".navbar-nav li.slider-active").addClass("active");
                } else if (fromTop === 946) {
                        $(".navbar-nav li.how-sps-works-active").addClass("active");
                } else if (fromTop === 2484) {    
                        $(".navbar-nav li.pricing-active").addClass("active");
                } else if (fromTop === 3192) {        
                        $(".navbar-nav li.about-active").addClass("active");
                } else if (fromTop === 3789) {        
                        $(".navbar-nav li.footer-active").addClass("active");
                } else {
                        $(".navbar-nav li").removeClass("active");
                }      
        });
    }
}

// function addClassNavMobile() {
//   if ($(window).width() < 700) {
//     $('#nav-wrapper .elementor-nav-menu--dropdown ul').attr('id','nav-mobile');
//   }
// }
$(window).scroll(checkActiveSection) ;


(function($) {
    "use strict";

    /* ------------------ HEADER AFFIX ------------------ */
    var $navAffix = $(".home .header-fixed .navbar-fixed-top");
    $navAffix.affix({
        offset: {
            top: 50
        }
    });

    /* ------------------  ACTIVE MENU ------------------ */
    $('.navbar-nav').on('click', 'li', function() {
        $(".navbar-nav > li.active").removeClass('active');
        $(this).addClass('active');
    });
    
    /* ------------------  SCROLL TO ------------------ */
    var aScroll = $('a[data-scroll="scrollTo"]');
    aScroll.on('click', function(event) {
        var target = $($(this).attr('href'));
        if (target.length) {
            event.preventDefault();
            $('html, body').animate({
                scrollTop: target.offset().top-100
            }, 1000);
        }
    });

    /* ------------------  Background INSERT ------------------ */

    var $bgSection = $(".bg-section");

    $bgSection.each(function() {
        var bgSrc = $(this).children("img").attr("src");
        var bgUrl = 'url(' + bgSrc + ')';
        $(this).parent().css("backgroundImage", bgUrl);
        $(this).parent().addClass("bg-section");
        $(this).remove();
    });

    /* ------------------  AJAX MAILCHIMP ------------------ */

    $('.mailchimp').ajaxChimp({
        url: "http://wplly.us5.list-manage.com/subscribe/post?u=91b69df995c1c90e1de2f6497&id=aa0f2ab5fa", //Replace with your own mailchimp Campaigns URL.
        callback: chimpCallback

    });

    function chimpCallback(resp) {
        if (resp.result === 'success') {
            $('.subscribe-alert').html('<h5 class="alert alert-success">' + resp.msg + '</h5>').fadeIn(1000);
            //$('.subscribe-alert').delay(6000).fadeOut();

        } else if (resp.result === 'error') {
            $('.subscribe-alert').html('<h5 class="alert alert-danger">' + resp.msg + '</h5>').fadeIn(1000);
        }
    }

    /* ------------------  AJAX CAMPAIGN MONITOR  ------------------ */

    $('#campaignmonitor').submit(function(e) {
        e.preventDefault();
        $.getJSON(
            this.action + "?callback=?",
            $(this).serialize(),
            function(data) {
                if (data.Status === 400) {
                    alert("Error: " + data.Message);
                } else { // 200
                    alert("Success: " + data.Message);
                }
            });
    });

    /* ------------------ OWL CAROUSEL ------------------ */

    $(".carousel").each(function() {
        var $Carousel = $(this);
        $Carousel.owlCarousel({
            loop: $Carousel.data('loop'),
            autoplay: $Carousel.data("autoplay"),
            margin: $Carousel.data('space'),
            nav: $Carousel.data('nav'),
            dots: $Carousel.data('dots'),
            dotsSpeed: $Carousel.data('speed'),
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: $Carousel.data('slide-res')
                },
                1000: {
                    items: $Carousel.data('slide'),
                }
            }
        });
    });


    /* ------------------  WOW Animated ------------------ */
    var wow = new WOW({

        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 50, // distance to the element when triggering the animation (default is 0)
        mobile: false, // trigger animations on mobile devices (default is true)
        live: true // act on asynchronously loaded content (default is true)

    });

    wow.init();

    /* ------------------  Youtube Background  ------------------ */
    $(".bg-ytvideo").each(function() {

        var vidId = $(this).data("vid-id"),
            vidAutoPlay = $(this).data("autoplay"),
            vidStartAt = $(this).data("start-at"),
            vidMute = $(this).data("mute"),
            vidOpacity = $(this).data("opacity"),
            vidShowPluginLogo = $(this).data("plugin-logo"),
            vidShowControls = $(this).data("controls"),
            vidFallBackImg = $(this).data("fall-cover");

        if (vidAutoPlay === "" || vidAutoPlay === null || vidAutoPlay === undefined) {
            vidAutoPlay = true;
        }
        if (vidStartAt === "" || vidStartAt === null || vidStartAt === undefined) {
            vidStartAt = 0;
        }
        if (vidMute === "" || vidMute === null || vidMute === undefined) {
            vidMute = true;
        }
        if (vidOpacity === "" || vidOpacity === null || vidOpacity === undefined) {
            vidOpacity = 1;
        }
        if (vidShowPluginLogo === "" || vidShowPluginLogo === null || vidShowPluginLogo === undefined) {
            vidShowPluginLogo = false;
        }
        if (vidShowControls === "" || vidShowControls === null || vidShowControls === undefined) {
            vidShowControls = false;
        }
        if (vidFallBackImg === "" || vidFallBackImg === null || vidFallBackImg === undefined) {
            vidFallBackImg = "";
        }

        $(this).data(
            "property",
            "{videoURL:'http://youtu.be/" + vidId + "',containment:'self',autoPlay:" + vidAutoPlay + ", mute:" + vidMute + ", startAt:" + vidStartAt + ", opacity:" + vidOpacity + ",showYTLogo:" + vidShowPluginLogo + ",showControls:" + vidShowControls + ",stopMovieOnBlur:false,mobileFallbackImage:'" + vidFallBackImg + "'}"
        );
    });

    $(".bg-ytvideo").mb_YTPlayer();
	
	/* ------------------  COUNTER UP ------------------ */

    // $(".counting").counterUp({
    //     delay: 10,
    //     time: 1000
    // });


}(jQuery));