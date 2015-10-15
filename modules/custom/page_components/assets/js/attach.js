(function ($) {
    Drupal.behaviors.page_components = {
        attach: function (context, settings) {
            if (settings.ajaxPageState.theme == 'cca') {
                // Initialise the carousel
                console.log('Trace');

                $('.page-components.jcarousel').jcarousel();

                var instance = $('.page-components.jcarousel').data('jcarousel');

                $('.jcarousel-pagination').jcarouselPagination({
                    item: function(page) {
                        return '<a href="#' + page + '">' + page + '</a>';
                    }
                });

                $('.jcarousel-pagination')
                    .on('jcarouselpagination:active', 'a', function() {
                        $(this).addClass('active');
                    })
                    .on('jcarouselpagination:inactive', 'a', function() {
                        $(this).removeClass('active');
                    })
                    .jcarouselPagination();


            }
        }
    }
})(jQuery);