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

	<link rel="apple-touch-icon" sizes="57x57" href="../images/favicon.ico/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../images/favicon.ico/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/favicon.ico/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../images/favicon.ico/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/favicon.ico/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../images/favicon.ico/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../images/favicon.ico/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../images/favicon.ico/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../images/favicon.ico/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="../images/favicon.ico/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon.ico/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../images/favicon.ico/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../images/favicon.ico/favicon-16x16.png">
	<link rel="manifest" href="../images/favicon.ico/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="../images/favicon.ico/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

    <title>Numerik Games | clair-obscur</title><!-- Place favicon.ico in the root directory -->
    <!-- build:css styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="/bower_components/lity/dist/lity.min.css" />
    <link rel="stylesheet" href="/bower_components/toastr/toastr.css" />
    <!-- endbower -->
    <link rel="stylesheet" href="styles/tipsy.css" />
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
        <div class="triangle-topleft-en"></div>
        <div class="inner">
	        <div id="language"><a href="/kit">fr</a>/en</div>
	        <div class="container small-container">
		        <div id="landingIntro">
					<h1 class="huge">"clair-obscur"</h1>
					<h3 class="light">A video mapping experience for Numerik Games 2017</h3>

					<h3><span class="light">The deadline is set for the </span><s>15th</s> 30th of July  2017, 11:59 pm</h3>
		        </div>
	        </div>
        </div>
    </section>

    <section id="kit-intro" class="fullscreen">
		<div class="container small-container centered">
			<p>If video mapping is new for you, don't worry&nbsp;!</p>
			<p>You create the visuals, we take care of the technical aspects.</p>
			<p>On this page you will find the instructions, the models, and the masks needed to get started&nbsp;!</p>
			<p>If you have any questions, contact us on our <a href="https://www.facebook.com/ng17mapping/">Facebook page</a> or by <a href="mailto:mei@heig-vd.ch">email</a>.
		</div>
    </section>
	<section  id="kit-projection" class="negative">
		<div class="container small-container cols">
            <div class="col-part-1">
				<h2>the projection</h2>
				<p><b>When :</b><span>25th and 26th of August 2017, 8:30pm-12:00pm</span></p>
				<p><b>Where :</b><span>Place Pestalozzi, 1400 Yverdon-les-Bains</span></p>
				<p><b>Projector :</b><span>Christie Boxer, 4k, 30'000 lumens !</span></p>
				<p><b>Screen :</b><span>Neoclassical facade of <a href="http://heig.ch/dahi">Pestalozzi Temple</a></span></p>
            </div>
            <div class="col-part-2">
				<h4>Evening planning</h4>
				<p><b>8:30pm:</b><span>Projection start (sunset)</span></p>
				<p><b>9:00pm - 12:00pm:</b><span>Alternating : MEI game, your work&nbsp;!</span></p>
            </div>
		</div>
	</section>
	<section id="kit-specification" class="negative">
		<div class="container small-container">
			<h2>Specification</h2>
			<p>To ensure your work will be projection on the temple they need to respect these guidelines&nbsp;:</p>
			<h3>For videos</h3>
			<ul>
				<li>The theme "clair-obscur" is respected</li>
				<li>The architecture of the building is integrated</li>
				<li>Visuals are appropriate for all audiences and intellectual property is respected</li>
				<li>Video without audio</li>
				<li>The length of the video is between 30 and 120 seconds</li>
				<li>Resolution: 1300 x 1800 pixels (portrait/vertical mode)</li>
				<li>The video can't contain any logo's or brands</li>
				<li>Ideal codec :</li>
					<ul>
						<li>DXV 3 <a href="https://resolume.com/software/codec">more information</a></li>
					</ul>
			</ul>
			<h3>For images</h3>
			<ul>
				<li>The theme "clair-obscur" is respected</li>
				<li>The architecture of the building is integrated</li>
				<li>Visuals are appropriate for all audiences and intellectual property is respected</li>
				<li>Resolution: 1300 x 1800 pixels (portrait/vertical mode)</li>
				<li>The image can't contain any logo's or brands</li>
				<li>Format: PNG</li>
			</ul>
			<h3>How to submit your project?</h3>
			<p>You are free to use the service (google drive, Dropbox, WeTransfer, etc.) of you liking. Send us the link of your project(s) with the contact form below. Specify the name, nickname or company name you want to display with your video along with any other information you'd like to give.</p>
		</div>
	</section>
	<section id="kit-conseil">
		<div class="container small-container">
			<h3>Starter kit</h3>

			<div class="sketchfab-embed-wrapper"><iframe width="100%" height="500" src="https://sketchfab.com/models/c88bd9a1e0914af9b1a330077e6fd367/embed?preload=1" frameborder="0" allowvr allowfullscreen mozallowfullscreen="true" webkitallowfullscreen="true" onmousewheel=""></iframe>
				<p style="font-size: 13px; font-weight: normal; margin: 5px; color: #4A4A4A;">
				    <a href="https://sketchfab.com/models/c88bd9a1e0914af9b1a330077e6fd367?utm_medium=embed&utm_source=website&utm_campain=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Temple-scan</a>
				    by <a href="https://sketchfab.com/MediaIng?utm_medium=embed&utm_source=website&utm_campain=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">MediaIng</a>
				    on <a href="https://sketchfab.com?utm_medium=embed&utm_source=website&utm_campain=share-popup" target="_blank" style="font-weight: bold; color: #1CAAD9;">Sketchfab</a>
				</p>
			</div>

			<h4>Aesthetics</h4>
			<p>You cannot consider the facade of the temple as a standard screen. The architecture gives you a great opportunity for interesting visual effects. The more you play with it, the better.</p>
			<h4>Contrasts</h4>
			<p>Despite a powerful projector, the ambiant light, the yellowish tint of the bricks, and the multicolor windows tend to degrade the colors of the projected image. What you see on your screen will not exactly match the projection. To counter this phenomenon, play with contrasts and be creative. (Example: screen capture on the left and picture on the right)</p>
			<img class="thumb" src="../images/contrast_1.jpg"></img>
			<img class="thumb" src="../images/contrast_2.jpg"></img>
		</div>
	</section>
	<section id="kit-scene" class="negative">
		<div class="container small-container">
			<h3>Assets</h3>

			<h4>In 2D</h4>
			<p>If you decide to work with 2d software (ex: Photoshop, Illustrator, Gimp, After Effects, etc.), here are reference images and masks on which you should base your work&nbsp;:
			<div class="logos">
				<a id="gtm_2d_photoshop" class="button gtm_2d" target="_blank" href="https://drive.google.com/file/d/0B71jdVFE0ObJbGRBTExsN0tWem8/view?usp=sharing"><img src="../images/logo/Adobe_Photoshop_CS6_icon.png" /><span>Photoshop</span></a>
				<a id="gtm_2d_png"  class="button gtm_2d" target="_blank" href="https://drive.google.com/file/d/0B71jdVFE0ObJSnFhSmxnTm56eW8/view?usp=sharing"><img src="../images/logo/png.png" /><span>.png</span></a>
				<a id="gtm_2d_all" class="button gtm_2d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJd2Rrb2kydWU4WUk?usp=sharing"><img src="../images/logo/folder-xxl.png" /><span>complete folder</span></a>
			</div>

			<h4>In 3D</h4>
			<p>If you are working with a 3D software (ex:Blender, Maya, C4D, etc.) watch out for the position of the camera. It needs to be in the same position as the projector.</p>
			<p>Scenes with camera places in the right location with the right settings can be found here&nbsp;:</p>
			<h5>3D Scenes</h5>
			<div class="logos">
				<a id="gtm_scene_blender" class="button gtm_scene_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJTVYtOV9nR0NHaXc?usp=sharing"><img src="../images/logo/blender-plain.png" /><span>Blender</span></a>
				<a id="gtm_scene_maya" class="button gtm_scene_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJYXdXN2RULUFzcVE?usp=sharing"><img src="../images/logo/maya_logo.png" /><span>Maya</span></a>
				<a id="gtm_scene_cinema4d" class="button gtm_scene_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJQUtrT3Njc1JOb3M?usp=sharing"><img src="../images/logo/C4D_Logo.png" /><span>Cinema 4D</span></a>
				<a id="gtm_scene_all" class="button gtm_scene_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJWW9BXzdDbVlTcFE?usp=sharing"><img src="../images/logo/folder-xxl.png" /><span>complete folder</span></a>
			</div>

			<p>If you are using other software we can help you calibrate your camera.</p>

			<p>Here are the specifications: </p>
			<ul>
				<li>The temples pivot point is set at 0,0,0</li>
				<li>The cameras sensor is 23.11mm wide, 18mm high and 32mm diagonally</li>
				<ul>
					<li>Has a focal length of 56mm.</li>
					<li>Is placed 50 m. in front of the temple's pivot point, and 6 m. from the ground.</li>
					<li>Faces temple perpendicularly.</li>
					<li>Has an vertical offset (lens-shift / tilt-shift) to frame the whole building without moving the camera and therefore conserving the perspective.</li>
					<li>The value for the offset is different for each software. The solution is trial and error until it fits perfectly with one of the <a href="https://drive.google.com/drive/folders/0B71jdVFE0ObJTzZ3ZXdOVjFWLUk?usp=sharing">calibration image</a></li>
				</ul>
			</ul>
			<h4>Reference images</h4>
			<div class="logos">
				<a id="gtm_scene_all" class="button gtm_scene_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJeEw1X1hva3o2cFU"><img src="images/logo/folder-xxl.png" /><span>Image folder</span></a>
			</div>
			<p>Need help ? Contact us.</p>
		</div>
	</section>
	<section id="kit-modele" class="negative">
		<div class="container small-container">
			<h4>3D model</h4>
			<div class="section">
				<div class="button-container"><a id="gtm_model_las" title="This point cloud was created by EC+G students from the geomatics department. It was captured with a ScanStation from Leica and edited with 3DReshaper." class="button gtm_model_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJOFU3ZjVVaGxOOGM?usp=sharing">Temple-PointCloud.las</a></div>
				<p>This is a point cloud file generated by a laser scanner (Lidar). If you have never experimented with a point cloud you can ignore this file and use the two other models.</p>
			</div>
			<div class="section">
				<div class="button-container"><a id="gtm_model_scan" class="button gtm_model_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJNnJvcFA5YU5QTnM?usp=sharing">Temple-scan</a></div>
				<p>This is a folder containing a model of the temple generated from the point cloud above. This model is a compromise between detail and the performance. (200'000 points)
			</div>
			<div class="section">
				<div class="button-container"><a id="gtm_model_model" class="button gtm_model_3d" target="_blank" href="https://drive.google.com/drive/folders/0B71jdVFE0ObJOFkxLURnMno4WTA?usp=sharing">Temple-model</a></div>
				<p>This is a folder containing a model of the temple created from photos and the point cloud as reference. This model is a lot lighter but is lacking some details. (10'000 points) </p>
			</div>
			<div class="section">
		</div>
	</section>
	<section id="kit-footer" class="negative">
		<div class="container small-container centered">
			<p>Need help ? Do you have other ideas or suggestions&nbsp;? Contact us&nbsp;!</p>
		</div>
		<div class="container small-container cols">
			<div class="col">
				<h4>Licence</h4>
				<p>All files exchanged are under the <a href="https://creativecommons.org/licenses/by-sa/4.0/deed.fr">CC Attribution-ShareAlike 4.0 International.</a> licence</p>
				<h4>Links</h4>
				<div class="socials">
					<div class="social"><a class="gtm_social" id="gtm_facebook" href="https://www.facebook.com/ng17mapping/"><i class="fa fa-facebook fa-2x"></i></a></div>
					<div class="social"><a class="gtm_social" id="gtm_instagram" href="https://www.instagram.com/ng17mapping/"><i class="fa fa-instagram fa-2x"></i></a></div>
					<div class="social"><a class="gtm_social" id="gtm_linkedin" href="https://www.linkedin.com/company/media-engineering-institute"><i class="fa fa-linkedin fa-2x"></i></a></div>
					<div class="social"><a class="gtm_social" id="gtm_mei" href="http://mei.heig-vd.ch/"><i class="fa fa-link fa-2x"></i></a></div>
					<div class="social"><a class="gtm_social" id="gtm_mail" href="mailto:mei@heig-vd.ch"><i class="fa fa-envelope fa-2x"></i></a></div>
				</div>
			</div>
			<div class="col">
				<h4>Contact</h4>
                    <form id="contact-form" class="gtm_form" action="process.php" method="post" novalidate="novalidate" val-email="Please enter a valid email address."  val-req="All fields are required.">
	                    <input type="hidden" name="subject" value="NG17 contact from kit">
                        <div class="form-row">
                            <label class="label-text" for="name">Name:</label>
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
                            <button id="gtm_kit_contact" type="submit" name="submit" value="Send">Send</button>
                            <span id="loading-contact"></span>
                        </div>
                    </form>

                    <div id="submit-message-contact" success="Thank you! Your mail was sent." retry="Sorry, we were not able to send the mail, please try again later" failed="Sorry, we ran into some issues">
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
    <script src="/bower_components/toastr/toastr.js"></script>
    <!-- endbower -->
	<script src="scripts/jquery.tipsy.js"></script>
    <!-- endbuild -->
    <!-- youtube -->
    <script async="" src="https://www.youtube.com/iframe_api" type="text/javascript"></script>
    <!-- build:js scripts/main.js -->
    <script src="scripts/main.js" type="text/javascript"></script>
    <!-- endbuild -->
</body>
</html>
