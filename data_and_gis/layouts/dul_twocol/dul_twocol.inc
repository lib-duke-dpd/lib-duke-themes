<?php

// Plugin definition
$plugin = array(
  'title' => t('Duke Library - Two column layout'),
  'category' => t('Columns: 2'),
  'icon' => 'dul_twocol.png',
  'theme' => 'dul_twocol',
  'css' => 'dul_twocol.css',
  'regions' => array(
    'left' => t('Left side'),
    'right' => t('Right side')
  ),
);
