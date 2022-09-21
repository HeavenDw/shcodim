// .icon-menu - класс иконки бургера, .menu - класс меню
$('.icon-menu').click(function() {
	console.log('123');
	$('.header__burger').toggleClass('active');
	$('.header__menu').toggleClass('active');
	$('body').toggleClass('lock');
});

function close(){
	$('.header__burger').removeClass('active');
	$('.header__menu').removeClass('active');
	$('body').removeClass('lock');
};

$('.header__link, .contacts-mainscreen__link, .contacts-mainscreen__phone, .header__callback').click(function() {
	close();
});