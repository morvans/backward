<?php 
/**
 * Changes the default meta content-type tag to the shorter HTML5 version
 */
function bigdaddy_html_head_alter(&$head_elements) {
  $head_elements['system_meta_content_type']['#attributes'] = array(
    'charset' => 'utf-8'
  );
}

/**
 * Changes the search form to use the HTML5 "search" input attribute
 */
function bigdaddy_preprocess_search_block_form(&$vars) {
  $vars['search_form'] = str_replace('type="text"', 'type="search"', $vars['search_form']);
}

/**
 * Override or insert variables in the html_tag theme function.
 */
function bigdaddy_process_html_tag(&$variables) {
  $tag = &$variables['element'];

  if ($tag['#tag'] == 'style' || $tag['#tag'] == 'script') {
    // Remove redundant type attribute and CDATA comments.
    unset($tag['#attributes']['type'], $tag['#value_prefix'], $tag['#value_suffix']);

    // Remove media="all" but leave others unaffected.
    if (isset($tag['#attributes']['media']) && $tag['#attributes']['media'] === 'all') {
      unset($tag['#attributes']['media']);
    }
  }
}

/**
 * Override or insert variables into the HTML templates.
 *
 * @param $vars
 *  A sequential array of variables to pass to the theme template.
 */
function bigdaddy_preprocess_html(&$vars) {

  /* HTML classes
  ---------------------------------------------------------------------- */
  // To add dynamically your own classes use $vars['classes_array'][] = 'my_class';
  
  // Optionally add the wireframes styles for the "Wireframes" theme setting.
  if (theme_get_setting('bigdaddy_wireframes')) {
    $vars['classes_array'][] = 'wireframes';
  }
  
  // Optionally add the prototype styles for the "Prototyping tool" theme setting.
  if (theme_get_setting('bigdaddy_css_prototyping')) {
    $vars['classes_array'][] = 'prototyping';
  }
  
  // Optionally add the grid-system styles for the "Grid System" theme setting.
  if (theme_get_setting('bigdaddy_grid_system')) {
    $vars['classes_array'][] = 'grid-system';
  }
  
  /* IE conditionnal stylesheets
  ---------------------------------------------------------------------- */
  
  /* --- For lte IE 8 --- */
  drupal_add_css(path_to_theme() . '/styles/master-ie.css', array('group' => CSS_THEME, 'browsers' => array('IE' => 'lte IE 8', '!IE' => FALSE), 'preprocess' => FALSE));
    
}

/**
 * Override or insert variables into the PAGE templates.
 *
 * @param $vars
 *  A sequential array of variables to pass to the theme template.
 */
function bigdaddy_preprocess_page(&$vars) {

  /* PAGE classes
  ---------------------------------------------------------------------- */
  // To add dynamically your own classes use $vars['classes_array'][] = 'my_class';
    
}

/**
 * Override or insert variables into the NODE templates.
 *
 * @param $vars
 *  A sequential array of variables to pass to the theme template.
 */
function bigdaddy_preprocess_node(&$vars) {
  
  /* NODE classes
  ---------------------------------------------------------------------- */
  // To add dynamically your own classes use $vars['classes_array'][] = 'my_class';
  
}

/**
 * Override or insert variables into the BLOCK templates.
 *
 * @param $vars
 *  A sequential array of variables to pass to the theme template.
 */
function bigdaddy_preprocess_block(&$vars) {

  /* BLOCK classes
  ---------------------------------------------------------------------- */
  // To add dynamically your own classes use $vars['classes_array'][] = 'my_class';
  
  
  /* HTML5 tags
  ---------------------------------------------------------------------- */
  // Set Tag for the block wrapper depending on the content (<nav> or <section>)
  if ($vars['block']->module == 'system') {
    $vars['tag'] = 'nav';
  } 
  if ($vars['block']->delta == 'main') {
    $vars['tag'] = 'div';
  }
  else {
    $vars['tag'] = 'div';
  }
  
}

/**
 * Allow themable breadcrumb.
 */
function bigdaddy_breadcrumb($variables) {

  $breadcrumb = $variables['breadcrumb'];
  if (!empty($breadcrumb)) {
    $crumbs = '<ul class="breadcrumb">';
    $array_size = count($breadcrumb);
    $i = 0;
    while ( $i < $array_size) {
      $crumbs .= '<li>' . $breadcrumb[$i] . ' > </li>';
          $i++;
      }
    $crumbs .= '<li class="current-page">'. drupal_get_title() .'</span></ul>';
    return $crumbs;
  }
}

/**
 * Alter all the webforms and change the label to the HTML5 attribute "placeholder".
 */
if (theme_get_setting('bigdaddy_html5_placeholder')) {
  
  function bigdaddy_form_alter(&$form, &$form_state) { 
    
    foreach($form as $key => $value) {
      if ($key == 'submitted') {
        foreach ($value as $key2 => $value2) {
          if ($key2 != '#tree') {
            $form['submitted'][$key2]['#attributes'] = array('placeholder' => array($value2['#title']));
          }
        }
      }
    }

  }
}

/**
 * Alter a form.
 */
function bigdaddy_form_your_form_id_alter(&$form, &$form_state) { 

  //print dpm($form);

}