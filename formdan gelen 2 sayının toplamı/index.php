<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>kullanıcı tarafından girilen sayıların toplamı</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
   
</head>
<body>
<div class="container">
	<h1 class="bg-primary">
		<?php 
		if (isset($_POST["kontrol"])) {
			echo $_POST["sayi1"]."+".$_POST["sayi2"]."= ".($_POST["sayi1"]+$_POST["sayi2"]);
		}
		 ?>

	</h1>
	<hr>
	<form action="" method="post">
		<div class="form-group">
		<label for="sayi1">Sayı 1</label>
		<input type="text" name="sayi1" class="form-kontrol">
		</div>

		<div class="form-group">
		<label for="sayi2">Sayı 2</label>
		<input type="text" name="sayi2" class="form-kontrol">
		</div>
	<button type="submit" name="kontrol" class="btn btn-primary">Topla</button>
	</form>
	<hr>
</div>


</body>
</html>