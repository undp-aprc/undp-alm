<?php
// We hide the comments and links now so that we can render them later.
hide($content['comments']);
hide($content['links']);
?>
<div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?>"<?php print $attributes; ?>>
    <div class="content-wrapper">
        <?php print render($content); ?>
    </div>
</div>