<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
<!---	<meta name="viewport" content="width=device-width, initial-scale=1"> --->
	<title>DWWM - Promo 2019</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
 <!-- 	<link href='https://fonts.googleapis.com/css?family=Contrail One' rel='stylesheet'>
 --><!-- 	<link rel="stylesheet"  type="text/css"  href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css"> -->
</head>
<body>

	<header>
		<img id="logo-ics" src="images/logo_ics.png" alt="Logo ICS">
		<p id="titre"><span id="dwwm">Développement Web & Web Mobile</span><br/>Promo 2019</p>
		<a id="login" href="login.php">Login</a>
	</header>

	<!-- Section trombi générée par php -->

	<?php

		$StudentData = [
		["Jonathan","Jonathan","Bari","4284",25,"C'est la moutarde de trop qui fait déborder le nez."],
		["Antoine","Antoine","Guyader","4288",32,"Le gras, c'est la vie !"],
		["Mariana","Mariana","Moron","4291",20,"- What do we say to bugs?<br/>- Not today."],
		["Abdellatif","Abdellatif","el Mandili","4293",28,"C'est la mer noir."],
		["Anthony","Anthony","Bizien Salaun","4296",31,"Never have more children than you have car windows."],
		["Sophie","Sophie","Raveu","4298",24,"Vers l'infini et au-delà."],
		["Magali","Magali","Martin","4300",40,"En route pour l'aventure."],
		["Radhwa","Radhwa","Marzouk","4303",26,"Les performances individuelles, ce n'est pas le plus important. On gagne et on perd en équipe."],
		["Sebastien","Sébastien","Boulanger","4305",39,"A touché le fond mais creuse encore."],
		["Tim","Tim K.","Robb","4309",48,"Beam me up, Scotty! There's no intelligent life down here."],
		["Dimitri","Dimitri","Gaillot","4310",31,"Après réflexion, je n'aurais pas dû installer ubuntu sur la trotinette."],
		["Isabelle","Isabelle","de Latour","4314",43,"Keep it simple."],
		["Damien","Damien","Chailloleau-Granato","4320",26,"À vaincre sans péril, on triomphe sans gloire."],
		["Maxence","Maxence","Wilmes","4323",27,"All your base are belong to us!"],
		["Alexis","Alexis-Mathieu","Hubert","4324",25,"We are what we repeatedly do. Excellence, then, is not an act, but a habit."],
		["Anaelle","Anaëlle","Alenda","4332",29,"La vie c'est comme une boîte de chocolats : on ne sait jamais sur quoi on va tomber."],
		["Marie","Marie Amandine","Delalondre","4338",26,"Mieux vaut avoir la folie des grandeurs que le goût de la médiocrité."],
		["Jim","James","Ross","4340",39,"I only popped out for a pint!"],
		["Younes","Younes","Temar","4344",26,"Lorsque l'on se cogne la tête contre un pot et que cela sonne creux, ça n'est pas forcément le pot qui est vide."],
		["Dilyana","Dilyana","Stefanova","4345",26,"Carpe Diem."]
		];

		$l = count($StudentData);

		$ID = 0;

		if (array_key_exists("ID",$_GET)) {
			$ID = $_GET["ID"];
		}

		echo "<section id=\"trombi\">\n";

		for ($i=0; $i<$l; $i++) {

			echo "<a href=\"#\" title=\"{$StudentData[$i][1]}\" onclick=\"openModal();currentSlide(";
			echo $i+1;
			echo ");\"><img src=\"images/photos/MAD_{$StudentData[$i][3]}.jpg\"></a>\n";

		}

		echo "</section>\n";

	?>

	<footer>&copy; 2019</footer>

	<!-- THE MODAL LIGHTBOX --->

	<div id="myModal" class="modal">
		<span class="close cursor" onclick="closeModal()">&times;</span>
		<div class="modal-content">

			<?php

			$Select5 = "<select>\n<option value=\"1\">1</option>\n<option value=\"2\">2</option>\n<option value=\"3\">3</option>\n<option value=\"4\">4</option>\n<option value=\"5\">5</option>\n</select>";

			for ($i=0; $i<$l; $i++) { ?>

				<div class="mySlides row">
					<div class="col-4">
						<div class="numbertext"><?php echo $i+1; ?> / 20</div>
						<img src="images/photos/MAD_<?php echo $StudentData[$i][3]?>.jpg">
						<p><?php echo $StudentData[$i][1];?> <span class="textNameStyle"><?php echo $StudentData[$i][2];?></span>
							<span class="textAgeStyle">(<?php echo $StudentData[$i][4];?> ans)</span></p>
 <!--                       <p><span><<</span><?php echo $StudentData[$i][5];?><span>>></span></p>  --->
					</div>
					<div class="col-6">	
						<div id="profilBlock<?php echo $i+1;?>">
							<p>
								<span class="citation"><?php echo $StudentData[$i][5];?></span><br/><br/>

	<table>
								<tr>
									<th>
										Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité. Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
									</th>
								</tr>
								<tr>
									<td>Maquetter une application</td>
									<td>100%</td>
								</tr>
								<tr>
									<td>Réaliser une interface utilisateur web statique et adaptable</td>
									<td>100%</td>
								</tr>
								<tr>
									<td>Développer une interface utilisateur web dynamique</td>
									<td>100%</td>
								</tr>
								<tr>
									<td>Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce</td>
									<td>100%</td>
								</tr>
							</table>

							<table>
								<tr>
									<th>
										Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurité
									</th>
								</tr>
								<tr>
									<td>Créer une base de donnée</td>
									<td>100%</td>
								</tr>
								<tr>
									<td>Développer les composants d’accès aux données</td>
									<td>100%</td>
								</tr>
								<tr>
									<td>Développer la partie back-end d’une application web ou web mobile</td>
									<td>100%</td>
								</tr>
								<tr>
									<td>Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce</td>
									<td>100%</td>
								</tr>
							</table>								
							</p>
							<div>
								<button class="btnGoEval" type="button" onclick="showEvalBlock(<?php echo $i+1;?>)">Evaluate</button>
							</div>
						</div>
						<div id="evalBlock<?php echo $i+1;?>">
							<h1>Evaluation</h1>
							<form id="evalForm<?php echo $i+1;?>" method="POST" action="?ID=<?php echo $i+1;?>">
								<input type="hidden" name="ID" value="<?php echo $i+1;?>">
								<button class="accordion">
									Développer la partie front-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="rating-group">Maquetter une application&nbsp;
									    <input class="rating__input rating__input--none" checked name="rating<?php echo $i+1;?>-1" id="rating<?php echo $i+1;?>-1-0" value="0" type="radio">
									        <label aria-label="0 stars" class="rating__label" for="rating<?php echo $i+1;?>-1-0">&nbsp;</label>
									        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-1-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-1" id="rating<?php echo $i+1;?>-1-05" value="0.5" type="radio">
									        <label aria-label="1 star" class="rating__label" for="rating<?php echo $i+1;?>-1-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-1" id="rating<?php echo $i+1;?>-1-10" value="1" type="radio">
									        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-1-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-1" id="rating<?php echo $i+1;?>-1-15" value="1.5" type="radio">
									        <label aria-label="2 stars" class="rating__label" for="rating<?php echo $i+1;?>-1-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-1" id="rating<?php echo $i+1;?>-1-20" value="2" type="radio">
									        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-1-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-1" id="rating<?php echo $i+1;?>-1-25" value="2.5" type="radio" checked>
									        <label aria-label="3 stars" class="rating__label" for="rating<?php echo $i+1;?>-1-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-1" id="rating<?php echo $i+1;?>-1-30" value="3" type="radio">
									        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-1-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-1" id="rating<?php echo $i+1;?>-1-35" value="3.5" type="radio">
									        <label aria-label="4 stars" class="rating__label" for="rating<?php echo $i+1;?>-1-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-1" id="rating<?php echo $i+1;?>-1-40" value="4" type="radio">
									        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-1-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-1" id="rating<?php echo $i+1;?>-1-45" value="4.5" type="radio">
									        <label aria-label="5 stars" class="rating__label" for="rating<?php echo $i+1;?>-1-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-1" id="rating<?php echo $i+1;?>-1-50" value="5" type="radio">
									    </div>
									    <div class="rating-group">Réaliser une interface utilisateur web statique et adaptable&nbsp;
									    <input class="rating__input rating__input--none" checked name="rating<?php echo $i+1;?>-2" id="rating<?php echo $i+1;?>-2-0" value="0" type="radio">
									        <label aria-label="0 stars" class="rating__label" for="rating<?php echo $i+1;?>-2-0">&nbsp;</label>
									        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-2-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-2" id="rating<?php echo $i+1;?>-2-05" value="0.5" type="radio">
									        <label aria-label="1 star" class="rating__label" for="rating<?php echo $i+1;?>-2-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-2" id="rating<?php echo $i+1;?>-2-10" value="1" type="radio">
									        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-2-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-2" id="rating<?php echo $i+1;?>-2-15" value="1.5" type="radio">
									        <label aria-label="2 stars" class="rating__label" for="rating<?php echo $i+1;?>-2-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-2" id="rating<?php echo $i+1;?>-2-20" value="2" type="radio">
									        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-2-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-2" id="rating<?php echo $i+1;?>-2-25" value="2.5" type="radio" checked>
									        <label aria-label="3 stars" class="rating__label" for="rating<?php echo $i+1;?>-2-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-2" id="rating<?php echo $i+1;?>-2-30" value="3" type="radio">
									        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-2-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-2" id="rating<?php echo $i+1;?>-2-35" value="3.5" type="radio">
									        <label aria-label="4 stars" class="rating__label" for="rating<?php echo $i+1;?>-2-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-2" id="rating<?php echo $i+1;?>-2-40" value="4" type="radio">
									        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-2-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-2" id="rating<?php echo $i+1;?>-2-45" value="4.5" type="radio">
									        <label aria-label="5 stars" class="rating__label" for="rating<?php echo $i+1;?>-2-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-2" id="rating<?php echo $i+1;?>-2-50" value="5" type="radio">
									    </div>
									    <div class="rating-group">Développer une interface utilisateur web dynamique&nbsp;
									        <input class="rating__input rating__input--none" checked name="rating<?php echo $i+1;?>-3" id="rating<?php echo $i+1;?>-3-0" value="0" type="radio">
									        <label aria-label="0 stars" class="rating__label" for="rating<?php echo $i+1;?>-3-0">&nbsp;</label>
									        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-3-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-3" id="rating<?php echo $i+1;?>-3-05" value="0.5" type="radio">
									        <label aria-label="1 star" class="rating__label" for="rating<?php echo $i+1;?>-3-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-3" id="rating<?php echo $i+1;?>-3-10" value="1" type="radio">
									        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-3-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-3" id="rating<?php echo $i+1;?>-3-15" value="1.5" type="radio">
									        <label aria-label="2 stars" class="rating__label" for="rating<?php echo $i+1;?>-3-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-3" id="rating<?php echo $i+1;?>-3-20" value="2" type="radio">
									        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-3-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-3" id="rating<?php echo $i+1;?>-3-25" value="2.5" type="radio" checked>
									        <label aria-label="3 stars" class="rating__label" for="rating<?php echo $i+1;?>-3-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-3" id="rating<?php echo $i+1;?>-3-30" value="3" type="radio">
									        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-3-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-3" id="rating<?php echo $i+1;?>-3-35" value="3.5" type="radio">
									        <label aria-label="4 stars" class="rating__label" for="rating<?php echo $i+1;?>-3-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-3" id="rating<?php echo $i+1;?>-3-40" value="4" type="radio">
									        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-3-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-3" id="rating<?php echo $i+1;?>-3-45" value="4.5" type="radio">
									        <label aria-label="5 stars" class="rating__label" for="rating<?php echo $i+1;?>-3-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-3" id="rating<?php echo $i+1;?>-3-50" value="5" type="radio">
									    </div>
									    <div class="rating-group">Réaliser une interface utilisateur avec une solution de gestion de contenu ou e-commerce&nbsp;
									        <input class="rating__input rating__input--none" checked name="rating<?php echo $i+1;?>-4" id="rating<?php echo $i+1;?>-4-0" value="0" type="radio">
									        <label aria-label="0 stars" class="rating__label" for="rating<?php echo $i+1;?>-4-0">&nbsp;</label>
									        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-4-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-4" id="rating<?php echo $i+1;?>-4-05" value="0.5" type="radio">
									        <label aria-label="1 star" class="rating__label" for="rating<?php echo $i+1;?>-4-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-4" id="rating<?php echo $i+1;?>-4-10" value="1" type="radio">
									        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-4-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-4" id="rating<?php echo $i+1;?>-4-15" value="1.5" type="radio">
									        <label aria-label="2 stars" class="rating__label" for="rating<?php echo $i+1;?>-4-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-4" id="rating<?php echo $i+1;?>-4-20" value="2" type="radio">
									        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-4-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-4" id="rating<?php echo $i+1;?>-4-25" value="2.5" type="radio" checked>
									        <label aria-label="3 stars" class="rating__label" for="rating<?php echo $i+1;?>-4-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-4" id="rating<?php echo $i+1;?>-4-30" value="3" type="radio">
									        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-4-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-4" id="rating<?php echo $i+1;?>-4-35" value="3.5" type="radio">
									        <label aria-label="4 stars" class="rating__label" for="rating<?php echo $i+1;?>-4-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-4" id="rating<?php echo $i+1;?>-4-40" value="4" type="radio">
									        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-4-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-4" id="rating<?php echo $i+1;?>-4-45" value="4.5" type="radio">
									        <label aria-label="5 stars" class="rating__label" for="rating<?php echo $i+1;?>-4-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-4" id="rating<?php echo $i+1;?>-4-50" value="5" type="radio">
									    </div>
									 <!-- /five star rating -->
								</div>

								<button class="accordion">
									Développer la partie back-end d’une application web ou web mobile en intégrant les recommandations de sécurité
								</button>
								<div class="panel">
									<div class="rating-group">Créer une base de données&nbsp;
									        <input class="rating__input rating__input--none" checked name="rating<?php echo $i+1;?>-5" id="rating<?php echo $i+1;?>-5-0" value="0" type="radio">
									        <label aria-label="0 stars" class="rating__label" for="rating<?php echo $i+1;?>-5-0">&nbsp;</label>
									        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-5-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-5" id="rating<?php echo $i+1;?>-5-05" value="0.5" type="radio">
									        <label aria-label="1 star" class="rating__label" for="rating<?php echo $i+1;?>-5-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-5" id="rating<?php echo $i+1;?>-5-10" value="1" type="radio">
									        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-5-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-5" id="rating<?php echo $i+1;?>-5-15" value="1.5" type="radio">
									        <label aria-label="2 stars" class="rating__label" for="rating<?php echo $i+1;?>-5-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-5" id="rating<?php echo $i+1;?>-5-20" value="2" type="radio">
									        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-5-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-5" id="rating<?php echo $i+1;?>-5-25" value="2.5" type="radio" checked>
									        <label aria-label="3 stars" class="rating__label" for="rating<?php echo $i+1;?>-5-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-5" id="rating<?php echo $i+1;?>-5-30" value="3" type="radio">
									        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-5-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-5" id="rating<?php echo $i+1;?>-5-35" value="3.5" type="radio">
									        <label aria-label="4 stars" class="rating__label" for="rating<?php echo $i+1;?>-5-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-5" id="rating<?php echo $i+1;?>-5-40" value="4" type="radio">
									        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-5-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-5" id="rating<?php echo $i+1;?>-5-45" value="4.5" type="radio">
									        <label aria-label="5 stars" class="rating__label" for="rating<?php echo $i+1;?>-5-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-5" id="rating<?php echo $i+1;?>-5-50" value="5" type="radio">
									    </div>
									    <div class="rating-group">Développer les composants d’accès aux données&nbsp;
									        <input class="rating__input rating__input--none" checked name="rating<?php echo $i+1;?>-6" id="rating<?php echo $i+1;?>-6-0" value="0" type="radio">
									        <label aria-label="0 stars" class="rating__label" for="rating<?php echo $i+1;?>-6-0">&nbsp;</label>
									        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-6-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-6" id="rating<?php echo $i+1;?>-6-05" value="0.5" type="radio">
									        <label aria-label="1 star" class="rating__label" for="rating<?php echo $i+1;?>-6-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-6" id="rating<?php echo $i+1;?>-6-10" value="1" type="radio">
									        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-6-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-6" id="rating<?php echo $i+1;?>-6-15" value="1.5" type="radio">
									        <label aria-label="2 stars" class="rating__label" for="rating<?php echo $i+1;?>-6-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-6" id="rating<?php echo $i+1;?>-6-20" value="2" type="radio">
									        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-6-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-6" id="rating<?php echo $i+1;?>-6-25" value="2.5" type="radio" checked>
									        <label aria-label="3 stars" class="rating__label" for="rating<?php echo $i+1;?>-6-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-6" id="rating<?php echo $i+1;?>-6-30" value="3" type="radio">
									        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-6-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-6" id="rating<?php echo $i+1;?>-6-35" value="3.5" type="radio">
									        <label aria-label="4 stars" class="rating__label" for="rating<?php echo $i+1;?>-6-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-6" id="rating<?php echo $i+1;?>-6-40" value="4" type="radio">
									        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-6-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-6" id="rating<?php echo $i+1;?>-6-45" value="4.5" type="radio">
									        <label aria-label="5 stars" class="rating__label" for="rating<?php echo $i+1;?>-6-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-6" id="rating<?php echo $i+1;?>-6-50" value="5" type="radio">
									    </div>
									    <div class="rating-group">Développer la partie back-end d’une application web ou web mobile&nbsp;
									        <input class="rating__input rating__input--none" checked name="rating<?php echo $i+1;?>-7" id="rating<?php echo $i+1;?>-7-0" value="0" type="radio">
									        <label aria-label="0 stars" class="rating__label" for="rating<?php echo $i+1;?>-7-0">&nbsp;</label>
									        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-7-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-7" id="rating<?php echo $i+1;?>-7-05" value="0.5" type="radio">
									        <label aria-label="1 star" class="rating__label" for="rating<?php echo $i+1;?>-7-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-7" id="rating<?php echo $i+1;?>-7-10" value="1" type="radio">
									        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-7-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-7" id="rating<?php echo $i+1;?>-7-15" value="1.5" type="radio">
									        <label aria-label="2 stars" class="rating__label" for="rating<?php echo $i+1;?>-7-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-7" id="rating<?php echo $i+1;?>-7-20" value="2" type="radio">
									        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-7-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-7" id="rating<?php echo $i+1;?>-7-25" value="2.5" type="radio" checked>
									        <label aria-label="3 stars" class="rating__label" for="rating<?php echo $i+1;?>-7-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-7" id="rating<?php echo $i+1;?>-7-30" value="3" type="radio">
									        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-7-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-7" id="rating<?php echo $i+1;?>-7-35" value="3.5" type="radio">
									        <label aria-label="4 stars" class="rating__label" for="rating<?php echo $i+1;?>-7-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-7" id="rating<?php echo $i+1;?>-7-40" value="4" type="radio">
									        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-7-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-7" id="rating<?php echo $i+1;?>-7-45" value="4.5" type="radio">
									        <label aria-label="5 stars" class="rating__label" for="rating<?php echo $i+1;?>-7-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-7" id="rating<?php echo $i+1;?>-7-50" value="5" type="radio">
									    </div>
									    <div class="rating-group">Elaborer et mettre en œuvre des composants dans une application de gestion de contenu ou e-commerce&nbsp;
									        <input class="rating__input rating__input--none" checked name="rating<?php echo $i+1;?>-8" id="rating<?php echo $i+1;?>-8-0" value="0" type="radio">
									        <label aria-label="0 stars" class="rating__label" for="rating<?php echo $i+1;?>-8-0">&nbsp;</label>
									        <label aria-label="0.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-8-05"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-8" id="rating<?php echo $i+1;?>-8-05" value="0.5" type="radio">
									        <label aria-label="1 star" class="rating__label" for="rating<?php echo $i+1;?>-8-10"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-8" id="rating<?php echo $i+1;?>-8-10" value="1" type="radio">
									        <label aria-label="1.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-8-15"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-8" id="rating<?php echo $i+1;?>-8-15" value="1.5" type="radio">
									        <label aria-label="2 stars" class="rating__label" for="rating<?php echo $i+1;?>-8-20"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-8" id="rating<?php echo $i+1;?>-8-20" value="2" type="radio">
									        <label aria-label="2.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-8-25"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-8" id="rating<?php echo $i+1;?>-8-25" value="2.5" type="radio" checked>
									        <label aria-label="3 stars" class="rating__label" for="rating<?php echo $i+1;?>-8-30"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-8" id="rating<?php echo $i+1;?>-8-30" value="3" type="radio">
									        <label aria-label="3.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-8-35"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-8" id="rating<?php echo $i+1;?>-8-35" value="3.5" type="radio">
									        <label aria-label="4 stars" class="rating__label" for="rating<?php echo $i+1;?>-8-40"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-8" id="rating<?php echo $i+1;?>-8-40" value="4" type="radio">
									        <label aria-label="4.5 stars" class="rating__label rating__label--half" for="rating<?php echo $i+1;?>-8-45"><i class="rating__icon rating__icon--star fa fa-star-half"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-8" id="rating<?php echo $i+1;?>-8-45" value="4.5" type="radio">
									        <label aria-label="5 stars" class="rating__label" for="rating<?php echo $i+1;?>-8-50"><i class="rating__icon rating__icon--star fa fa-star"></i></label>
									        <input class="rating__input" name="rating<?php echo $i+1;?>-8" id="rating<?php echo $i+1;?>-8-50" value="5" type="radio">
									    </div>
								</div>

								<button class="accordion">Humeur du jour</button>
								<div class="panel">
									<!-- Radio buttons meteo forecast -->
									<div class="cc-selector">
								        <input id="One<?php echo $i+1;?>" type="radio" name="forecast" class="forecast" value="One<?php echo $i+1;?>" />
								        <label class="drinkcard-cc One" for="One<?php echo $i+1;?>"></label>
								        <input id="Two<?php echo $i+1;?>" type="radio" name="forecast" class="forecast" value="Two<?php echo $i+1;?>" />
								        <label class="drinkcard-cc Two"for="Two<?php echo $i+1;?>"></label>
								        <input id="Three<?php echo $i+1;?>" type="radio" name="forecast" class="forecast" value="Three<?php echo $i+1;?>" />
								        <label class="drinkcard-cc Three"for="Three<?php echo $i+1;?>"></label>
								        <input id="Four<?php echo $i+1;?>" type="radio" name="forecast" class="forecast" value="Four<?php echo $i+1;?>" />
								        <label class="drinkcard-cc Four"for="Four<?php echo $i+1;?>"></label>
								        <input id="Five<?php echo $i+1;?>" type="radio" name="forecast" class="forecast" value="Five<?php echo $i+1;?>" />
								        <label class="drinkcard-cc Five"for="Five<?php echo $i+1;?>"></label>
								    </div>
									<!-- / Radio buttons meteo forecast -->
								</div>

								<div>
									<button class="btnGoEval" id="btnBack" type="button" onclick="showProfilBlock(<?php echo $i+1;?>)">Back</button>
									<button class="btnGoEval" id="btnSubmit" type="submit">Send</button>
								</div>
							</form>
						</div>
					</div>
				</div>


			<?php }

			?>

				<!-- Next/previous controls -->
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>

				<!-- Caption text -->
				<div class="caption-container">
					<p id="caption"></p>
				</div>

				<!-- Thumbnail image controls -->
				<div class="row">
					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4284.jpg" onclick="currentSlide(1)" alt="Photo 1">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4288.jpg" onclick="currentSlide(2)" alt="Photo 2" >
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4291.jpg" onclick="currentSlide(3)" alt="Photo 3">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4293.jpg" onclick="currentSlide(4)" alt="Photo 4">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4296.jpg" onclick="currentSlide(5)" alt="Photo 5">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4298.jpg" onclick="currentSlide(6)" alt="Photo 6">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4300.jpg" onclick="currentSlide(7)" alt="Photo 7">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4303.jpg" onclick="currentSlide(8)" alt="Photo 8">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4305.jpg" onclick="currentSlide(9)" alt="Photo 9">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4309.jpg" onclick="currentSlide(10)" alt="Photo 10">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4310.jpg" onclick="currentSlide(11)" alt="Photo 11">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4314.jpg" onclick="currentSlide(12)" alt="Photo 12">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4320.jpg" onclick="currentSlide(13)" alt="Photo 13">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4323.jpg" onclick="currentSlide(14)" alt="Photo 14">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4324.jpg" onclick="currentSlide(15)" alt="Photo 15">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4332.jpg" onclick="currentSlide(16)" alt="Photo 16">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4338.jpg" onclick="currentSlide(17)" alt="Photo 17">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4340.jpg" onclick="currentSlide(18)" alt="Photo 18">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4344.jpg" onclick="currentSlide(19)" alt="Photo 19">
					</div>

					<div class="col-thumb">
						<img class="thumbnail" src="images/photos/MAD_4345.jpg" onclick="currentSlide(20)" alt="Photo 20">
					</div>	
				</div>
			</div>
		</div>

	<script type="text/javascript" src="js/javascript.js"></script>

	<?php

	$ID = 0;
	$getData = "NoData";

	if (array_key_exists("ID",$_GET)) {
		$ID = $_GET["ID"];
	}

	if ($ID) {
		echo "<script>\n";
		echo "openModal();\n";
		echo "currentSlide({$ID});\n";
		echo "window.history.pushState(\"DWWM\",\"DWWM\",\"/\");\n";
		echo "var getData = ".json_encode($_POST).";";
		echo "console.log(getData);\n";
		echo "</script>\n";
	}



	?>
</body>
</html>
