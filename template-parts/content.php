<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Coolmat
 */
global $item_number;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- 1. title on the left -->
		<h1 class="entry-title"> 
		<?php 
		// write php code and mix it in with html 
			the_title(); 
		?> 
		</h1>
		<!-- here we grab our food item number -->
		<div class="entry-number">
			<span><?php echo $item_number; ?></span>
		</div>
		<!-- 2. price on the right -->
		<div class="entry-price">
		<?php the_content();?>
		</div>

	</header><!-- .entry-header -->

	<?php coolmat_post_thumbnail(); ?>

	

	<footer class="entry-footer">
	
</article><!-- #post-<?php the_ID(); ?> -->
