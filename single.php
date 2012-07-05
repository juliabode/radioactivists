<?php
/**
 * @package WordPress
 * @subpackage Radioactivists
 */

get_header(); ?>

<div id="container">
<?php get_sidebar(); ?>

	<div id="content" role="main">


	<div class="column">

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
				<div class="posttitle">
					<h2 class="pagetitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <?php $time = (get_bloginfo('language') == 'de-DE') ? date_i18n(('j. F Y'), get_post_time()) : date_i18n(('jS F Y'), get_post_time()); ?>
        <small><?php printf(__('Posted: %s', 'Radioactivists'), $time); ?> <?php _e('by', 'Radioactivists'); ?> <strong><?php the_author() ?></strong> <?php _e('in', 'Radioactivists'); ?> <?php the_category(', ') ?><br />
				<?php the_tags( 'Tags: ', ', ', ''); ?></small>
				</div>

			<div class="entry">
				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>

			</div>

	<?php comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no posts matched your criteria.', 'Radioactivists'); ?></p>

<?php endif; ?>
	</div>
	</div>

		<div id="nav-post">
		<div class="navigation-bott">
			<?php next_post_link('%link', '<span class="leftnav">' . _e('newer posts', 'Radioactivists') . '</span>'); ?>
			<?php previous_post_link('%link', '<span class="rightnav">' . _e('older posts', 'Radioactivists') . '</span>'); ?>
		</div>

		</div>
	</div>
<?php get_footer(); ?>
