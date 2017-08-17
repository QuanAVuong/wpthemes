<?php get_header(); ?>

<div class="container">
	<!-- MAIN LOOP -->
	<div class="main">
		<!-- fetch all blog posts -->
		<?php if(have_posts()) : ?>
			<?php while(have_posts()): the_post(); ?>
				<article class="post">
					<h3>
							<?php the_title(); ?>

					</h3>

					<?php if(has_post_thumbnail()): ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>	
					<?php endif; ?>
					<?php the_content(); ?>
					<!-- <?php the_excerpt(); ?> -->
					<br>
					
				</article>

			<?php endwhile; ?>
		<?php else : ?>
			<?php echo wpautop("Sorry, No Posts Were Found."); ?> <!-- line breaks => paragraphs -->
		<?php endif; ?>
	</div>

<?php get_footer(); ?>
		