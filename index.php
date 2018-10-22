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

  <!-- .hero-head -->
  <section class="hero is-fullheight is-large">
    <div class="hero-body">
    <?php include('templates/navegation.php'); ?> 
      <div class="container">
        <div class="tile is-5 is-vertical">
          <h1 class="title">
              The Advanced Accounting
              Ledger on the Blockchain</h1>
            <div><a href="#">Read the whitepaper →</a></div>
            <div><a href="#">LGUM Token →</a></div>
        </div>
      </div>
    </div>
    <div class="container has-text-centered down-arrow">
        <img src="assets/images/down-arrow.svg" width="22" height="22">
    </div> 
  </section>
  <!-- /.hero-head -->

  <section class="spacer">
    <h2 class="section-title has-text-centered">Ledgerium</h2>
  </section>

  <section class="tabs is-centered">
    <ul>
      <li class="is-active"><a>Blockchain technology</a></li>
      <li><a>Modern Accounting</a></li>
      <li><a>Cloud technology</a></li>
      <li><a>Secure</a></li>
    </ul>
  </section>

    <?php include('templates/sidebar.php'); ?>
    <?php include('templates/console.php'); ?>
    <?php include('templates/front-gallery.php'); ?>
    <?php include('templates/footer.php'); ?>
  </body>
</html>
