<!doctype html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title>Places to Eat</title>
<link href="places_to_eat.css" type="text/css" rel="stylesheet" />
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js">
</script>
</head>

<body>
	<div id="wrapper">
		<div id="sidebar">
			<div id="key">
				<div id="key-header">
				Key
				</div> <!--end key-header-->
				<div id="key-content">
					<dl>
					<dt>Purple = Events</dt>
					<dt>Red = Seminars with food</dt>
					<dt>Yellow = Seminars without food</dt>
					<dt>Blue = Dining Halls</dt>
					</dl>
				</div> <!--end key-content-->
			</div> <!--end key-->
			<div id="info">
				<div id="info-header">
				Info
				</div> <!--end info-header-->
				<div id="info-content">
					<dl id="info-content-list">
					<dt onClick = "$('#info-content-list').load('event-info.html #undermining-data');">Undermining Data</dt>
					<hr>
					<dt onClick = "$('#info-content-list').load('event-info.html #deep-brain-stimulation');">Deep Brain Stimulation for Depression</dt>
					<hr>
					<dt onClick = "$('#info-content-list').load('event-info.html #baja-club');">Baja Club</dt>
					</dl> <!--end info-content-list-->
				</div> <!--end info-content-->
			</div> <!--end info-->
		</div> <!--end sidebar-->
		<div id="map">
			<iframe src="http://mapsengine.google.com/map/u/0/embed?mid=zjrmX1fiysYs.kYzz4FmXgA1E"
				width="640" height="480"></iframe>
		</div> <!--end map-->
	</div> <!--end wrapper-->
</body>

</html>
