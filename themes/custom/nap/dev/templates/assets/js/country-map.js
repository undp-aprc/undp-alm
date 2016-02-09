(function($) {
    $(document).ready(function() {

        var countryMap = L.map('country-map').setView([13.7563, 100.5018], 2);

        L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
            attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
            maxZoom: 18,
            id: 'mapbox.streets',
            accessToken: 'pk.eyJ1IjoidW5kcC1jY2EiLCJhIjoiY2lqdzNnZTRjMGhrYnRxbTVqdXN1bG1jciJ9.XYxJ9kfNn5Dd_CNVytKTjw'
        }).addTo(countryMap);

        L.marker([13.7563, 100.5018]).addTo(countryMap);
        L.marker([24, 90]).addTo(countryMap);
        L.marker([9.3, 2.31]).addTo(countryMap);
        L.marker([12.2, -1.56]).addTo(countryMap);

        //map.dragging.disable();
        countryMap.touchZoom.disable();
        countryMap.doubleClickZoom.disable();
        countryMap.scrollWheelZoom.disable();
        countryMap.keyboard.disable();
    });
}) (jQuery);