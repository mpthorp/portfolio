////////////////////////GOOGLE ANALYTICS///////////////////////////////

var _gaq = _gaq || [];
 _gaq.push(['_setAccount', 'UA-20576412-1']);
 _gaq.push(['_trackPageview']);

 (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
 
 $(document).ready(function(){
		$('.boxgrid.peek').hover(function(){
			$(".cover", this).stop().animate({top:'40px'},{queue:false,duration:160});
		}, function() {
			$(".cover", this).stop().animate({top:'0px'},{queue:false,duration:160});
		});
	});