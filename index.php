<?php get_header(); ?>

<div id="no-slide">
	<?php include(TEMPLATEPATH. './slide.php'); ?>
</div>

<section class="main">
		<div class="container">
			<div class="row">
				
				<div class="col-md-9">
								
					<div class="row">
						<?php query_posts("posts_per_page=10"); ?>
						<?php 
							if ( have_posts() ) : while ( have_posts() ) : the_post()
						 ?>	
						<div class="col-md-6 same-height">							
							<article class="articulos_lista">								
								<div class="thumb"><a href="<?php the_permalink();?>">
									<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'list_articles_thumbs' ); } ?>
								</a></div>
								<div class="titulos">
									<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
								</div>								
							</article>						
						</div>
							<?php 
							endwhile; else:
						 ?>
						 <h1>No se encontraron artículos</h1>
						 <?php 
						 	endif;
						  ?>											
					</div>


				</div>
				
				<div class="col-xs-3">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>