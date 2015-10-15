<?php
/**
 * @file
 * content_types.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function content_types_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'undp_home';
  $context->description = '';
  $context->tag = 'Path';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        '<front>' => '<front>',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-c97538715ae49602b220eacf2d11c084' => array(
          'module' => 'views',
          'delta' => 'c97538715ae49602b220eacf2d11c084',
          'region' => 'above_content',
          'weight' => '-10',
        ),
        'undp_map-undp_main_map' => array(
          'module' => 'undp_map',
          'delta' => 'undp_main_map',
          'region' => 'content',
          'weight' => '-10',
        ),
        'views-map_legend-block' => array(
          'module' => 'views',
          'delta' => 'map_legend-block',
          'region' => 'content',
          'weight' => '-10',
        ),
        'views-featured_documents-block' => array(
          'module' => 'views',
          'delta' => 'featured_documents-block',
          'region' => 'below_content',
          'weight' => '-10',
        ),
        'views-featured_videos-block' => array(
          'module' => 'views',
          'delta' => 'featured_videos-block',
          'region' => 'below_content',
          'weight' => '-9',
        ),
      ),
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Path');
  $export['undp_home'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'undp_project';
  $context->description = 'Context for the UNDP project pages';
  $context->tag = 'Content Type';
  $context->conditions = array(
    'node' => array(
      'values' => array(
        'project' => 'project',
      ),
      'options' => array(
        'node_form' => '0',
      ),
    ),
  );
  $context->reactions = array(
    'block' => array(
      'blocks' => array(
        'views-country_and_flag_block-block' => array(
          'module' => 'views',
          'delta' => 'country_and_flag_block-block',
          'region' => 'sidebar_second',
          'weight' => '-10',
        ),
        'undp_map-undp_project_map' => array(
          'module' => 'undp_map',
          'delta' => 'undp_project_map',
          'region' => 'sidebar_second',
          'weight' => '-9',
        ),
        'views-0b6a47121ffb288176f7c5d6aed66513' => array(
          'module' => 'views',
          'delta' => '0b6a47121ffb288176f7c5d6aed66513',
          'region' => 'sidebar_second',
          'weight' => '-8',
        ),
        'views-partners_block-block' => array(
          'module' => 'views',
          'delta' => 'partners_block-block',
          'region' => 'sidebar_second',
          'weight' => '-7',
        ),
      ),
    ),
  );
  $context->condition_mode = 1;

  // Translatables
  // Included for use with string extractors like potx.
  t('Content Type');
  t('Context for the UNDP project pages');
  $export['undp_project'] = $context;

  return $export;
}
