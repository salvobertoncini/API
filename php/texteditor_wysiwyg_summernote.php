<?php

	if(isset($_POST["testo"]))
		echo $_POST["testo"];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Summernote Editor</title>

	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.js"></script> 
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script> 
	<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>

</head>
<body>
	<div class="container">
		<div class="col-md-12 centered">
			<h2>Summernote Editor</h2>
			
			<form method="POST" action="index.php">
				<textarea id="summernote" name="testo"></textarea>
				<input class="btn btn-primary" type="submit" name="submit" value="SUBMIT">
			</form>
  <script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
  </script>
		</div>
	</div>
</body>
</html>