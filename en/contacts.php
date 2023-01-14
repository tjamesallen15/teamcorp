<!DOCTYPE html>
<html>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include '../template/html_imports.php';?>
	<head>
		<title>TEAMCORP - Contacts</title>
	</head>
	<body class="w3-white w3-animate-opacity">
		<?php include '../template/teamcorp_navigation.php';?>
		
		<div class="w3-container" style="margin-top:180px">
			<div class="w3-card w3-white tta-padding-btm">
				<div class="w3-row-padding">
					<h2 class="tta-blue w3-padding">Contacts</h2>
				</div>
				<div class="w3-row-padding">
					<div class="w3-half">
						<div class="w3-card w3-white w3-padding">
							<p><i class="fa fa-credit-card tta-text-blue w3-xlarge"></i> Teamcorp Consultancy, Inc.</p>
							<p><i class="fa fa-map-marker tta-text-blue w3-xlarge"></i>  Unit 3A11 Grand Central Residences Sultan St. cor. EDSA MRT Shaw Station, Bgy Highway Hills, Mandaluyong City, Metro Manila, Philippines 1550</p>
							<p><i class="fa fa-phone tta-text-blue w3-xlarge"></i> +63 (2) 8534 4026</p>
							<p><i class="fa fa-phone tta-text-blue w3-xlarge"></i> +63 (0) 999 404 5186</p>
							<p><i class="fa fa-phone tta-text-blue w3-xlarge"></i> +63 (0) 906 493 2795</p>
							<p><i class="fa fa-envelope-o tta-text-blue w3-xlarge"></i> businessdev@teamcorp.ph</p>
						</div>
					</div>
					<div class="w3-half">
						<form action="send_form_email.php" method="post" class="w3-container w3-card-4 w3-padding-16 w3-white">
							  <div class="w3-group">
								<label class="w3-label tta-text-blue">Name</label>
								<input class="w3-input" name="name" type="text">
							  </div>
							  <div class="w3-group">
								<label class="w3-label tta-text-blue">Email</label>
								<input class="w3-input" name="email" type="text">
							  </div>
							  <div class="w3-group">
								<label class="w3-label tta-text-blue">Subject</label>
								<input class="w3-input" name="subject" type="text">
							  </div>
							  <div class="w3-group">
								<label class="w3-label tta-text-blue">Message</label>
								<input class="w3-input" name="message" type="text">
							  </div>
							  <button type="submit" class="w3-btn w3-right tta-blue">Submit</button>
						  </form>
					</div>
				</div>
				<div class="w3-row-padding w3-margin-top">
					<div class ="w3-card">
						<img src="img/location.png" style="width:100%"/>
					</div>
					
				</div>
				<!--<div class="w3-row-padding w3-margin-top">
					<div id="googleMap" style="width:100%;height:420px;"></div>
					<script src="https://maps.googleapis.com/maps/api/js"></script>
					<script>
					var myCenter=new google.maps.LatLng(14.580995, 121.052771);

					function initialize() {
					var mapProp={
					  center: myCenter,
					  zoom: 18,
					  scrollwheel: false,
					  draggable: false,
					  mapTypeId: google.maps.MapTypeId.ROADMAP
					  };

					var map=new google.maps.Map(document.getElementById("googleMap"), mapProp);

					var marker=new google.maps.Marker({
					  position: myCenter,
					});

					marker.setMap(map);
					}

					google.maps.event.addDomListener(window, "load", initialize);
					</script>
				</div>-->
			</div>
			<div style="margin-top:350px">
				<img src="img/tc-background.png" />
			</div>
		</div>
		<footer class="w3-container tta-blue" style="margin-top:50px">
			<p class="w3-small">Powered By TeamAei &#169; Copyright 2016 of TEAMCORP All Rights Reserved. <span class="w3-tiny w3-right w3-bar-item w3-padding-small"><strong>1.1.2</strong></h6></p>
		</footer>
	</body>
</html>