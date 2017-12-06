<?php get_header(); ?>
	<section class="single-galeria">
		<div class="container">
			<?php while ( have_posts() ) : the_post(); ?>
					<div class="form__top">
						<h2><span>Estoy Interesado</span></h2>
					</div>		
					<form class="form__reg" action="">
						<input class="input" type="text" placeholder="&#128100;  Nombre" required autofocus>
			            <input class="input" type="email" placeholder="&#9993;  Email" required>
			            <input class="input" type="text" placeholder="&#128222;  Telefono" required>
			            <input class="input" type="text" placeholder="&#8962;  Dirección" required>
			            <div class="btn__form">
			            	<input class="btn__submit" type="submit" value="REGISTRAR">
			            	<input class="btn__reset" type="reset" value="LIMPIAR">	
			            </div>
					</form>
			<?php endwhile; ?>
		</div>
	</section>
<?php get_footer(); ?>