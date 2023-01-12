
$(document).ready(function(){

	$(window).bind('scroll', function() {
		var navHeight = $( window ).height();
		if ($(window).scrollTop() > 1) {
			$('.header-top').addClass('fixed-menu');
		}
		else {
			$('.header-top').removeClass('fixed-menu');
		}
	});


	if($(window).innerWidth() < 1024){}

	$('.slide-part').slick({
		autoplay:true,
		arrow:false,
		autoplaySpeed: 0,
		speed: 6000,
		slidesToShow: 6,
		slidesToScroll: 1, 
		dots: false,
		centerMode: true,
		nextArrow: '',
		prevArrow: '',
		responsive: [
			{
				breakpoint: 767,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1
				}
			}
		],
	});

	$('.btn-menu a').click(function(){
		$('.menu-tracking, html').addClass('open_menu');
	})
	$('.close-menu a').click(function(){
		$('.menu-tracking, html').removeClass('open_menu');
	})


	$('#up_file').change(function() {
        var filepath = this.value;
        var m = filepath.match(/([^\/\\]+)$/);
        var filename = m[1];
        $('.item-file label').html(filename);
    });


	$('.box-discover .row > div').hide();
   	$('.box-discover .row > div').each(function(index,value) {
     	if(index < 8) {
       		$(this).show();
     	}
   	});
  	if($('.box-discover .row > div:hidden').length) {
    	$('#loadmore-discover').show();
  	}
  	if(!$('.box-discover .row > div:hidden').length) {
      	$('#loadmore-discover').hide();
    }
    $('#loadmore-discover').on('click', function() {
	    $('.box-discover .row > div:hidden').each(function(index, value) {
	       if(index < 4) {
	        	$(this).show();
	       }
	    });
	    if(!$('.box-discover .row > div:hidden').length) {
	     	$('#loadmore-discover').hide();
	     	$('.link-detail').addClass('mt-0');
	    }
	});




	$('.list-case .content-payment').hide();
   	$('.list-case .content-payment').each(function(index,value) {
     	if(index < 4) {
       		$(this).show();
     	}
   	});
  	if($('.list-case .content-payment:hidden').length) {
    	$('#loadmore-discover').show();
  	}
  	if(!$('.list-case .content-payment:hidden').length) {
      	$('#loadmore-case').hide();
    }
    $('#loadmore-case').on('click', function() {
	    $('.list-case .content-payment:hidden').each(function(index, value) {
	       if(index < 2) {
	        	$(this).show();
	       }
	    });
	    if(!$('.list-case .content-payment:hidden').length) {
	     	$('#loadmore-case').hide();
	     	$('.loadmore-case').hide();
	    }
	});

}) 

