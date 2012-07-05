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
            <?php update_option('posts_per_page', 5);?>
            <?php $postcount = "0"; // reset post counter ?>
            <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>
            <?php $postcount++; // post counter ?>

            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">

                <div class="posttitle">
                    <h2 class="pagetitle"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <?php $time = (get_bloginfo('language') == 'de-DE') ? date_i18n(('j. F Y'), get_post_time()) : date_i18n(('jS F Y'), get_post_time()); ?>
        <small><?php printf(__('Posted: %s', 'Radioactivists'), $time); ?> <?php _e('by', 'Radioactivists'); ?> <strong><?php the_author() ?></strong> <?php _e('in', 'Radioactivists'); ?> <?php the_category(', ') ?><br />
	                    <?php the_tags( 'Tags: ', ', ', ''); ?></small>
				</div>

                <div class="entry">
                    <?php the_content('Read the rest of this entry &raquo;'); ?>
                </div>

                <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
            </div>
            <?php endwhile; ?>

            <?php
            // Find page with last post
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $postsppage= get_option('posts_per_page');
            $total = $paged * $postsppage;
            $remainder = $total - $wp_query->found_posts;
            $endvar =  $postsppage - $remainder;
            ?>

        </div>

        <div id="nav-post">
            <div class="navigation-bott">
                <?php if($endvar == 0 || $postcount == $endvar) { } else { ?>
                <div class="leftnav"><?php next_posts_link('&lsaquo; Older Entries') ?></div>
                <?php } if ($paged > 1) { ?>
                <div class="rightnav"><?php previous_posts_link('Newer Entries &rsaquo;') ?></div>
                <?php } ?>
            </div>
        </div>

    </div>
</div>

<?php endif; ?>
<?php get_footer(); ?>
