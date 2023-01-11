
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

	$('.tab-stories a').click(function(){
		var tab_id = $(this).attr('data-tab');

		$('.tab-stories a').removeClass('active');
		$('.tab-content').removeClass('active');

		$(this).addClass('active');
		$("#"+tab_id).addClass('active');
	})

	$('.btn-bar-mobile a').click(function(){
		$('.h-menu').addClass('active');
	})
	$('.close-menu a').click(function(){
		$('.h-menu').removeClass('active');
	})

})

