<html>
	<head>
		<title>Device Property Example</title>
		
		<script type="text/javascript" charset="utf-8" src="cordova.js"></script>
		<script type="text/javascript" charset="utf-8">
		document.addEventListener("deviceready", onDeviceReady, false);
		
		function onDeviceReady() {
			// Now safe to use device APIs
			var element = document.getElementById("deviceProperties");
			element.innerHTML = "Device Name: " + device.name + "<br />" +
								"Device Cordova: " + device.cordova + "<br />" +
								"Device Platform: " + device.platform + "<br />" +
								"Device UUID: " + device.uuid + "<br />" +
								"Device Model: " + device.model + "<br />" +
								"Device Version: " + device.version + "<br />";
		}
		
		</script>
	</head>
	
	<body>
		<p id="deviceProperties">Loading device properties ...</p>
	</body>
</html>