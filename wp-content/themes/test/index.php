<?php get_header(); ?>

	<!-- MAIN LOOP -->
	<div class="main">
		<div class="container">
			<!-- fetch all blog posts -->
			<?php if(have_posts()) : ?>
				<?php while(have_posts()): the_post(); ?>
					<article class="post">
						<h3>
							<a href="<?php the_permalink(); ?>">
								<?php the_title(); ?>
							</a>
						</h3>
						<div class="meta">
							Created By <?php the_author(); ?> on <?php the_time("F j, Y g:i a");; ?>
						</div>
						<?php the_content(); ?>
						<br>

						<a class="button" href="<?php the_permalink(); ?>">
							Read More
						</a>
					</article>

				<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop("Sorry, No Posts Were Found."); ?> <!-- line breaks => paragraphs -->
			<?php endif; ?>
		</div>
		
	</div>

<?php get_footer(); ?>
		