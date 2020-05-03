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

<link
      href="layout/styles/layout.css"
      rel="stylesheet"
      type="text/css"
      media="all"
    />


    <!-- ################################################################################################ -->
    <div
      class="wrapper bgded"
      style="background-image:url('<?php echo get_theme_file_uri( 'images/backgrounds/circles_top.jpg' ); ?>'); max-height: 250px;"
    >
    
      <div id="pageintro" class="hoc clear">
        <!--
    <div class="flexslider basicslider">
      <ul>
        <li>
          <article>
            <h3 class="heading">Bienvenue sur le site web de CryoQuébec</h3>
          </article>
        </li>
      </ul>
    </div> -->
        <!-- ################################################################################################ -->
      </div>
    </div>
    <!-- ################################################################################################ -->
    <div class="wrapper row3">
      <section class="hoc container clear">
        <!-- ################################################################################################ -->
        <div class="sectiontitle">
          <h6 class="heading">Bienvenue sur le site web de CryoQuébec</h6>
        </div>
        <div class="group">
          <div class="one_half first">
            <p><strong>Qu'est-ce que la cryonie?</strong></p>
            <p>
              La cryonie consiste à conserver à très basse température
              (normalement −196 °C) une personne dont la médicine actuelle ne
              peut maintenir en vie dans l'espoir que la technologie future
              permettra de le réanimer et le ramener à pleine santé.
            </p>
            <!--<footer><a class="btn" href="FAQ.html">Plus d'information &raquo;</a></footer>-->

            <p><strong>Qu'est-ce que CryoQuébec?</strong></p>
            <p>
              Nous sommes un groupe intéressé à sensibiliser les gens à la
              cryonie, aider ceux intéressés à s'enregistrer, et améliorer la
              capacité de réponse en cas d'urgence au Québec.
            </p>
            <footer>
              <a
                class="btn"
                target="_blank"
                href="https://www.facebook.com/groups/CryonieQuebec/"
                >Rejoignez la discussion sur Facebook</a
              >
            </footer>
          </div>
          <div class="one_half">
            <p><strong>La cryonie dans les médias</strong></p>
            <a href="#">
              <iframe
                style="max-width:100%"
                width="560"
                height="315"
                src="https://www.youtube.com/embed/FhkUcqORqtQ"
                frameborder="0"
                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen
              ></iframe>
            </a>
          </div>
        </div>
        <!-- ################################################################################################ -->
      </section>
    </div>

    <div
      class="wrapper bgded overlay"
      style="background-image:url('images/demo/backgrounds/02.png');"
    >
      <main class="hoc container clear">
        <!-- main body -->
        <!-- ################################################################################################ -->
        <ul class="nospace group services">
          <li class="one_third first">
            <article>
              <i class="fa fa-question"></i>
              <h6 class="heading">Foire aux questions</h6>
              <p>
                Est-ce qu'on a déjà réanimé quelqu'un? Combien est-ce que ça
                coûte? Si vous avez une question sur la cryonie, consultez notre
                foire aux questions.
              </p>
              <footer>
                <a class="btn" href="FAQ.html">Continuez de lire &raquo;</a>
              </footer>
            </article>
          </li>
          <li class="one_third">
            <article>
              <i class="fa fa-leanpub"></i>
              <h6 class="heading">Ressources</h6>
              <p>
                Voici notre répertoire de ressources externes pour en apprendre
                plus sur la cryonie.
              </p>
              <footer>
                <a class="btn" href="Ressources.html"
                  >Continuez de lire &raquo;</a
                >
              </footer>
            </article>
          </li>
          <li class="one_third">
            <article>
              <i class="fa fa-user-plus"></i>
              <h6 class="heading">S'enregistrer</h6>
              <p>
                Si vous êtes situés en Amérique du Nord, les organisations les
                plus proches sont Alcor, le Cryonics Institute et OregonCryo.
              </p>
              <footer>
                <a class="btn" href="S'enregistrer.html"
                  >Continuez de lire &raquo;</a
                >
              </footer>
            </article>
          </li>
        </ul>
        <!-- ################################################################################################ -->
        <!-- / main body -->
        <div class="clear"></div>
      </main>
    </div>
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!-- ################################################################################################ -->
    <!--
<div class="wrapper overlay coloured">
  <figure class="hoc clear"> 
    <ul class="nospace group logos">
      <li class="one_quarter first"><a href="#"><img src="images/demo/222x50.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x50.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x50.png" alt=""></a></li>
      <li class="one_quarter"><a href="#"><img src="images/demo/222x50.png" alt=""></a></li>
    </ul>
  </figure>
</div>
-->

  

<?php get_footer(); ?>
