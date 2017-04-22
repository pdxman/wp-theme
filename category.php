<?php get_header(); ?>



<div id="content">

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h1><a style="color: black;" href="<?php the_permalink(); ?>"><?php the_title() ;?></a></h1>
		<?php the_post_thumbnail(); ?>
		<?php the_excerpt(); ?>	

	<?php endwhile; else: ?>		

		<p>Sorry, no posts to list</p>

	<?php endif; ?>








<?php get_footer(); ?>