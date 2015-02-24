<h4>Signature Programs</h4>
<ul class="signature-programs-list inline-menu">
    <?php foreach($variables['elements']['#items'] as $item): ?>
        <li>
            <a href="/taxonomy/term/<?php print $item['tid'] ?>">
                <?php print(render($item[img])); ?>
                <h5><?php print $item['title']; ?></h5>
            </a>
        </li>
    <?php endforeach; ?>
</ul>