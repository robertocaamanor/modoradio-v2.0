<?php get_header(); ?>

<section class="main">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<?php if (have_posts()) : while ( have_posts()) : the_post(); ?>
					<article class="articulos_single">
						<div class="titulos_single">
							<div class="thumb">
							<?php if(has_post_thumbnail()) { the_post_thumbnail('single-thumbs', array(
							    'alt' => 'Responsive image',
							    'class' => 'img-responsive'
							)); } ?>
							</div>
							<h1><?php the_title(); ?></h1>
							<div class="autor_fecha">Por <?php the_author_posts_link(); ?> | <?php the_date(); ?></div>
							<div class="nota"><?php the_content(); ?></div>
						</div>
					</article>
				<?php endwhile; else: ?>
				<h1>No se encontraron articulos</h1>
				<?php endif; ?>
				<section class="comentarios">
					<h1>Comentarios</h1>
				</section>
				</div>
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>