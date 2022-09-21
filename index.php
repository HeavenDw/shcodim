<?php get_header(); ?>
<main>
<!-- mainscreen -->
<section class="mainscreen">
	<div class="container mainscreen__container">
		<div class="mainscreen__top top-mainscreen">
			<div class="top-mainscreen__text">программирование для детей</div>
			<div class="top-mainscreen__contacts contacts-mainscreen">
				<ul class="contacts-mainscreen__socials" data-da=".header__menu,767,1">
					<li><a href="<?php echo $GLOBALS['shkodim']['vk_url']; ?>" target="_blank" class="contacts-mainscreen__link _icon-vk"></a></li>
					<li><a href="<?php echo $GLOBALS['shkodim']['facebook_url']; ?>" target="_blank" class="contacts-mainscreen__link _icon-facebook"></a></li>
					<li><a href="<?php echo $GLOBALS['shkodim']['instagram_url']; ?>" target="_blank" class="contacts-mainscreen__link _icon-instagram"></a></li>
				</ul>
				<a href="tel:<?php echo $GLOBALS['shkodim']['phone_digits']; ?>" class="contacts-mainscreen__phone _icon-cell-phone" data-da=".header__menu,767,last">
					<span><?php echo $GLOBALS['shkodim']['phone']; ?></span>
				</a>
			</div>
		</div>

		<div class="mainscreen__body body-mainscreen">
			<div class="body-mainscreen__container">
				<div class="body-mainscreen__image anim-item">
					<picture>
						<source srcset="<?php echo get_template_directory_uri(); ?>/img/main/man-image.webp" type="image/webp">
						<img src="<?php echo get_template_directory_uri(); ?>/img/main/man-image.png" alt="человечек" class="lazy">
					</picture>
				</div>
				<div class="body-mainscreen__text">
					<h1 class="body-mainscreen__title">Обучаем</h1>
					<p class="body-mainscreen__subtitle">детей и подростков программировать,<br>создавать компьютерные игры,<br>приложения и сайты</p>
				</div>
			</div>
			<a href="" scrollto=".message" class="body-mainscreen__btn">записаться на пробное занятие</a>
		</div>			
	</div>
</section>
<!-- /mainscreen -->

<!-- about -->
<section class="about">
	<div class="container about__container">
		<h2 class="about__title title">о нас</h2>
		<p class="about__text">Детская школа программирования<span>шкодим</span></p>
		<p class="about__text">Учим детей от 4 до 16 лет цифровой грамотности и современным компьютерным наукам</p>
		<div class="about__body">
			<div class="about__row">
				<div class="about__col col-about anim-item">
					<div class="col-about__image">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/tools-and-utensils.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/tools-and-utensils.png" alt="тэг на мониторе" class="lazy">
						</picture>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/man-image.webp" type="image/webp" class="col-about__man">
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/man-image.png" alt="человечек" class="lazy col-about__man">
						</picture>
					</div>
					<p class="col-about__text">УЧИМ<br>ИСПОЛЬЗОВАТЬ<br>ТЕХНОЛОГИИ</p>
				</div>
				<div class="about__col col-about anim-item anim-delay-1">
					<div class="col-about__image orange">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/community.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/community.png" alt="соединенные шарики" class="lazy">
						</picture>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/man-image.webp" type="image/webp" class="col-about__man">
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/man-image.png" alt="человечек" class="lazy col-about__man">
						</picture>
					</div>
					<p class="col-about__text">ФОРМИРУЕМ<br>ОБЩЕСТВО<br>БУДУЩЕГО</p>
				</div>
				<div class="about__col col-about anim-item anim-delay-2">
					<div class="col-about__image">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/book.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/book.png" alt="книга" class="lazy">
						</picture>
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/about/man-image.webp" type="image/webp" class="col-about__man">
							<img src="<?php echo get_template_directory_uri(); ?>/img/about/man-image.png" alt="человечек" class="lazy col-about__man">
						</picture>
					</div>
					<p class="col-about__text">РАЗВИВАЕМ<br>стремление<br>К ЗНАНИЯМ</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /about -->

<!-- message -->
<section class="message">
	<div class="container message__container">
		<div class="message__man anim-item right">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/img/message/man-image.webp" type="image/webp">
				<img src="<?php echo get_template_directory_uri(); ?>/img/message/man-image.png" alt="человечек" class="lazy">
			</picture>
		</div>
		<div class="message__body">
			<h2 class="message__title title">напишите нам</h2>
			<p class="message__subtitle">Оставьте заявку на пробное занятие, или задайте вопрос. <br> Мы свяжемся с Вами в течении 24-х часов</p>
			
		</div>
		<?php echo do_shortcode( '[contact-form-7 id="8" title="Контактная форма 1"]' ); ?>
	</div>
</section>
<!-- /message -->

<!-- programm -->
<section class="programm">
	<div class="container programm__container">
		<span></span>
		<div class="programm__top">
			<div class="programm__img anim-item">
				<picture>
					<source srcset="<?php echo get_template_directory_uri(); ?>/img/programm/man-image.webp" type="image/webp">
					<img src="<?php echo get_template_directory_uri(); ?>/img/programm/man-image.png" alt="человечек" class="lazy">
				</picture>
			</div>
			<h2 class="programm__title title">программы<br>обучения</h2>
		</div>
		<div class="programm__tabs one">
			<div class="programm__tab tab-programm">
				<div class="tab-programm__top b">
					<h3 class="tab-programm__title">модуль «Я - O'КЕЙ» для учеников 2-4 классов</h3>
				</div>
				<div class="tab-programm__body b open-on-load"> 
					<p class="tab-programm__text">Мы развиваем у наших самых юных студентов такие качества и навыки как самостоятельность, уверенность, эффективная коммуникация, самоорганизация, умение решать конфликты.</p>
					<p class="tab-programm__text">Компетенции сквозного развития: умение работать в команде, креативность, адаптивность, публичные выступления, позитивность, целеполагание, ориентация на результат, системность мышления, самостоятельность, ответственность.</p>
					<p class="tab-programm__text">Форма обучения: тренинги и мастер-классы от профессиональных бизнес-тренеров и психологов.</p>
					<a href="#" scrollto=".message" class="tab-programm__btn">записаться на пробное занятие *</a>
					<p class="tab-programm__message">* пробное занятие бесплатно</p>
				</div>
			</div>
			<div class="programm__tab tab-programm">
				<div class="tab-programm__top o">
					<h3 class="tab-programm__title">модуль «ты - лидер!» для учеников 5 и 7 классов</h3>
				</div>
				<div class="tab-programm__body o">
					<p class="tab-programm__text">							Мы раскрываем нашим студентам природу лидерства, развиваем в них уверенность, инициативность, способности показывать образцы деятельности, расширяем кругозор и зоны экспертности.</p>
					<p class="tab-programm__text">Программа помогает сформировать представления о лидерстве, раскрыть личность ребенка, повысить уверенность в себе и развить навыки, необходимые для активизации лидерского потенциала: умение общаться, убеждать и вести за собой; умение работать в команде, разрешать конфликты; завоевывать авторитет и доверие; быть организованным и собранным.</p>
					<p class="tab-programm__text">Компетенции сквозного развития: умение работать в команде, индивидуальное и командное планирование, ораторское мастерство, коммуникативность, публичные выступления, позитивность, целеполагание, ориентация на результат, принятие решений, самостоятельность, ответственность.</p>
					<p class="tab-programm__text">Форма обучения: тренинги и мастер-классы от профессиональных бизнес-тренеров и психологов.</p>
					<a href="#" scrollto=".message" class="tab-programm__btn">записаться на пробное занятие</a>
					<p class="tab-programm__message">* пробное занятие бесплатно</p>
				</div>
			</div>
			<div class="programm__tab tab-programm">
				<div class="tab-programm__top b">
					<h3 class="tab-programm__title">модуль «свобода» для учеников 6-7 классов</h3>
				</div>
				<div class="tab-programm__body b">
					<p class="tab-programm__text">Путь к настоящей СВОБОДЕ начинается с поиска ответов на вопросы: Кто Я? Какими талантами я обладаю? Как увеличить свою силу? Как управлять своим развитием и собой? Как решать сложные ситуации с друзьями, родителями, одноклассниками?</p>
					<p class="tab-programm__text">Профессиональные тренеры помогают найти ответы. Цели программы: дать возможность оценить личный потенциал и увидеть зоны собственного развития, усилить влияние на развитие собственных способностей, а также улучшить взаимоотношения со сверстниками, родителями, сформировать нестандартное предпринимательское мышление, усилить самоорганизацию.</p>
					<p class="tab-programm__text">Компетенции сквозного развития: умение работать в команде, предпринимательство (креативность), адаптивность, коммуникативность, публичные выступления, позитивность, целеполагание, ориентация на результат, принятие решений, системность мышления, самостоятельность, ответственность.</p>
					<a href="#" scrollto=".message" class="tab-programm__btn">записаться на пробное занятие</a>
					<p class="tab-programm__message">* пробное занятие бесплатно</p>
				</div>
			</div>
			<div class="programm__tab tab-programm">
				<div class="tab-programm__top o">
					<h3 class="tab-programm__title">модуль «драйв» для учеников 8-10 классов</h3>
				</div>
				<div class="tab-programm__body o">
					<p class="tab-programm__text">Одна из первых программ, запущенных в программе "Матрица карьеры". Много лет является лидером детских и родительских предпочтений.</p>
					<p class="tab-programm__text">Программа готовит старшеклассников к основным событиям этого периода жизни - сдаче экзаменов, выбору профессии, позиционированию в подростковом коллективе...</p>
					<p class="tab-programm__text">Особенностью программы является то, что ведут ее не только профессиональные психологи, но и бизнес-тренеры, специалисты по управлению персоналом, финансисты, специалисты по маркетингу и рекламе, работающие в крупных компаниях города. У студентов будет возможность потренироваться в прохождении собеседования в кадровом агентстве, отработать коммуникативные навыки в настоящих переговорных поединках, получить представление о содержании работы в разных профессиях.</p>
					<p class="tab-programm__text">Предметом активного развития являются такие качества как стрессоустойчивость, уверенность в себе, коммуникативные навыки.</p>
					<p class="tab-programm__text">Компетенции сквозного развития: умение работать в команде, лидерство, предпринимательство (креативность), публичные выступления, целеполагание, ориентация на результат, принятие решений, самостоятельность, ответственность.</p>
					<a href="#" scrollto=".message" class="tab-programm__btn">записаться на пробное занятие *</a>
					<p class="tab-programm__message">* пробное занятие бесплатно</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /programm -->

<!-- reviews -->
<section class="reviews">
	<div class="container reviews__container">
		<h2 class="reviews__title title">отзывы</h2>
		<div class="reviews__body body-reviews">
			<div class="body-reviews__slider">
				<div class="body-reviews__item item-reviews">
					<div class="item-reviews__image">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/reviews/photo.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/photo.png" alt="девушка" class="lazy">
						</picture>
					</div>
					<div class="item-reviews__info">
						<div class="item-reviews__title">имя фамилия</div>
						<div class="item-reviews__text">
							Это демо-версия. Тестовый отзыв.
						</div>
					</div>
				</div>
				<div class="body-reviews__item item-reviews">
					<div class="item-reviews__image">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/reviews/photo.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/photo.png" alt="девушка" class="lazy">
						</picture>
					</div>
					<div class="item-reviews__info">
						<div class="item-reviews__title">имя фамилия</div>
						<div class="item-reviews__text">
							Это демо-версия. Тестовый отзыв.
                          	Это демо-версия. Тестовый отзыв.
						</div>
					</div>
				</div>
				<div class="body-reviews__item item-reviews">
					<div class="item-reviews__image">
						<picture>
							<source srcset="<?php echo get_template_directory_uri(); ?>/img/reviews/photo.webp" type="image/webp">
							<img src="<?php echo get_template_directory_uri(); ?>/img/reviews/photo.png" alt="девушка" class="lazy">
						</picture>
					</div>
					<div class="item-reviews__info">
						<div class="item-reviews__title">имя фамилия</div>
						<div class="item-reviews__text">
							Это демо-версия. Тестовый отзыв.
						</div>
					</div>
				</div>
			</div>
			<div class="body-reviews__nav"></div>
			<span></span>
		</div>
	</div>
</section>
<!-- /reviews -->

<!-- contacts -->
<section class="contacts">
	<div class="container contacts__container">
		<div class="contacts__title title">наши контакты</div>
		<div class="contacts__img anim-item right">
			<picture>
				<source srcset="<?php echo get_template_directory_uri(); ?>/img/contacts/man-image.webp" type="image/webp">
				<img src="<?php echo get_template_directory_uri(); ?>/img/contacts/man-image.png" alt="человечек" class="lazy">
			</picture>
		</div>
		<div class="contacts__body body-contacts">
			<ul class="body-contacts__info">
				<li class="body-contacts__address _icon-map-marker"><span><?php echo $GLOBALS['shkodim']['address']; ?></span></li>
				<li class="_icon-cell-phone"><a href="tel:<?php echo $GLOBALS['shkodim']['phone_digits']; ?>" class="body-contacts__phone"><span><?php echo $GLOBALS['shkodim']['phone']; ?></span></a></li>
				<li class="_icon-mail"><a href="mailto:<?php echo $GLOBALS['shkodim']['mail']; ?>" class="body-contacts__email"><span><?php echo $GLOBALS['shkodim']['mail']; ?></span></a></li>
			</ul>
			<a href="#" scrollto=".message" class="body-contacts__btn">записаться на пробное занятие</a>
		</div>
	</div>
	<div class="container">
		<div class="contacts__map" id="ymap" data-address="<?php echo $GLOBALS['shkodim']['address']; ?>" data-coordinates="<?php echo $GLOBALS['shkodim']['map_coordinates']; ?>"></div>
	</div>
	<div class="contacts__bottom">
		<ul class="contacts__socials">
			<li><a href="<?php echo $GLOBALS['shkodim']['vk_url']; ?>" target="_blank" class="contacts__link _icon-vk"></a></li>
			<li><a href="<?php echo $GLOBALS['shkodim']['facebook_url']; ?>" target="_blank" class="contacts__link _icon-facebook"></a></li>
			<li><a href="<?php echo $GLOBALS['shkodim']['instagram_url']; ?>" target="_blank" class="contacts__link _icon-instagram"></a></li>
		</ul>
	</div>
</section>

<!-- /contacts -->
</main>
<?php get_footer(); ?>
		