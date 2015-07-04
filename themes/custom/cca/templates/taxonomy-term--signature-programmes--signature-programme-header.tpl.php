<div id="taxonomy-term-<?php print $term->tid; ?>" class="<?php print $classes; ?> view-mode-signature-programme-header">
    <div class="term-page-header">
        <h2>Signature Programme <span class="badge">#<?php print($pos); ?></span></h2>
            <div class="image-container">
                <?php if ($content['field_program_preview_img']): ?>
                    <?php print(render($content['field_program_preview_img'])); ?>
                <?php endif; ?>
                <div class="overlay">
                    <h1><?php print($name); ?></h1>
                    <?php print(render($content['field_summary'])); ?>
                </div>
        </div>
    </div>
</div>
<h2 class="pane-title">Supported Programmes</h2>