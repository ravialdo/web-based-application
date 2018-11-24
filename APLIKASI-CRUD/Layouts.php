<?php 

class Layouts {

	public static function head($title)
	{

		echo '<!doctype html>
				<html lang="en">
				  <head>
				    <!-- Required meta tags -->
				    <meta charset="utf-8">
				    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

				    <!-- Font Awesoome -->
				    <link rel="stylesheet" href="assets/css/style.css">

				    <!-- Font Awesoome -->
				    <link rel="stylesheet" href="assets/css/font-awesome.min.css">

				    <!-- Bootstrap CSS -->
				    <link rel="stylesheet" href="assets/css/bootstrap.min.css" crossorigin="anonymous">

				    <title>' . $title . '</title>
				  </head>
				  <body>
				  	<div class="container">';
	}

	public static function foot()
	{
		
		echo '  </div>

		  			<div class="text-center">
						<small class="text-muted"> 2018 &copy; Ravialdo Imanda Putra </small>
					</div>

				<!-- Bootstrap JS -->
			    <script src="assets/js/bootstrap.min.js" crossorigin="anonymous"></script>

			  </body>
			</html>';
	}
}