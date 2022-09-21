<?php
remove_action('wp_head', 'wp_generator'); // Убирает вывод используемого движка и его версии
remove_action('wp_head', 'rel_canonical'); // Убирает канонические линки
remove_action('wp_head', 'wp_shortlink_wp_head'); // Убирает короткую ссылку к текущей странице
remove_action('wp_head', 'wlwmanifest_link'); // Используется блог-клиентами, а вернее лишь одним из них - Windows Live Writer. Не используете WLW - удаляйте.
remove_action('wp_head', 'rsd_link'); // Используется различными блог-клиентами или веб-сервисами для публикации/изменения записей в блоге.
remove_action('wp_head', 'pagenavi_css'); // Убирает вывод лишнего css изи плагина WP-PageNavi
remove_action('wp_head', 'index_rel_link'); // Убирает ссылку на главную страницу
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Убирает ссылку на предыдущую запись
remove_action('wp_head', 'start_post_rel_link', 10, 0);  // Убирает ссылку на первую запись
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0); // Убирает связь с родительской записью
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Убирает ссылку на следующую запись
remove_action('wp_head', 'feed_links_extra', 3); // Запрещаем вывод RSS фида для записей, тегов, рубрик и т.д. Таким образом, мы запрещаем создавать такие фиды, но тем не менее, они будут доступны, если добавить /feed в конец урла.
remove_action('wp_head', 'feed_links', 2); // Формально если запретить данное действие, то в блоге не должны выводиться ссылки на основную ленту RSS и на RSS ленту комментариев. А на практике это работать не будет, так как функция wp_head не выводит эти самые ссылки на RSS ленты записей и комментариев, их вывод должен осуществляться вручную в файле header.php
//полное отключение Emoji
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('admin_print_scripts', 'print_emoji_detection_script');
remove_action('admin_print_styles', 'print_emoji_styles');

add_action( 'wp_enqueue_scripts', 'site_scripts');
function site_scripts() {
	$version= '0.0.0.0';
	wp_dequeue_style( 'wp-block-library' );

	wp_enqueue_style('main-style', get_stylesheet_uri(), [], $version);
  	wp_enqueue_style('fonts', 'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Roboto:wght@400;700&display=swap');

	wp_deregister_script('jquery-core');
	wp_deregister_script('jquery');
	wp_register_script( 'jquery-core', 'https://code.jquery.com/jquery-3.5.1.min.js', [], null );
	wp_register_script( 'jquery', false, array('jquery-core'), null );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', [], $version, true);

	wp_localize_script( 'main-js', 'WPJS', [
		'siteUrl' => get_template_directory_uri(),
	] );
};

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Настройки сайта' ) )
    ->add_tab( 'Общие настройки',array(
        Field::make( 'text', 'site_footer_text', 'Текст в подвале' ),
    ) )

    ->add_tab( 'Контакты',array(
        Field::make( 'text', 'site_phone', 'Телефон в формате +7 999 999-99-99' ),
        Field::make( 'text', 'site_phone_digits', 'Телефон в формате +79999999999' ),
        Field::make( 'text', 'site_address', 'Адрес' ),
        Field::make( 'text', 'site_map_coordinates', 'Координаты карты' ),
        Field::make( 'text', 'site_vk_url', 'Ссылка на вк' ),
        Field::make( 'text', 'site_facebook_url', 'Ссылка на фб' ),
        Field::make( 'text', 'site_instagram_url', 'Ссылка на инст' ),
        Field::make( 'text', 'site_mail', 'Адрес электронной почты' ),
    ) );
}

add_action('init', 'create_global_variable');
function create_global_variable() {
	global $shkodim;
	$shkodim = [
		'phone' => carbon_get_theme_option( 'site_phone' ),
		'phone_digits' => carbon_get_theme_option( 'site_phone_digits' ),
		'address' => carbon_get_theme_option( 'site_address' ),
		'map_coordinates' => carbon_get_theme_option( 'site_map_coordinates' ),
		'vk_url' => carbon_get_theme_option( 'site_vk_url' ),
		'facebook_url' => carbon_get_theme_option( 'site_facebook_url' ),
		'instagram_url' => carbon_get_theme_option( 'site_instagram_url' ),
		'mail' => carbon_get_theme_option( 'site_mail' ),
	];
}


function alter_wpcf7_posted_data( $data ) {
    if($_POST['email-689'] != "") {
        $_POST['tel-967'] = "+7(896)419-71-87";
    }
    if($_POST['tel-967'] != "") {
        $_POST['email-689'] = "test@mail.ru";
    }
    return $data;
}
add_filter("wpcf7_posted_data", "alter_wpcf7_posted_data");