<?php
/**
* Template Name: Accueil
*/
?>

<?php get_header(); ?>


<?php
  // User IP:
  /*
  if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARTDED_FOR'] != '') {
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
  } else {
    $ip = $_SERVER['REMOTE_ADDR'];
  }
  */

  $argsCity = array(  
    'post_type' => 'city',
    'post_status' => 'publish',
    'posts_per_page' => '-1',
  );

  $queryCity = new WP_Query( $argsCity );
?>





<title>CryoQuébec - Contact</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="style.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<div class="wrapper row2">
  <nav id="mainav" class="hoc clear"> 
    <ul class="clear">
      <li class="active"><a href="index.html">Accueil</a></li>
      <li><a href="FAQ.html">FAQ</a></li>
      <!--<li><a href="#">Bibliothèque</a></li>-->
      <li><a href="Ressources.html">Ressources</a></li>
      <li><a href="S'enregistrer.html">S'enregistrer</a></li>
      <li><a href="Contact.html">Contact</a></li>
    </ul>
  </nav>
</div>
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <section class="hoc container clear"> 
    <div class="sectiontitle">
      <h6 class="heading">Contact</h6>
    </div>
    <div class="group">
      <div>
      
      <p><b>Adresse courriel</b>: <a href="mailto:contact@cryoquebec.org">contact@cryoquebec.org</a></p>
      
      <p>Il est également possible de recontrer un membre de notre équipe par appel téléphonique, vidéo-chat, ou en personne.</p>
      
      
    
      
      </div>
  </section>
</div>


  

<?php get_footer(); ?>
