<?php get_header(); ?>
<!-- Cette page n'est pas supposé apparaitre -->
<!-- sauf pour l'instant la page newsletter -->
<?php
if ( is_page('newsletter') ) {
      if (isset($_GET['nm']) && !empty($_GET['nm']) && $_GET['nm'] === 'confirmed') {
            ?>
            <style>
                  .h3{
                        padding: 0;
                        margin: 0;
                        margin-top: 25vh;
                        margin-bottom: 25vh;
                        text-align: center;
                  }
                  h3{
                        margin: auto;
                  }
                  .a{
                        text-decoration: none;
                        color: white;
                  }
            </style>
            <div class="h3">
                  <h3>félicitation! vous êtes inscrits sur la newsletter de Shape</h3>
                  <a class="a" href="<?php echo home_url(); ?>"><h4>retour a l'accueil</h4></a>
            </div>
            <?php
      }
}
?>
<?php get_footer(); ?>