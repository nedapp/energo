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
			<b>ADRESA</b>
			<br/>
			<br/>
			Bulevar Mihajla Pupina 115 V/6
			<br/>
			11070 Beograd
			<br/>
			Republika Srbija
			<br/>
			+381.11.301.5000
			<br/>
		</div>
	<?php } ?>
	
	<?php if(is_page('project') || is_page('kako-je-sve-pocelo-zakonska-regulativa') || is_page('kako-je-sve-pocelo-glavni-koraci') || is_page('opis-projekta-lokacija')  || is_page('opis-projekta-analiza-potencijala-vetra') ) { ?>
		<div class="en-project-logo">

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
				<div class="content up"><a href="http://www.sewea.rs/" target="_blank"> NIS Energowind <br/> je članica SEWEA organizacije</a></div>
				<div class="delimiter"></div>
				<div class="title down"><a class="sewealink" target="_blank" href="http://www.sewea.rs/">SEWEA</a></div>
			</div>
			<div class="en-home-content-part">
				<div class="title"><a href="<?php echo home_url( '/project' ); ?>">PROJEKAT</a></div>
				<div class="delimiter"></div>
				<div class="content down">"U okviru energetskog objekta vetroelektrane “Plandište 1“ biće izgrađeno 34 vetrogeneratora najnovije tehnologije. Ukupna instalisana snaga objekta je 102 MW".
					<a href="/project">
						<img  style="height: 15px;" src="<?php echo get_template_directory_uri(); ?>/images/design-images/arrow-right.png"/>
					</a>
					<!--<img src="<?php /*echo get_template_directory_uri(); */?>/images/design-images/energo_logo.png"/>-->
				</div>
			</div>
			<div class="en-home-content-part">
				<div class="title"><a href="<?php echo home_url( '/aktuelnosti' ); ?>">AKTUELNOSTI</a></div>
				<div class="delimiter"></div>
				<div class="content down"><strong>NIS počeo izgradnju prvog vetroparka u Srbiji – „Plandište“</strong></br>
				Na teritoriji opštine Plandište (severoistok Srbije) NIS Energowind danas je počeo izgradnju prvog vetroparka u Srbiji – „Plandište1″.
				<a href="/wp-content/uploads/2014/02/Pocetak-izgradnje-objekta-Vetroelektrana-Plandiste-1.pdf" target="_blank">
					<img style="height: 15px;" src="<?php echo get_template_directory_uri(); ?>/images/design-images/arrow-right.png"/>
				</a>
				</br></br>
			</div>
				
			</div>
		</div>
	<?php } ?>
	</div>
<?php
get_footer();