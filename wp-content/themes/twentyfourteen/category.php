<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>


			<div class="en-page">
				<div class="en-content">	

						<header class="en-archive-header">
							<h1 class="en-archive-title"><?php printf( __( '%s', 'twentyfourteen' ), single_cat_title( '', false ) ); ?></h1>

							<?php
								// Show an optional term description.
								$term_description = term_description();
								if ( ! empty( $term_description ) ) :
									printf( '<div class="taxonomy-description">%s</div>', $term_description );
								endif;
							?>
						</header><!-- .archive-header -->



					
					<?php if ( have_posts() ) : ?>

						<?php
							// Start the Loop.
							while ( have_posts() ) : the_post();
								get_template_part( 'content', get_post_format() );

							endwhile;
							// Previous/next page navigation.
							twentyfourteen_paging_nav();

						else:  ?>
							<div class="en-no-posts">
								There are no news.
							</div>
							
						<?php
						endif;
					?>
				</div>
			</div>

		

<?php

get_footer();
