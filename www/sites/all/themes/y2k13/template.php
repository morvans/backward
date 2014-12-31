<?php

function y2k13_preprocess_html(&$variables){	
	$variables['head_title'] = 'De 2012... à 2013 !';	
}

function y2k13_preprocess_node(&$variables){
	if( $variables['elements']['#node']->type == 'photo' && $variables['elements']['#view_mode'] == 'full' ){
		$values = field_get_items('node', $variables['elements']['#node'], 'field_photo');
		$file = file_load($values[0]['fid']);
		drupal_add_css('#node-'.$variables['elements']['#node']->nid.'{background: url("'.image_style_url('one_pixel', $file->uri).'") ;} /* */', array('type'=>'inline'));

	}
}

