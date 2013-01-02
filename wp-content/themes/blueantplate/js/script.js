$(document).ready(function() {
	   
	$(window).scroll(function() {
		$("#theFixed").css("top", Math.max(0, 250-$(this).scrollTop()));
		console.log('yeahhhp');
	});

});

jQuery(document).ready(function($) {
	
	//$(window).scroll(function(eventObject) {
	  // do stuff! You can find out about how far the window has scrolled via the eventObject.
	//});

	// SCROLLER
	$(window).scroll(function() {
		$("#navigation").css("top", Math.max(0, 250-$(this).scrollTop()));
	});

		// $('a').click(function(e) {
		// 	var divHeight = $(this).height();
		// 	var imgHeight = $(this).find('img').height();
		// 	if(divHeight !== 300) {imgHeight = 300;}
		// 	e.preventDefault();
		// 	$(this).animate({
		// 		height: imgHeight
		// 	});
		// });

    //SCROLLER
		//var scroller = new StickyScroller("#navigation", {
    //        start: 300,
    //        end: 9000,
    //        interval: 300,
    //        range: 100,
    //        margin: 100
    //    });
//
		//var sidescroller = new StickyScroller("#sidebar", {
    //        start: 300,
    //        end: 9000,
    //        interval: 300,
    //        range: 100,
    //        margin: 100
    //    }); 

		//OPACITY
		$("#home-content a").animate({
			"opacity" : .75
		});

		$("#home-content a").hover(function() {
			$(this).stop().animate({"opacity" : 1 });
		}, function(){
			$(this).stop().animate({"opacity" : .75 });
		});

});