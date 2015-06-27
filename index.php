<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type='text/css' href='assets/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='stylesheet.css'/>
	<link rel="stylesheet" href="css/colpick.css" type="text/css"/>
</head>
<body>
	<div class= "wrapper center-block">
		<form class="form-inline">
			<div class="form-group">
				<label for="radiusCircle">Radius </label>
				<input type="text"  class="form-control" name="radius" id="radius" placeholder="radius value" value="12">
			</div>
			<div class="form-group">
				<label for="strokeCircle">Pick color </label>
				<div class="input-group">
					<div class="input-group-addon hash">#</div>
					<input type="text"  class="form-control" name="stroke" id="stroke" placeholder="color" value="ff0000">
					<div class="input-group-addon color"></div>
				</div>
			</div>
			<div class="form-group">
				<label for="strokewidthCircle">Stroke-width </label>
				<input type="text"  class="form-control" name="stroke-width" id="stroke-width" placeholder="stroke-width value" value="2">
			</div>
			<button type="button" id="button" class="btn btn-success"> Draw circle</button>
		</form>

		<div id="notepad"></div>
	</div>

	<script type='text/javascript' src= 'assets/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src= 'assets/bootstrap.min.js'></script>
	<script type="text/javascript" src = "assets/raphael.js"></script>
	<script type="text/javascript" src= "script.js"></script>
	<script src="js/colpick.js" type="text/javascript"></script>

</body>
</html>
