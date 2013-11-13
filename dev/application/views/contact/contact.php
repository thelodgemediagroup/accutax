<div class="subpage container-800 clearfix">
	<div class="page-text">
		<h1>Contact	 <span class="logo-color">Accutax</span></h1>

		<div class="floatleft top-space">
			<h3><span class="logo-color">Accutax</span></h3>
			<p>8639 Hall Rd</p>
			<p>Utica, MI 48317</p>			
			<p class="line-accent">
				<i class="fa fa-phone"></i>
				&nbsp; (586) 580-3040
			</p>
			<p class="line-accent">
				<i class="fa fa-envelope"></i>
				&nbsp; <a href="mailto:janis@eaccutax.com">janis@eaccutax.com</a>
			</p>
			<p>&nbsp;</p>
			
		</div>

		<div class="floatright">
			<div id="map-canvas" style="height:320px;width:520px;">

			</div><!--/ #map-canvas -->
		</div>

	</div><!--/ .page-text -->
</div><!--/ .subpage -->
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsfAZQ64YFueYYVm6h_gjPS4CUktkOgvg&sensor=false">
    </script>
<script type="text/javascript">

google.maps.visualRefresh = true;
var map;
function initialize() {

	var mapOptions = {
		zoom: 14,
		mapTypeControlOptions: {
		style: google.maps.MapTypeControlStyle.DROPDOWN_MENU
		},    
		center: new google.maps.LatLng(42.626412, -83.026106),
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};

	map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

	var accutaxInfo = '<div class="accutax-map-info">' +
		'<p><span class="logo-color">Accutax</span></p>' +
		'<p>8639 Hall Rd</p>' +
		'<p>Utica, MI 48317</p>' +
		'<p class="line-accent">' +
		'<i class="fa fa-phone"></i>' +
		'&nbsp; (586) 580-3040' +
		'</p>' +
		'</div>';

	var infowindow = new google.maps.InfoWindow({
		content: accutaxInfo
	});

	var accutax = new google.maps.LatLng(42.626412, -83.026106);
	var marker = new google.maps.Marker({
		position: accutax,
		map: map,
		title: 'Accutax'
	});

	google.maps.event.addListener(marker, 'click', function() {
	infowindow.open(map,marker);
	});

}

google.maps.event.addDomListener(window, 'load', initialize);
</script>