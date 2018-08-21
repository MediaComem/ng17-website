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
		$submitmessage = 'Merci! Votre email est envoyé. <a href="https://ng17.heig-vd.ch/kit">Voici le kit de base </a> pour vous lancer dans votre projet';
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
	<meta itemprop="image" content="https://ng17.heig-vd.ch/images/home_bg.jpg">

	<!-- Twitter Card data -->
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@media_heigvd">
	<meta name="twitter:title" content="Numerik Games | clair-obscur">
	<meta name="twitter:description" content="Appel à projets mapping vidéo pour Numerik Games 2017">
	<meta name="twitter:creator" content="@media_heigvd">
	<!-- Twitter summary card with large image must be at least 280x150px -->
	<meta name="twitter:image:src" content="https://ng17.heig-vd.ch/images/home_bg.jpg">

	<!-- Open Graph data -->
	<meta property="og:title" content="Numerik Games | clair-obscur" />
	<meta property="og:type" content="article" />
	<meta property="og:url" content="https://ng17.heig-vd.ch" />
	<meta property="og:image" content="https://ng17.heig-vd.ch/images/NG17-FB-post-link_2.jpg" />
	<meta property="og:image" content="https://ng17.heig-vd.ch/images/NG17-FB-post-link-3.jpg" />
	<meta property="og:image" content="https://ng17.heig-vd.ch/images/home_bg.jpg" />
	<meta property="og:description" content="Appel à projets mapping vidéo pour Numerik Games 2017" />
	<meta property="og:site_name" content="Numerik Games | clair-obscur" />
	<meta property="article:published_time" content="2017-03-16T09:00:00+01:00" />
<!-- 	<meta property="article:modified_time" content="2017-03-16T19:08:47+01:00" /> -->
	<meta property="fb:admins" content="Facebook numberic ID" />

	<link rel="alternate" hreflang="fr" href="https://ng17.heig-vd.ch" />

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
                    <h3 class="light">25 - 26 août 2017</h3>
										<h2>Place pestalozzi</h2>
										<h3 class="light">Yverdon-les-bains</h2>
										</h1><a href="#intro"><button>En savoir plus</button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="intro">
        <div class="intro-part part-1 negative centered">
            <p class="paraA light container small-container">vidéo mapping,<br>
            Jeux collaboratifs,<br>
            <strong>et bien plus&nbsp;!</strong></p>

            <p class="paraB container small-container">C'est l'occasion de passer un bon moment, en jouant sur la façade du Temple d'Yverdon-les-Bains et en admirant les créations des artistes qui ont répondu au challenge. Vous pourrez profiter de ce spectacle tout en buvant un verre sur les terrasses de la Place Pestalozzi et en écoutant la musique du SoundTruck Diskotek&nbsp;!</p>
        </div>

        <div class="container small-container cols">
            <div class="col-part-1">
                <p><strong>Numerik Games</strong> est un festival tout public, organisé par la <a href="http://www.ailleurs.ch">Maison d'Ailleurs</a>, la ville d'<a href="http://www.ylb.ch">Yverdon-les-Bains</a> et la <a href="http://www.heig-vd.ch">HEIG-VD</a>, qui propose des conférences, des performances et des animations relatives au thème de la transition numérique.</p>
                <p>Pour cette édition, nous allons célébrer cette nouvelle ère qui s’ouvre à nous, inondée de nouvelles technologies. Nos modes d’organisation sont bouleversés, de nouvelles pratiques apparaissent, sociales, culturelles, etc. Une transformation profonde est en cours, c’est bien clair&nbsp;! Faut-il pour autant la voir d’un œil sombre&nbsp;?</p>
            </div>

            <div class="col-part-2">
                <p>Dans l’espace gratuit du festival, vous pourrez y découvrir des créations inédites d’artistes, avec comme thème imposé «clair-obscur». Le but est de laissez la chance à des personnes de pouvoir exprimer leur art et vision, ces réalisations seront projetées sur un bâtiment du centre historique de la ville d’Yverdon-les-Bains.</p><p>les soirées du 25 au 26 août 2017, des parties de jeux collaboratifs, avec votre téléphone comme manette, transformeront la façade du Temple en écran de jeu géant.</p>
            </div>
        </div>
    </section>

    <section id="apercu">
			<div class="container small-container centered">
				<ul class="tabs">
					<li class="tab"><a class="tablink light one" href="#tab-creation"><span class="light">Les artistes</span></a></li>
					<li class="tab"><a class="tablink light two" href="#tab-programme"><span class="light">Le programme</span></a></li>
				</ul>
			</div>
      <div id="tab-creation" class="tab-content one">
				<div class="container small-container">
	        <h2 class="title center negative"><span class="light">Un aperçu des</span> artistes</h2>
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
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/blackdivisioncz/"><i class="fa fa-facebook fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="http://www.blackdivision.cz"><i class="fa fa-link fa-1x"></i></a></li>
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
								<li class="social"><a class="gtm_social" href="https://twitter.com/mylenedrei"><i class="fa fa-twitter fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://vimeo.com/mylenedreyer"><i class="fa fa-vimeo fa-1x"></i></a></li>
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
								<li class="social"><a class="gtm_social" href="https://www.linkedin.com/in/iglal-boulad-88bab6128/"><i class="fa fa-linkedin fa-1x"></i></a></li>
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
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/studioechelonmapping/"><i class="fa fa-facebook fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.instagram.com/studio_echelon_mapping/"><i class="fa fa-instagram fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="http://echelon8.wix.com/echelon8/mapping"><i class="fa fa-link fa-1x"></i></a></li>
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
								<h4>Louis Philippe - Margot Hofmans</h4>
								<p>Resonance Visuals</p>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="https://www.facebook.com/ResonanceVisuals/"><i class="fa fa-facebook fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.instagram.com/resonance_visuals/"><i class="fa fa-instagram fa-1x"></i></a></li>
								<li class="social"><a class="gtm_social" href="https://www.vjbooking.com/network/profile/resonance-visuals"><i class="fa fa-link fa-1x"></i></a></li>
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
								<li class="social"><a class="gtm_social" href="http://www.stanislasbernatt.com/"><i class="fa fa-link fa-1x"></i></a></li>
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
								<li class="social"><a class="gtm_social" href="http://www.tlemarquier.com/"><i class="fa fa-link fa-1x"></i></a></li>
							</ul>
	          </li>
						<li class="flex-content">
							<div class="img-crop">
								<img src="/images/contributeurs/Guillaume.jpg"></img>
							</div>
							<div class="desc">
								<h4>Guillaume Simmen</h4>
								<p>gs–tudio</p>
							</div>
							<ul class="contributor-social">
								<li class="social"><a class="gtm_social" href="http://guillaume-simmen.ch/"><i class="fa fa-link fa-1x"></i></a></li>
							</ul>
	          </li>
	        </ul>
				</div>
			</div>
			<div id="tab-programme" class="tab-content two">
				<div class="container small-container">
					<h2 class="title center negative">Programme<span class="light"> des soirées: 25 - 26 août</span></h2>
					<p class="negative center">Rendez-vous sur la Place Pestalozzi, devant le Temple dès 21h. avec des animations jusqu'à minuit&nbsp;!</p>
					<div id="schedule">
						<div class="schedule-item">
							<div class="time">
								<div>21:00</div>
							</div>
							<div class="icon">
								<img src="/images/schedule/projo.png" />
							</div>
							<div class="data">
								<h3>Vidéo Mapping</h3>
								<p>Thème: Clair-Obscur</p>
							</div>
						</div>
						<div class="schedule-item">
							<div class="time">
								<div>21:45</div>
							</div>
							<div class="icon">
								<img src="/images/schedule/manette-1.png" />
							</div>
							<div class="data">
								<h3>Jeux</h3>
								<p>Sur la façade du Temple avec un smartphone</p>
							</div>
						</div>
						<div class="schedule-item">
							<div class="time">
								<div>22:30</div>
							</div>
							<div class="icon">
								<img src="/images/schedule/projo.png" />
							</div>
							<div class="data">
								<h3>Vidéo Mapping</h3>
								<p>Thème: Clair-Obscur</p>
							</div>
						</div>
						<div class="schedule-item">
							<div class="time">
								<div>23:15</div>
							</div>
							<div class="icon">
								<img src="/images/schedule/manette-2.png" />
							</div>
							<div class="data">
								<h3>Jeux</h3>
								<p>Sur la façade du Temple avec un smartphone</p>
							</div>
						</div>
					</div>
				</div>
			</div>
    </section>
    <section id="a-propos">
        <div class="container">
            <div id="qui-sommes-nous" class="negative left">
                <div class="small-container">
                    <h2>Qui sommes-nous&nbsp;?<a class="mei-logo" href="http://mei.heig-vd.ch"></a></h2>

                    <p class="para-1">Nous sommes le <strong><a href="http://mei.heig-vd.ch">Media Engineering Institute</a></strong> (MEI), une unité de recherche de la <strong>HEIG-VD</strong> active dans le domaine des médias numériques.</p>

                    <p class="para-2">Nous soutenons activement ce festival d'un genre nouveau depuis sa création. Pour 2017, nous souhaitons embarquer un maximum de passionnés dans l'aventure. Voici les liens sur nos contributions précédentes:</p>

                    <a href="http://blog.comem.ch/2015/11/16/numerik-games-le-teaser-2015/">
	                    <button type="button" name="projection-2015">Performance 2015</button>
		                </a>

                    <a href="http://blog.comem.ch/2017/01/26/games-of-tron/">
	                    <button type="button" name="projection-2016">Performance 2016</button>
		                </a>
                </div>
            </div>

            <div id="contact">
	            <div class="section">
                    <h2>Nos liens</h2>
                    <div class="form-row">
                        <div class="socials">
							<div class="social"><a class="gtm_social" id="gtm_instagram" href="https://www.instagram.com/ng17mapping/"><i class="fa fa-instagram fa-2x"></i></a></div>
		                    <div class="social"><a class="gtm_social" id="gtm_facebook" href="https://www.facebook.com/ng17mapping/"><i class="fa fa-facebook fa-2x"></i></a></div>
							<div class="social"><a class="gtm_social" id="gtm_linkedin" href="https://www.linkedin.com/company/media-engineering-institute"><i class="fa fa-linkedin fa-2x"></i></a></div>
							<div class="social"><a class="gtm_social" id="gtm_mei" href="http://mei.heig-vd.ch/"><i class="fa fa-link fa-2x"></i></a></div>
	                    </div>
                    </div>
                </div>
                <div class="section">
                    <h2>Vos contacts</h2>
                    <p>Sandrine Divorne - Information</p>
                    <div class="form-row">
                        <div class="socials">
							<div class="social"><a class="gtm_social" id="gtm_mail" href="mailto:raphael.baumann@heig-vd.ch"><i class="fa fa-envelope fa-2x"></i></a></div>
							<div class="social"><a class="gtm_social" id="gtm_mail" href="intent://send/+41797583945#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end"><i class="fa fa-whatsapp fa-2x"></i></a></div>
	                    </div>
                    </div>
                    <p>Raphael Baumann - Technique</p>
                    <div class="form-row">
                        <div class="socials">
							<div class="social"><a class="gtm_social" id="gtm_mail" href="mailto:raphael.baumann@heig-vd.ch"><i class="fa fa-envelope fa-2x"></i></a></div>
							<div class="social"><a class="gtm_social" id="gtm_mail" href="intent://send/+41797378495#Intent;scheme=smsto;package=com.whatsapp;action=android.intent.action.SENDTO;end"><i class="fa fa-whatsapp fa-2x"></i></a></div>
							<div class="social"><a class="gtm_social" id="gtm_mail" href="tel:+41245577349"><i class="fa fa-phone fa-2x"></i></a></div>
	                    </div>
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
