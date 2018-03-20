<?php

/*
 * Implements THEMENAME_alpha_preprocess_node
 */
function people_landing_subtheme_alpha_preprocess_node(&$vars) {
  $nid = $vars['nid'];
  $node = node_load($nid);
  if ($field_items = field_get_items('node', $node, 'field_people_cv')) {
    $file = file_load($field_items[0]['fid']);

    $uri = $file->uri;
    $vars['cv_url'] = file_create_url($uri);
  }
}
