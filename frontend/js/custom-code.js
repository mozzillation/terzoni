
$(window).load(function(){
	
	// ————————————————————————
	// ANIMAZIONI
	// ————————————————————————
	
	$('body').addClass('loaded');
	
	$('.wine .animated').addClass('animation-done');  
	
	inView('.block1__img').once('enter', function(){
		$('.block1__img').addClass('animation-done');
	});
	
	inView('.block1__text').once('enter', function(){
		$('.block1__text, .block1__text h1 span').addClass('animation-done');
	});
	
	inView('.archive_wine__item').on('enter', el => {
    if(!el.done) {
        $(el).addClass('visible');
    }
})
.on('exit', el => {
    el.done = true;
});
									   
									   
									
	
	 $('.archive__filter').stickySidebar({
			topSpacing: 100,
			bottomSpacing: 20,
			containerSelector: '.archive__wrap',
			//innerWrapperSelector: '.sidebar__inner'
	  });
	
//	inView('.archive__header').on('exit', function(){
//		$('.archive__filter').addClass('fixed');
//	}).on('enter', function(){
//		$('.archive__filter').removeClass('fixed');
//	});
//									  
	
	// ————————————————————————
	// FILTER
	// ————————————————————————
		
	
	$('.filter').click(function(){
		if ($(this).is(':checked')) {
			$this = $(this);
			$category = $(this).val();

			console.log($category);

			if($category == '*'){
				 $('.archive__filter').find('li').removeClass('active');
				 $('.archive_wine').find('article').removeClass('disable');
				$this.addClass('active');

			} else {
				$('.archive__filter').find('li').removeClass('active');
				$this.addClass('active');
				$('.reset').addClass('enabled');

				$('.archive_wine').find('article').removeClass('disable').not($category).addClass('disable').queue(function(){
					
			});


			}
		}
    }
	);
	
	
	$('.reset').click(function(){
		if ($(this).hasClass('enabled')){
			$('input').each(function(){
				$(this).removeAttr('checked')
			});
		 	$('.archive__filter').find('li').removeClass('active');
		 	$('.archive_wine').find('article').removeClass('disable');
			$(this).removeClass('enabled');
		}
	});
	
	
	
	
	
	
	
	
	
	
	
	
	$('p').widowFix();
	
	// MOBILE MENU
	$('.header__nav_button, .header__nav_mobile_close').click(function(){
		$('body').toggleClass('mobile-nav-open');	
	});
		
	// SVG IMG to INLINE SVG
	  $('img.svg').each(function(){
		var $img = jQuery(this);
		var imgID = $img.attr('id');
		var imgClass = $img.attr('class');
		var imgURL = $img.attr('src');

		jQuery.get(imgURL, function(data) {
			// Get the SVG tag, ignore the rest
			var $svg = jQuery(data).find('svg');

			// Add replaced image's ID to the new SVG
			if(typeof imgID !== 'undefined') {
				$svg = $svg.attr('id', imgID);
			}
			// Add replaced image's classes to the new SVG
			if(typeof imgClass !== 'undefined') {
				$svg = $svg.attr('class', imgClass+' replaced-svg');
			}

			// Remove any invalid XML tags as per http://validator.w3.org
			$svg = $svg.removeAttr('xmlns:a');

			// Check if the viewport is set, if the viewport is not set the SVG wont't scale.
			if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
				$svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
			}

			// Replace image with new SVG
			$img.replaceWith($svg);

		}, 'xml');

	});	
	
});
