<?php $elements = $variables['elements']; ?>
<div class="jcarousel-wrapper">
    <div class="page-components jcarousel">
        <ul class="jcarousel-list">
            <?php print($elements['#children']); ?>
        </ul>
    </div>
    <div class="jcarousel-pagination">
        <!-- Pagination items will be generated in here -->
    </div>
</div>
