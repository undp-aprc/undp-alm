<?php

// Plugin definition
$plugin = array(
  'title' => t('Two column stacked (Bootstrap Compatible'),
  'category' => t('Columns: 2'),
  'icon' => 'twocol_stacked_bs.png',
  'theme' => 'panels_twocol_stacked',
  'css' => 'twocol_stacked_bs.css',
  'regions' => array(
    'top' => t('Top'),
    'left' => t('Left side'),
    'right' => t('Right side'),
    'bottom' => t('Bottom')
  ),
);
