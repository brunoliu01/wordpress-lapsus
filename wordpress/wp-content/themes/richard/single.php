<?php get_header(); ?>

<?php if ( have_posts() ) : the_post(); ?>
	<section>
		<h1><?php the_title(); ?></h1>
		<time datatime="<?php the_time('Y-m-j') ?>"><?php the_time('j f, Y'); ?></time>
		<?php the_content(); ?>
		<?php the_tags('<ul><li>' , '</li><li>' , '</li></ul>'); ?>
		<address>Por <?php the_author_posts_link() ?></address>
		<!-- Comnetarios -->
		<?php comments_template(); ?>
	</section>
	<?php else : ?>
	<p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>