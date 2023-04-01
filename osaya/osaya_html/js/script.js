/***************************************************************************
*
* SCRIPT JS
*
***************************************************************************/

$(document).ready(function(){
    
    //Scale in SP
    // if(screen.width < 768) {
    //     $('meta[name=viewport]').attr('content','width=device-width, initial-scale=1');
    // }

    // $(window).resize(function () {
    //     if(screen.width < 768) {
    //         $('meta[name=viewport]').attr('content','width=device-width, initial-scale=1');
    //     }
    // });


    // Hover Button for All Pages
    $('.hoverJS').hover(function(){
        $(this).stop().fadeTo(100,0.8);
    },function(){
        $(this).stop().fadeTo(100,1);
    });
    

    //Click event to scroll to top
    $('.scrollToTop').click(function(){
        $('html, body').animate({scrollTop : 0},800);
        return false;
    });


    //SCROLL TO TOP 
    $(window).scroll(function() {
        if ($(this).scrollTop() > 80) {
            $('.scrollToTop').fadeIn(400);
        } else {
            $('.scrollToTop').fadeOut(400);
        }
    });


    //SCROLL ANCHOR
    $('.anchor a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top
                }, 1000);
                return false;
            }
        }
    });



    // CLICK MENU
    $('#nav-icon1').click(function(){
        $(this).toggleClass('open');
        $('.mainMenu').fadeToggle();
        $('body').toggleClass('lock');
    });



    // TAB PRODCUT DETAIL
    $('.area1 .description li').click(function(){
        $('.area1 .description li').removeClass('active');
        $(this).addClass('active');
        var showTab = $(this).find('a').attr('data-tab');
        console.log(showTab);
        $('.area1 .tab').hide();
        $(showTab).fadeIn();
        return false;
    });

});