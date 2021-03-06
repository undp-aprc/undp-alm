// Avoid `console` errors in browsers that lack a console.
;(function($) {
    $(document).ready(function() {

        // Align .nav to left hand side of container
        var windowWidth = $(window).width();
        var containerWidth = $('header > .container').width();
        var leftMarginWidth = (windowWidth - containerWidth) / 2;
        $('.nav.navbar-nav').css('margin-left',leftMarginWidth);

        function masonry() {
            $('.view-display-id-signature_subprogrammes_project_block').masonry({
                itemSelector: '.views-row'
            });

            $('.field-name-field-related-project').masonry({
                itemSelector: '.masonry-item'
            });
        }

        setTimeout(masonry, 3000)

    });
})(jQuery);

// Place any jQuery/helper plugins in here.

