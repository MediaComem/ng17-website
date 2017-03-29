<?php
ini_set("log_errors", 1);
ini_set("error_log", "./tmp/php-error.log");

session_start();

$name = '';
$email = '';
$message = '';

if (isset($_SESSION['return_data'])) {

	$formOK = $_SESSION['return_data']['formOK'];
	$entries = $_SESSION['return_data']['entries'];
	$errors = $_SESSION['return_data']['errors'];
	unset($_SESSION['return_data']);

	if (!$formOK) {
		foreach ($entries as $key => $value) {
			${$key} = $value;
		}
		$submitmessage = 'Oups, il y a eu un problème.';
		$responsetype = 'failure';
	}
	else {
		$submitmessage = 'Merci! Votre email est envoyé.';
		$responsetype = 'success';
	}
}
?>
<!DOCTYPE html>

<html class="no-js" lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="description" content="Tente l'expérience du vidéo mapping, en grandeur nature !">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex">
    <!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TTFCNHC');</script>
	<!-- End Google Tag Manager -->
	
	<link rel="apple-touch-icon" sizes="57x57" href="images/favicon.ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="images/favicon.ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicon.ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/favicon.ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicon.ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/favicon.ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="images/favicon.ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="images/favicon.ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="images/favicon.ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="images/favicon.ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon.ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="images/favicon.ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico/favicon-16x16.png">
	<link rel="manifest" href="images/favicon.ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="images/favicon.ico/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <title>Numerik Games | clair-obscur</title><!-- Place favicon.ico in the root directory -->
    <!-- build:css styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="/bower_components/lity/dist/lity.min.css" />
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href="styles/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"><!-- endbuild -->
    <script src="https://use.fontawesome.com/941a4b86b2.js"></script>
    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="/bower_components/modernizr/modernizr.js" type="text/javascript">
</script><!-- endbuild -->
</head>

<body class="kit">
	
	<!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTFCNHC"
		height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->
	
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <section id="kit-landing" class="fullscreen home negative">
        <div class="triangle-topleft"></div>

        <div class="inner">
	        <div class="container small-container">
		        <div id="landingIntro">
					<h1 class="huge">« clair - obscur »</h1>
					<h3 class="light">Une expérience de vidéomapping participatif dans le cadre de Numerik Games 2017</h3>
					
					<h3><span class="light">Deadline pour la livraison est fixée au</span> 15 juillet 2017, 00h00</h3>
		        </div>
	        </div>
        </div>
    </section>

    <section id="kit-intro" class="fullscreen">
		<div class="container small-container centered">
			<p>Si le mapping vidéo est nouveau pour vous, ne vous inquiétez pas&nbsp;!</p>
			
			<p>L’objectif est simple&nbsp;: vous nous fournissez du contenu et nous nous occupons de la partie technique.</p>
			
			<p>Vous trouverez ci-dessous les instructions, les modèles et les masques utiles à exprimer votre talent&nbsp;!</p>
			
			<p>Si des informations vous manquent, n'hésitez pas à nous contacter sur mei@heig-vd.ch.</p>
		</div>
    </section>
	<section  id="kit-projection" class="negative">
		<div class="container small-container cols">
            <div class="col-part-1">
				<h2>La projection</h2>
				<p><b>Quand :</b><span>25 et 26 août 2017, de 20h30 à 00h00</span></p>
				<p><b>Où :</b><span>Place Pestalozzi, 1400 Yverdon-les-Bains</span></p>
				<p><b>Projecteur :</b><span>Christie Boxer, 4k, 30'000 lumens !</span></p>
				<p><b>Ecran :</b><span>Façade néoclassique du <a href="http://heig.ch/dahi">Temple Pestalozzi</a></span></p>
            </div>
            <div class="col-part-2">
				<h4>Déroulement type d’une soirée</h4>
				<p><b>20h30:</b><span>Début de la projection (coucher de soleil)</span></p>
				<p><b>21h00 - 00h00:</b><span>En alternance : jeux MEI, vos œuvres !</span></p>
            </div>
		</div>
	</section>
	<section id="kit-specification" class="negative">
		<div class="container small-container">
			<h2>Spécifications</h2>
			<p>Pour que vos travaux soient affichés et vus un maximum de fois par un maximum de spectateurs, ils doivent respecter un minimum de contraintes :</p>
			<h3>Catégorie vidéo</h3>
			<ul>
				<li>Prise en compte du thème « clair-obscur »</li>
				<li>Prise en compte de l’architecture du bâtiment</li>
				<li>Visuels tout public, et respect du droit d’auteur sans bande son</li>
				<li>Durée préconisée, entre 30 et 120 secondes</li>
				<li>Résolution: 1300 x 1800 pixels (en mode portrait/vertical)</li>
				<li>Codec souhaité pour le rendu final :</li>
					<ul>
						<li>DXV 3 <a href="https://resolume.com/software/codec">Plus d'info</a></li>
					</ul>
			</ul>
			<h3>Catégorie image</h3>
			<ul>
				<li>Prise en compte du thème « clair-obscur »</li>
				<li>Prise en compte de l’architecture du bâtiment</li>
				<li>Visuels tout public, et respect du droit d’auteur</li>
				<li>Résolution: 1300 x 1800 pixels (en mode portrait/vertical)</li>
				<li>Format PNG</li>
			</ul>
			<h3>Comment rendre le projet?</h3>
			<p>Vous êtes libre d'utiliser le service de votre choix (google drive, Dropbox, WeTransfer, etc.) pour nous rendre votre travail. Envoyez-nous les liens de votre fichier avec le formulaire de contact ci-dessous et précisez le nom, pseudo ou entreprise qui va apparaitre avec votre vidéo.</p>
		</div>
	</section>
	<section id="kit-conseil">
		<div class="container small-container">
			<h3>Kit de base</h3>
			
			<div class="sketchfab-embed-wrapper"><iframe width="100%" height="500" src="https://sketchfab.com/models/c88bd9a1e0914af9b1a330077e6fd367/embed?preload=1" frameborder="0" allowvr allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel=""></iframe>
				<p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
				    <a href="https://sketchfab.com/models/c88bd9a1e0914af9b1a330077e6fd367?utm_medium=embed&utm_source=website&utm_campain=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Temple-scan</a>
				    by <a href="https://sketchfab.com/MediaIng?utm_medium=embed&utm_source=website&utm_campain=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">MediaIng</a>
				    on <a href="https://sketchfab.com?utm_medium=embed&utm_source=website&utm_campain=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a>
				</p>
			</div>
			
			<h4>Esthétique</h4>
			<p>Vous ne pouvez pas considérer la façade comme un simple écran. Plus vous jouerez avec l’architecture du bâtiment plus le rendu graphique sera saisissant.</p>
			<h4>Contrastes</h4>
			<p>Malgré la nuit, la lumière ambiante, les surfaces comme les pierres jaunâtres, et les vitraux multicouleur qui constituent la façade ont tendance à ternir les couleurs. Le rendu sur votre écran n’est donc pas fiable. Pour lutter contre ce phénomène, jouez avec les contrastes et soyez créatif&nbsp;!
			Exemples (copie d’écran à gauche, photo de façade à droite)&nbsp;:</p>
			<img class="thumb" src="images/contrast_1.jpg"></img>
			<img class="thumb" src="images/contrast_2.jpg"></img>
		</div>
	</section>
	<section id="kit-scene" class="negative">
		<div class="container small-container">
			<h3>Les Scène 3D</h3>
			<p>Les masques et les modèles disponibles ci-dessous sont produits sur la base de simulations qui tiennent compte de l’emplacement du projecteur et de la focale de sa lentille.</p>
			
			
			<h4>en 2D</h4>
			<p>Si vous décidez de travailler avec un programme 2D (ex: Photoshop, Illustrator, Gimp, After Effects, etc.), voici les images de référence et les masques sur lesquels vous caler&nbsp;:</p>
			<div class="logos"> 
				<a id="gtm_2d_photoshop" class="button gtm_2d" target="_blank" href="https://drive.google.com/file/d/0B71jdVFE0ObJbGRBTExsN0tWem8/view?usp=sharing"><img src="images/logo/Adobe_Photoshop_CS6_icon.png" /><span>Photoshop</span></a>
				<a id="gtm_2d_png"  class="button gtm_2d" target="_blank" href="https://drive.google.com/file/d/0B71jdVFE0ObJSnFhSmxnTm56eW8/view?usp=sharing"><img src="images/logo/png.png" /><span>.png</span></a>
				<a id="gtm_2d_all" class="button gtm_2d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJd2Rrb2kydWU4WUk?usp=sharing"><img src="images/logo/folder-xxl.png" /><span>Dossier complet</span></a>
			</div>
			
			<h4>en 3D</h4>
			<p>Si vous travaillez avec un programme 3D (Blender, Maya, C4D, etc.) il faut faire très attention à la position de la caméra. Elle doit être dans la même position que le projecteur.</p>
			
			<p>Des scènes avec des caméras déjà placées correctement se trouvent dans le dossier suivant&nbsp;:</p>
			<h5>Scene 3D</h5>
			<div class="logos"> 
				<a id="gtm_scene_blender" class="button gtm_scene_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJTVYtOV9nR0NHaXc?usp=sharing"><img src="images/logo/blender-plain.png" /><span>Blender</span></a>
				<a id="gtm_scene_maya" class="button gtm_scene_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJYXdXN2RULUFzcVE?usp=sharing"><img src="images/logo/maya_logo.png" /><span>Maya</span></a>
				<a id="gtm_scene_cinema4d" class="button gtm_scene_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJQUtrT3Njc1JOb3M?usp=sharing"><img src="images/logo/C4D_Logo.png" /><span>Cinema 4D</span></a>
				<a id="gtm_scene_all" class="button gtm_scene_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJWW9BXzdDbVlTcFE?usp=sharing"><img src="images/logo/folder-xxl.png" /><span>Dossier complet</span></a>
			</div>
			
			<p>Si vous utilisez un autre logiciel nous pouvons vous aider à caler votre caméra.</p>
			<p>Voici quelques informations utiles :</p>
			<ul>
				<li>Le temple placé au point 0,0,0 depuis son point de pivot.</li>
				<li>La caméra dispose d’un capteur de 23.11mm de largeur, 18mm de hauter et 32mm de diagonale.</li>
				<ul>
					<li>elle a une focale de 56mm</li>
					<li>elle est placée à 50 m. devant le point de pivot du temple, et à 6 m. d’altitude.</li>
					<li>elle pointe perpendiculairement à la façade</li>
					<li>elle utilise un offset (lens-shift / tilt-shift) vertical pour cadrer le temple en entier sans déplacer la caméra tout en conservant les perspectives.</li>
					<li>La valeur pour l’offset peut être différente dans chaque logiciel. La solution consiste à essayer d’ajuster la valeur jusqu'à ce que votre rendu se superpose correctement au masque (cf. superpose.png).</li>
				</ul>
			</ul>
			
			<p>Besoin d’aide ? Contactez-nous.</p>
		</div>
	</section>
	<section id="kit-modele" class="negative">
		<div class="container small-container">
			<h4>Les Modèles 3D</h4>
			<div class="section">
				<div class="button-container"><a id="gtm_model_las" class="button gtm_model_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJOFU3ZjVVaGxOOGM?usp=sharing">Temple-PointCloud.las</a></div>	
				<p>Un fichier contenant un nuage de points généré par un scanner laser. Si vous n’avez jamais travaillé avec un nuage de points, vous pouvez ignorer ce fichier et utiliser les deux autres modèles (nombre de points ?).</p>
			</div>
			<div class="section">	
				<div class="button-container"><a id="gtm_model_scan" class="button gtm_model_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJNnJvcFA5YU5QTnM?usp=sharing">Temple-scan</a></div>
				<p>Un dossier contenant un modèle du temple généré directement depuis le nuage de points. Ce modèle est un compromis entre la qualité et les besoins de performance de votre machine (200’000 points).</p>
			</div>
			<div class="section">
				<div class="button-container"><a id="gtm_model_model" class="button gtm_model_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJOFkxLURnMno4WTA?usp=sharing">Temple-model</a></div>
				<p>Un dossier contenant un modèle du temple modélisé avec des photos et le nuage de point comme référence. Ce fichier est beaucoup plus léger mais ne contient pas tous les détails (nombre de points ?).</p>
			</div>
			<div class="section">
		</div>
	</section>
	<section id="kit-footer" class="negative">
		<div class="container small-container centered">
			<p>Besoin d’aide ? d’autres idées ou propositions&nbsp? Contactez-nous&nbsp;!</p>
		</div>
		<div class="container small-container cols">
			<div class="col">
				<h4>Licence</h4>
				<p>Tous les fichiers échangés sont sous licence <a href="https://creativecommons.org/licenses/by-sa/4.0/deed.fr">CC Attribution-ShareAlike 4.0 International.</a></p>
				<h4>Contact</h4>
				<p></p>
				<div class="social"><a class="gtm_social" id="gtm_facebook" href="https://www.facebook.com/ng17mapping/"><i class="fa fa-facebook fa-2x"></i></a></div>
				<div class="social"><a class="gtm_social" id="gtm_instagram" href="https://www.instagram.com/ng17mapping/"><i class="fa fa-instagram fa-2x"></i></a></div>
				<div class="social"><a class="gtm_social" id="gtm_linkedin" href="https://www.linkedin.com/company/media-engineering-institute"><i class="fa fa-linkedin fa-2x"></i></a></div>
				<div class="social"><a class="gtm_social" id="gtm_mei" href="http://mei.heig-vd.ch/"><i class="fa fa-link fa-2x"></i></a></div>
				<div class="social"><a class="gtm_social" id="gtm_mail" href="mailto:mei@heig-vd.ch"><i class="fa fa-envelope fa-2x"></i></a></div>
			</div>
			<div class="col">
				<h4>Contact</h4>
                    <form id="contact-form" class="gtm_form" action="process.php" method="post" novalidate="novalidate">
	                    <input type="hidden" name="subject" value="NG17 contact from kit">
                        <div class="form-row">
                            <label class="label-text" for="name">Nom:</label>
                            <input id="name" type="text" name="name" <?php if (isset($errors['name'])) { echo 'class="error"';}?> value="<?php echo $name; ?>" required="required">
                            <?php if (isset($errors['name'])): ?><label class="error"><?php echo $errors['name']; ?></label><?php endif; ?>
                        </div>

                        <div class="form-row">
                            <label class="label-text" for="email">Email:</label>
                            <input id="email" type="email" name="email" <?php if (isset($errors['email'])) { echo 'class="error"';}?> value="<?php echo $email; ?>" required="required">
                            <?php if (isset($errors['email'])): ?><label class="error"><?php echo $errors['email']; ?></label><?php endif; ?>
                        </div>

                        <div class="form-row">
                            <label class="label-text" for="message">Message:</label>
                            <textarea id="message" type="" name="message" rows="4" <?php if (isset($errors['message'])) { echo 'class="error"';}?> required="required"><?php echo $message; ?></textarea>
                            <?php if (isset($errors['message'])): ?><label class="error"><?php echo $errors['message']; ?></label><?php endif; ?>
                        </div>

                        <div class="form-row">
                            <button id="gtm_kit_contact" type="submit" name="submit" value="Send">Envoyer</button>
                            <span id="loading-contact"></span>
                        </div>
                    </form>

                    <div id="submit-message-contact">
                        <span class="<?php echo (isset($formOK) ? $responsetype : 'hidden'); ?>"><?php if(isset($formOK)) { echo $submitmessage; } ?></span>
                    </div>
			</div>
		</div>
	</section>

    <!-- build:js scripts/vendor.js -->
    <!-- bower:js -->
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/modernizr/modernizr.js"></script>
    <script src="/bower_components/lity/dist/lity.min.js"></script>
    <script src="/bower_components/jquery-validation/dist/jquery.validate.js"></script>
    <script src="/bower_components/jquery-form/jquery.form.js"></script>
    <!-- endbower -->
    <!-- endbuild -->
    <!-- youtube -->
    <script async="" src="https://www.youtube.com/iframe_api" type="text/javascript"></script>
    <!-- build:js scripts/main.js -->
    <script src="scripts/main.js" type="text/javascript"></script>
    <!-- endbuild -->
</body>
</html>
