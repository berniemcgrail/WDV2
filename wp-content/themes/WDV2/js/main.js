$(document).ready(function(){

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


});