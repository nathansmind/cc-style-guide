$(document).ready(function(){
	
	var build = 0;
	
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
	
	// Slider Start here
	var slider = {
		speed: 	500,
		
		slide: function(obj, el) {
			obj = (obj * 1000) * (-1);
			$(el).animate({'left' : obj}, slider.speed);
		}
	
	}

	$('.slider .slider-controller a').click(function(){
		$item = $(this);
		$(this).parent().find('a').removeClass('selected');
		$item.addClass('selected');
		slider.slide($item.index(), $item.parent().parent().parent().find('ul'));
		
		return false;
	});
	
	$('.slider .next').click(function(){
		return false;
	});

	
	if($('.custom-select').length) {
		$('.custom-select').click(function(){
			$(this).find('.custom-options').show();
			return false;
		});
		$('.custom-option').click(function(){
			$(this).parent().next().html($(this).attr('data'));
			$(this).parent().hide();
			return false;
		});
		$(document).click(function(){
			$('.custom-options').hide();
		});
	}
	
	$('.tooltip-close').click(function(){
		$(this).parent().animate({
			'opacity':'0'
		},300);
		return false;
	});
	
	
	
	
	
});