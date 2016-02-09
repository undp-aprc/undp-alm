<ul class="signature-programs-list inline-menu">
    <?php foreach($variables['elements']['#items'] as $item): ?>
        <div class="col-sm-2">
            <a href="/taxonomy/term/<?php print $item['tid'] ?>">
                <span class="hidden-xs"><?php print(render($item['img'])); ?></span>
                <h5><?php print $item['title']; ?></h5>
            </a>
        </div>
    <?php endforeach; ?>
</ul>