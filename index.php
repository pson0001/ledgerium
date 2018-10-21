<?php
/****************************************************
*
* @File:          index.php ledgerium
*
*****************************************************/
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->       
  <head>
    <?php include('templates/head.php'); ?> 
  </head>
  <body>
    <?php include('templates/navegation.php'); ?> 

  <section class="hero is-fullheight is-black">
      <!-- .hero-head -->
      <div class="hero-head">
        <div class="columns is-mobile is-marginless">            
          <section class="section">
            <div class="container">
              <h1 class="title">
                The Advanced Accounting
                Ledger on the Blockchain</h1>
              <p>Maecenas vel pharetra mauris. Cras vitae vestibulum ligula. In sit amet ornare sapien. Nulla facilisi. Donec dui mauris, posuere a tincidunt non, porttitor a lacus. Sed porta eget nisl in posuere. Aliquam gravida a lectus eget maximus. </p>
              <a href="#">Read the whitepaper →</a>
              <a href="#">Read the whitepaper →</a>
            </div>
          </section>
        </div>
      </div>
      <!-- /.hero-head -->
  </section>

  <section class="tabs is-medium">
    <ul>
      <li class="is-active"><a>Blockchain technology</a></li>
      <li><a>Modern Accounting</a></li>
      <li><a>Cloud technology</a></li>
      <li><a>Secure</a></li>
    </ul>
    <div class="tab-container">
      <div>
        <video>video</video>
      </div>
      <div>
        <h2>Blockchain technology</h2>
        <h3>Ledger systems</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
      </div>
    </div>
  </section>

    <?php include('templates/sidebar.php'); ?>
    <?php include('templates/console.php'); ?>
    <?php include('templates/front-gallery.php'); ?>
    <?php include('templates/footer.php'); ?>
  </body>
</html>
