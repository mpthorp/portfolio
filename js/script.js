$(document).ready(function() {
    $(window).scroll(function(e) {
        var s = $(window).scrollTop(),
        	handicap = $(window).innerHeight();
            opacityVal = (s / (200 * (handicap/s)));
        $('.blurred-image').css('opacity', opacityVal);
    });

    $(document).foundation();

    $(document).on('click', '.gallery article', function(){
    	
    	// get clicked project name
    	var selectedProjectName = $(this).attr('data-project-name') + '.html';

    	// load correct project contents in to modal
    	$( "#project .project").load( "work/" + selectedProjectName, function() {
   			window.setTimeout(function() {
	    		$('.project-image').slick();
   			}, 500)
    	});
	});

	$(document).on('click', '.project-thumbs li', function(){
		var selectedThumbnail = $(this).index();
		$('.project-image').slick('slickGoTo', selectedThumbnail);
	});

});