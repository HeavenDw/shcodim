<!DOCTYPE html>
<html lang="ru">

<head>
	<title>Шкодим - Детская школа программирования</title>
	<meta charset="UTF-8">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/icons/man-image.png">
	<!-- enable responsive -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- /enable responsive -->
	<?php wp_head(); ?>
</head>

<body>

	<!-- wrapper -->
	<div class="wrapper">

		<!-- header -->
		<header class="header">
			<div class="container header__container">
				<div class="header__logo">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/icons/logo.webp" type="image/webp">
						<img src="<?php echo get_template_directory_uri(); ?>/img/icons/logo.png" alt="">
					</picture>
				</div>
				<nav class="header__menu">
					<ul class="header__list">
						<li><a href="" scrollto=".about" class="header__link">о нас</a></li>
						<li><a href="" scrollto=".programm" class="header__link">программа</a></li>
						<li><a href="" scrollto=".contacts" class="header__link">контакты</a></li>
					</ul>
				</nav>
				<a href="#" scrollto=".message" class="header__callback _icon-phone-call" data-da=".header__menu,767,2">
					<span>заказать <br> обратный звонок</span>
				</a>

				<div class="header__burger icon-menu">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
		</header>
		<!-- /header -->
