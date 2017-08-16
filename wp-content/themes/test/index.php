<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo("charset"); ?>">
		<title><?php bloginfo("name"); ?></title>
		<link rel="stylesheet" href="<?php bloginfo("stylesheet_url"); ?>">
		<!-- For future plugins -->
		<?php wp_head(); ?>		
	</head>

	<body>
		<header>
			<h1><?php bloginfo("name"); ?></h1>
			<span><?php bloginfo("description"); ?></span>
		</header>

		<!-- MAIN LOOP -->
		<div class="main">
			<!-- fetch all blog posts -->
			<?php if(have_posts()) : ?>
				<?php while(have_posts()): the_post(); ?>
					<h3><?php the_title(); ?></h3>
					<div class="meta">
						Created By <?php the_author(); ?> on <?php the_time("F j, Y g:i a");; ?>
					</div>
					<?php the_content(); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php echo wpautop("Sorry, No Posts Were Found."); ?> <!-- line breaks => paragraphs -->
			<?php endif; ?>
		</div>

		<footer>
			<p>&copy; <?php the_date("Y") ?> - <?php bloginfo("name"); ?>
			</p>
		</footer>

		<?php wp_footer(); ?>
	</body>

</html>