<?php if ( ((is_home()) && ($paged <= "1"))) { ?>

<div id="slides">
		<ul class="slides-container">
			<?php query_posts('category_name=Destacados&posts_per_page=5' ); if (have_posts()) : while ( have_posts()) : the_post(); ?>
			<li>
				<?php if(has_post_thumbnail()) { the_post_thumbnail('single-thumbs'); } ?>
				<div class="description">
					<h2 class="description_title"><?php the_title(); ?></h2>
					<p class="description_text">
						<?php the_excerpt(); ?>
					</p>
					<a href="<?php the_permalink(); ?>" class="btn btn-default">Leer más</a>
				</div>
			</li>
			<?php endwhile; else: ?>
		<h1>No se encontraron articulos</h1>
		<?php endif; ?>
		</ul>
		<nav class="slides-navigation">
			<a href="" class="next">&#62;</a>
			<a href="" class="prev">&#60;</a>
		</nav>
	</div>

<?php } ?>