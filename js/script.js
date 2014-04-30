$(document).ready(function() {
	$(".menu").click(function() {
		$("nav ul").slideToggle();
	})
	$(window).resize(function(){  
	    var w = $(window).width();  
	    if(w > 680) {  
	        $("nav").removeAttr('style');  
	    }  
	});


var $container = $('#masonry');
// initialize
$container.masonry({
  columnWidth: 200,
  itemSelector: '.items'
});
})