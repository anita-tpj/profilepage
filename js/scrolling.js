
jQuery(function($){
    $(window).on("load resize", function () {
        $(".fill-screen").css("height", window.innerHeight);
    });

    // add Bootstrap's scrollspy
    $('body').scrollspy({
        target: '.navbar',
        offset: 160
    });

    $('[data-spy="scroll"]').each(function () {
      var $spy = $(this).scrollspy('refresh')
    });

    // smooth scrolling
    $('nav a, .down-button a').bind('click', function () {
        $('html, body').stop().animate({
            scrollTop: $($(this).attr('href')).offset().top - 80
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });


    // initialize WOW for elements animation
    new WOW().init();




    // img showing/hidding
if (window.innerWidth > 700){
   $(".repeat-text").on({
        mouseenter: function(){
          $("#repeat-img").show();
        }
       // mouseleave: function(){
       //   $("#repeat-img").hide();
       // }
});
};


});
