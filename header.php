<link rel="stylesheet" href="http://studioissa.com/wp-content/themes/issa-studio/proxima-nova.css">

<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyB4dHOyPgUpERLJA7Yf__qrjkh7k7fKiIY&sensor=false">
</script>
<script type="text/javascript" src="http://maps.stamen.com/js/tile.stamen.js?v1.2.1"></script>
<script>

            function initialize() {
                var options = {
                  center: new google.maps.LatLng(41.83664, -71.40143),
                  zoom: 17,
                mapTypeId: "Toner",
                panControl: false,
    			zoomControl: true,
 zoomControlOptions: {
      style: google.maps.ZoomControlStyle.SMALL
    },
    			scaleControl: false,
 	 			streetViewControl: false,
				scrollwheel: false,
                  mapTypeControlOptions: {
                      mapTypeIds: ["Toner", "Terrain", "Watercolor"]
                  }
                };
                var map = new google.maps.Map(document.getElementById("map"), options);
                map.mapTypes.set("Toner", new google.maps.StamenMapType("toner"));
                map.mapTypes.set("Terrain", new google.maps.StamenMapType("terrain"));
                map.mapTypes.set("Watercolor", new google.maps.StamenMapType("watercolor"));
            }
                    google.maps.event.addDomListener(window, 'load', initialize);
</script>

<script type="text/javascript" >

	/*-----------------------------------------------------------------------------------

				hide scroll to top
			 
			-----------------------------------------------------------------------------------*/
	
	jQuery(document).ready(function($){
	
		// hide #back-top first
		jQuery("#scroll-top").hide();

		
		// fade in #back-top
		jQuery(function () {
			jQuery(window).scroll(function () {
				if (jQuery(this).scrollTop() > 100) {
					jQuery('#scroll-top').fadeIn();
				} else {
					jQuery('#scroll-top').fadeOut();
				}
			});
	
			// scroll body to 0px on click
			jQuery('#scroll-top a').click(function () {
				jQuery('body,html').animate({
					scrollTop: 0
				}, 1800);
				return false;
			});
		});
		

</script>