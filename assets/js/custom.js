 
 (function($){	
  
  $('.main-menu').slicknav();

  $('#Container').mixItUp();

  $(window).load(function(){
    $('.flexslider').flexslider({
      animation: "slide",
      start: function(slider){
        $('body').removeClass('loading');
      }
    });
  });
  
$(".video-container").fitVids();


  })(jQuery);





    
    

    



















