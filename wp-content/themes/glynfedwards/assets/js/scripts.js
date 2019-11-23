var GFE = {
    settings: {
        $fb: $('.facebook'),
        $tw: $('.twitter'),
    },

    init: function(){
        GFE.bindMap();
        GFE.bindEvents();
    },

    bindMap: function() {
        $('.acf-map').each(function() {
            var map = GFE.initMap($(this));
        });
    },

    bindEvents: function() {
        GFE.settings.$fb.on('click', GFE.facebookShare);
        GFE.settings.$tw.on('click', GFE.twitterShare);
    },

    initMap: function($el) {
        var $markers = $el.find('.marker'),
            mapArgs = {
                zoom        : $el.data('zoom') || 16,
                mapTypeId   : google.maps.MapTypeId.ROADMAP
            },
            map = new google.maps.Map( $el[0], mapArgs );

        map.markers = [];
        $markers.each(function(){
            GFE.initMarker( $(this), map );
        });
        GFE.centerMap( map );
        return map;
    },

    initMarker: function($marker, map) {
        var lat = $marker.data('lat'),
            lng = $marker.data('lng'),
            latLng = {
                lat: parseFloat(lat),
                lng: parseFloat(lng)
            },
            marker = new google.maps.Marker({
                    position : latLng,
                    map: map
            });

        map.markers.push(marker);

        if($marker.html()){
            var infowindow = new google.maps.InfoWindow({
                content: $marker.html()
            });
            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
        }
    },

    centerMap: function(map) {
        var bounds = new google.maps.LatLngBounds();
        map.markers.forEach(function(marker){
            bounds.extend({
                lat: marker.position.lat(),
                lng: marker.position.lng()
            });
        });

        if(map.markers.length == 1){
            map.setCenter(bounds.getCenter());
        } else{
            map.fitBounds(bounds);
        }
    },

    twitterShare: function(e) {
        e.preventDefault();

        var share_loc = window.location.href,
            share_title = $('.share-title').text();
        window.open('http://twitter.com/share?text='+share_title+'&via=glynfedwards&url='+share_loc, 'gfe_share', 'height=450, width=550, top='+($(window).height()/2 - 225) +', left='+$(window).width()/2 +', toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
    },

    facebookShare: function(e) {
        e.preventDefault();
        var share_loc = window.location.href;
        window.open('https://www.facebook.com/sharer/sharer.php?u='+share_loc, 'gfe_share', 'height=600, width=600, top='+($(window).height()/2 - 300) +', left='+$(window).width()/2 +',toolbar=0, location=0, menubar=0, directories=0, scrollbars=0');
    }
};

$(function(){ 
    GFE.init();
});