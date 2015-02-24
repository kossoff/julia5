<?php

/**
 * Implements hook_panels_layouts()
 */
function julia5_front_panels_layouts() {
  $items['front'] = array(
    'title' => t('Julia5 Front: 1 column row'),
    'category' => t('Foundation: 1'),
    'icon' => 'front.png',
    'theme' => 'front',
    //'admin css' => '../foundation_panels_admin.css',
    'regions' => array(
                  'wide' => t('Wide'),
                  'middle' => t('Main column'),
                  ),
  );
  return $items;
}

