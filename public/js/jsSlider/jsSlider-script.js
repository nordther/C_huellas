var btn_function_slider = new sliderClass();

setInterval(function(){btn_function_slider.nextSlider()},15000);

$(document).ready(function(){
	$("button[id=btn-at]").click(function(){
		btn_function_slider.beforeSlider();
	});
	$("button[id=btn-sg]").click(function(){
		btn_function_slider.nextSlider();
	});
});



function sliderClass(){

	this.beforeSlider = function(){

		var size = $('.content-slider').find('.element_slider').size();
		$('.content-slider').find('.element_slider').each(
			function(index,value){				
				if($(value).hasClass('element_slider_show')){

					$(value).fadeOut(300).delay(800).hide();
					$(value).removeClass('element_slider_show');

					if(index==0){

						$($('.content-slider').find('.element_slider').get(size-1)).fadeIn(300);
						$($('.content-slider').find('.element_slider').get(size-1)).addClass('element_slider_show');

						return false;
					}else{
						
						$($('.content-slider').find('.element_slider').get(index-1)).fadeIn(300);
						$($('.content-slider').find('.element_slider').get(index-1)).addClass('element_slider_show');
						return false;
					}
				}
		});
	}

	this.nextSlider = function(){

		var size = $('.content-slider').find('.element_slider').size();
		$('.content-slider').find('.element_slider').each(
			function(index,value){				
				if($(value).hasClass('element_slider_show')){

					$(value).fadeOut(300).delay(800).hide();
					$(value).removeClass('element_slider_show');

					if(index+1 < size){

						$($('.content-slider').find('.element_slider').get(index+1)).fadeIn(300);
						$($('.content-slider').find('.element_slider').get(index+1)).addClass('element_slider_show');

						return false;
					}else{
						
						$($('.content-slider').find('.element_slider').get(0)).fadeIn(300);
						$($('.content-slider').find('.element_slider').get(0)).addClass('element_slider_show');
						return false;
					}
				}
		});	
	}


}