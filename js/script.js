$(document).ready(function(){
    $('nav > a > img').on('click', function () {
        event.preventDefault();
       $('nav > ul').slideToggle();
   });
   $(window).resize(function () { 
       if ($(window).width() > 900) {
           $('nav > ul').slideDown();
       }
       else{
           $('nav > ul').slideUp();
       }
   });
   $('nav > ul > li').last().children().on('click', function () {
       $('#login').slideToggle();
   });
});