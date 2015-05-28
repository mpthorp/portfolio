$(function() {
	$('#slideshow').cycle({ 
	fx:     'scrollHorz',
	speed:	300,
	timeout: 18000, 
	delay:  -2000,
	next:   '#btn_next',
	prev:   '#btn_prev',    
	pause:   1
});
});