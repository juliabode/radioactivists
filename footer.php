<?php
/**
 * @package WordPress
 * @subpackage Radioactivists
 */
?>

</div>
</div>

<div id="footer" role="contentinfo">
  <div id="footer-wrapper">
    <div id="footer-inner">
      <div class="footerlinks">
        <ul>
          <li><a href="<?php echo get_page_link(322); ?>"><?php _e('Legal Notice', 'Radioactivist'); ?></a></li>
          <li><a href="<?php echo get_page_link(75); ?>"><?php _e('Contact Us', 'Radioactivist'); ?></a></li>
          <li><?php _e('Webdesign by', 'Radioactivist'); ?> <a href="http://lulisaur.us"  target='_blank'>Lulisaurus</a></li>
        </ul>
      </div>
      <div class="socialfooter">
        <ul>
          <?php
            if (get_option('radioactivists_rss')){ ?><li class="rss-link"><a href="<?php echo get_option('radioactivists_rss'); ?>" target='_blank'></a></li><?php }
            if (get_option('radioactivists_vimeo')){ ?><li class="vimeo-link"><a href="<?php echo get_option('radioactivists_vimeo'); ?>" target='_blank'></a></li><?php }
            if (get_option('radioactivists_twitter')){ ?><li class="twitter-link"><a href="<?php echo get_option('radioactivists_twitter'); ?>" target='_blank'></a></li><?php }
            if (get_option('radioactivists_facebook')){ ?><li class="facebook-link"><a href="<?php echo get_option('radioactivists_facebook'); ?>" target='_blank'></a></li><?php }
            ?>
        </ul>
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>
</div>

</body>
</html>