<?php

/**
 * Implements template_preprocess_html().
 */
function julia5_preprocess_html(&$variables) {
}

/**
 * Implements template_preprocess_page.
 */
function julia5_preprocess_page(&$variables) {

}

/**
 * Implements template_preprocess_node.
 */
function julia5_preprocess_node(&$variables) {
}

function julia5_links__topbar_main_menu($variables) {
  // We need to fetch the links ourselves because we need the entire tree.
  $links = menu_tree_output(menu_tree_all_data(variable_get('menu_main_links_source', 'main-menu')));
  $output = _zurb_foundation_links($links);
  $variables['attributes']['class'][] = 'right';

  return '<ul' . drupal_attributes($variables['attributes']) . '>' . $output . '</ul>';
}
