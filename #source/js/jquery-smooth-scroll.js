/* scrollTo start */
// клик по любой ссылке
$('a').click(function(){
	// проверка имеет ли ссылка аттр scrollto
	if (typeof $(this).attr('scrollto') == typeof undefined) {
		return;
	}
	// отмена поведения ссылки
	event.preventDefault();
	// класс объекта к которому надо скроллить записывается в аттрибут scrollto
	var cls  = $(this).attr('scrollto');
	// высчитываем высоту скролла от верха страницы - высота шапки с классом header
	var top = $(cls).offset().top - $('.header').height();
	// скроллим до объекта
	$('body,html').animate({scrollTop: top}, 800);
});
/* scrollTo end */