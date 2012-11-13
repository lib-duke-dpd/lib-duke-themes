<?php

/**
 * implementation of hook_panels_layouts
 */
// Plugin definition
$plugin = array(
  'title' => t('Simile Widget - Three Column'),
  'category' => t('Columns: 3'),
  'icon' => 'dul_simile_exhibit.png',
  'theme' => 'panels_dul_simile_exhibit',
  'theme arguments' => array('id', 'content'),
  'css' => 'dul_simile_exhibit.css',
  'regions' => array(
    'left' => t('Left side'),
    'middle' => t('Middle column'),
    'right' => t('Right side')
  ),
);

