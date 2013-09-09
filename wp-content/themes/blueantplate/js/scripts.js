/*
	Any site-specific scripts you might have.
	Note that <html> innately gets a class of "no-js".
	This is to allow you to react to non-JS users.
	Recommend removing that and adding "js" as one of the first things your script does.
	Note that if you are using Modernizr, it already does this for you. :-)
*/


$(function() {


  // SCROLLER
  $(window).scroll(function() {
    if($(document).scrollTop() > $('.header').innerHeight()) {
      $(".navigation, .sidebar").css("position", "fixed");
    } else {
      $(".navigation, .sidebar").css("position", "absolute");
    }
  });



  // OPACITY
  $("#home-content a").animate({"opacity" : .75});

  $("#home-content a").hover(function(){
    $(this).stop().animate({"opacity" : 1 });
  }, function(){
    $(this).stop().animate({"opacity" : .75 });
  });


  // PORTFOLIO
  $('.port-img').click(function(e){
    e.preventDefault();
    var $portImgHeight  = $(this).find('img').innerHeight();

    if($(this).hasClass('expanded')) {
      $(this).animate({height: "300px"}, 1000); 
      $(this).removeClass('expanded');
    } else {
      $(this).animate({height: $portImgHeight}, 1000); 
      $(this).addClass('expanded');
    }
  });
  $('.fullsize').click(function(e){
    e.preventDefault();
    var $portItem       = $(this).parents('.port-item').find('.port-img');
    var $portImgHeight  = $(this).parents('.port-item').find('.port-img img').innerHeight();

    if($portItem.hasClass('expanded')) {
      $portItem.animate({height: "300px"}, 1000); 
      $portItem.removeClass('expanded');
    } else {
      $portItem.animate({height: $portImgHeight}, 1000); 
      $portItem.addClass('expanded');
    }
  });


});