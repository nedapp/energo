<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other 'pages' on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>




	<div class="en-page">

		<?php if(is_page('kontakt')) { ?>
		<div class="en-contact-details">
			<b>OFFICE</b>
			<br/>
			<br/>
			Bulevar Mihajla Pupina 115 V/6
			<br/>
			11070 Beograd
			<br/>
			Republika Srbija
			<br/>
		</div>
	<?php } ?>


		<div class="en-content">
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();

					// Include the page content template.
					get_template_part( 'content', 'page' );

					
				endwhile;
			?>
		</div>


	<?php if (is_front_page()) {?>
		<div class="en-home-content">
			<div class="en-home-content-part">
				<div class="content up">NIS Energowind <br/> je članica SEWEA organizacije</div>
				<div class="delimiter"></div>
				<div class="title down"><a class="sewealink" target="_blank" href="http://www.sewea.rs/">SEWEA</a></div>
			</div>
			<div class="en-home-content-part">
				<div class="title"><a href="<?php echo home_url( '/project' ); ?>">PROJEKAT</a></div>
				<div class="delimiter"></div>
				<div class="content down">Kompanija NIS Energowind doo osnovana je 2005. godine kao privatno drustvo sa ogranicenom odgovornoscu, sa namerom razvoja i eksploatacije energije vetra za potrebe proizvodnje
					elektricne energije u Srbiji. 50% vlasnistva kompanije je posredno u rukama kompanije NIS, a preostalih 50% je u vlasnistvu privatnih investitora.
					<img src="<?php echo get_template_directory_uri(); ?>/images/design-images/energo_logo.png"/>
				</div>
			</div>
			<div class="en-home-content-part">
				<div class="title"><a href="<?php echo home_url( '/aktuelnosti' ); ?>">AKTUELNOSTI</a></div>
				<div class="delimiter"></div>
				<div class="content down">NIS Energowind osnovana je 2005. godine kao privatno drustvo sa ogranicenom odgovornoscu, sa namerom razvoja energije vetra.</div>
			</div>
		</div>
	<?php } ?>
	</div>
<?php
get_footer();
