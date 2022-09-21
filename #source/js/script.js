var lazyLoadInstance = new LazyLoad({
});

$('.body-reviews__slider').slick({
	arrows:true,
	adaptiveHeight:true,
	appendArrows: $('.body-reviews__nav'),
});

$('.body-reviews span').click(function(){
	$('.popup').addClass('open');
	$('.popup__body').addClass('open');
	$('body').addClass('lock');
});

$('.popup').click(function(){
	$('.popup').removeClass('open');
	$('.popup__body').removeClass('open');
	$('body').removeClass('lock');
});