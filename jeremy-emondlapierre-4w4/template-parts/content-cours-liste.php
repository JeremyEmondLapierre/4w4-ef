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

<?php if(get_field("option")) : ?>
<article class="articleCoursSpecial">
<?php else: ?>
<article class="articleCours">
<?php endif; ?>
	<?php $typeCours = get_field("type_de_cours"); ?>
	<p><?php echo $typeCours ?>  </p>	
	<p><a href="<?php echo get_permalink() ?>"><?php echo $tPropriété['sigle'] ?></a> </p>
	<p><?php echo $tPropriété['nbHeure'] ?> </p>
</article>