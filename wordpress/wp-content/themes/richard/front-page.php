<!-- Archivo de cabecera global de Wordpres -->
<?php get_header();  ?>
<!-- Contenido de página de inicio -->
<?php if( have_posts() ) : the_post(); ?>
	<div class="cont-slider slideprimero">
		<div class="slideshow">
			<?php

				$argNews = array(
					'post_type' => 'slide',
					'posts_per_page' => 6,
					'post__not_in' => array($postID),
				);

				$loopQuery = new WP_Query($argNews);
				while ($loopQuery->have_posts()) {
					$loopQuery->the_post();
					get_template_part('partials/item', 'postWhiteSlide');
				}
			?>
		</div>
	</div>
	<p class="serv">¿QUÉ HACEMOS?</p>
	<section class="section-1">
		<div class="sub-container">
			<div class="img-container">
				<a href="proyectos.html">
					<div class="img-1">
						<p class="p-center">Proyectos de Innovación</p>
					</div>
				</a>
			</div>
		</div>
			<div class="sub-container">
				<div class="img-container">
				<a href="entrenamiento.html">
					<div class="img-2">
						<p class="p-center">Entrenamiento</p>
					</div>
				</a>
				</div>
			</div>
			<div class="sub-container">
				<div class="img-container">
					<a href="laboratorio.html">
						<div class="img-3">
						<p class="p-center">Laboratorio de Innovación</p>
					</a>
				</div>
			</div>
	</section>
	<section class="img-blue">
		<?php

			$argNews = array(
				'post_type' => 'QUE_HACEMOS',
				'posts_per_page' => 3,
				'post__not_in' => array($postID),
			);

			$loopQuery = new WP_Query($argNews);
			while ($loopQuery->have_posts()) {
				$loopQuery->the_post();
				get_template_part('partials/item', 'postWhiteQhacemos');
			}		?>
	</section>
	<section>
		<?php
			$argNews = array(
				'post_type' => 'parallax',
				'posts_per_page' => 1,
				'post__not_in' => array($postID),
			);

			$loopQuery = new WP_Query($argNews);
			while ($loopQuery->have_posts()) {
				$loopQuery->the_post();
				get_template_part('partials/item', 'postWhiteParallax');
			}
		?>
	</section>
	<section class="img-enfoque">
		<?php
			$argNews = array(
				'post_type' => 'enfoque',
				'posts_per_page' => 1,
				'post__not_in' => array($postID),
			);

			$loopQuery = new WP_Query($argNews);
			while ($loopQuery->have_posts()) {
				$loopQuery->the_post();
				get_template_part('partials/item', 'postWhiteEnfoque');
			}
		?>
	</section>

	<section class="nov-section">
		<p class="client-text nov-text">
			NOVEDADES
		</p>
		<div class="article-container">
			<?php

				$argNews = array(
					'post_type' => 'novedades',
					'posts_per_page' => 8,
					'post__not_in' => array($postID),
				);

				$loopQuery = new WP_Query($argNews);
				while ($loopQuery->have_posts()) {
					$loopQuery->the_post();
					get_template_part('partials/item', 'postWhiteNovedades');
				}
				?>
		</div>
	</section>

	<p class="enfoque-text">CLIENTES</p>
	<div class="contenedores client">
			<div class="multiple-items">
				<?php

					$argNews = array(
						'post_type' => 'clientes',
						'posts_per_page' => 30,
						'post__not_in' => array($postID),
					);

					$loopQuery = new WP_Query($argNews);
					while ($loopQuery->have_posts()) {
						$loopQuery->the_post();
						get_template_part('partials/item', 'postWhiteClientes');
					}
				?>
			</div>
	</div>

	<section class="section-contact">
			<p class="contac-text">CONTACTO</p>
			<div class="contac-container">
				<?php

					$argNews = array(
						'post_type' => 'contacto',
						'posts_per_page' => 3,
						'post__not_in' => array($postID),
					);

					$loopQuery = new WP_Query($argNews);
					while ($loopQuery->have_posts()) {
						$loopQuery->the_post();
						get_template_part('partials/item', 'postWhiteContacto');
					}
					?>
			</div>
	</section>
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.1287075195382!2d-76.99921768501021!3d-12.103340246251303!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c7c31dd226b5%3A0xfde4b0384e7079f6!2sJr.+Isaac+Albeniz+491%2C+San+Borja+15037!5e0!3m2!1ses!2spe!4v1509745503886" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>

<?php endif; ?>
<!-- Archivo de barra lateral por defecto -->
<?php get_sidebar(); ?>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
