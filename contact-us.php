
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
    <title>Ledgerium || Contact Us</title>
    <?php include('templates/head.php'); ?> 
  </head>
  <body class="Contact-us contact-bg">

  <!-- .hero-head -->
  <section class="is-large">
    <div class="header-title">
      <?php include('templates/navegation.php'); ?> 
      <div class="text-container">
        <h1 class="super-big has-text-centered">Contact Us</h1>
      </div>
    </div>
  </section>
  <!-- /.hero-head -->

  <section class="section is-small"></section>

<div class="container">

  <div class="form">

    <div class="columns">
      <div class="column is-6">

          <div class="control">
            <label>Name</label>
            <input class="input is-medium" type="text" placeholder="Your name">
          </div>
          <div class="control">
            <label>Company</label>
            <input class="input is-medium" type="text" placeholder="Your company name">
          </div>
          <a class="button">Submit</a>

      </div>
      <div class="column is-6">

          <div class="control">
            <label>Email</label>
            <input class="input is-medium" type="text" placeholder="Your email">
          </div>
          <div class="control">
          <label>Message</label>
            <textarea class="input is-medium" type="textarea" placeholder="Your message"></textarea>
          </div>

      </div>
      
    </div>

    <div class="columns">
      <div class="column is-4">
      <h3>Address</h3>
      <p>Text</p>
      </div>
      <div class="column is-4">
      <h3>Address</h3>
      <p>Text</p>
      </div>
      <div class="column is-4">
      <h3>Address</h3>
      <p>Text</p>
      </div>
    </div>

  </div>

</div>

    <?php include('templates/footer.php'); ?>
  </body>
</html>
