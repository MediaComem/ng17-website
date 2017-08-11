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
		$submitmessage = 'Merci! Votre email est envoyé. <a href="http://ng17.heig-vd.ch/kit">Voici le kit de base </a> pour vous lancer dans votre projet';
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
    <link rel="stylesheet" href="/bower_components/toastr/toastr.css" />
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
        <a href="http://numerik-games.ch" class="triangle-topleft"></a>

        <div class="video-background">
            <div class="video-foreground">
                <div id="youtube"></div>
            </div>
        </div>

        <div class="inner">
			<div id="language">fr/<a href="/en">en</a></div>
            <div class="container small-container">
                <div id="landingIntro">
										<img class="logo" src="/images/logo_eclair-ages.png" />
                    <h3 class="light">August 25th and 26th 2017</h3>
										<h2>Place pestalozzi</h2>
										<h3 class="light">Yverdon-les-bain</h2>
										</h1><a href="#intro"><button>More</button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="intro">
        <div class="intro-part part-1 negative centered">
            <p class="paraA light container small-container">Projection mapping,<br>
            Collaborative games,<br>
            <strong>and much more&nbsp;!</strong></p>
						<p class="paraB container small-container">It is an opportunity for a good time, to play on Yverdon-les-Bains's temple and appreciate the work of the artists that took on the challenge. You will be able to appreciate all of that from the many terraces place Pestalozzi has to offer.&nbsp;!</p>
        </div>

        <div class="container small-container cols">
            <div class="col-part-1">
                <p><strong>Numerik Games</strong> is a festival for all organized by <a href="http://www.ailleurs.ch">Maison d'Ailleurs</a>, the city of <a href="http://www.ylb.ch">Yverdon-les-Bains</a> and <a href="http://www.heig-vd.ch">HEIG-VD</a>. It offers conferences, performances and entertainment around the Digital transition theme.</p>
                <p>This edition, we celebrate a new era overwhelming with technologies. Our way of life is disrupted, new social and cultural practices emerge. A deep transformation is under way. This is clear, but do we have to perceive it in a gloomy light ?</p>
            </div>

            <div class="col-part-2">
								<p>In this free section of the festival, you will be able to discover unique creations based on the theme "clair-obscur" that were created by the artists that answered our call for the project. The video mapping projects will be projected on the nights of the 25th and the 26th on a 27-meter high temple along with multiple interactive games and augmented reality experiments allowing you to interact with the same temple through your phone.</p>
            </div>
        </div>
    </section>

    <section id="apercu">
			<div class="box">
	      <div class="container small-container">
	        <h2 class="title center negative"><span class="light">A preview of the</span> artists</h2>
				<ul class="flex-container">
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Frantisek_Pechacek.jpg"></img>
							</div>
							<div class="desc">
								<h4>Frantisek Pechacek</h4>
								<p>Black Division<p>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="http://www.blackdivision.cz"><i class="fa fa-link fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/blackdivisioncz/"><i class="fa fa-facebook fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/clairo_mylenedreyer.jpg"></img>
							</div>
							<div class="desc">
								<h4>Mylène Dreyer</h4>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="http://www.mylenedreyer.ch"><i class="fa fa-link fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Gildas_Malassinet-Tannou.jpg"></img>
							</div>
							<div class="desc">
								<h4>Gildas Malassinet-Tannou</h4>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="https://www.youtube.com/user/ICARART/"><i class="fa fa-youtube-play fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/gildaslightpainting"><i class="fa fa-facebook fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="http://www.icarart.com"><i class="fa fa-link fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Iglal.jpg"></img>
							</div>
							<div class="desc">
								<h4>Iglal Boulad</h4>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="http://iglal.boulad.net/"><i class="fa fa-link fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Jerem_oury.jpg"></img>
							</div>
							<div class="desc">
								<h4>Jerem Oury</h4>
								<p>Studio Echelon Mapping</p>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="https://vimeo.com/jeremoury"><i class="fa fa-vimeo fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://echelon8.wixsite.com/echelon8/mapping"><i class="fa fa-link fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/studioechelonmapping/"><i class="fa fa-facebook fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.instagram.com/studio_echelon_mapping/"><i class="fa fa-instagram fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Kylan_Luginbuhl.jpg"></img>
							</div>
							<div class="desc">
								<h4>Kylan Luginbuhl</h4>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/kylanluginbuhldesign/"><i class="fa fa-facebook fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Linda_Kocher.jpg"></img>
							</div>
							<div class="desc">
								<h4>Linda Kocher</h4>
							</div>
							<ul class="contributor-social">
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Louis_Philippe.jpg"></img>
							</div>
							<div class="desc">
								<h4>Louis Philippe</h4>
								<p>Resonance Visuals</p>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/ResonanceVisuals/"><i class="fa fa-facebook fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.instagram.com/resonance_visuals/"><i class="fa fa-instagram fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Mirko_Stanchieri.jpg"></img>
							</div>
							<div class="desc">
								<h4>Mirko Stanchieri</h4>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="https://twitter.com/winnyxbear"><i class="fa fa-twitter fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://vimeo.com/user11176421"><i class="fa fa-vimeo fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.instagram.com/winnyxbear/"><i class="fa fa-instagram fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.behance.net/theGrizzli"><i class="fa fa-link fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Philippe_Rohrbach.jpg"></img>
							</div>
							<div class="desc">
								<h4>Philippe Rohrbach</h4>
								<p>dap-dap</p>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="https://twitter.com/mr_dap_dap"><i class="fa fa-twitter fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/MrDapDap/"><i class="fa fa-facebook fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="http://dapdap.ch/"><i class="fa fa-link fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/reckless_numerik.jpg"></img>
							</div>
							<div class="desc">
								<h4>Roger Winzeler</h4>
								<p>reckless collective</p>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/recklesscollective/"><i class="fa fa-facebook fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.instagram.com/recklesscollective/"><i class="fa fa-instagram fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Stanislas_Bernatt.jpg"></img>
							</div>
							<div class="desc">
								<h4>Stanislas Bernatt</h4>
								<p class="small">(Conception & Animation 3D)</p>
								<h4>Geoffrey Marchal</h4>
								<p class="small">(Numérisation 3D)<p>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/Stanislas-Bernatt-Art-Design-549008441831596/"><i class="fa fa-facebook fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Tamara_Virag.jpg"></img>
							</div>
							<div class="desc">
								<h4>t.m.r</h4>
							</div>
							<ul class="contributor-social">
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Thomas_Lemarquier.jpg"></img>
							</div>
							<div class="desc">
								<h4>Thomas Lemarquier</h4>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/TL3DGraphicDesign/"><i class="fa fa-facebook fa-1x"></i></a></li>
							</ul>
	          </li>
	        </ul>
	      </div>
    </section>
    <section id="a-propos">
        <div class="container">
            <div id="qui-sommes-nous" class="negative left">
                <div class="small-container">
                    <h2>Who are we&nbsp;?<a class="mei-logo" href="http://mei.heig-vd.ch"></a></h2>

                    <p class="para-1">We are the <strong><a href="http://mei.heig-vd.ch">Media Engineering Institute</a></strong> (MEI), a research unit of the <strong>HEIG-VD</strong> active in digital media.</p>

                    <p class="para-2">We have been actively supporting this festival since its creation. This year we want you to take part. Here are links to our previous contributions:</p>

	                    <a href="http://blog.comem.ch/2015/11/16/numerik-games-le-teaser-2015/">
		                    <button type="button" name="projection-2015">Performance 2015</button>
		                </a>

	                    <a href="http://blog.comem.ch/2017/01/26/games-of-tron/">
		                    <button type="button" name="projection-2016">Performance 2016</button>
		                </a>
                </div>
            </div>

            <div id="contact">
							<div class="small-container">
								<div id="en-edit" class="section">
									<h2>Your Contact</h2>
									<p>Raphael Baumann</p>
									<div class="form-row">
										<div class="socials">
											<div class="social"><a class="gtm_social" id="gtm_mail" href="mailto:raphael.baumann@heig-vd.ch"><i class="fa fa-envelope fa-2x"></i></a></div>
											<div class="social"><a class="gtm_social" id="gtm_mail" href="intent://send/+41797378495#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end"><i class="fa fa-whatsapp fa-2x"></i></a></div>
											<div class="social"><a class="gtm_social" id="gtm_mail" href="tel:+41245577349"><i class="fa fa-phone fa-2x"></i></a></div>
										</div>
										<span id="loading-contact"></span>
									</div>
								</div>
								<div class="section lien">
									<h2>Our Links</h2>
									<div class="form-row">
										<div class="socials">
											<div class="social"><a class="gtm_social" id="gtm_instagram" href="https://www.instagram.com/ng17mapping/"><i class="fa fa-instagram fa-2x"></i></a></div>
												<div class="social"><a class="gtm_social" id="gtm_facebook" href="https://www.facebook.com/ng17mapping/"><i class="fa fa-facebook fa-2x"></i></a></div>
											<div class="social"><a class="gtm_social" id="gtm_linkedin" href="https://www.linkedin.com/company/media-engineering-institute"><i class="fa fa-linkedin fa-2x"></i></a></div>
											<div class="social"><a class="gtm_social" id="gtm_mei" href="http://mei.heig-vd.ch/"><i class="fa fa-link fa-2x"></i></a></div>
										</div>
										<span id="loading-contact"></span>
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
    <script src="/bower_components/toastr/toastr.js"></script>
    <!-- endbower -->
    <!-- endbuild -->
    <!-- youtube -->
    <script async="" src="https://www.youtube.com/iframe_api" type="text/javascript"></script>
    <!-- build:js scripts/main.js -->
    <script src="scripts/main.js" type="text/javascript"></script>
    <!-- endbuild -->
</body>
</html>
