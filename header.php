<?php
include('misc-functions.inc.php');
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head profile="http://gmpg.org/xfn/11">
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

  <title><?php wp_title(' '); ?> <?php if(wp_title(' ', false)) {echo '-'; } ?> <?php bloginfo('name'); ?></title>

  <meta http-equiv="Content-Language" content="en-us" />
  <meta name="author" content="Cheah Chu Yeow" />
  <meta name="Copyright" content="Copyright (c) 2003-<?php echo date('Y'); ?> Cheah Chu Yeow" />
  <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
  <meta name="description" content="Web development, Rails, Firefox, Mozilla, Open Source, CSS, programming. redemption in a blog brings you the latest and neatest tidbits in web development, Mozilla and anything techie." />
  <meta name="keywords" content="web development, Rails, Firefox, Mozilla, Open Source, CSS, programming" />

  <style type="text/css" media="screen">
    @import url( <?php bloginfo('stylesheet_url'); ?> );
  </style>

  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_settings('siteurl'); ?>/css/color.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="<?php echo get_settings('siteurl'); ?>/css/nicetitle.css" />
  <link rel="stylesheet" type="text/css" media="print" href="<?php echo get_settings('siteurl'); ?>/css/print.css" />

  <link rel="Shortcut Icon" href="<?php echo get_settings('siteurl'); ?>/favicon.ico" type="image/x-icon" />
  <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
  <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
  <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/code_highlighter.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ruby.js"></script>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/javascript.js"></script>

  <?php wp_head(); ?>
</head>

<body>

<?php if($DustinsNakedDay_getNaked) { ?>
<h3>What happened to the design?</h3>
<p>To know more about why styles are disabled on this website visit the
<a href="http://naked.dustindiaz.com" title="Web Standards Naked Day Host Website">
Annual CSS Naked Day</a> website for more information.</p>
<?php } ?>

<div id="container">

<div id="header">
  <h1><a href="<?php bloginfo('url'); ?>" title="Home" accesskey="h" tabindex="1"><?php bloginfo('name'); ?></a></h1>
  <p class="description"><?php bloginfo('description'); ?></p>
</div>

<div id="nav">
  <ul>
    <li><a href="<?php bloginfo('url'); ?>" class="active" title="Home" accesskey="h">Home</a></li>
    <li><a href="<?php bloginfo('url'); ?>/contact/" title="Contact the author" accesskey="c">Contact</a></li>
    <li><a href="<?php bloginfo('url'); ?>/about/" title="Read more about this blog and its author" accesskey="a">About</a></li>
  </ul>
</div>