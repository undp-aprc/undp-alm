<div id="taxonomy-term-<?php print $term->tid; ?>" class="<?php print $classes; ?> view-mode-signature-programme-header">
    <div class="term-page-header">
        <h2>Signature Programme <span class="badge">#<?php print($pos); ?></span></h2>
        <?php if ($content['field_program_preview_img']): ?>
            <?php print render($content['field_program_preview_img']); ?>
        <?php endif; ?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h1 class="panel-title"><?php print ($term_name); ?></h1>
            </div>
            <div class="panel-body">
                <?php print(render($content['description'])); ?>
            </div>
        </div>
    </div>
</div>
<h2 class="pane-title">Supported Programmes</h2>