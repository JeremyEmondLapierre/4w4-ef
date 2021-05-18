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
<?php $typeCours = get_field("type_de_cours"); ?>
<?php if(get_field("option")) : ?>
	<article class="articleCoursSpecial <?php echo $typeCours ?>">
<?php else: ?>
	<article class="articleCours <?php echo $typeCours ?>">
<?php endif; ?>
	<h3 id="nomCours <?php echo $typeCours ?>"><?php echo $typeCours ?>  </h3>	
	<p><a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['sigle'] ?></a> </p>
	<p><?php echo $tPropriété['nbHeure'] ?> </p>
</article>