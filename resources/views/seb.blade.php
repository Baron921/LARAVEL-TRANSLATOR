<?php
ob_start("ob_gzhandler");
$active_form_contact = $viewListingRow['active_form_contact'];
$url_en_cours = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
$chemin_design = 'design/1/'; //VERSION SANS GOOGLE
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?php print $browsertitle; ?></title>
    <?php include('json-micro.php'); ?>
    <meta name="author" content="">
    <meta name="robots" content="">
    <?php if (trim($homepagedescription) != "") { ?>
    <meta name="description" content="<?php print $homepagedescription; ?>">
    <?php } ?>
    <?php if (trim($homepagekeywords) != "") { ?>
    <meta name="keywords" content="<?php print $homepagekeywords; ?>">
    <?php } ?>
    <?php if (isset($rePicArray[0]) && trim($rePicArray[0]) != "") { ?>
    <meta property="og:image" content="<?php print $rePicArray[0];   ?>">
    <?php } else { ?>
    <meta property="og:image"
          content="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/home_section_1.webp">
    <?php } ?>
    <meta property="og:title" content="<?php print $browsertitle; ?>">
    <meta property="og:url" content="<?php print $full_url_path . $urlLink; ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="<?php print $reSiteName; ?>">
    <meta property="og:description" content="<?php print $homepagedescription; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo $full_url_path; ?>images/favicon.png">
    <base href="<?php print $full_url_path; ?>">
    <link rel="canonical" href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
    <link
        href="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>css/bootstrap_customized.min.css?<?php echo time(); ?>"
        rel="stylesheet">
    <link href="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>css/style.css?<?php echo time(); ?>"
          rel="stylesheet">
    <link href="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>css/blog.css" rel="stylesheet">
    <link href="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>css/home.css" rel="stylesheet">
    <link href="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>css/custom.css" rel="stylesheet">
    <link href="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>css/contacts.css" rel="stylesheet">
    <style>
        .pricem2 {
            background-color: #fff;
            color: #000000;

        }

        .hero_single {
            color: #000 !important;
            text-align: center;
        }

        .main-menu > ul > li > a {
            color: #000 !important;
        }

        <?php if (isset($rePicArray[1]) && trim($rePicArray[0]) != "") {
?> .hero_single.version_2 {
            text-align: left;

            height: 100vh !important;
            background: #ededed url(<?php print $rePicArray[0];
?>) center center no-repeat;
            background-size: cover;
        }

        <?php
}
else {
?> .hero_single.version_2 {
            text-align: left;

            height: 100vh !important;
            background: #ededed url(<?php echo $full_url_path;
?><?php echo $chemin_design;
?>img/home_section_1.webp) center center no-repeat;
            background-size: cover;
        }

        <?php
}
?> <?php if ($viewListingRow['color_1'] != "") {
?> .box_contacts i {
            color: # <?php echo $viewListingRow['color_1'];
?>  !important;
        }

        .custom-search-input input[type="submit"] {
            background-color: # <?php echo $viewListingRow['color_1'];
?>  !important;
        }

        .box_about strong {
            color: # <?php echo $viewListingRow['color_1'];
?>  !important;
            border: #<?php echo $viewListingRow['color_1'];
?> solid 2px !important;
        }

        .main_title span em {
            background-color: #ff00a2 !important;
        }

        ul#top_menu > li a.btn_access {
            border: #<?php echo $viewListingRow['color_1'];
?> solid 1px !important;

        }

        ul#top_menu > li a.btn_access:hover {
            background-color: # <?php echo $viewListingRow['color_1'];
?>  !important;
            border-color: # <?php echo $viewListingRow['color_1'];
?>  !important;
        }

        ul#top_menu > li a.btn_access.green {
            background-color: # <?php echo $viewListingRow['color_1'];
?>  !important;
            border-color: transparent !important;
        }

        a.btn_1, .btn_1 {
            background: # <?php echo $viewListingRow['color_1'];
?>  !important;
        }

        #toTop:hover {
            background-color: # <?php echo $viewListingRow['color_1'];
?>  !important;
        }

        footer::before {
            background: # <?php echo $viewListingRow['color_1'];
?>  !important;
            background: linear-gradient(to right, #<?php echo $viewListingRow['color_1'];
?>, #4c4c4c) !important;
        }

        .line {
            color: # <?php echo $viewListingRow['color_1'];
?>  !important;
        }

        <?php
}
else {
?>

	.line {
            color: #ff00a2 !important;
        }

        .box_contacts i {
            color: #ff00a2 !important;
        }

        .custom-search-input input[type="submit"] {
            background-color: #ff00a2 !important;
        }

        .box_about strong {
            color: #ff00a2 !important;
            border: #ff00a2 solid 2px !important;
        }

        .main_title span em {
            background-color: #ff00a2 !important;
        }

        ul#top_menu > li a.btn_access {
            border: #ff00a2 solid 1px !important;

        }

        ul#top_menu > li a.btn_access:hover {
            background-color: #ff00a2 !important;
            border-color: #ff00a2 !important;
        }

        ul#top_menu > li a.btn_access.green {
            background-color: #ff00a2 !important;
            border-color: transparent !important;
        }

        a.btn_1, .btn_1 {
            background: #ff00a2 !important;
        }

        #toTop:hover {
            background-color: #ff00a2 !important;
        }

        footer::before {
            background: #ff00a2 !important;
            background: linear-gradient(to right, #ff00a2, #4c4c4c) !important;
        }

        <?php
}
if ($viewListingRow['color_2'] != "") {
?> .custom-search-input input[type="submit"]:hover {
            background-color: # <?php echo $viewListingRow['color_2'];
?>  !important;
        }

        ul#top_menu > li a.btn_access.green:hover {
            background-color: # <?php echo $viewListingRow['color_2'];
?>  !important;
        }

        a.btn_1:hover, .btn_1:hover {
            background: # <?php echo $viewListingRow['color_2'];
?>  !important;
        }

        <?php
}
else {
?> .custom-search-input input[type="submit"]:hover {
            background-color: #4c4c4c !important;
        }

        ul#top_menu > li a.btn_access.green:hover {
            background-color: #4c4c4c !important;
        }

        a.btn_1:hover, .btn_1:hover {
            background: #4c4c4c !important;
        }

        <?php
}
?> .label {
            margin: 2px 0;
        }

        .field {
            margin: 0 0 20px 0;
        }

        .content {
            width: 960px;
            margin: 0 auto;
        }

        div#central {
            margin: 40px 0px 100px 0px;
        }

        @media all and (min-width: 768px) and (max-width: 979px) {
            .content {

                width: 750px;
            }
        }

        @media all and (max-width: 767px) {
            body {
                margin: 0 auto;
                word-wrap: break-word
            }

            .content {
                width: auto;
            }

            div#central {
                margin: 40px 20px 100px 20px;
            }
        }

        input, textarea {
            width: 100%;
            padding: 15px;
            font-size: 1em;
            border: 1px solid #A1A1A1;
        }

        button {
            padding: 12px 60px;
            background: transparent;
            *border: none;
            color: rgb(40, 40, 40);
            font-size: 1em;
            border: 1px solid black;
            cursor: pointer;
        }

        #message {
            *padding: 0px 40px 0px 0px;
        }

        #mail-status {
            *padding: 12px 20px;
            width: 100%;
            display: none;
            font-size: 1em;
            color: rgb(40, 40, 40);
        }

        .error {
            background-color: #F7902D;
            margin-bottom: 40px;
        }

        .success {
            background-color: #48e0a4;
        }

        .g-recaptcha {
            margin: 0 0 25px 0;
        }

        <?php if ($viewListingRow['color_5'] != "") {
?>

.hero_single .opacity-mask h1, .hero_single .opacity-mask h3 {
            color: # <?php echo $viewListingRow['color_5']; ?>  !important;
        }

        .hero_single .opacity-mask p {
            color: # <?php echo $viewListingRow['color_5']; ?>  !important;
        }

        <?php } else { ?>

.hero_single .opacity-mask h1, .hero_single .opacity-mask h3 {
            color: #ffffff !important;
        }

        .hero_single .opacity-mask p {
            color: #ffffff !important;
        }
        <?php } ?>
    </style>
</head>
<body>
<header class="header clearfix element_to_stick">
    <div class="container-fluid">
        <div id="logo"><a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                <?php if (isset($rePicArray[1]) && trim($rePicArray[1]) != "") { ?>
      <?php if (trim($rePicArray[1]) != "") {
                    print '<img loading="lazy" src="' . $rePicArray[1] . '" width="200" height="75" alt="logo" class="logo_normal" >';
                } ?>
      <?php if (trim($rePicArray[1]) != "") {
                    print '<img loading="lazy" src="' . $rePicArray[1] . '" width="200" height="75" alt="logo" class="logo_sticky" >';
                } ?>
      <?php } else { ?>
                <img src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/kelrezo-1.webp" width="200"
                     height="75" alt="" class="logo_normal"> <img
                    src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/kelrezo-1.webp" width="200"
                    height="75" alt="" class="logo_sticky">
                <?php } ?>
            </a> <span class="text ms-3"><br>
      <span class="line">
      <?php if ($viewListingRow['name_commercial'] != "" ) { ?>
      <?php echo $viewListingRow['name_commercial']; ?>
      <?php } else { ?>
      Karine LEDUC
      <?php } ?>
      </span>&nbsp; <span class="line strong" style="color:#ff00a2">
      <?php if ($viewListingRow['name_entreprise'] != "" ) { ?>
      <?php echo $viewListingRow['name_entreprise']; ?>
      <?php } else { ?>
      KelimmoPro
      <?php } ?>
      </span></span></div>
        <ul id="top_menu">
            <li><a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#contact"
                   class="btn_access green">Contact</a></li>
            <?php if ($viewListingRow['url_calendly'] != "" ) { ?>
            <li><a rel="noreferrer" target="_blank" href="<?php echo $viewListingRow['url_calendly']; ?>"
                   class="btn_access">Prendre un RDV</a></li>
            <?php } ?>
        </ul>
        <a class="open_close"> <i class="icon_menu"></i><span>Menu</span> </a>
        <nav class="main-menu">
            <div id="header_menu"><a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#0"
                                     class="open_close"> <i class="icon_close"></i><span>Menu</span> </a> <a
                    href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                    <?php if (trim($rePicArray[0]) != "") {
                        print '<img loading="lazy"  src="' . $rePicArray[0] . '" width="100" height="35" alt="logomobile" >';
                    } ?>
                </a></div>
            <ul>
                <?php if ($viewListingRow['active_display_bloc2'] == 0) { ?>
                <li><a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#comment-estimer">Comment
                        estimer ?</a></li>
                <?php } ?>

                <?php if ($viewListingRow['name_commercial'] != "" || $$viewListingRow['descriptif_commercial'] != "") { ?>
                <li><a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#conseiller">Votre
                        interlocuteur</a></li>
                <?php } else { ?>
                <li><a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#conseiller">Votre
                        interlocuteur</a></li>
                <?php } ?>
                <?php if ($viewListingRow['name_entreprise'] != "" || $$viewListingRow['descriptif_entreprise'] != "") { ?>
                <li><a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#agence">L'agence</a>
                </li>
                <?php } else { ?>
                <li><a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#agence">L'agence</a>
                </li>
                <?php } ?>
                <?php if ($viewListingRow['active_form_contact'] == 1) { ?>
                <li><a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#ecrire"
                       class="btn_access green">Nous écrire</a></li>
                <?php } ?>
                <?php if ($viewListingRow['contact_website'] != "" ) { ?>
                <li><a target="_blank"
                       onMouseDown="return mise_a_jour('<?php echo $viewListingRow['id']; ?>', 'decouvrir_site');"
                       rel="noreferrer" href="<?php echo $viewListingRow['contact_website']; ?>">Voir le site web</a>
                </li>
                <?php } ?>
                <?php if ($viewListingRow['url_calendly'] != "" ) { ?>
                <li><a rel="noreferrer" target="_blank" href="<?php echo $viewListingRow['url_calendly']; ?>"
                       class="btn_access">Prendre un RDV</a></li>
                <?php } ?>
            </ul>
        </nav>
    </div>
</header>
<main>
    <div class="hero_single version_2">
        <div class="opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.4)">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-10">
                        <?php
                        if ( isset($viewListingRow['active_form']) && $viewListingRow['active_form'] == 0 ) {
                        ?>
                        <h1><?php echo $viewListingRow['headline']; ?></h1>
                        <?php if ($viewListingRow['soustitre1'] != "" ) { ?>
                        <p><?php echo $viewListingRow['soustitre1']; ?><p>
                        <?php } else { ?>
                        <p>Evaluation sans engagement de votre bien à <?php echo $viewListingRow['city']; ?></p>

                        <form method="post" onSubmit="return false;" id="form_rec">
                            <div class="row no-gutters custom-search-input">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input class="form-control" name="address" id="address" type="text"
                                               placeholder="1, place de la mairie <?php echo $viewListingRow['postal']; ?> <?php echo $viewListingRow['city']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <input type="submit" value="Estimer" name="estimez" id="estimez">
                                </div>
                            </div>
                            <div class="search_trends">
                                <h5>Saisissez votre adresse et obtenez le prix sans engagement
                                    à <?php echo $viewListingRow['city']; ?></h5>

                            </div>
                        </form>
                        <div class="pricem2" id="retour_prix" style="display:none;"></div>
                        <?php } ?>
                        <?php
                        if ($viewListingRow['code_libre'] != "") {
                            echo '<div class="container">' . $viewListingRow['code_libre'] . '</div>';
                        }
                        ?>
                    </div>
                </div>
                <a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#estime"
                   class="btn_explore"><span class="pulse_bt"><i class="arrow_down"></i></span></a>
            </div>
        </div>
    </div>
    <div class="container margin_45_40 bg_colorb" id="estime">
        <div class="row">
            <aside class="col-lg-3">
                <div class="box_contacts">
                    <?php if ($viewListingRow['name_commercial'] != "" ) { ?>
                    <h2><?php echo $viewListingRow['name_commercial']; ?></h2>
                    <p>Votre interlocuteur privilégié</p>
                    <?php } else { ?>
                    <h2>Karine LEDUC</h2>
                    <p>Votre interlocuteur privilégié</p>
                    <?php } ?>
                    <figure>
                        <?php if (isset($rePicArray[2]) && trim($rePicArray[2]) != "") { ?>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                             data-src="<?php echo $rePicArray[2]; ?>" alt="conseiller1" class="img-fluid lazy"
                             width="300" height="300">
                        <?php } else { ?>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                             data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/conseiller-kelrezo.webp"
                             alt="négociateur immobilier" class="img-fluid lazy" width="530" height="330">
                        <?php } ?>
                    </figure>
                    <div></div>
                </div>
                <div class="box_contacts" id="contact"><i class="icon_phone"></i>
                    <h2>Téléphone</h2>
                    <div>
                        <?php $clic_tel = " onMouseDown=\"return mise_a_jour('" . $viewListingRow['id'] . "', 'tel');\""; ?>
                        <p>
                            <button class="btn_1 btn btn-secondary btn_tel"<?php echo $clic_tel; ?>>Afficher téléphone
                            </button>
                        <?php if ($viewListingRow['contact_phone'] != "") { ?>
              <?php print "<div class=\"btn_tel_display\" style=\"display:none;\"><a href='tel:" . trim(str_replace(" ", "", $viewListingRow['contact_phone'])) . "' class='colormail !important;'>" . $viewListingRow['contact_phone'] . "</a>"; ?>
              <?php } else { ?>
                        <div class="btn_tel_display" style="display:none"><a class="colormail !important;">04.11.93.43.01</a>
                            <?php } ?>
                            <?php if ($viewListingRow['contact_phone2'] != "") {
                            print "<br><a href='tel:" . trim(str_replace(" ", "", $viewListingRow['contact_phone2'])) . "' class='colormail !important;'>" . $viewListingRow['contact_phone2'];
                            ?>
                            </a>
                            <?php } echo ''; ?>
                        </div>
                    </div>
                </div>
                <?php if ($viewListingRow['contact_email'] != "") { ?>
                <div class="box_contacts"><i class="icon_mail_alt"></i>
                    <h2>Email</h2>
                    <button class="btn_1 btn_mail"
                            onMouseDown="return mise_a_jour('', 'mail');"<?php echo $clic_mail; ?>>Afficher e-mail
                    </button>
                    <div class="btn_mail_display" style="display:none"><a class="colormail"
                                                                          href="mailto:<?php print $viewListingRow['contact_email']; ?>"> <?php print $viewListingRow['contact_email']; ?></a>
                    </div>
                    <br>
                </div>
                <?php } ?>
                <div class="box_contacts"><i class="icon_toolbox"></i>
                    <h2>Une visite ?</h2>
                    <div>
                        <button class="btn_1 btn_mail" rel="noreferrer"
                                onclick="window.open('https://calendly.com/immoactualites/contact', '_blank');"<?php echo $clic_decouvrir_service; ?>>
                            Prendre un RDV
                        </button>
                    </div>
                </div>
                <?php if ($viewListingRow['linkavis'] != "") { ?>
                <div class="box_contacts"><i class="icon_star"></i>
                    <h2>Les avis clients</h2>
                    <button class="btn_1 " rel="noreferrer"
                            onMouseDown="return mise_a_jour('<?php echo $viewListingRow['id']; ?>', 'linkavis');"
                            onclick="window.open('<?php print $viewListingRow['linkavis']; ?>', '_blank');"<?php echo $clic_decouvrir_site; ?>>
                        Voir les avis
                    </button>
                </div>
                <?php } ?>




                <?php
                if ($viewListingRow['horaires_lundi'] != "" || $viewListingRow['horaires_mardi'] != "" || $viewListingRow['horaires_mercredi'] != "" || $viewListingRow['horaires_jeudi'] != "" || $viewListingRow['horaires_vendredi'] != "" || $viewListingRow['horaires_samedi'] != "" || $viewListingRow['horaires_dimanche'] != "") {
                ?>
                <div class="box_contacts"><i class="icon_clock"></i>
                    <h2>Nos Horaires</h2>
                    <ul class="m-b0">
                        Lundi
                        <?php
                        if ($viewListingRow['horaires_lundi'] != "") {
                            echo $viewListingRow['horaires_lundi'];
                        } else {
                            echo "Fermé";
                        }
                        ?>

                        <br>Mardi
                        <?php
                        if ($viewListingRow['horaires_mardi'] != "") {
                            echo $viewListingRow['horaires_mardi'];
                        } else {
                            echo "Fermé";
                        }
                        ?>

                        <br>Mercredi
                        <?php
                        if ($viewListingRow['horaires_mercredi'] != "") {
                            echo $viewListingRow['horaires_mercredi'];
                        } else {
                            echo "Fermé";
                        }
                        ?>
                        <br>Jeudi
                        <?php
                        if ($viewListingRow['horaires_jeudi'] != "") {
                            echo $viewListingRow['horaires_jeudi'];
                        } else {
                            echo "Fermé";
                        }
                        ?>
                        <br>Vendredi
                        <?php
                        if ($viewListingRow['horaires_vendredi'] != "") {
                            echo $viewListingRow['horaires_vendredi'];
                        } else {
                            echo "Fermé";
                        }
                        ?>
                        <br>Samedi
                        <?php
                        if ($viewListingRow['horaires_samedi'] != "") {
                            echo $viewListingRow['horaires_samedi'];
                        } else {
                            echo "Fermé";
                        }
                        ?>
                        <br>Dimanche
                        <?php
                        if ($viewListingRow['horaires_dimanche'] != "") {
                            echo $viewListingRow['horaires_dimanche'];
                        } else {
                            echo "Fermé";
                        }
                        ?>

                    </ul>
                </div>
                <?php } ?>
                <?php if ($viewListingRow['address'] != "" || $viewListingRow['city'] != "" || $viewListingRow['state'] != "" || $viewListingRow['postal'] != "" || $viewListingRow['country'] != "") { ?>
                <div class="box_contacts"><i class="icon_pin_alt"></i>
                    <h2>Adresse</h2>
                    <div>
                        <?php
                        $full_address = "";
                        if ($viewListingRow['address'] != "")
                            $full_address = $viewListingRow['address'];
                        if ($viewListingRow['postal'] != "")
                            $full_address = $full_address . ", " . $viewListingRow['postal'];
                        if ($viewListingRow['city'] != "")
                            $full_address = $full_address . ", " . $viewListingRow['city'];


                        $full_address = trim($full_address, ',');
                        echo $full_address;
                        ?>
                    </div>
                    <small>
                        <?php $full_address = ""; if ($viewListingRow['state'] != "") $full_address = $full_address . ", " . $viewListingRow['state']; if ($viewListingRow['country'] != "") $full_address = $full_address . ", " . $viewListingRow['country']; $full_address = trim($full_address, ','); echo $full_address;
                        ?>
                    </small></div>
                <?php } ?>
                <?php if ($viewListingRow['contact_website'] != "") { ?>
                <div class="box_contacts"><i class="icon_link"></i>
                    <h2>Site web</h2>
                    <button class="btn_1 " rel="noreferrer"
                            onMouseDown="return mise_a_jour('<?php echo $viewListingRow['id']; ?>', 'decouvrir_site');"
                            onclick="window.open('<?php print $viewListingRow['contact_website']; ?>', '_blank');">Voir
                        le site web
                    </button>
                </div>
                <?php } ?>
            </aside>
            <div class="col-lg-9">
                <div class="singlepost">
                    <div class="post-content">
                    <!--<h1><?php echo $viewListingRow['headline']; ?></h1>-->

                        <?php } ?>

                        <br/>
                        <?php if (isset($viewListingRow['description']) && $viewListingRow['description'] != "") { ?>
                        <?php print $viewListingRow['description']; ?>
                        <?php if ($viewListingRow['copyrightphoto'] != "" ) { ?><br/><br/>Crédits
                        photos: <?php echo $viewListingRow['copyrightphoto']; ?>
                        <?php } else { ?>

      <?php } ?>
                        <?php } else { ?>
                        <p>L'estimation gratuite à <?php echo $viewListingRow['city']; ?> en ligne permet d&rsquo;obtenir
                            le prix au m2 de votre bien en région <?php echo $viewListingRow['state']; ?>, va permettre
                            d&rsquo;établir un avis de valeur avant de mettre en vente votre maison ou votre appartement
                            pour une raison ou une autre, vous allez devoir estimer son prix. 100% évaluation gratuite
                            et personnalisée de votre bien sans inscriptions, découvrez les prix immobiliers au m² dans
                            la commune de <?php echo $viewListingRow['city']; ?>
                            (<?php echo $viewListingRow['postal']; ?>). </p>
                        <h2>QUAND DEMANDER UNE ESTIMATION IMMOBILIÈRE ?</h2>
                        <p>On réalise une estimation de son bien dans diverse raisons, pour connaître le prix de son
                            cocon, mais l&rsquo;estimation immobilière de bien immobilier
                            à <?php echo $viewListingRow['city']; ?> peut revêtir bien d&rsquo;autres rôles que la
                            détermination d&rsquo;un prix de vente (pour un acheteur ou un vendeur).<br>
                            En effet, vous pouvez avoir besoin de cette évaluation si vous êtes le protagoniste d&rsquo;une
                            succession, si vous divorcez et devez établir un partage ou encore si vous devez remplir une
                            déclaration fiscale de bien immobilier. Il se peut aussi que vous ayez simplement envie de
                            connaître la valeur de votre patrimoine pour la mise en vente de celui-ci. À chacun de ces
                            cas correspondra une circonstance d&rsquo;estimation.</p>
                        <h2>UNE ESTIMATION GRATUITE EN LIGNE A <?php echo $viewListingRow['city']; ?></h2>
                        <p>L&rsquo;estimation du prix, vas vous permettre d&rsquo;obtenir une idée de la valeur
                            marchande de votre logement, qui sera notamment indispensable si vous vous engagez dans une
                            transaction de vente.<br>
                            Dans de telles circonstances, le tarif que vous allez fixer doit absolument être en
                            adéquation avec les prix du marché immobilier... Ni au-dessus, ni en-dessous, si vous ne
                            voulez pas risquer des contacts assez chaotiques et de réelles difficultés pour conclure
                            votre vente. Voici donc de quelle manière vous devez considérer l&rsquo;estimation gratuite
                            en ligne du prix au mètre carré de votre maison à <?php echo $viewListingRow['city']; ?>.
                        </p>
                        <h2>LE PRINCIPE DE L&rsquo;ESTIMATION EN LIGNE GRATUITE DU PRIX AU MÈTRE CARRÉ DE MA MAISON
                            À <?php echo $viewListingRow['city']; ?> </h2>
                        <p>L&rsquo;estimation gratuite en ligne du prix au mètre carré de ma maison
                            à <?php echo $viewListingRow['city']; ?>: accessible à tous rapidement<br>
                            Il est vrai que l&rsquo;estimation gratuite en ligne du prix au mètre carré de votre maison
                            à <?php echo $viewListingRow['city']; ?> vous offre un aspect pratique particulièrement
                            séduisant lorsque vous voulez connaître la valeur estimée de votre logement ... On peut même
                            y accéder depuis un simple téléphone mobile, muni d&rsquo;une connexion internet, où que l&rsquo;on
                            se trouve ! En effet, de nombreux sites immobiliers proposent ce type de renseignement par
                            ville. En quelques clics, vous allez obtenir l&rsquo;information recherchée et allez pouvoir
                            l&rsquo;appliquer à votre demeure située à <?php echo $viewListingRow['city']; ?>, pour
                            aboutir à un prix donné à titre informatif... puisqu&rsquo;il se base sur un tarif moyen au
                            mètre carré estimé pour votre localisation, mais ne tient pas vraiment compte, pris de façon
                            isolée, des caractéristiques de votre bien immobilier.</p>
                        <h2>UNE ESTIMATION EN LIGNE GRATUITE DU PRIX AU MÈTRE CARRÉ
                            À <?php echo $viewListingRow['city']; ?></h2>
                        <p>Comme nous le précisons plus haut, la vente de votre maison ou appartement
                            à <?php echo $viewListingRow['city']; ?>, nécessite une estimation précise de sa valeur
                            marchande. Or, le paragraphe précédent explique bien que l&rsquo;estimation gratuite en
                            ligne du prix au mètre carré n&rsquo;est pas suffisante pour permettre une parfaite
                            fiabilité de l&rsquo;évaluation de votre bien.<br>
                            Il sera donc indispensable de faire intervenir un professionnel afin de vérifier et
                            confirmer le prix de l&rsquo;estimation de votre maison
                            à <?php echo $viewListingRow['city']; ?>. Les agents immobiliers réalisent ce type d&rsquo;opération,
                            généralement gratuitement. C&rsquo;est le moyen le plus sûr et le moins onéreux d&rsquo;avoir
                            accès à un avis de valeur gratuit et fiable. Ces professionnels connaissent bien le marché
                            local.</p>
                        <h2>LE LA PRISE DE CONTACT AVEC UN AGENT IMMOBILIER POUR CONFIRMER L&rsquo;ESTIMATION
                            GRATUITE </h2>
                        <h3>Confirmation du prix estimé</h3>
                        <p>L&rsquo;agent immobilier se déplacera à votre domicile afin de procéder à une visite d&rsquo;estimation
                            qui lui permettra d&rsquo;évaluer tous les paramètres ayant une influence sur le prix au
                            mètre carré de votre habitation. Ainsi, il pourra ajuster le tarif obtenu en ligne, afin qu&rsquo;il
                            corresponde exactement à votre demeure.<br>
                            Pour rentrer en contact avec ce professionnel, vous pouvez le contacter afin de prendre un
                            rendez-vous. Vous avez également la possibilité d&rsquo;accéder aux coordonnées de l&rsquo;agents
                            et de le contacter, ou encore en vous rendant dans ces locaux ou par téléphone.</p>
                        <h2>LE SIMULATEURS EN LIGNE POUR ESTIMER</h2>
                        <p>Se baser sur les estimations immobilières provenant des simulateurs internet est une approche
                            qui est en définitive bien avancée à ce jour, la big data et les simulateurs sont de plus en
                            plus précis car ils se basent sur les prix des biens vendus durant les cinq dernières
                            années. Mieux vaut pour plus de sécurité et de fiabilité se référer à un professionnel de l&rsquo;estimation
                            immobilière pour en valider les aspects de l&rsquo;intelligence artificielle.</p>
                        <h2>POURQUOI CONFIER L&rsquo;ESTIMATION GRATUITE DE VOTRE BIEN
                            À <?php echo $viewListingRow['city']; ?> À UN AGENT IMMOBILIER ?</h2>
                        <h3>La fiabilité de l&rsquo;estimation gratuite d&rsquo;un agent immobilier pour votre nid
                            à <?php echo $viewListingRow['city']; ?>.</h3>
                        <p>Avant tout, un agent immobilier a une excellente connaissance du marché immobilier local, si
                            vous avez choisi un professionnel exerçant son activité dans le quartier
                            de <?php echo $viewListingRow['city']; ?>. C&rsquo;est cet atout qui lui donne en grande
                            partie sa légitimité pour exécuter des estimation viager.<br>
                            De plus, il basera son évaluation sur une étude comparative qui s&rsquo;appuiera sur des
                            données récentes de transactions effectuées récemment par l&rsquo;agence immobilière dont il
                            dépend.<br>
                            Son habitude de manier la méthode d&rsquo;élaboration des estimations de biens, finit de
                            compléter ses compétences en la matière. C&rsquo;est tout cela qui rend les estimation
                            viager d&rsquo;un agent immobilier aussi sûres et justes.</p>
                        <h3>Les autres services proposés par un agent immobilier</h3>
                        <p>Le plus souvent, c&rsquo;est un projet de vente qui motive votre demande d&rsquo;estimation.
                            Si c&rsquo;est le cas pour votre foyer, après l&rsquo;estimation gratuite, l&rsquo;agent
                            immobilier vous proposera de vous assister dans votre démarche grâce à un mandat de vente.
                            Un tel contrat vous garantit un accompagnement personnalisé de la part de l&rsquo;agent
                            immobilier, jusqu&rsquo;à la signature finale de la vente. Vous allez pouvoir bénéficier de
                            ses conseils avisés concernant la mise en valeur de votre bâtiment
                            à <?php echo $viewListingRow['city']; ?> avant sa mise en vente, la création et la diffusion
                            d&rsquo;une annonce, les obligations administratives, la prise de rendez-vous et les
                            visites, le choix des acheteurs, … Il vous rendra de nombreux services, jusqu&rsquo;à la
                            négociation finale avec les acquéreurs.</p>
                        <h2>PUIS-JE FAIRE CONFIANCE À UNE ESTIMATION IMMOBILIÈRE GRATUITE EN LIGNE ?</h2>
                        <h3>L&rsquo;estimation immobilière gratuite en ligne de mon bien sur internet</h3>
                        <p>L&rsquo;estimation immobilière en ligne gratuite de votre maison est facilement et rapidement
                            possible depuis l&rsquo;un des nombreux outils d&rsquo;estimation en ligne, accessibles sur
                            internet. Leur utilisation est simple et un créneau, dans lequel se trouve l&rsquo;estimation
                            de votre maison, vous est proposé après quelques clics. Ce créneau plus ou moins large,
                            confère une certaine imprécision au résultat que vous obtenez. En testant plusieurs outils d&rsquo;estimation
                            différents, vous constaterez des écarts entre les différentes conclusions. Il est donc
                            préférable de ne pas se fier aveuglément à ces outils d&rsquo;estimation immobilière
                            gratuite de votre maison.</p>
                        <p>&nbsp;</p>
                        <h3>L&rsquo;estimation immobilière gratuite de ma maison ou appartement par un agent
                            immobilier</h3>
                        <p>L&rsquo;estimation immobilière gratuite depuis un site internet devra être complétée par l&rsquo;expertise
                            d&rsquo;un agent immobilier qui, lui aussi, proposera une estimation immobilière gratuite.
                            Il se basera sur ses connaissances, les données concrètes du marché et les caractéristiques
                            de votre maison, passées au crible de son œil avisé. L&rsquo;expérience professionnelle de l&rsquo;agent
                            immobilier rend son estimation gratuite particulièrement juste et fiable.</p>
                        <h3>Les autres moyens d&rsquo;estimer la valeur de mon bien</h3>
                        <p>Comme nous l&rsquo;avons indiqué, les deux autres professionnels qui peuvent réaliser une
                            estimation immobilière de votre maison sont les notaires et les experts immobiliers. Leurs
                            métiers respectifs les amènent à effectuer très régulièrement des estimations de biens et
                            leurs évaluations sont également très fiables… Mais elles ne sont pas gratuites !</p>
                        <h2>COMMENT OBTENIR SON ESTIMATION À <?php echo $viewListingRow['city']; ?> ?</h2>
                        <h3>Travaux et sentiment doivent être exclu de l&rsquo;avis de valeur</h3>
                        <p>Vous devrez enlever le coté sentimental que vous attachez à votre cocon, en effet, vous aurez
                            tendance à surestimer votre bien immobilier. Les travaux d&rsquo;entretiens réalisés ne
                            doivent pas influencer la valeur perçue et votre vision du prix. Votre estimation doit être
                            juste, objective et conforme aux prix immobiliers locaux que vous pourrez relever sur le
                            secteur. Un quartier par exemple est généralement plus coté qu&rsquo;un autre pour des
                            raisons simples de cotations de quartiers. Une information précieuse pour les vendeurs qui
                            espèrent en achetant réaliser une plus-value. Les nouvelles solutions digitales d&rsquo;estimation
                            en ligne qui s'appuient sur ces briques technologiques permettent à tous les acteurs de
                            l'immobilier de prendre des décisions de façon beaucoup plus rationnelle et éclairée sur les
                            prix de l&rsquo;immobilier au m2 à <?php echo $viewListingRow['city']; ?>.<br>
                        </p>
                        <h3>Identifier les caractéristiques pour une fiabilité de prix  </h3>
                        <p>Vous devez pour ceci identifier les caractéristiques de votre maison afin de faire les bonnes
                            comparaisons, mais c&rsquo;est difficile d&rsquo;estimer seul son bien, le mieux étant déjà
                            de vérifier avec notre simulateur puis d&rsquo;avoir une estimation objective d&rsquo;un
                            professionnel du domaine immobilier.<br>
                            Notre logiciel d&rsquo;estimation en ligne, vous donne qu&rsquo;une fourchette de prix basé
                            sur des critères et des caractéristiques génériques fiables.<br>
                            Nous restons à votre disposition pour réaliser une estimation immobilière gratuite
                            à <?php echo $viewListingRow['city']; ?> ou proche de <?php echo $viewListingRow['city']; ?>
                            et nous pouvons vous aider à trouver la meilleure proposition pour votre bien. Faites-nous
                            confiance pour tous vos besoins d&rsquo;estimations de la valeur de votre maison.<br>
                        </p>
                        <h2>BIG DATA ET INTELLIGENCE ARTIFICIELLE POUR ESTIMER LES PRIX DE VENTE EN TEMPS REEL ?</h2>
                        <p>Pour avoir une idée précise du prix de vente à l'instant T, l&rsquo;intelligence artificielle
                            va certainement jouer un rôle important. Pour comprendre l'établissement du prix de vente
                            d'un bien, en plus de la localisation et des différents facteurs du biens, il est important
                            de prendre en compte l'état général du logement, s'il y a des travaux ou non, l'étage (RDC
                            ou dernier étage), les annexes (garage, piscine, extérieur…). Des informations qui ne sont
                            pour l'instant pas disponibles via la base de données. En outre, le prix évolue en fonction
                            de l'offre et de la demande et peut donc varier d'un mois à l'autre, il faudra donc faire
                            vérifier cela.</p>
                        <?php } ?>
                        <div class="container margin_30_40"></div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_white" id="conseiller">
        <div class="container margin_105_85">
            <div class="main_title center add_bottom_10"><span><em></em></span>
                <?php if ($viewListingRow['name_commercial'] != "" ) { ?>
                <h2><?php echo $viewListingRow['name_commercial']; ?></h2>
                <p>Votre interlocuteur privilégié</p>
                <?php } else { ?>
                <h2>Karine LEDUC</h2>
                <p>Votre interlocuteur privilégié</p>
                <?php } ?>
            </div>
            <div class="row justify-content-md-center how_2">
                <div class="col-lg-5 text-center">
                    <figure>
                        <?php if (isset($rePicArray[2]) && trim($rePicArray[2]) != "") { ?>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                             data-src="<?php echo $rePicArray[2]; ?>" alt="conseiller" class="img-fluid lazy"
                             width="530" height="330">
                        <?php } else { ?>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                             data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/conseiller-kelrezo.webp"
                             alt="conseiller-immobilier" class="img-fluid lazy" width="530" height="330">
                        <?php } ?>
                    </figure>
                </div>
                <div class="col-lg-5">
                    <?php if ($viewListingRow['descriptif_commercial'] != "" ) { ?>
                    <p><?php echo $viewListingRow['descriptif_commercial']; ?></p>
                    <?php } else { ?>
                    <p>Votre Expert dédié immobilier
                        <?php if ($viewListingRow['name_commercial'] != "" ) { ?>
            <?php echo $viewListingRow['name_commercial']; ?>
            <?php } else { ?>
                        Karine LEDUC
                        <?php } ?>
                        se déplace à domicile et réalise une estimation immobilière précise afin de valider l’estimation
                        en ligne. </p>
                    <p>Afin de vous permettre d'atteindre un maximum d'acheteurs potentiels et de vendre rapidement,
                        nous disposons de notre base d'acheteurs qualifiés, de notre réseau de chasseurs. </p>
                    <p>Nous prenons en charge à 100% votre projet de vente : Annonce, Photos, Visites, Négociation …</p>
                    <p>La vente de votre bien immobilier n'a jamais été aussi simple et transparente.
                        <?php if ($viewListingRow['name_commercial'] != "" ) { ?>
            <?php echo $viewListingRow['name_commercial']; ?>
            <?php } else { ?>
                        Karine LEDUC
                        <?php } ?>
                        <?php if ($viewListingRow['name_entreprise'] != "" ) { ?>
            <?php echo $viewListingRow['name_entreprise']; ?>
            <?php } else { ?>
                        KelimmoPro
                        <?php } ?>
                    </p>
                    <?php } ?>
                    <p class="text-center add_top_30"><a
                            href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#contact"
                            class="btn_1">Contactez-nous</a></p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg_gray" id="agence">
        <div class="container margin_105_85">
            <div class="main_title center add_bottom_10"><span><em></em></span>
                <?php if ($viewListingRow['name_entreprise'] != "" ) { ?>
                <h2><?php echo $viewListingRow['name_entreprise']; ?></h2>
                <p>Faites vous accompagner par un expert local </p>
                <?php } else { ?>
                <h2>KelimmoPro</h2>
                <p>Faites vous accompagner par un expert local et estimez gratuitement votre bien</p>
                <?php } ?>
            </div>
            <div class="row justify-content-md-center how_2">
                <div class="col-lg-5">
                    <?php if ($viewListingRow['descriptif_entreprise'] != "" ) { ?>
                    <p><?php echo $viewListingRow['descriptif_entreprise']; ?></p>
                    <?php } else { ?>
                    <p>Bienvenue chez vous :
                        <?php if ($viewListingRow['name_entreprise'] != "" ) { ?>
            <?php echo $viewListingRow['name_entreprise']; ?>
            <?php } else { ?>
                        KelimmoPro
                        <?php } ?>
                        votre agence de proximité implanté à
                        <?php $full_address = "";

                        if ($viewListingRow['city'] != "")
                            $full_address = $full_address . ", " . $viewListingRow['city'];
                        if ($viewListingRow['state'] != "")
                            $full_address = $full_address . ", " . $viewListingRow['state'];
                        if ($viewListingRow['country'] != "")
                            $full_address = $full_address . ", " . $viewListingRow['country'];
                        $full_address = trim($full_address, ',');
                        echo $full_address;
                        ?>
                        . Nous vous garantissons un service de qualité premium et une expertise sur tous vos biens
                        immobiliers : maisons, appartements, terrains …Nous sommes à votre écoute pour tous vos projets
                        de vie sur la région : vente, achat, estimation, location, investissement. Nous vous
                        accompagnons dans toutes vos démarches administratives de votre projet immobilier, nous vous
                        orientons vers tous les acteurs / partenaires nécessaires à la réalisation de votre projet.
                        (Notaires, courtiers, banques, diagnostics immobiliers …).</p>
                    <p>N’hésitez pas à nous contacter, nous nous ferons un plaisir de répondre à toutes vos
                        interrogations.
                        Votre interlocuteur privilégié
                        <?php if ($viewListingRow['name_commercial'] != "" ) { ?>
            <?php echo $viewListingRow['name_commercial']; ?>
            <?php } else { ?>
                        Karine LEDUC
                        <?php } ?>
                        <?php if ($viewListingRow['name_entreprise'] != "" ) { ?>
            <?php echo $viewListingRow['name_entreprise']; ?>
            <?php } else { ?>
                        KelimmoPro
                        <?php } ?>
                        .</p>
                    <?php } ?>
                    <p class="text-center add_top_30"><a
                            href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#contact"
                            class="btn_1">Contactez-nous</a></p>
                </div>
                <div class="col-lg-5 text-center">
                    <figure>
                        <?php if (isset($rePicArray[3]) && trim($rePicArray[3]) != "") { ?>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                             data-src="<?php echo $rePicArray[3]; ?>" alt="entreprise" class="img-fluid lazy"
                             width="530" height="360">
                        <?php } else { ?>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                             data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/agenceimmobiliere.webp"
                             alt="agence" class="img-fluid lazy" width="530" height="360">
                        <?php } ?>
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div id="ecrire" class="bg_white">
        <div class="container margin_105_85">
            <div class="row justify-content-center">
                <?php require("contact_fiche5.php"); ?>
            </div>
        </div>
    </div>

    <?php if ($viewListingRow['linkavis'] != "") { ?>
    <div class="call_section version_3 lazy"
         data-bg="url(<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/avis-clients.webp)">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-left wow">
                <div class="box_2">
                    <div class="ribbon_stars"><span class="stars">★★★★✩ </span></div>
                    <h3>Les avis clients</h3>
                    <p>Consultez les avis clients
                        de <?php echo $viewListingRow['name_commercial']; ?> <?php echo $viewListingRow['name_entreprise']; ?>
                        et partagez vos expériences et vos témoignages de consommateurs !</p>
                    <a target="_blank" rel="noreferrer" class="btn_1" href="<?php echo $viewListingRow['linkavis']; ?>"
                       onMouseDown="return mise_a_jour('<?php echo $viewListingRow['id']; ?>', 'avis');">Voir les avis
                        clients</a></div>
            </div>
        </div>
    </div>
    <?php } ?>
    <?php if ($viewListingRow['active_display_bloc2'] == 0) { ?>
    <div id="comment-estimer" class="bg_gray">
        <div class="container margin_105_85 how">
            <div class="main_title center"><span><em></em></span>
                <h2>Estimez votre bien gratuitement</h2>
                <p>Estimez votre bien à
                    <?php
                    $full_address = "";
                    if ($viewListingRow['city'] != "") $full_address = $full_address . ", " . $viewListingRow['city'];
                    $full_address = trim($full_address, ',');
                    echo $full_address;
                    ?>
                    avec notre simulateur de prix.
                    <?php if ($viewListingRow['name_commercial'] != "" ) { ?>
          <?php echo $viewListingRow['name_commercial']; ?>
          <?php } else { ?>
                    Karine LEDUC
                    <?php } ?>
                    <?php if ($viewListingRow['name_entreprise'] != "" ) { ?>
          <?php echo $viewListingRow['name_entreprise']; ?>
          <?php } else { ?>
                    KelimmoPro
                    <?php } ?>
                    vous accompagne pour l'affiner.</p>
            </div>
            <div class="row justify-content-center align-items-center add_bottom_45">
                <div class="col-lg-5">
                    <div class="box_about"><strong>1</strong>
                        <h3>Estimez le prix de vente en ligne</h3>
                        <p>En 1 mn chrono Gratuit & Sans Engagement j'estime en ligne à
                            <?php
                            $full_address = "";
                            if ($viewListingRow['city'] != "") $full_address = $full_address . ", " . $viewListingRow['city'];
                            $full_address = trim($full_address, ',');
                            echo $full_address;
                            ?>
                            , cependant, cette méthode est imprécise, elle a pour objectif de donner une première
                            évaluation de son bien.</p>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                             data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/arrow_about.png"
                             alt="estimation 3mn" class="arrow_1 lazy"></div>
                </div>
                <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                    <figure><img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/loupe-estimation.webp"
                            alt="estimation loupe" class="img-fluid lazy" width="180" height="180"></figure>
                </div>
            </div>
            <div class="row justify-content-center align-items-center add_bottom_45">
                <div class="col-lg-5 pr-lg-5 text-center d-none d-lg-block">
                    <figure><img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/leprix.webp"
                            alt="estimation prix" class="img-fluid lazy" width="180" height="180"></figure>
                </div>
                <div class="col-lg-5">
                    <div class="box_about"><strong>2</strong>
                        <h3>Obtention du prix du bien</h3>
                        <p>Le simulateur qui permet de réaliser l'estimation en ligne, se base sur les bases des biens
                            vendus à
                            <?php
                            $full_address = "";
                            if ($viewListingRow['city'] != "") $full_address = $full_address . ", " . $viewListingRow['city'];
                            $full_address = trim($full_address, ',');
                            echo $full_address;
                            ?>
                            .</p>
                        <img src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                             data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/arrow_about.png"
                             alt="estimation simulateur" class="arrow_2 lazy"></div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center add_bottom_25">
                <div class="col-lg-5">
                    <div class="box_about"><strong>3</strong>
                        <h3>Vérification avec un pros</h3>
                        <p>
                            <?php if ($viewListingRow['name_commercial'] != "" ) { ?>
              <?php echo $viewListingRow['name_commercial']; ?>
              <?php } else { ?>
                            Karine LEDUC
                            <?php } ?>
                            <?php if ($viewListingRow['name_entreprise'] != "" ) { ?>
              <?php echo $viewListingRow['name_entreprise']; ?>
              <?php } else { ?>
                            KelimmoPro
                            <?php } ?>
                            maitrise le marché local, et va alors se déplacer à
                            <?php
                            $full_address = "";
                            if ($viewListingRow['city'] != "") $full_address = $full_address . ", " . $viewListingRow['city'];
                            $full_address = trim($full_address, ',');
                            echo $full_address;
                            ?>
                            pour analyser l’état de votre logement et son environnement.</p>
                        <a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#contact"
                           class="btn_1">Contactez-nous</a></div>
                </div>
                <div class="col-lg-5 pl-lg-5 text-center d-none d-lg-block">
                    <figure><img
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/nego.webp"
                            alt="conseiller" class="img-fluid lazy" width="180" height="180"></figure>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="call_section version_2 lazy"
         data-bg="url(<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/bg_call_section.webp)">
        <div class="container clearfix">
            <div class="col-lg-5 col-md-6 float-right wow">
                <div class="box_1">
                    <div class="ribbon_promo"><span>Gratuit</span></div>
                    <h3>Vous souhaitez avoir plus d'informations ?</h3>
                    <p>Merci de contacter
                        <?php if ($viewListingRow['name_commercial'] != "" ) { ?>
            <?php echo $viewListingRow['name_commercial']; ?>
            <?php } else { ?>
                        Karine LEDUC
                        <?php } ?>
                        <?php if ($viewListingRow['name_entreprise'] != "" ) { ?>
            <?php echo $viewListingRow['name_entreprise']; ?>
            <?php } else { ?>
                        KelimmoPro
                        <?php } ?>
                        .</p>
                    <a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#contact"
                       class="btn_1">Contactez-nous</a></div>
            </div>
        </div>
    </div>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div>
                    <?php if (isset($rePicArray[1]) && trim($rePicArray[1]) != "") { ?>
          <?php if (trim($rePicArray[1]) != "") {
                        print '<img loading="lazy" src="' . $rePicArray[1] . '" width="200" height="75" alt="logo" class="logo_normal" >';
                    } ?>
          <?php } else { ?>
                    <img src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/kelrezo-1.webp" width="200"
                         height="75" alt="" class="logo_sticky">
                    <?php } ?>
                    <span class="text ms-3"><br>
          <span class="line strong">
          <?php if ($viewListingRow['name_commercial'] != "" ) { ?>
          <?php echo $viewListingRow['name_commercial']; ?>
          <?php } else { ?>
          Karine LEDUC
          <?php } ?>
          </span>&nbsp; <span class="line strong">
          <?php if ($viewListingRow['name_entreprise'] != "" ) { ?>
          <?php echo $viewListingRow['name_entreprise']; ?>
          <?php } else { ?>
          KelimmoPro
          <?php } ?>
          </span></span> <br>
                    <?php if ($viewListingRow['category'] != "") {
                        echo $viewListingRow['category'];
                    }
                    if ($viewListingRow['subcategory'] != "") {
                        echo " - " . $viewListingRow['subcategory'];
                    } ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 data-target="#collapse_1">Liens rapides</h3>
                <div class="collapse dont-collapse-sm links" id="collapse_1">
                    <ul>
                        <?php if ($viewListingRow['active_display_bloc2'] == 0) { ?>
                        <li>
                            <a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#comment-estimer">Comment
                                estimer ?</a></li>
                        <?php } ?>

                        <li><a href="https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>#contact">Contact</a>
                        </li>
                        <?php if ($viewListingRow['url_calendly'] != "" || $$viewListingRow['url_calendly'] != "") { ?>
                        <li><a target="_blank" rel="noreferrer" href="<?php echo $viewListingRow['url_calendly']; ?>">Prendre
                                RDV</a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <?php if ($viewListingRow['url_facebook'] != "" || $viewListingRow['url_twitter'] != "" || $viewListingRow['url_youtube'] != "" || $viewListingRow['linkphotos'] != "" || $viewListingRow['url_linkedin'] != "") { ?>
            <div class="col-lg-3 offset-lg-3 col-md-6">
                <h3 data-target="#collapse_4">Suivez-nous</h3>
                <div class="collapse dont-collapse-sm" id="collapse_4">
                    <div class="follow_us">
                        <ul>
                            <?php if ($viewListingRow['url_twitter'] != "") { ?>
                            <li><a href="<?php echo $viewListingRow['url_twitter']; ?>"
                                   onMouseDown="return mise_a_jour('<?php echo $viewListingRow['id']; ?>', 'twitter');"
                                   target="_blank" rel="noreferrer"><img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                        data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/twitter_icon.webp"
                                        alt="Twitter" class="lazy"></a></li>
                            <?php } ?>
                            <?php if ($viewListingRow['url_facebook'] != "") { ?>
                            <li><a href="<?php echo $viewListingRow['url_facebook']; ?>"
                                   onMouseDown="return mise_a_jour('<?php echo $viewListingRow['id']; ?>', 'fb');"
                                   target="_blank" rel="noreferrer"><img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                        data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/facebook_icon.webp"
                                        alt="Facebook" class="lazy"></a></li>
                            <?php } ?>
                            <?php if ($viewListingRow['linkphotos'] != "") { ?>
                            <li><a href="<?php echo $viewListingRow['linkphotos']; ?>"
                                   onMouseDown="return mise_a_jour('<?php echo $viewListingRow['id']; ?>', 'instagram');"
                                   target="_blank" rel="noreferrer"><img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                        data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/instagram_icon.webp"
                                        alt="Instagram" class="lazy"></a></li>
                            <?php } ?>
                            <?php if ($viewListingRow['url_linkedin'] != "") { ?>
                            <li><a href="<?php echo $viewListingRow['url_linkedin']; ?>"
                                   onMouseDown="return mise_a_jour('<?php echo $viewListingRow['id']; ?>', 'linkedin');"
                                   target="_blank" rel="noreferrer"><img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                        data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/linkedin.svg"
                                        alt="Linkedin" class="lazy"></a></li>
                            <?php } ?>
                            <?php if ($viewListingRow['url_youtube'] != "") { ?>
                            <li><a href="<?php echo $viewListingRow['url_youtube']; ?>"
                                   onMouseDown="return mise_a_jour('<?php echo $viewListingRow['id']; ?>', 'youtube');"
                                   target="_blank" rel="noreferrer"><img
                                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                                        data-src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>img/youtube_icon.webp"
                                        alt="Youtube" class="lazy"></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <hr>
        <div class="row add_bottom_25">
            <div class="col-lg-6">
                <ul class="footer-selector clearfix">
                    <li><a href="#sign-in-dialog" id="sign-in" class="line">Mentions légales / RGPD</a></li>
                    <?php
                    if ($memtype == 9) {
                    ?>
                    <li><a class="link-graydark uppercase"
                           href="index.php?ptype=editReListingForm&reid=<?php echo $reid; ?>">Modifier l'annonce</a> |
                    </li>
                    <?php } ?>
                    <li style="color:#fff"><a style="color:#fff"
                                              href="https://www.kelrezo.com/admin-client/adminclient.php"
                                              target="_blank">admin</a></li>

                </ul>
            </div>
            <div class="col-lg-6">
                <ul class="additional_links">
                    <li><span>©2017 / <?php echo date("Y"); ?>
                            <?php if ($viewListingRow['name_commercial'] != "" ) { ?>
            <?php echo $viewListingRow['name_commercial']; ?>
            <?php } else { ?>
            Karine LEDUC
            <?php } ?>
                            <?php if ($viewListingRow['name_entreprise'] != "" ) { ?>
            <?php echo $viewListingRow['name_entreprise']; ?>
            <?php } else { ?>
            KelimmoPro
            <?php } ?>
                        <!--| Maj: <?php //print $viewListingRow['dttm_modified']; ?> --></span></li>
                    <li><a target="_parent" href="https://www.kelrezo.com" class="line">kelrezo</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<div id="toTop"></div>
<div class="layer"></div>
<?php include('modal.php'); ?>
<script src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>js/jquery/jquery-1.12.4.min.js"></script>
<script src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>js/common_scripts.min.js" defer></script>
<script src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>js/common_func.js" defer></script>
<script src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>assets/validate.js" defer></script>
<script src="<?php echo $full_url_path; ?><?php echo $chemin_design; ?>js/jquery.cookiebar.js" defer></script>
<script>
    $(function () {
        'use strict';
        $.cookieBar({
            fixed: true
        });
        $("#frmContact").on('submit', (function (e) {
            var visitor_name = $.trim($('input#name').val());
            var visitor_email = $.trim($('input#email').val());
            var visitor_message = $.trim($('#comment-content').val());
            var errorMessage = "<?php print $relanguage_tags["Please specify"]; ?>: ";
            $prevLen = errorMessage.length;
            if (visitor_name.length <= 0)
                errorMessage = errorMessage + "\nVotre Nom";
            if (visitor_email.length <= 0)
                errorMessage = errorMessage + "\nVotre Adresse E-mail";
            if (visitor_message.length <= 0)
                errorMessage = errorMessage + "\nVotre Message";
            if (errorMessage.length > $prevLen) {
                alert(errorMessage);
                return false;
            } else {
                e.preventDefault();
                $("#mail-status").hide();
                $('#send-message').hide();
                $('#loader-icon').show();
                $.ajax({
                    url: "contact_fiche5.php",
                    type: "POST",
                    dataType: 'json',
                    data: {
                        "name": $('input[name="name"]').val(),
                        "email": $('input[name="email"]').val(),
                        "phone": $('input[name="phone"]').val(),
                        "content": $('textarea[name="content"]').val(),
                        "g-recaptcha-response": $('textarea[id="g-recaptcha-response"]').val()
                    },
                    success: function (response) {
                        $("#mail-status").show();
                        $('#loader-icon').hide();
                        if (response.type == "error") {
                            $('#send-message').show();
                            $("#mail-status").attr("class", "error");
                        } else if (response.type == "message") {
                            $('#send-message').hide();
                            $("#mail-status").attr("class", "success");
                        }
                        $("#mail-status").html(response.text);
                    },
                    error: function () {
                        $("#mail-status").show();
                        $('#loader-icon').hide();
                        $('#send-message').show();
                        alert("Votre message n'a pas été envoyé. Veuillez rééssayer et cochez la case indiquant que vous n'êtes pas un robot.");
                    }
                });
                return true;
            }
        }));
    });

    $('.btn_tel').click(function () {
        $('.btn_tel').hide();
        $('.btn_tel_display').show();
    });
    $('.btn_mail').click(function () {
        $('.btn_mail').hide();
        $('.btn_mail_display').show();
    });

</script>
<script>
    function mise_a_jour(id, champ) {
        (new Image()).src = "goto.php?id=" + id + "&champ=" + champ;
        return true;
    }
</script>
<script>

    $(document).ready(function () {

        $('#estimez').click(function () {
            var address = $("#address").val();
            if (address != "") {
                $('#estimez').prop('disabled', true);
                <?php
                $url_courante = "https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                ?>

                $.post("prix_m2.php", {
                    address: address + ' <?php echo $viewListingRow['city']; ?>'
                    , ip: '<?php echo $_SERVER['REMOTE_ADDR']; ?>'
                    , id_listing: '<?php echo $viewListingRow['id']; ?>'
                    , url_courante: '<?php echo $url_courante; ?>'
                    , ville: '<?php echo $viewListingRow['city']; ?>'
                })
                    .done(function (data) {
                        $('#retour_prix').append(data);
                        if (data != "error") {
                            $("#form_rec").hide();
                            $("#retour_prix").show();
                        }
                    });
            }
        });
    });
</script>

