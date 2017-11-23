<?php get_header(); ?>

<section class="main">
		<div class="container">
			<div class="row">
				
				<div class="col-md-9">
								
					<div class="row">
						<h2 class="categoria"><?php printf( __( 'Resultados de: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
						<?php if ( have_posts() ) : ?>
						<?php while ( have_posts() ) : the_post(); ?>
						<div class="col-md-6 same-height">							
							<article class="articulos_lista">								
								<div class="thumb"><a href="<?php the_permalink();?>">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs', array(
							    'alt' => 'Responsive image',
							    'class' => 'img-responsive'
							) ); } ?>
								</a></div>
								<div class="titulos">
									<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								</div>								
							</article>						
						</div>
							<?php endwhile; ?>
		<?php else : ?>
	    <h3><?php printf( __( 'No se encontraron resultados buscando: %s', 'shape' ), '<span>' . get_search_query() . '</span>' ); ?></h3>

	   <?php endif; ?>										
					</div>


				</div>
				
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>