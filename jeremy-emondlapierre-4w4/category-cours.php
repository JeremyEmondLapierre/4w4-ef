<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */

get_header();
?>
	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->
			<section class="listeCours"> 
			<?php
			$precedent = "XXXXXX";
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();
				convertirTableau($tPropriété);

				if ($tPropriété['session'] != $precedent): ?>
				<h2><?php echo $tPropriété['session'] ?></h2>
				<section class="listeCours">
				<?php $precedent = $tPropriété['session'] ?>
					<?php if ("XXXXXX" != $precedent)	: ?>
						</section>
						
					<?php endif; ?>	
					
					
				<?php endif ?>

				<?php get_template_part( 'template-parts/content', 'cours-liste' );
				

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</section>
	</main><!-- #main -->

<?php

get_footer();

function convertirTableau(&$tPropriété)
{
	$tPropriété['titre'] = get_the_title(); 
	$tPropriété['sigle'] = substr($tPropriété['titre'], 0, 7);
	$tPropriété['nbHeure'] = substr($tPropriété['titre'],-4,3);
	$tPropriété['titrePartiel'] = substr($tPropriété['titre'],8,-6);
	$tPropriété['session'] = substr($tPropriété['titre'], 4,1);
}