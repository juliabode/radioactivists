<?php
/**
 * @package WordPress
 * @subpackage Radioactivists
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="icon" type="image/png" href="<?php echo get_bloginfo('template_url').'/images/favicon.ico'; ?>" />
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/includes/validation.js"></script>
<link rel="stylesheet" href="stylesheet.css" type="text/css" charset="utf-8" />

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-26249191-1']);
  _gaq.push(['_setDomainName', '.radioactivists.org']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</head>
<body <?php body_class(); ?>>
<div id="page">
	<div id="nav">
      <?php
        wp_nav_menu(array(
          'menu'      => 'main',
          'menu_id'   => 'navigation',
          'container' => false,
        ));
      ?>
	</div>

<div id="header" >
        <p id="authors"><?php _e('A Film by Julia Leser and Clarissa Seidel', 'Radioactivists'); ?></p>
		<h1><a href="<?php echo get_option('home'); ?>/"><img src='<?php echo get_bloginfo('template_url').'/images/radioactivists_logo_white.png'; ?>'alt='logo' /></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
</div>
<hr />