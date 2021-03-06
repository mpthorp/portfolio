$(document).ready(function() {

    //INITIATE FOUNDATION

     $(document).foundation();

    //BLURRED BACKGOUND

    $(window).scroll(function() {
        var s = $(window).scrollTop(),
        	handicap = $(window).innerHeight(),
            opacityVal = (s / (200 * (handicap/s)));
        $('.blurred-background').css('opacity', opacityVal);
    });

    //REVEAL MODAL

    $(document).on('click', '.gallery article', function(){
    	// get clicked project name
    	var selectedProjectName = $(this).attr('data-project-name') + '.html';

    	// load correct project contents in to modal
    	$( "#project .project").load( "work/" + selectedProjectName, function() {
   			window.setTimeout(function() {
	    		$('.project-image').slick();
   			}, 500);
    	});
	});

    var scrollPosition;

    $(document).on('opened.fndtn.reveal', '[data-reveal]', function () {
        if(window.innerWidth <= 640){
            $('.container').hide();
            scrollPosition = $(window).scrollTop();
            $(window).scrollTop(0);
        }

        // var $images = $('.project img');
        // var loaded_images_count = 0;

        // $images.load(function(){
        //     loaded_images_count++;
        //      $('.loader').show();

        //     if (loaded_images_count === $images.length) {
        //         $('.loader').hide();
        //         $('.project').fadeIn('slow');
        //     }
        // });
    });

    $(document).on('close.fndtn.reveal', '[data-reveal]', function () {
        if(window.innerWidth <= 640){
            $('.container').show();
            $(window).scrollTop(scrollPosition);
        }
    });

	$(document).on('click', '.project-thumbs li', function(){
		var selectedThumbnail = $(this).index();
		$('.project-image').slick('slickGoTo', selectedThumbnail);
	});
});