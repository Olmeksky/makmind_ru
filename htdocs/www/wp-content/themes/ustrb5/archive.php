<?php
/*
Template Name: Archives
*/
get_header(); ?>

<main>
<?php get_sidebar('popup');?>
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<h1 class="section__title"><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
		<?php endwhile; // end of the loop. ?>
		<?php the_tags(); ?>
	</div>
	
	<?php get_sidebar('melochi'); ?>
	<?php get_sidebar('preimushestva'); ?>
	<?php get_sidebar('completed');?>
	<?php get_sidebar('vigody'); ?>
	<?php get_sidebar('zamer'); ?>

</main>
<?php get_footer(); ?>
