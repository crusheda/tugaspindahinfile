<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="dist/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous">
</script>
<script src="dist/semantic.min.js"></script>
  <!-- Standard Meta -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

<!-- Site Properties -->
<title>PINDAH DATA</title>

<link rel="stylesheet" type="text/css" href="dist/components/reset.css">
<link rel="stylesheet" type="text/css" href="dist/components/site.css">

<link rel="stylesheet" type="text/css" href="dist/components/container.css">
<link rel="stylesheet" type="text/css" href="dist/components/grid.css">
<link rel="stylesheet" type="text/css" href="dist/components/header.css">
<link rel="stylesheet" type="text/css" href="dist/components/image.css">
<link rel="stylesheet" type="text/css" href="dist/components/menu.css">

<link rel="stylesheet" type="text/css" href="dist/components/divider.css">
<link rel="stylesheet" type="text/css" href="dist/components/list.css">
<link rel="stylesheet" type="text/css" href="dist/components/segment.css">
<link rel="stylesheet" type="text/css" href="dist/components/dropdown.css">
<link rel="stylesheet" type="text/css" href="dist/components/icon.css">

<script type="dist/semantic.min.js">$('.autumn.leaf').transition('fade');
</script>
</head>
<body style="background-color: #78536A;font-family: 'Roboto';color: white">
<div class="ui container" style="margin-top: 15px">
  <div class="ui stackable menu" style="background-color: #E8A0CF">
    <a class="item" style="font-size: 18px;color: white">Home</a>
  </div>

	
		<?php
			$count = 0;
		if ($_SERVER['REQUEST_METHOD'] == 'POST'){
		    foreach ($_FILES['files']['name'] as $i => $name) {
		        if (strlen($_FILES['files']['name'][$i]) > 1) {
		            if (move_uploaded_file($_FILES['files']['tmp_name'][$i], 'hasil/'.$name)) {
		                $count++;
		            }
		        }
		    }
		}
		?>
<center>	
<form method="post" enctype="multipart/form-data">
    <div style="color: white" class="ui inverted pink button">
    	<input type="file" name="files[]" id="files" multiple="" directory="" webkitdirectory="" mozdirectory="">
    </div>
    <br><br>
    <input style="color: white" class="ui inverted pink button" type="submit" value="UPLOAD" />
</form>
</center>

</body>
</html>