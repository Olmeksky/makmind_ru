<?php get_header(); ?>
<main>
	<div class="container">
		
		<h2>Страница поиска в разработке</h2>
		<p>Перейдите на <a href="/">главную</a> и продолжите</p>
		
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
	</div>
	
	<?php get_sidebar('melochi'); ?>
	<?php get_sidebar('preimushestva'); ?>
	<?php get_sidebar('completed');?>
	<?php get_sidebar('vigody'); ?>
	<?php get_sidebar('zamer'); ?>

</main>
<?php get_footer(); ?>
