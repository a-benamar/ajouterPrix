<?php session_start(); ?>

<!doctype html>
<html lang="fr">
<head>	
	<title>
		HTML DEMO
	</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			
			<h3>Ajouter des prix</h3>
			
			<form method="post" action="traitement-form.php">
				
				<div class="input-group form-group">
					<input class="form-control" name="prix" placeholder="0.00">
					<span class="input-group-text">€</span>
				</div>
				
				<div class="form-group"><input type="submit" value="envoyer"></div>
				
			</form>
			
			<hr>
			<?php ?>
			
			<?php if( isset($_SESSION["montantTotal"]) ): ?>
			<p>Montant total : <?= array_sum( $_SESSION["montantTotal"] );?> €<br>
			
			Nombre d'articles ajoutés : <?= count($_SESSION["montantTotal"]); ?>
			</p>
			<?php else: ?>
			
				<p>Montant total : 0 €</p>
			
			<?php endif; ?>
			
			<a href="reset.php">Reset</a>
		</div>
	</div>
</div>

</body>
</html>