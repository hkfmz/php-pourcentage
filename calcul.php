<?php

function pourcentage($p , $v)
{
	$Calcul = ($p/100)*$v;

	return $Calcul;
}

if (isset($_POST['valider']))
{
	$var1=$_POST['pourcentage'];
	$var2=$_POST['valeur'];
	$var3=$_POST['devise'];

	if(!empty($var1) AND !empty($var2) AND !empty($var3))
	{
		$resultat=pourcentage($var1 , $var2);
	}else{
		$var1 = 0;
		$var2 = 0;
		//$var3 = ",00";
	}

}else{
	$resultat = 0;
	$var3='FCFA';
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Calcul de pourcentage</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
</head>
<body>
<br>
<br>

<div class="container">
	<div class="row">
		<form method="post">
			<div class="input-group">
				<input type="text" aria-label="First name" name="pourcentage" style="width: 30%" placeholder="nombre de pourcentage (%)" class="form-control" autocomplete="off">
				<input type="text" aria-label="Last name" name="valeur" style="width: 30%" placeholder="Somme" class="form-control" autocomplete="off">
				<select name="devise" class="form-control">
					<option value="FCFA">FCFA</option>
					<option value="EURO">EURO</option>
					<option value="DOLLAR">DOLLAR</option>
				</select>
				<input type="submit" name="valider" class="input-group-text" value="Calculer">
			</div>
		</form>
	</div>
</div>

<br>


<div style="display: flex; justify-content: center;">
	<div class="card d-flex" style="width: 30%; ">
		<div class="card-body">
			<h1 style="text-align: center; font-size: 7em">
				<?php 

				if (isset($resultat)) 
				{
					echo "$resultat $var3";
				}else{
					$resultat = 0;
					echo "$resultat $var3";
				}
				?></h1>
		</div>
	</div>
</div>

</body>
</html>