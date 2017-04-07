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
    <!-- Update your html tag to include the itemscope and itemtype attributes. -->
	<html itemscope itemtype="http://schema.org/Article">
	
	<!-- Place this data between the <head> tags of your website -->
	<title>Numerik Games | clair-obscur</title>
	<meta name="description" content="Appel à projets mapping vidéo de Numerik Games 2017" />
	
	<!-- Schema.org markup for Google+ -->
	<meta itemprop="name" content="Numerik Games | clair-obscur">
	<meta itemprop="description" content="Appel à projets mapping vidéo de Numerik Games 2017">
	<meta itemprop="image" content="http://ng17.heig-vd.ch/images/home_bg.jpg">
	
	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@media_heigvd">
	<meta name="twitter:title" content="Numerik Games | clair-obscur">
	<meta name="twitter:description" content="Appel à projets mapping vidéo pour Numerik Games 2017">
	<meta name="twitter:creator" content="@media_heigvd">
	<!-- Twitter summary card with large image must be at least 280x150px -->
	<meta name="twitter:image:src" content="http://ng17.heig-vd.ch/images/home_bg.jpg">
	
	<!-- Open Graph data -->
	<meta property="og:title" content="Numerik Games | clair-obscur" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="http://ng17.heig-vd.ch" />
	<meta property="og:image" content="http://ng17.heig-vd.ch/images/NG17-FB-post-link_2.jpg" />
	<meta property="og:image" content="http://ng17.heig-vd.ch/images/home_bg.jpg" />
	<meta property="og:description" content="Appel à projets mapping vidéo pour Numerik Games 2017" />
	<meta property="og:site_name" content="Numerik Games | clair-obscur" />
	<meta property="article:published_time" content="2017-03-16T09:00:00+01:00" />
<!-- 	<meta property="article:modified_time" content="2017-03-16T19:08:47+01:00" /> -->
	<meta property="fb:admins" content="Facebook numberic ID" />
	
	<link rel="alternate" hreflang="fr" href="http://ng17.heig-vd.ch" />
	
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

<body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <!-- Google Tag Manager (noscript) -->
	<noscript>
		<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTFCNHC"
		height="0" width="0" style="display:none;visibility:hidden"></iframe>
	</noscript>
	<!-- End Google Tag Manager (noscript) -->

    <section id="landing" class="fullscreen home negative">
        <div class="triangle-topleft"></div>

        <div class="video-background">
            <div class="video-foreground">
                <div id="youtube"></div>
            </div>
        </div>

        <div class="inner">
			<div id="language"><a href="/">fr</a>/en</div>
            <div class="container small-container">
                <div id="landingIntro">
                    <h2 class="light">Numerik Games</h2>

                    <h3 class="light">August 25 - 27 2017</h3>

                    <h1 id="main-title" class="huge">Bored of your monitor&nbsp;?<br>
                    Time to go big&nbsp;!</h1><a href="#intro"><button>Learn more</button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="intro">
        <div class="intro-part part-1 negative centered">
            <p class="paraA light container small-container">video, animation, illustration,<br>
            pixels, vectors, 2D, 3D...<br>
            <strong>Do these domains spike an interest in you&nbsp;?</strong></p>

            <p class="paraB container small-container">If so, this is your opportunity to project your creation<br>
            on the historic Temple in Yverdon-les-Bains' city center&nbsp;!</p>
        </div>

        <div class="container small-container cols">
            <div class="col-part-1">
                <p><strong>Numerik Games</strong> is a festival for all organized by <a href="http://www.ailleurs.ch">la Maison d'Ailleurs</a>, the city of <a href="http://www.ylb.ch">Yverdon-les-Bains</a> and <a href="http://www.heig-vd.ch">HEIG-VD</a>. It offers conferences, performances and entertainment around the Digital transition theme.</p>
				<p>This edition, we celebrate a new era overwhelming with technologies. Our way of life is disrupted, new social and cultural practices emerge. A deep transformation  is under way. This is clear, but do we have to perceive it in a gloomy light&nbsp;?
				<p>This festival is a celebration but it is also a platform for critical thinking&nbsp;!
            </div>

            <div class="col-part-2">
                <p class="large">How do you see our future&nbsp;?</p>
				<p>You have the unique chance of expressing yourself. The chosen theme is The chosen theme is <strong>"clair-obscur"</strong>, light and dark, the good or the bar, playing with contrast and the architecture of the building.</p>
				<p>The theme can be interpreted abstractly, figuratively, metaphorically.</p>
				<p>Let your creativity speak for itself&nbsp;!</p>
            </div>
        </div>
    </section>

    <section id="details">
        <div class="inner">
            <div class="container small-container centered">
                <ul class="tabs">
                    <li class="tab"><a class="tablink light one" href="#tab-video"><span class="light">Video & Animation</span></a></li>

                    <li class="tab"><a class="tablink light two" href="#tab-image"><span class="light">Image & Illustration</span></a></li>
                </ul>
            </div>

            <div id="tab-video" class="tab-content negative one">
                <div class="container small-container">
                    <div class="wireframe only-medium"></div>

                    <h2><span class="light">Creating</span> a video</h2>

                    <div class="wireframe only-mobile"></div>
					<p>Abiding by the guidelines, you're video will be shown at least once during the festival. The projection will last over six hours spread over two nights. Alternating between your videos and an interactive experiences using the audience's smartphones. An internal <strong>jury</strong> will take the following criteria into account: the interpretation of the theme, the aesthetic dimension, the use of the architecture. The best projects will be shown multiple times. More detailed guidlines can be found on the <strong>starter kit</strong> that will be sent to you after registering below.</p>
                </div>
            </div>

            <div id="tab-image" class="tab-content negative two">
                <div class="container small-container">
                    <div class="wireframe only-medium"></div>

                    <h2><span class="light">Creating</span> an image</h2>
					
					<p>Low on time&nbsp;? You can also create an illustration or a collection of images that will be integrated in a <a href="https://youtu.be/q6tX4YJ9FXE">collaborative game</a> projected on the temple. The audience, with the use of their smartphone, will be able to interact with the wall revealing the image hidden behind it. Further rules and guidelines can be found in the <strong>starter kit</strong> that will be sent to you after registering below.

                    <div class="wireframe only-mobile"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="participer" class="negative">
        <div class="container small-container">
            <h2>Take part</h2>
			<p>Fill the form below to receive a link by mail with all the information and assets needed to start your projets.</p>

            <form id="participation-form" class="gtm_form" action="process.php" method="post" novalidate="novalidate">
	            <input type="hidden" name="subject" value="NG17 participant">
				<input type="hidden" name="message" value="Nouvelle participation">
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
                    <button id="gtm_participate" type="submit" name="submit" value="Send">Contribute</button>
                    <span id="loading-participation"></span>
                </div>
            </form>
            <div id="submit-message-participation">
                <span class="<?php echo (isset($formOK) ? $responsetype : 'hidden'); ?>"><?php if(isset($formOK)) { echo $submitmessage; } ?></span>
            </div>
            <p class="deadline">The project submission deadline is set for the 15th of july 2017, 00h00</p>
        </div>
    </section>

    <section id="a-propos">
        <div class="container">
            <div id="qui-sommes-nous" class="negative left">
                <div class="small-container">
                    <h2>Who are we&nbsp;?<a class="mei-logo" href="http://mei.heig-vd.ch"></a></h2>
					<p class="para-1">We are the <strong><a href="http://mei.heig-vd.ch">Media Engineering Institute</a></strong> (MEI), the research unit of the <strong>HEIG-VD</strong> active in digital media.</p>
					<p class="para-2">We have been actively supporting this festival since it's creation. This year we want you to take part. Here are links to our previous contributions:</p>

	                    <a href="http://blog.comem.ch/2015/11/16/numerik-games-le-teaser-2015/">
		                    <button type="button" name="projection-2015">Performance 2015</button>
		                </a>

	                    <a href="https://www.youtube.com/watch?v=zwJcBfS-gbU" data-lity="">
		                    <button type="button" name="projection-2016">Performance 2016</button>
		                </a>
                </div>
            </div>

            <div id="contact" class="right">
                <div class="small-container">
                    <h2>Contact</h2>
					<p>Ask us anything</p>

                    <form id="contact-form" class="gtm_form" action="process.php" method="post" novalidate="novalidate">
	                    <input type="hidden" name="subject" value="NG17 contact">
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
	                        <div class="socials">
								<div class="social"><a class="gtm_social" id="gtm_instagram" href="https://www.instagram.com/ng17mapping/"><i class="fa fa-instagram fa-2x"></i></a></div>
			                    <div class="social"><a class="gtm_social" id="gtm_facebook" href="https://www.facebook.com/ng17mapping/"><i class="fa fa-facebook fa-2x"></i></a></div>
								<div class="social"><a class="gtm_social" id="gtm_linkedin" href="https://www.linkedin.com/company/media-engineering-institute"><i class="fa fa-linkedin fa-2x"></i></a></div>
								<div class="social"><a class="gtm_social" id="gtm_mei" href="http://mei.heig-vd.ch/"><i class="fa fa-link fa-2x"></i></a></div>
								<div class="social"><a class="gtm_social" id="gtm_mail" href="mailto:mei@heig-vd.ch"><i class="fa fa-envelope fa-2x"></i></a></div>
		                    </div>
                            <button id="gtm_index_contact" type="submit" name="submit" value="Send">Send</button>
                            <span id="loading-contact"></span>
                        </div>
                    </form>

                    <div id="submit-message-contact">
                        <span class="<?php echo (isset($formOK) ? $responsetype : 'hidden'); ?>"><?php if(isset($formOK)) { echo $submitmessage; } ?></span>
                    </div>
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
