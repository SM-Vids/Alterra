$(document).ready(function(){
    $('nav > ul > #login').hide();
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
   $('.login-link').on('click', function () {
       $('#login').slideToggle();
   });
});