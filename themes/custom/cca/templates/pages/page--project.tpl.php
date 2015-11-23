<div class="cca-page container-fluid">
    <?php if($tabs): ?>
        <div class="container">
            <?php print render($tabs); ?>
        </div>
    <?php endif; ?>
    <?php print(render($page['header'])); ?> 
    <!-- Content Container -->
    <main>
        <div class="container">
            <?php if($messages): ?><?php print $messages; ?><?php endif; ?>
            <div class="clearfix"></div>
            <?php if($page['sidebar_first']): ?>
                <?php print render($page['sidebar_first']); ?>
            <?php endif; ?>
            <?php hide($content['admin_footer']); ?>
            <?php print render($page['content']); ?>
        </div>
    </main>
    <!-- End Content Container -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 left-col">
                    <?php if($page['footer_1']): ?>
                        <?php print(render($page['footer_1'])); ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-4 center-col">
                    <?php if($page['footer_2']): ?>
                        <?php print(render($page['footer_2'])); ?>
                    <?php endif; ?>
                </div>
                <div class="col-sm-4 right-col">
                    <?php if($page['footer_3']): ?>
                        <?php print(render($page['footer_3'])); ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="copyright"><p>&copy; United Nations Development Program 2015</p></div>
    </footer>
</div> <!-- end .cca-page -->
<?php //print render($page['admin_footer']); ?>