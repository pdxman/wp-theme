<?php get_header(); ?>



<div id="content">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

			<h1><?php the_title() ;?></h1>	
			<?php the_content(); ?>

			<?php endwhile; else: ?>

		<p>Sorry, this page does not exist</p>

	<?php endif; ?>

<!-- close content-->
</div>









<?php get_footer(); ?>