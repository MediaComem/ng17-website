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

    <title>Numerik Games 2017 - Eclairâges</title><!-- Place favicon.ico in the root directory -->
    <!-- build:css styles/vendor.css -->
    <!-- bower:css -->
    <link rel="stylesheet" href="/bower_components/lity/dist/lity.min.css" />
    <!-- endbower -->
    <!-- endbuild -->
    <!-- build:css styles/main.css -->
    <link rel="stylesheet" href="styles/main.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css"><!-- endbuild -->
    <!-- build:js scripts/vendor/modernizr.js -->

    <script src="/bower_components/modernizr/modernizr.js" type="text/javascript">
</script><!-- endbuild -->
</head>

<body>
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <section id="landing" class="fullscreen home negative">
        <div class="triangle-topleft"></div>

        <div class="video-background">
            <div class="video-foreground">
                <div id="youtube"></div>
            </div>
        </div>

        <div class="inner">
            <div class="container small-container">
                <div id="landingIntro">
                    <h2 class="light">Numerik Games</h2>

                    <h3 class="light">25 - 27 août 2017</h3>

                    <h1 id="main-title" class="huge">Marre de ton écran&nbsp;?<br>
                    VOIS PLUS GRAND&nbsp;!</h1><a href="#intro"><button><a href="#intro">En savoir plus</a></button></a>
                </div>
            </div>
        </div>
    </section>

    <section id="intro">
        <div class="intro-part part-1 negative centered">
            <p class="paraA light container small-container">vidéo, animation, illustration,<br>
            pixels, vecteurs, 2D, 3D...<br>
            <strong>Ces domaines vous passionnent&nbsp;?</strong></p>

            <p class="paraB container small-container">Si oui, nous vous offrons l'opportunité de projeter vos créations,<br>
            sur la façade du Temple du centre historique d’Yverdon-les-Bains&nbsp;!</p>
        </div>

        <div class="container small-container cols">
            <div class="col-part-1">
                <p><strong>Numerik Games</strong> est un festival tout public, organisé par la <a href="http://www.ailleurs.ch">Maison d'Ailleurs</a>, la ville d'<a href="http://www.ylb.ch">Yverdon-les-Bains</a> et la <a href="http://www.heig-vd.ch">HEIG-VD</a>, qui propose des conférences, des performances et des animations relatives au thème de la transition numérique.</p>

                <p>Pour cette édition, nous allons célébrer cette nouvelle ère qui s’ouvre à nous, innondée de nouvelles technologies. Nos modes d’organisation sont bouleversés, de nouvelles pratiques apparaissent, sociales, culturelles, etc. Une transformation profonde est en cours, c’est bien clair&nbsp;! Faut-il pour autant la voir d’un œil sombre&nbsp;?</p>

                <p>Ce festival est forcément festif, mais il doit aussi nous permettre de réfléchir&nbsp;!</p>
            </div>

            <div class="col-part-2">
                <p class="large">Et vous, comment voyez-vous l'avenir&nbsp;?</p>

                <p>Nous vous offrons une occasion unique de vous exprimer. Le thème choisi est <strong>&laquo;clair-obscur&raquo;</strong>, ombres et lumières, bien ou mal, en jouant des contrastes avec l'architecture du bâtiment.</p>

                <p>Le sujet peut être interprété de manière abstraite, figurative ou métaphorique.</p>

                <p>Faites parler votre créativité&nbsp;!</p>
            </div>
        </div>
    </section>

    <section id="details">
        <div class="inner">
            <div class="container small-container centered">
                <ul class="tabs">
                    <li class="tab"><a class="tablink light one" href="#tab-video"><span class="light">Vidéos / Animations</span></a></li>

                    <li class="tab"><a class="tablink light two" href="#tab-image"><span class="light">Images / Illustrations</span></a></li>
                </ul>
            </div>

            <div id="tab-video" class="tab-content negative one">
                <div class="container small-container">
                    <div class="wireframe only-medium"></div>

                    <h2><span class="light">Création</span> vidéo</h2>

                    <div class="wireframe only-mobile"></div>

                    <p>En principe, votre projet d'animation vidéo sera affiché au moins une fois pendant le festival. La projection durera plus de six heures, sur deux soirs. Elle sera entrecoupée de performances interactives mettant en oeuvre les smartphones du public. Un <strong>jury</strong> interne tiendra compte des critères suivants: traitement du thème, dimension esthétique, prise en compte de l'architecture. Les meilleurs projets seront projetés plusieurs fois. Les règles détaillées se trouvent dans le <strong>kit de base</strong>, qui vous sera transmis une fois que vous aurez complété votre inscription ci-dessous.</p>
                </div>
            </div>

            <div id="tab-image" class="tab-content negative two">
                <div class="container small-container">
                    <div class="wireframe only-medium"></div>

                    <h2><span class="light">Création d'</span>images</h2>

                    <p>Manque de temps&nbsp;! Vous pouvez également nous proposer une illustration ou une collection d'images. Comme pour la <strong>catégorie</strong> "animations", les meilleures propositions pourront être vues à plusieurs reprises. Elles seront diffusées par le biais d'un <a href="https://youtu.be/q6tX4YJ9FXE">jeu collectif</a> tout public. Les joueurs équipés d'un smartphone collaborent pour que leurs actions individuelles contribuent à révéler votre oeuvre&nbsp;! Les règles détaillées se trouvent dans le <strong>kit de base</strong>, qui vous sera transmis une fois que vous aurez complété votre inscription ci-dessous.</p>

                    <div class="wireframe only-mobile"></div>
                </div>
            </div>
        </div>
    </section>

    <section id="participer" class="negative">
        <div class="container small-container">
            <h2>Je Participe</h2>

            <p>Dans ce cas, il faut commencer par remplir le formulaire ci-dessous. Vous recevrez un mail avec un lien permettant de télécharger le kit de base qui contient tout ce qu'il faut pour démarrer un projet.</p>

            <form id="participation-form" action="process.php" method="post" novalidate="novalidate">
	            <input type="hidden" name="subject" value="NG17 participant">
				<textarea type="hidden" name="message" value="participation">participation</textarea>
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
                    <button type="submit" name="submit" value="Send">Participer</button>
                    <span id="loading-participation"></span>
                </div>
            </form>
            <div id="submit-message-participation">
                <span class="<?php echo (isset($formOK) ? $responsetype : 'hidden'); ?>"><?php if(isset($formOK)) { echo $submitmessage; } ?></span>
            </div>
        </div>
    </section>

    <section id="a-propos">
        <div class="container">
            <div id="qui-sommes-nous" class="negative left">
                <div class="small-container">
                    <h2>Qui sommes-nous&nbsp;?<a class="mei-logo" href="http://mei.heig-vd.ch"></a></h2>

                    <p class="para-1">Nous sommes le <strong><a href="http://mei.heig-vd.ch">Media Engineering Institute</a></strong> (MEI), l'unité de recherche de la <strong>HEIG-VD</strong> active dans le domaine des médias numériques.</p>

                    <p class="para-2">Nous soutenons activement ce festival d'un genre nouveau depuis sa création. Pour 2017, nous souhaitons embarquer un maximum de passionés dans l'aventure. Voici les liens sur nos contributions précédentes:</p>

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

                    <p>En attendant de pouvoir soumettre vos propositions, posez-nous vos questions.</p>

                    <form id="contact-form" action="process.php" method="post" novalidate="novalidate">
	                    <input type="hidden" name="subject" value="NG17 contact">
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
                            <button type="submit" name="submit" value="Send">Envoyer</button>
                            <span id="loading-contact"></span>
                        </div>
                    </form>

                    <div id="submit-message-contact">
                        <span class="<?php echo (isset($formOK) ? $responsetype : 'hidden'); ?>"><?php if(isset($formOK)) { echo $submitmessage; } ?></span>
                    </div>
                </div>
            </div>
        </div>
    </section><!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script type="text/javascript">
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	    ga('create', 'UA-91100429-1', 'auto');
	    ga('send', 'pageview');

    </script>
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
