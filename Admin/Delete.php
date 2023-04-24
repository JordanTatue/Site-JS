

<!DOCTYPE html>
<html>
<head>
	<title>Burger Code Delete Item</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" ></script>
	<link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<script src="https://kit.fontawesome.com/ac449715d5.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>
	<body>
		<h1 class="text-logo"><span class="fas fa-hamburger"></span> Burger Code <span class="fas fa-utensils"></span></h1>

		<div class="container adminBlock">
			<div class="row">
				<div class="col">
					<h1><strong>Supprimer un item</strong></h1>
					<br>
					<form class="form" role="form" action="delete.php" method="post">
						<input type="hidden" name="id" value="1" />
						<p class="alert alert-warning">Etes-vous sur de vouloir supprimer?</p>
						<div class="form-actions">
							<button type="submit" class="btn btn-warning">Oui</button>
							<a class="btn btn-primary" href="index.php">Non</a>
						</div>
					</form>

				</div>
			</div>
		</div>
	</body>
</html>