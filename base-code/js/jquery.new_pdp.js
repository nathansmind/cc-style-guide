$(document).ready(function(){

	// NEW PDP
		
    $.fn.slowEach = function(interval, callback){
        var array = this;
        if(!array.length) return;
        var i = 0;
	    next();
        function next(){
            if( callback.call( array[i], i, array[i] ) !== false ){
                if( ++i < array.length ){
                    setTimeout( next, interval );
                }
            }
        }
    };
	
	$.fn.aspectRatio = function(newHeight,orginalWidth,originalHeight){
		var height = originalHeight;
		var width = orginalWidth;
		var aspect = width / height;
		var resizedWidth = Math.round(newHeight * aspect);
		return resizedWidth;
	}
	
	$.fn.commaSeparateNumber = function(val){
	    while (/(\d+)(\d{3})/.test(val.toString())){
	      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
	    }
	    return val;
	}
	
	var coordinates = new Array();
	
	if($('.bike-pdp').length){
		
		$('.contribution-helpful').click(function(){
			$(this).find('img').css('opacity','1');
			$(this).find('span').html('15');
			return false;
		});
		
		// Community Tabs
		
		$('.product-tabs a').click(function(){
			$('.product-tabs a').removeClass('selected');
			$(this).addClass('selected');
			$('.community-content').hide();
			$obj = '.'+$(this).attr('data');
			$($obj).show();
			return false;
		});
		
		
		// Community Tab Sorts 
		
		$('.product-tabs a span').click(function(){
			$(this).next().show();
			return false;
		});
		
		$('.ui-tooltip-top').click(function(){
			$(this).hide();
		});
		
		$('.contribution-entry input[type="text"]').focus(function(){
			$('body,html').animate({
				scrollTop: coordinates[3] + 70
			}, 500);
			$('.contribution-entry-field .contribution-clear').fadeIn('fast');
			$('.contribution-main-form ').slideDown('fast');
			$('.contribution-close').show();
		}).keyup(function(){
			$(this).parent().find('.contribution-limit').html(80 - $(this).val().length)
		});
		
		$('.contribution-entry textarea').keyup(function(){
			var val = 2000 - $(this).val().length;
			

			
			$(this).parent().find('.contribution-limit').html(commaSeparateNumber(val))
		});
		
		$('.contribution-close').click(function(){
			$(this).hide();
			$('.contribution-entry-field .contribution-clear').fadeOut('fast');
			$('.contribution-main-form ').slideUp('fast');
			return false;
		})
		

		
		// load placeholder image for scaling gallery
		
		$('.image-placeholder').load(function(){
			var productNav = $('.sku-nav').offset().top;
			
			$el = $('.product-gallery .main-image');
			
			$('.sku-nav-container').css('height',$('.sku-nav').innerHeight());
			$('.gallery-stage').css('height',$('.main-image').innerHeight());
			
			$full_width = $el.innerWidth();
			$full_height = $el.innerHeight();
			$ratio = $('this').aspectRatio($full_height, 879, 489);
			$position = (((($full_width - $ratio) - 220) / 2) + 20) + 'px';
			$('.product-gallery .detail-pics li').css({
				'width':$full_width,
				'background-position':$position + ' center'
			});
			
			$(window).scroll(function(){
				var active;
				
				for(x = 0; x < coordinates.length; x++){
					if($(window).scrollTop() >= coordinates[x]){
						active = x;
					}
				}
				
				
				// Lock the navigation under the floating header
				$el = $('.sku-nav');
				$el.find('a').removeClass('selected');
				$el.find('a').eq(active).addClass('selected');
				if(($(window).scrollTop() + 40) > productNav) {
					$el.css({
						'position':'fixed',
						'box-shadow':'0 2px 7px rgba(0,0,0,0.4)',
						'top': $('header').outerHeight()
					});
				}else{
					$el.css({
						'position':'static',
						'box-shadow':'0 2px 4px rgba(0,0,0,0)'
					});
				}
			});
			
			$('.sku-nav a').click(function(){

				$('body,html').animate({
					scrollTop: coordinates[$(this).index()]
				}, 500);
				return false;
			});
			
			$('.buy .rating').click(function(){
				$('body,html').animate({
					scrollTop: coordinates[3]
				}, 500);
				return false;
			});
			
			$('.sizing-help').click(function(){
				$('body,html').animate({
					scrollTop: coordinates[2]
				}, 500);
				return false;
			});
			
		});
		
		$('.description img').wrap('<div class="description-image" />');
		
		$(window).load(function(){

			$('.anchors').each(function(i){
				coordinates[i] = ($(this).offset().top - ($('header').innerHeight() + $('.sku-nav').innerHeight()));
			});	
			
		});
		
		$('.color-panel .colorways .video').click(function(){
			$('#fullscreen-video').show();
			setTimeout(function(){
				$('.bike-pdp').hide();
				$('footer').hide();
			},500);
			$("#fullscreen-video").append('<iframe width="853" height="480" src="https://www.youtube.com/embed/TVPfhP-zsks?autoplay=1&loop=1&rel=0&wmode=transparent" frameborder="0" allowfullscreen wmode="Opaque"></iframe>');
		});
		
		$('#fullscreen-video .fullscreen-close').click(function(){
			$('.bike-pdp').show();
			$('footer').show();
			$('#fullscreen-video').hide().find('iframe').remove();
		});
		
		$('.colorway').click(function(){
			$('.colorway').removeClass('colorway-selected');
			$(this).addClass('colorway-selected');
			$el = $(this).index() + 1;
			$img = $(this).find('img').attr('src');
			$img = $img.replace('_thumb','');
			$('.custom-select').eq(0).click();
			$('.custom-select').eq(0).find('.custom-option').eq($el).click();
			$('.detail-pics li').eq(0).css({
				'background-image': 'url('+$img+')'
			});
			return false;
		});

		
		$('.gallery-stage a.right').click(function(){
			
			$obj = $('.detail-pics');
			$list = $obj.find('li');
			$container = $obj.find('ul');
			$ind = ($container.attr('data') * 1);
			$width = $('.product-gallery .main-image').innerWidth();
			
			if($ind < $list.length){
				$container.animate({
					'margin-left': (-($ind * $width)) + 'px'
				},300);
				
				$('.detail-pics ul').attr('data', ($ind + 1));	
			}
			
			$('.gallery-stage a.left').removeClass('disabled');
			
			if($ind == $list.length){
				$(this).addClass('disabled');
			}
			
			return false;

		});
		
			
		$('.zoom-center a').click(function(){
			$('#fullscreen').show().transition({
			  	scale: [1, 1],
				opacity: 1
			},500, 'easeOutCubic');
			setTimeout(function(){
				$('.bike-pdp').hide();
				$('footer').hide();
			},500);
			return false;
		});
		
		$('.slider-zoom a').click(function(){
			$('#fullscreen').show().transition({
			  	scale: [1, 1],
				opacity: 1
			},500, 'easeOutCubic');
			setTimeout(function(){
				$('.bike-pdp').hide();
				$('footer').hide();
			},500);
			return false;
		});
		

		$('.fullscreen-close').click(function(){
			$('.bike-pdp').show();
			$('footer').show();
			$('#fullscreen').transition({
			  	scale: [.5, .5],
				opacity: 0
			},500, 'easeOutCubic');
			setTimeout(function(){
				$('#fullscreen').hide();
			},500);
			return false;
		})
		

		
		$('.gallery-stage a.left').click(function(){
			$('.gallery-stage a.right').removeClass('disabled');
			
			$obj = $('.detail-pics');
			$list = $obj.find('li');
			$container = $obj.find('ul');
			$ind = ($container.attr('data') * 1) - 1;
			
			if($ind){
				$container.animate({
					'margin-left': (-(($ind - 1) * $width)) + 'px'
				},300);

				$('.detail-pics ul').attr('data', $ind--);				
			}else{
				$(this).addClass('disabled');
			}
			return false;

		});
		
	}
	
	
	$('.community-comment-input a').click(function(){
		$(this).parent().hide().next().slideDown('fast');
		return false;
	});
	
	$('.contribution-flagged').click(function(){
		$el = $(this).find('img');
		if($(this).parent().next().css('display') == 'block'){
			$el.css('opacity','inherit');
			$(this).parent().next().slideUp('fast');
		}else{
			$el.css('opacity','1');
			$(this).parent().next().slideDown('fast');			
		}

		return false;
	});

	$(window).resize(function(){
		
		$('.anchors').each(function(i){
			coordinates[i] = ($(this).offset().top - ($('header').innerHeight() + $('.sku-nav').innerHeight()));
		});
		
		productNav = $('.sku-nav').offset().top;
		$obj = $('.product-gallery .detail-pics ul');
		$el = $('.product-gallery .main-image');
		$full_width = $el.innerWidth();
		$full_height = $el.innerHeight();
		$ratio = $('this').aspectRatio($full_height, 879, 489);
		$position = (((($full_width - $ratio) - 220) / 2) + 20) + 'px';
		if($obj.attr('data') > 1){
			$obj.css({
				'margin-left': -(($obj.attr('data') - 1) * $full_width)
			})
		}
		$('.product-gallery .detail-pics li').css({
			'width':$full_width,
			'background-position':$position + ' center'
		});
	}).click(function(){
		$('.ui-tooltip-top').hide();
	});

});