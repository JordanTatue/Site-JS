<!DOCTYPE html>
<html>

<head>
	<title>Burger Code Admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<link href='http://fonts.googleapis.com/css?family=Holtwood+One+SC' rel='stylesheet' type='text/css'>
	<script src="https://kit.fontawesome.com/ac449715d5.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
</head>

<body>
	<h1 class="text-logo"><span class="fas fa-hamburger"></span> Burger Code <span class="fas fa-utensils"></span></h1>

	<div class="container adminBlock">
		<div class="row">
			<h1><strong>Liste des items </strong><a type="button" href="insert.php" class="btn btn-success btn-lg"><span
						class="fas fa-plus"></span> Ajouter</a></h1>

			<table class="table table-striped table-bordered">
				<thead>
					<tr>
						<th>Nom</th>
						<th>Description</th>
						<th>Prix</th>
						<th>Catégorie</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>

					<tr>
						<td>Menu Classic</td>
						<td>Sandwich: Burger, Salade, Tomate, Cornichon + Frites + Boisson</td>
						<td>8.90</td>
						<td>Menus</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=1"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=1"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=1"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Menu Bacon</td>
						<td>Sandwich: Burger, Fromage, Bacon, Salade, Tomate + Frites + Boisson</td>
						<td>9.50</td>
						<td>Menus</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=2"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=2"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=2"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Menu Big</td>
						<td>Sandwich: Double Burger, Fromage, Cornichon, Salade + Frites + Boisson</td>
						<td>10.90</td>
						<td>Menus</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=3"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=3"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=3"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Menu Chicken</td>
						<td>Sandwich: Poulet Frit, Tomate, Salade, Mayonnaise + Frites + Boisson</td>
						<td>9.90</td>
						<td>Menus</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=4"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=4"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=4"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Menu Fish</td>
						<td>Sandwich: Poisson, Salade, Mayonnaise, Cornichon + Frites + Boisson</td>
						<td>10.90</td>
						<td>Menus</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=5"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=5"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=5"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Menu Double Steak</td>
						<td>Sandwich: Double Burger, Fromage, Bacon, Salade, Tomate + Frites + Boisson</td>
						<td>11.90</td>
						<td>Menus</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=6"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=6"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=6"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Classic</td>
						<td>Sandwich: Burger, Salade, Tomate, Cornichon</td>
						<td>5.90</td>
						<td>Burgers</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=7"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=7"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=7"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Bacon</td>
						<td>Sandwich: Burger, Fromage, Bacon, Salade, Tomate</td>
						<td>6.50</td>
						<td>Burgers</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=8"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=8"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=8"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Big</td>
						<td>Sandwich: Double Burger, Fromage, Cornichon, Salade</td>
						<td>6.90</td>
						<td>Burgers</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=9"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=9"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=9"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Chicken</td>
						<td>Sandwich: Poulet Frit, Tomate, Salade, Mayonnaise</td>
						<td>5.90</td>
						<td>Burgers</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=10"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=10"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=10"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Fish</td>
						<td>Sandwich: Poisson Pané, Salade, Mayonnaise, Cornichon</td>
						<td>6.50</td>
						<td>Burgers</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=11"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=11"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=11"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Double Steak</td>
						<td>Sandwich: Double Burger, Fromage, Bacon, Salade, Tomate</td>
						<td>7.50</td>
						<td>Burgers</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=12"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=12"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=12"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Frites</td>
						<td>Pommes de terre frites</td>
						<td>3.90</td>
						<td>Snacks</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=13"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=13"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=13"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Onion Rings</td>
						<td>Rondelles d'oignon frits</td>
						<td>3.40</td>
						<td>Snacks</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=14"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=14"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=14"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Nuggets</td>
						<td>Nuggets de poulet frits</td>
						<td>5.90</td>
						<td>Snacks</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=15"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=15"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=15"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Nuggets Fromage</td>
						<td>Nuggets de fromage frits</td>
						<td>3.50</td>
						<td>Snacks</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=16"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=16"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=16"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Ailes de Poulet</td>
						<td>Ailes de poulet Barbecue</td>
						<td>5.90</td>
						<td>Snacks</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=17"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=17"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=17"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>César Poulet Pané</td>
						<td>Poulet Pané, Salade, Tomate et la fameuse sauce César</td>
						<td>8.90</td>
						<td>Salades</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=18"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=18"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=18"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>César Poulet Grillé</td>
						<td>Poulet Grillé, Salade, Tomate et la fameuse sauce César</td>
						<td>8.90</td>
						<td>Salades</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=19"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=19"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=19"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Salade Light</td>
						<td>Salade, Tomate, Concombre, Maïs et Vinaigre balsamique</td>
						<td>5.90</td>
						<td>Salades</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=20"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=20"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=20"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Poulet Pané</td>
						<td>Poulet Pané, Salade, Tomate et la sauce de votre choix</td>
						<td>7.90</td>
						<td>Salades</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=21"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=21"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=21"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Poulet Grillé</td>
						<td>Poulet Grillé, Salade, Tomate et la sauce de votre choix</td>
						<td>7.90</td>
						<td>Salades</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=22"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=22"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=22"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Coca-Cola</td>
						<td>Au choix: Petit, Moyen ou Grand</td>
						<td>1.90</td>
						<td>Boissons</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=23"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=23"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=23"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Coca-Cola Light</td>
						<td>Au choix: Petit, Moyen ou Grand</td>
						<td>1.90</td>
						<td>Boissons</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=24"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=24"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=24"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Coca-Cola Zéro</td>
						<td>Au choix: Petit, Moyen ou Grand</td>
						<td>1.90</td>
						<td>Boissons</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=25"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=25"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=25"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Fanta</td>
						<td>Au choix: Petit, Moyen ou Grand</td>
						<td>1.90</td>
						<td>Boissons</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=26"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=26"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=26"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Sprite</td>
						<td>Au choix: Petit, Moyen ou Grand</td>
						<td>1.90</td>
						<td>Boissons</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=27"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=27"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=27"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Nestea</td>
						<td>Au choix: Petit, Moyen ou Grand</td>
						<td>1.90</td>
						<td>Boissons</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=28"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=28"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=28"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Fondant au chocolat</td>
						<td>Au choix: Chocolat Blanc ou au lait</td>
						<td>4.90</td>
						<td>Desserts</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=29"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=29"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=29"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Muffin</td>
						<td>Au choix: Au fruits ou au chocolat</td>
						<td>2.90</td>
						<td>Desserts</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=30"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=30"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=30"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Beignet</td>
						<td>Au choix: Au chocolat ou à la vanille</td>
						<td>2.90</td>
						<td>Desserts</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=31"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=31"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=31"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Milkshake</td>
						<td>Au choix: Fraise, Vanille ou Chocolat</td>
						<td>3.90</td>
						<td>Desserts</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=32"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=32"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=32"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
					<tr>
						<td>Sundae</td>
						<td>Au choix: Fraise, Caramel ou Chocolat</td>
						<td>4.90</td>
						<td>Desserts</td>
						<td width=300><a class="btn btn-light btn-sm" href="view.php?id=33"><span
									class="fas fa-eye"></span> Voir</a> <a class="btn btn-primary btn-sm"
								href="update.php?id=33"><span class="fas fa-pencil-alt"></span> Modifier</a> <a
								class="btn btn-danger btn-sm" href="delete.php?id=33"><span
									class="fas fa-trash-alt"></span> Supprimer</a></td>
					</tr>
				</tbody>
			</table>

		</div>
	</div>
</body>

</html>