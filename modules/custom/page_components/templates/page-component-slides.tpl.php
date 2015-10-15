<?php $items = $variables['elements']['#items']; ?>
<?php foreach($items as $key=>$item): ?>
    <?php $renderable_entity = node_view($item, 'image_teaser');?>
    <li class="jcarousel-item">
        <?php print(render($renderable_entity)); ?>
    </li>
<?php endforeach; ?>