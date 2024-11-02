<?php get_header(); ?>
<main>
<?php get_sidebar('popup');?>
	<div class="container">
		<h2><?php the_title(); ?></h2>
		<?php the_content(); ?>
		<h2>УПС! Кажется вам попалась несуществующая страница</h2>
		<p>Перейдите на <a href="/">главную</a> и продолжите</p>
	</div>
	
	<?php get_sidebar('melochi'); ?>
	<?php get_sidebar('preimushestva'); ?>
	<?php get_sidebar('completed');?>
	<?php get_sidebar('vigody'); ?>
	<?php get_sidebar('zamer'); ?>

</main>
<?php get_footer(); ?>
