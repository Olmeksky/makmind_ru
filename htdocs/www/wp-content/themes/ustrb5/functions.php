<?php
/*
 * This is the child theme for Understrap theme.
 */
add_action( 'wp_enqueue_scripts', 'ustrb5_enqueue_styles' );
function ustrb5_enqueue_styles() {
	wp_enqueue_style( 'main', get_stylesheet_directory_uri() . '/style.css' );
	wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style('fancybox','https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css', array(), wp_get_theme()->get('Version'));
}

add_action( 'wp_enqueue_scripts', 'my_scripts_method');
function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	// вместо "jquery-core", можно вписать "jquery", тогда будет отменен еще и jquery-migrate
	wp_deregister_script( 'jquery-core' );
	wp_register_script( 'jquery-core', get_stylesheet_directory_uri() . '/assets/js/jquery-3.7.1.min.js');
	wp_enqueue_script( 'jquery' );
	
	// подключим библиотеку для карусели бутстрап
	wp_register_script( 'bbundle', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
	wp_enqueue_script('bbundle');
	
	// подключаем свои скрипты
	wp_enqueue_script( 'main', get_stylesheet_directory_uri() . '/assets/js/main.js');
	wp_enqueue_script( 'jquery-countdown', get_stylesheet_directory_uri() . '/assets/js/jquery.countdown.js');
	
	
}
/* Ваш дополнительный код */



/* Функция инициализации */

add_action('init', 'my_custom_init');
function my_custom_init(){
	
	/* Новый тип записи Случайные карты */
	register_post_type('randcard', array(
		'labels'					=> array(
			'name'					=> 'Карты',
			'singular_name'			=> 'Карта',
			'name_admin_bar'		=> 'Загрузка карт',
			'menu_name'				=> 'Загрузить карты',
			'add_new'				=> 'Добавить новую',
			'add_new_item'			=> 'Добавить новую Карту',
			'edit_item'				=> 'Редактировать Карту',
			'new_item'				=> 'Новая Карта',
			'view_item'				=> 'Посмотреть Карту',
			'search_items'			=> 'Найти Карту',
			'not_found'				=> 'Карт не найдено',
			'not_found_in_trash'	=> 'В корзине Карт не найдено',
			'parent_item_colon'		=> '',
			'featured_image'		=> 'Фото Карты',
			'set_featured_image'	=> 'Установите Фотографию Карты'
		),
		'public'				=> true,
		'rewrite'				=> [ 'slug' => 'randcard' ],
		'capability_type'		=> 'post',
		'has_archive'			=> 'randcard-arch',
		'rewrite'				=> true,
		'publicly_queryable'	=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true,
		'query_var'				=> true,
		'capability_type'		=> 'post',
		'hierarchical'			=> false,
		'menu_position'			=> 6,
		'supports'				=> array('title','editor','thumbnail','excerpt','custom-fields','page-attributes','post-formats'),
		'menu_icon'				=> 'dashicons-tablet',
		'template_item'			=> 'single-randcard.php',
		'posts_per_page'		=> 6,
		'show_in_rest'			=> true,
		'show_ui'				=> true,
		'show_in_menu'			=> true
	) );
	
}

// функция вывода короккого содержимого
function the_truncated_post($symbol_amount) {
	$filtered = strip_tags( preg_replace('@<style[^>]*?>.*?</style>@si', '', preg_replace('@<script[^>]*?>.*?</script>@si', '', apply_filters('the_content', get_the_content()))) );
	echo substr($filtered, 0, strrpos(substr($filtered, 0, $symbol_amount), ' ')) . '...';
}


?>
<?php
function randomCard() {
query_posts('post_type=randcard&orderby=rand&showposts=1');
if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="row">
	<div class="col-12">
		<div class="randcard_wrap2">
			<img class="randcard_img2" src="<?php echo get_the_post_thumbnail_url();?>" alt=""/>
		</div>
	</div>
</div>
<?php endwhile; endif;
}
?>
