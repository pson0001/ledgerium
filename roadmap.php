
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
    <title>Ledgerium || Roadmap</title>
    <?php include('templates/head.php'); ?> 
  </head>
  <body class="about-us">

  <!-- .hero-head -->
  <section class="hero is-fullheight is-large">
    <div class="hero-body">
    <?php include('templates/navegation.php'); ?> 
      <div class="container">
      <h1 class="title has-text-centered">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec fermentum commodo diam sit amet vestibulum. Nulla elementum varius libero a facilisis.</h1>
      </div>
    </div>
    <div class="container has-text-centered down-arrow">
        <img src="assets/images/down-arrow.svg" width="22" height="22">
    </div> 

    <div class="hero-foot">
    <nav class="tabs is-boxed is-fullwidth">
      <div class="container">
      <h1 class="super-big has-text-centered">Roadmap</h1>
      </div>
    </nav>
  </div>
  </section>
  <!-- /.hero-head -->

  <!-- .content -->
  <section class="spacer">
    <h2 class="section-title has-text-centered">Helping businness to use blockchain</h2>
  </section>

<div class="timeline is-centered">
  <header class="timeline-header">
    <span class="tag is-medium is-primary">Start</span>
  </header>
  <div class="timeline-item is-primary">
    <div class="timeline-marker is-primary"></div>
    <div class="timeline-content">
      <p class="heading">January 2016</p>
      <p>Timeline content - Can include any HTML element</p>
    </div>
  </div>
  <div class="timeline-item is-warning">
    <div class="timeline-marker is-warning is-image is-32x32">
      <img src="http://bulma.io/images/placeholders/32x32.png">
    </div>
    <div class="timeline-content">
      <p class="heading">February 2016</p>
      <p>Timeline content - Can include any HTML element</p>
    </div>
  </div>
  <header class="timeline-header">
    <span class="tag is-primary">2017</span>
  </header>
  <div class="timeline-item is-danger">
    <div class="timeline-marker is-danger is-icon">
      <i class="fa fa-flag"></i>
    </div>
    <div class="timeline-content">
      <p class="heading">March 2017</p>
      <p>Timeline content - Can include any HTML element</p>
    </div>
  </div>
  <header class="timeline-header">
    <span class="tag is-medium is-primary">End</span>
  </header>
</div>

  
  <!-- /.content -->

    <?php include('templates/sidebar.php'); ?>
    <?php include('templates/console.php'); ?>
    <?php include('templates/front-gallery.php'); ?>
    <?php include('templates/footer.php'); ?>
  </body>
</html>
