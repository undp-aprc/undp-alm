// Avoid `console` errors in browsers that lack a console.
;(function($) {
    $(document).ready(function() {

        /* $("#video-carousel").slidesjs({
            width: 940,
            height: 300
        }); */

        $('.view-featured-resources .node').matchHeight();
        $('.pane-resource-blocks .views-row').matchHeight();
        $('.pane-news .cca-content-box').matchHeight();
    });
})(jQuery);

// Place any jQuery/helper plugins in here.

