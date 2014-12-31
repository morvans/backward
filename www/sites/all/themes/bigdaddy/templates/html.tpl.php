<!DOCTYPE html>
<html lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>">
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>  
  <?php
  // ADD THIS META ONLY IF YOUR SITE IS MOBILE FRIENDLY (like iPhone or iPad)
  // <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0" />
  ?> 
  <meta http-equiv="X-UA-Compatible" content="IE=Edge;chrome=1" />
  
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>

  <div id="skip-link">
    <a href="#middle-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
  
  <?php print $scripts; ?>
  
</body>
</html>