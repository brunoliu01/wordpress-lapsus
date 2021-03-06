<!-- Archivo de cabecera global Wordpress -->
<?php get_header(); ?>
<!-- Autor -->
<p>Post de <strong><?php echo get_the_author(); ?></strong></p>
<!-- Listado de Posts -->
<?php if ( have_posts() ) :  ?>
	<section>
		<?php while ( have_posts() ) : the_post(); ?>
		<article>
			<header>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h1>
				<time datatime="<?php the_time('Y-m-j'); ?>"><?php the_time('Y-m-j'); ?></time>
					<?php //the_category(); ?>
			</header>
			<?php the_excerpt(); ?>
			<footer>
				<address>Por <?php the_author_posts_link(); ?></address>
			</footer>
		</article>
		<?php endwhile; ?>
		<div class="pagination">
			<span class="in-left"><?php next_posts_link('« Entradas antiguas'); ?></span>
			<span class="in-right"><?php previous_posts_link('« Entradas más recientes » '); ?></span>
		</div>
	</section>
<?php else : ?>
	<p><?php _e('Ups!, no hay entradas.'); ?></p>
<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>