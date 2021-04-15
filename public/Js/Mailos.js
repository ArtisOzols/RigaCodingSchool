"use strict"
$(document).ready(function(){

    $('a.logo').css(`color`, `white`);
    
    $(window).scroll(function(){
        if($(this).scrollTop() > 280) {
            $('a.logo').css(`color`, `rgb(255, 147, 147)`).css(`transition`, `0.3s`);
            $('.scrollTop').fadeIn();
        } else {
            $('a.logo').css(`color`, `white`).css(`transition`, `0.6s`);
            $('.scrollTop').fadeOut();
        }
    })

    $('.scrollTop').click(function(){
        $('html, body').animate({scrollTop:0},500);
        return false;
    })


    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        autoplay:true,
        responsive:{
            0:{
                items:1
            },
            300: {
                items:2
            },
            700:{
                items:3
            },
            1000:{
                items:4
            }
        }
    })

    $(".owl-next").children().attr("aria-label", "true").attr("class", "carousel-control-next-icon");
    $(".owl-next").attr("class", "carousel-control-next").attr("href", "#carouselExampleIndicators").attr("data-slide", "next").css({"right": "0%", "color":"transparent", "background":"transparent", "border":"none", "width":"30px"})
    $(".owl-prev").children().attr("aria-label", "true").attr("class", "carousel-control-prev-icon");
    $(".owl-prev").attr("class", "carousel-control-prev").attr("href", "#carouselExampleIndicators").attr("data-slide", "prev").css({"left": "0%", "color":"transparent", "background":"transparent", "border":"none", "width":"30px"})
 });


