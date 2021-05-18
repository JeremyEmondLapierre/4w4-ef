<?php
/**
 * Template part l'affichage des bloc de cours dans front-page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme4w4
 */
global $tPropriété;
?>

<article>
	<?php $typeCours = get_field("type_de_cours"); ?>
	<p><?php echo $typeCours ?>  </p>	
	<p><a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['sigle'] ?></a> </p>
	<p><?php echo $tPropriété['nbHeure'] ?> </p>
	
	
	
</article>