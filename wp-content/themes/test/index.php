<?php get_header(); ?>

<div class="container">	
	<!-- MAIN LOOP -->
	<div class="main">
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
						Created By 
						<a href="<?php get_author_posts_url(get_the_author_meta("ID")); ?>">
							<?php the_author(); ?>
						</a> 
						on <?php the_time("F j, Y g:i a");; ?>
					</div>
					<?php if(has_post_thumbnail()): ?>
						<div class="post-thumbnail">
							<?php the_post_thumbnail(); ?>
						</div>	
					<?php endif; ?>
					<!-- <?php the_content(); ?> -->
					<?php the_excerpt(); ?>
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

<?php get_footer(); ?>
		