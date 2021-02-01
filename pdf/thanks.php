<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">





</head>
<body>
	<div class="container">

		<h1>Thanks <?php echo $_GET['fname'];?>, your pdf is now generated,
		<a href="./completed/<?php echo $_GET['link'];?>" download>Download it here</a></h1>
			
		<button type="submit" class="btn btn-block btn-success" style="text-decoration:none; margin-top: 100px; "><a href="index.php">Main Page</a></button>

	</div>
</body>
</html>