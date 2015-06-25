<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type='text/css' href='assets/bootstrap.min.css'>
	<link rel='stylesheet' type='text/css' href='stylesheet.css'/>
	<link rel="stylesheet" href="css/colpick.css" type="text/css"/>
</head>
<body>
	<div class= "wrapper center-block">
		<form class="form-horizontal">
			<div class="form-group">
				<label for="radiusCircle" class="col-sm-2 control-label">Type radius </label>
				<div class="col-sm-8">
					<input type="text"  class="form-control" name="radius" id="radius" placeholder="radius value">
				</div>
			</div>
			<div class="form-group">
				<label for="strokeCircle" class="col-sm-2 control-label">Pick color </label>
				<div class="col-sm-8">
					<input type="text"  class="form-control" name="stroke" id="stroke" placeholder="pick color">
				</div>
			</div>
			<div class="form-group">
				<label for="strokewidthCircle"class="col-sm-2 control-label">Type stroke-width </label>
				<div class="col-sm-8">
					<input type="text"  class="form-control" name="stroke-width" id="stroke-width" placeholder="stroke-width value">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-8">
					<button type="button" id="button" class="btn btn-success"> Daw circle</button>
				</div>
			</div>
		</form>
	</div>

	<script type='text/javascript' src= 'assets/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src= 'assets/bootstrap.min.js'></script>
	<script type="text/javascript" src = "assets/raphael.js"></script>
	<script type="text/javascript" src= "script.js"></script>
	<script src="js/colpick.js" type="text/javascript"></script>

</body>
</html>
