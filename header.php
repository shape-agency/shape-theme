<!DOCTYPE html>
<html <?php language_attributes(); ?>>    
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/logo/logo-shape.png" type="image/x-icon">
      <title>Shape Agency</title>
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Cuprum&family=Nunito+Sans&display=swap" rel="stylesheet"> 
      <?php wp_head(); ?>
</head>
<body>
      <header id="header">
            <div class="logo header__child">
                  <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/logo/logo-shape.png" alt=""></a>
            </div>
            <div class="burger header__child" id="burger">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/logo/hamburger.png" alt="">
            </div>
            <div class="nav header__child" id="nav">
                  <a href="#lagence" class="nav__child">L'agence</a>
                  <a href="#services" class="nav__child">Nos services</a>
                  <a href="#contact-h2" class="nav__child">Contact</a>
            </div>
      </header>

      <script>
            let b = 0;
            document.getElementById('burger').addEventListener('click', hideShow);
            function hideShow(){
                  console.log('hello');
                  if (b == 0) {
                        document.getElementById('nav').style.animation = 'menu 0.2s linear';
                        document.getElementById('nav').style.animationFillMode = 'both'; //ça bloque a 100%
                        b = 1;
                  }else{
                        document.getElementById('nav').style.animation = 'menu2 0.2s linear';
                        b = 0;
                  }
            }
            
/* 
            window.onscroll = function (e) {  
                  document.getElementById('header').style.position = 'sticky';
                  document.getElementById('header').style.top = '0';
            }  */
      </script>
