<?php get_header(); ?>

	<!-- MAIN LOOP -->
	<div class="main">
		<div class="container">
			<!-- fetch all blog posts -->
			<?php if(have_posts()) : ?>
				<?php while(have_posts()): the_post(); ?>
					<article class="post">
						<h3>
							<?php the_title(); ?>
						</h3>
						<div class="meta">
							Created By <?php the_author(); ?> on <?php the_time("F j, Y g:i a");; ?>
						</div>
						<?php the_content(); ?>
						<br>

					</article>

				<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop("Sorry, No Posts Were Found."); ?> <!-- line breaks => paragraphs -->
			<?php endif; ?>
		</div>
		
	</div>

<?php get_footer(); ?>
