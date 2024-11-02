<?php
/*
Template Name: Страница тегов
Template Post Type: post, page, news
*/
?>
<?php get_header(); ?>
<main>
<?php get_sidebar('popup');?>
	<div class="container">
		<h1 class="section__title"><?php the_title(); ?></h1>
		
		<?php the_content(); ?>
		<hr />
		<?php wp_tag_cloud(); ?>
	</div>

	<section class="strelka"><a name="catalog"></a>
		<div class="container">
			<div class="chevron"></div>
			<div class="chevron"></div>
			<div class="chevron"></div>
		</div>
	</section>
	
	<?php get_sidebar('melochi'); ?>
	<?php get_sidebar('preimushestva'); ?>
	<?php get_sidebar('completed_f1');?>
	<?php get_sidebar('videos');?>
	<?php get_sidebar('vigody'); ?>
	<?php get_sidebar('zamer'); ?>

</main>
<?php get_footer(); ?>
