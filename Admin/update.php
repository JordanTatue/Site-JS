<!DOCTYPE html>
<html>

<head>
    <title>Burger Code Modifier Item</title>
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
            <div class="col-sm-6">
                <h1><strong>Modifier un item</strong></h1>
                <br>
                <form class="form" role="form" action="update.php?id=1" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="name">Nom:</label>
                        <input type="text" class="form-control" id="name=" name="name" placeholder="Nom"
                            value="Menu Classic">
                        <span class="help-inline"></span>
                    </div>
                    <div class="form-group">
                        <label for="name">Description:</label>
                        <input type="text" class="form-control" id="description=" name="description"
                            placeholder="Description"
                            value="Sandwich: Burger, Salade, Tomate, Cornichon + Frites + Boisson">
                        <span class="help-inline"></span>
                    </div>
                    <div class="form-group">
                        <label for="price">Prix (en €):</label>
                        <input type="text" class="form-control" id="price=" name="price" placeholder="Description"
                            value="8.9">
                        <span class="help-inline"></span>
                    </div>
                    <div class="form-group">
                        <label for="category">Catégorie:</label>
                        <select class="form-control" id="category=" name="category" placeholder="Catégorie">
                            <option selected="selected" value="1">Menus</option>
                            <option value="2">Burgers</option>
                            <option value="3">Snacks</option>
                            <option value="4">Salades</option>
                            <option value="5">Boissons</option>
                            <option value="6">Desserts</option>
                        </select>
                        <span class="help-inline"></span>

                    </div>
                    <div class="form-group">
                        <label>Image:</label>
                        <p>m1.png</p>
                        <label for="image">Sélectionner une image:</label>
                        <input type="file" id="image=" name="image" placeholder="Image">
                        <span class="help-inline"></span>
                    </div>

                    <br>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-success"><span class="fas fa-pencil-alt"></span>
                            Modifier</button>
                        <a class="btn btn-primary" href="index.php"><span class="fas fa-arrow-left"></span> Retour</a>
                    </div>
                </form>
            </div>
            <div class="col-sm-6 site">
                <div class="img-thumbnail">
                    <img src="../images/m1.png" alt="..." class="img-thumbnail">
                    <div class="price">8.90 €</div>
                    <div class="caption">
                        <br>
                        <h4>Menu Classic</h4>
                        <p>Sandwich: Burger, Salade, Tomate, Cornichon + Frites + Boisson</p>
                        <!--		<a href="#" class="btn btn-order" role="button"><span class="fas fa-shopping-cart"> Commander</span></a> -->
                    </div>
                </div>
            </div>

        </div>
    </div>
</body>

</html>