function headerHeightPlaceholder() {
	var headerHeight = $('.header').outerHeight();
	$('.mainscreen__container').css({'padding-top': headerHeight});
	headerHeight = '0px ' + headerHeight + 'px';
	$('.mainscreen').css({'background-position': headerHeight});
};

headerHeightPlaceholder();