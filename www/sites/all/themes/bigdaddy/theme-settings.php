<?php
/**
* THEME SETTINGS.
*
*/
function bigdaddy_form_system_theme_settings_alter(&$form, $form_state) {
  $form['bigdaddy_wireframes'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Activate Wireframes'),
    '#default_value' => theme_get_setting('bigdaddy_wireframes'),
    '#description'   => t('<strong>Wireframes</strong> are very useful when you are specifying the global dimensions and floats of your regions.'),
  );
  $form['bigdaddy_css_prototyping'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Activate Prototyping tool'),
    '#default_value' => theme_get_setting('bigdaddy_css_prototyping'),
    '#description'   => t('Edit your content directly in the browser. <strong>Works only in WebKit-based browsers like Chrome or Safari</strong>. <a href="http://www.css-101.org/articles/trick-for-rapid-prototyping/demo.html">Check the demo</a>.'),
  );
  $form['bigdaddy_grid_system'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Activate Grid system'),
    '#default_value' => theme_get_setting('bigdaddy_grid_system'),
    '#description'   => t('To change the theme default grid system, generate your .png file in <a href="http://gridulator.com/">http://gridulator.com/</a>.<br />Then, put your file in the <strong>/images</strong> folder and modify the <strong>line 86</strong> in the <strong>theme-settings.css</strong> file.'),
  );
  $form['bigdaddy_html5_placeholder'] = array(
    '#type'          => 'checkbox',
    '#title'         => t('Activate placeholder attribute for all webforms'),
    '#default_value' => theme_get_setting('bigdaddy_html5_placeholder'),
    '#description'   => t('Alter all the webforms and put the label value into the HTML5 <strong>placeholder</strong> attribute.<br />For custom changes, please check the <strong>template.php</strong> file <strong>line 150</strong>.'),
  );
}
