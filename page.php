<?php
/**
 * @package WordPress
 * @subpackage Radioactivists
 */

get_header(); ?>

<div id="container">
<?php get_sidebar(); ?>
	<div id="content-wrapper" role="main">


	<div id="content" class="column">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div class="post" id="post-<?php the_ID(); ?>">
			<div class="posttitle">
				<h2 class="pagetitle"><?php the_title(); ?></h2>
			</div>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>

			
		</div>
		
		<?php endwhile; endif; ?>
	<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
	
	</div>
	
	</div>

<?php get_footer(); ?>
