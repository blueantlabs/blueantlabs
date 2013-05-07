/*
	Any site-specific scripts you might have.
	Note that <html> innately gets a class of "no-js".
	This is to allow you to react to non-JS users.
	Recommend removing that and adding "js" as one of the first things your script does.
	Note that if you are using Modernizr, it already does this for you. :-)
*/

$(window).load(function() {
  //SCROLLER /*
  var scroller = new StickyScroller("#navigation", {
      start: 300,
      end: 9000,
      interval: 300,
      range: 100,
      margin: 100
  });

  var sidescroller = new StickyScroller("#sidebar", {
      start: 300,
      end: 9000,
      interval: 300,
      range: 100,
      margin: 100
  }); 

  //OPACITY
  $("#home-content a").animate({
    "opacity" : .75
  });

  $("#home-content a").hover(function(){
    $(this).stop().animate({"opacity" : 1 });
  }, function(){
    $(this).stop().animate({"opacity" : .75 });
  });
});