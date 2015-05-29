
//flexslider
$(window).load(function() {
    $('.flexslider').flexslider({
        directionNav: true,
        animation: "slide",
        prevText: "",
        nextText: "",
    });
});


$(document).ready(function(){

//hamburger
    $('.hamburger-container').click(function(){
        var $hamburger = $(this).find('.hamburger')
        var $nav = $('nav ul')
        if(!$hamburger.hasClass('active')){
            $hamburger.removeClass('dormant');
            $hamburger.addClass('active');

            $nav.addClass('active').slideDown();
        }else{
            $hamburger.removeClass('active');
            $hamburger.addClass('dormant');
            $nav.removeClass('active').slideUp();
        }
    });

//smoothscroll
    smoothScroll.init();

    //call functions
    scrollType();


});

function scrollType(){
    $('.scroll-link a').each(function(){
        $(this)
            .attr('data-scroll', '')
    });
    $('.scroll-offset a').each(function(){
        $(this)
            .attr('data-options', '{"offset": 20}');
    });

}