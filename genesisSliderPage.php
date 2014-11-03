<?php

/* Template Name: Add Template Name Here */

// This is a page with a slider on top and all post on the page

// genesis_before_content_sidebar_wrap
// genesis_before_content
// genesis_before_entry


remove_action( 'genesis_loop', 'genesis_do_loop' );

add_action( 'genesis_loop', 'contentSlider');
function contentSlider() {
?>

	<!---slider-->
	<section class="row">
		<div class="wrap">
			<div class="flexslider">
				<ul class="slides">
					<?php
					query_posts( array(
						'post_type' => 'test', 
						));
					?>

					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
					<li><?php the_content(); the_title(); ?></li>
					<?php endwhile; endif; ?>
				</ul>
			</div>
		</div>
	</section>
	<!-- end slider -->

	<?php
}

genesis();
