$(window).load(function(){$(".flexslider").flexslider({directionNav:!0,animation:"slide",prevText:"",nextText:""})}),$(document).ready(function(){$(".hamburger-container").click(function(){var a=$(this).find(".hamburger"),e=$("nav ul");a.hasClass("active")?(a.removeClass("active"),a.addClass("dormant"),e.removeClass("active").slideUp()):(a.removeClass("dormant"),a.addClass("active"),e.addClass("active").slideDown())}),smoothScroll.init(),scrollType()});function scrollType(){$(".scroll-link a").each(function(){$(this).attr("data-scroll","")}),$(".scroll-offset a").each(function(){$(this).attr("data-options",'{"offset": 20}')})}