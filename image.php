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

		<div class="post" id="post-<?php the_ID(); ?>">
			<h2><a href="<?php echo get_permalink($post->post_parent); ?>" rev="attachment"><?php echo get_the_title($post->post_parent); ?></a> &raquo; <?php the_title(); ?></h2>
			<div class="entry">
				<p class="attachment"><a href="<?php echo wp_get_attachment_url($post->ID); ?>"><?php echo wp_get_attachment_image( $post->ID, 'medium' ); ?></a></p>
				<div class="caption"><?php if ( !empty($post->post_excerpt) ) the_excerpt(); // this is the "caption" ?></div>

				<?php the_content('<p class="serif">Read the rest of this entry &raquo;</p>'); ?>

				<div class="navigation">
					<div class="alignleft"><?php previous_image_link() ?></div>
					<div class="alignleft"><?php next_image_link() ?></div>
				</div>
				<br class="clear" />

				<p class="postmetadata alt">
					<small>
          <?php $time = (get_bloginfo('language') == 'de-DE') ? date_i18n(('j. F Y'), get_post_time()) : date_i18n(('jS F Y'), get_post_time()); ?>
						<?php _e('This entry was posted on', 'Radioactivists'); ?> <?php echo $time; ?> <?php _e('at', 'Radioactivists'); ?> <?php the_time(); ?>
						<?php _e('and is filed under', 'Radioactivists'); ?> <?php the_category(', ') ?>.
						<?php the_taxonomies(); ?>
						<?php _e('You can follow any responses to this entry through the <?php post_comments_feed_link("RSS 2.0"); ?> feed.', 'Radioactivists'); ?>

						<?php if ( comments_open() && pings_open() ) {
							// Both Comments and Pings are open ?>
							<?php _e('You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(); ?>" rel="trackback">trackback</a> from your own site.', 'Radioactivists'); ?>

						<?php } elseif ( !comments_open() && pings_open() ) {
							// Only Pings are Open ?>
							<?php _e('Responses are currently closed, but you can <a href="<?php trackback_url(); ?> " rel="trackback">trackback</a> from your own site.', 'Radioactivists'); ?>

						<?php } elseif ( comments_open() && !pings_open() ) {
							// Comments are open, Pings are not ?>
							<?php _e('You can skip to the end and leave a response. Pinging is currently not allowed.', 'Radioactivists'); ?>

						<?php } elseif ( !comments_open() && !pings_open() ) {
							// Neither Comments, nor Pings are open ?>
							<?php _e('Both comments and pings are currently closed.', 'Radioactivists'); ?>

						<?php } edit_post_link('Edit this entry.','',''); ?>

					</small>
				</p>

			</div>

		</div>

	<?php //comments_template(); ?>

	<?php endwhile; else: ?>

		<p><?php _e('Sorry, no attachments matched your criteria.', 'Radioactivists'); ?></p>

<?php endif; ?>

	</div>
</div>
	
<?php get_footer(); ?>
