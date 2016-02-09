<?php
/**
 * @file
 * Default theme implementation to display a node.
 *
 * Available variables:
 * - $title: the (sanitized) title of the node.
 * - $content: An array of node items. Use render($content) to print them all,
 *   or print a subset such as render($content['field_example']). Use
 *   hide($content['field_example']) to temporarily suppress the printing of a
 *   given element.
 * - $user_picture: The node author's picture from user-picture.tpl.php.
 * - $date: Formatted creation date. Preprocess functions can reformat it by
 *   calling format_date() with the desired parameters on the $created variable.
 * - $name: Themed username of node author output from theme_username().
 * - $node_url: Direct URL of the current node.
 * - $display_submitted: Whether submission information should be displayed.
 * - $submitted: Submission information created from $name and $date during
 *   template_preprocess_node().
 * - $classes: String of classes that can be used to style contextually through
 *   CSS. It can be manipulated through the variable $classes_array from
 *   preprocess functions. The default values can be one or more of the
 *   following:
 *   - node: The current template type; for example, "theming hook".
 *   - node-[type]: The current node type. For example, if the node is a
 *     "Blog entry" it would result in "node-blog". Note that the machine
 *     name will often be in a short form of the human readable label.
 *   - node-teaser: Nodes in teaser form.
 *   - node-preview: Nodes in preview mode.
 *   The following are controlled through the node publishing options.
 *   - node-promoted: Nodes promoted to the front page.
 *   - node-sticky: Nodes ordered above other non-sticky nodes in teaser
 *     listings.
 *   - node-unpublished: Unpublished nodes visible only to administrators.
 * - $title_prefix (array): An array containing additional output populated by
 *   modules, intended to be displayed in front of the main title tag that
 *   appears in the template.
 * - $title_suffix (array): An array containing additional output populated by
 *   modules, intended to be displayed after the main title tag that appears in
 *   the template.
 *
 * Other variables:
 * - $node: Full node object. Contains data that may not be safe.
 * - $type: Node type; for example, story, page, blog, etc.
 * - $comment_count: Number of comments attached to the node.
 * - $uid: User ID of the node author.
 * - $created: Time the node was published formatted in Unix timestamp.
 * - $classes_array: Array of html class attribute values. It is flattened
 *   into a string within the variable $classes.
 * - $zebra: Outputs either "even" or "odd". Useful for zebra striping in
 *   teaser listings.
 * - $id: Position of the node. Increments each time it's output.
 *
 * Node status variables:
 * - $view_mode: View mode; for example, "full", "teaser".
 * - $teaser: Flag for the teaser state (shortcut for $view_mode == 'teaser').
 * - $page: Flag for the full page state.
 * - $promote: Flag for front page promotion state.
 * - $sticky: Flags for sticky post setting.
 * - $status: Flag for published status.
 * - $comment: State of comment settings for the node.
 * - $readmore: Flags true if the teaser content of the node cannot hold the
 *   main body content.
 * - $is_front: Flags true when presented in the front page.
 * - $logged_in: Flags true when the current user is a logged-in member.
 * - $is_admin: Flags true when the current user is an administrator.
 *
 * Field variables: for each field instance attached to the node a corresponding
 * variable is defined; for example, $node->body becomes $body. When needing to
 * access a field's raw values, developers/themers are strongly encouraged to
 * use these variables. Otherwise they will have to explicitly specify the
 * desired field language; for example, $node->body['en'], thus overriding any
 * language negotiation rule that was previously applied.
 *
 * @see template_preprocess()
 * @see template_preprocess_node()
 * @see template_process()
 *
 * @ingroup themeable
 */
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $user_picture; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      ?>
      <div class="masthead-image-container">
          <?php print(render($content['field_display_photo'])); ?>

          <?php if ($content['field_project_subtitle']): ?>
              <?php print(render($content['field_project_subtitle'])); ?>
          <?php endif; ?>
      </div>
      <h2><?php print($title); ?></h2>
      <div id="tabs">
        <?php if ($view_mode == 'full'): ?>
        <ul>
          <?php if ($active_groups['group_summary']): ?><li><a href="#tab-project-summary">Project Overview</a></li><?php endif;?>
          <?php if ($active_groups['group_project_details']): ?><li><a href="#tab-project-details">Project Details</a></li><?php endif;?>
          <?php if ($active_groups['group_news']): ?><li><a href="#tab-news">News & Updates</a></li><?php endif;?>
          <?php if ($active_groups['group_country_initiatives']): ?><li><a href="#tab-country-initiatives">Country Initiatives</a></li><?php endif;?>
          <?php if ($active_groups['group_key_results']): ?><li><a href="#tab-key-results">Key Results and Outputs</a></li><?php endif;?>
          <?php if ($active_groups['group_meetings']): ?><li><a href="#tab-meetings">Programme Meetings and Workshops</a></li><?php endif;?>      
          <?php if ($active_groups['group_reports']): ?><li><a href="#tab-reports">Reports & Publications</a></li><?php endif;?>
          <?php if ($active_groups['group_multimedia']): ?><li><a href="#tab-multimedia">Videos & Multimedia</a></li><?php endif;?>
          <?php if ($active_groups['group_monitoring']): ?><li><a href="#tab-monitoring">Monitoring & Evaluation</a></li><?php endif;?>
          <?php if ($active_groups['group_links']): ?><li><a href="#tab-links">Links</a></li><?php endif;?>
          <?php if ($active_groups['group_contacts']): ?><li><a href="#tab-contacts">Contacts</a></li><?php endif;?>
        </ul>
        <?php endif; ?>
          <?php if($active_groups['group_summary']):?>
              <div id="tab-project-summary" class="container">
                  <h3>Project Overview</h3>
                  <div class="row">
                        <div class="col-md-8">
                            <?php print(render($content['group_summary'])); ?>
                        </div>
                          <div class="col-md-4">
                              <?php print views_embed_view('partners_block','block', $node->nid); ?>
                          </div>
                  </div>
              </div>
          <?php endif; ?>
          <?php if($active_groups['group_project_details']):?>
              <div id="tab-project-details">
                  <h3>Project Details</h3>
                  <?php print(render($content['group_project_details'])); ?>
              </div>
          <?php endif; ?>
          <?php if($active_groups['group_news']):?>
              <div id="tab-project-details">
                  <h3>News</h3>
                  <?php print(render($content['group_news'])); ?>
              </div>
          <?php endif; ?>
          <?php if($active_groups['group_country_initiatives']):?>
              <div id="tab-project-details">
                  <h3>Country Initiatives</h3>
                  <?php print(render($content['group_country_initiatives'])); ?>
              </div>
          <?php endif; ?>
          <?php if($active_groups['group_key_results']):?>
              <div id="tab-key-results">
                  <h3>Key Results and Outputs</h3>
                  <?php print(render($content['group_key_results'])); ?>
              </div>
          <?php endif; ?>
          <?php if($active_groups['group_meetings']):?>
              <div id="tab-meetings">
                  <h3>Programme Meetings and Workshops</h3>
                  <?php print(render($content['group_meetings'])); ?>
              </div>
          <?php endif; ?>
          <?php if($active_groups['group_reports']):?>
              <div id="tab-reports">
                  <h3>Reports and Publications</h3>
                  <?php print(render($content['group_reports'])); ?>
              </div>
          <?php endif; ?>
          <?php if($active_groups['group_multimedia']):?>
              <div id="tab-multimedia">
                  <h3>Multimedia</h3>
                  <?php print(render($content['group_multimedia'])); ?>
              </div>
          <?php endif; ?>
          <?php if($active_groups['group_monitoring']):?>
              <div id="tab-monitoring">
                  <h3>Monitoring and Evaluation</h3>
                  <?php print(render($content['group_monitoring'])); ?>
              </div>
          <?php endif; ?>
          <?php if($active_groups['group_links']):?>
              <div id="tab-links">
                  <h3>Links</h3>
                  <?php print(render($content['group_links'])); ?>
              </div>
          <?php endif; ?>
          <?php if($active_groups['group_contacts']):?>
              <div id="tab-contacts">
                  <h3>Contacts</h3>
                  <?php print(render($content['group_contacts'])); ?>
              </div>
          <?php endif; ?>
      </div>
  </div>

  <?php print render($content['links']); ?>

  <?php print render($content['comments']); ?>

</div>
