$(function(){
	$('a').click(function(e){
		var divHeight = $(this).parent().height();
		var imgHeight = $(this).find('img').height();
		if(divHeight !== 300) {imgHeight = 300;}
		e.preventDefault();
		$(this).parent().animate({
			height: imgHeight
		});
	});
});