<?php
/**
 * @file
 * content_types.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function content_types_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
  if ($module == "field_group" && $api == "field_group") {
    return array("version" => "1");
  }
}

/**
 * Implements hook_node_info().
 */
function content_types_node_info() {
  $items = array(
    'page' => array(
      'name' => t('Basic page'),
      'base' => 'node_content',
      'description' => t('Use <em>basic pages</em> for your static content, such as an \'About us\' page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'partner' => array(
      'name' => t('Partner'),
      'base' => 'node_content',
      'description' => t('Create a record of a project partner or affiliate in the database. This partner record can be linked to other content to create relationships between resources and their partner organisations.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'project' => array(
      'name' => t('Project'),
      'base' => 'node_content',
      'description' => t('Creates a detailed project record with information such as project overviews, financing records, location, partners and other relevant information.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'resource' => array(
      'name' => t('Resource'),
      'base' => 'node_content',
      'description' => t('Share a resource. Resources are printed or electronic materials that can be used to communicate information about UNDP\'s Climate Change projects or provide education or learning materials.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'rotating_feature' => array(
      'name' => t('Rotating Feature'),
      'base' => 'node_content',
      'description' => t('DEPRECATED!! DO NOT USE. THIS HAS NO FUNCTION IN THE NEW SITE AND WILL BE REMOVED IN THE NEAR FUTURE.
To update what UNDP has been doing, please use the \'News\' content type.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'video' => array(
      'name' => t('Video'),
      'base' => 'node_content',
      'description' => t('Share videos about UNDP\'s projects and partner engagement. These videos must have been published to YouTube before creating video content and require a valid YouTube video ID (can be obtained from YouTube)'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'webform' => array(
      'name' => t('Webform'),
      'base' => 'node_content',
      'description' => t('DEPRECATED!! DO NOT USE. THIS HAS NO FUNCTION IN THE NEW SITE AND WILL BE REMOVED IN THE NEAR FUTURE.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
