<?php
/****************************************************
*
* @File:          index.php ledgerium
*
*****************************************************/
?>

<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
    <!--<![endif]-->
    <head>
        <title>Ledgerium || Blockchain accounting system</title>
        <?php include('templates/head.php'); ?>
    </head>
    <body class="front-page">

        <!-- .hero-head -->
        <section class="hero is-fullheight is-large">
            <div class="hero-body">
                <?php include('templates/navegation.php'); ?>
                <div class="container">
                    <div class="tile is-5 is-vertical">
                        <h1 class="title">
                            The Advanced Accounting Ledger on the Blockchain</h1>
                        <div>
                            <a href="#">Read the whitepaper →</a>
                        </div>
                        <div>
                            <a href="#">LGUM Token →</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container has-text-centered down-arrow">
                <img src="assets/images/down-arrow.svg" width="22" height="22">
            </div>
        </section>
        <!-- /.hero-head -->

        <!-- .tabs-->
        <section class="section is-small">
            <h2 class="section-title has-text-centered">Ledgerium</h2>
        </section>

        <div class="tabs is-centered">
            <ul>
                <li class="is-active">
                    <a>Blockchain technology</a>
                </li>
                <li>
                    <a>Modern Accounting</a>
                </li>
                <li>
                    <a>Cloud technology</a>
                </li>
                <li>
                    <a>Secure</a>
                </li>
            </ul>
        </div>
        <div class="tab-content">
            <div class="tab-pane" id="pane-1">
                <video>
                    <source src="myVideo.mp4" type="video/mp4">
                    <source src="myVideo.webm" type="video/webm">
                </video>
                <h2>Blockchain technology</h2>
                <h3>Ledger systems</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac massa non
                    massa dapibus blandit et non dui. Interdum et malesuada fames ac ante ipsum
                    primis in faucibus.</p>
                <div>Find out more →</div>
            </div>
            <div class="tab-pane" id="pane-2">
                <figure>
                    <img src="https://source.unsplash.com/0_xMuEbpFAQ/400x400" alt="" class="cent">
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac massa non
                    massa dapibus blandit et non dui. Interdum et malesuada fames ac ante ipsum
                    primis in faucibus.</p>
                <div>Find out more →</div>
            </div>
            <div class="tab-pane" id="pane-3">
                <figure>
                    <img src="https://source.unsplash.com/0_xMuEbpFAQ/400x400" alt="" class="cent">
                </figure>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac massa non
                    massa dapibus blandit et non dui. Interdum et malesuada fames ac ante ipsum
                    primis in faucibus.</p>
                <div>Find out more →</div>
            </div>

            <!-- /.tabs-->

            <section class="section is-small">
                <h2 class="section-title has-text-centered">Who needs ledgerium</h2>
            </section>

            <!-- .titles -->
            <div class="container">
            <div class="tile lgum is-ancestor">
                <div class="tile is-vertical is-8">
                    <div class="tile">
                        <div class="tile is-parent is-vertical is-4">
                            <article class="tile is-child notification is-primary">
                                <p class="title">Vertical...</p>
                                <p class="subtitle">Top tile</p>
                            </article>
                        </div>
                        <div class="tile is-parent">
                            <article class="tile is-child notification is-info">
                                <p class="title">Middle tile</p>
                                <p class="subtitle">With an image</p>
                            </article>
                        </div>
                    </div>
                    <div class="tile">
                        <div class="tile is-parent is-vertical is-8">
                            <article class="tile is-child notification is-primary">
                                <p class="title">Vertical...</p>
                                <p class="subtitle">Top tile</p>
                            </article>
                        </div>
                        <div class="tile is-parent" is-4>
                            <article class="tile is-child notification is-info">
                                <p class="title">Middle tile</p>
                                <p class="subtitle">With an image</p>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="tile is-parent">
                    <article class="tile is-child notification is-success">
                        <div class="content">
                            <p class="title">Tall tile</p>
                            <p class="subtitle">With even more content</p>
                            <div class="content">
                                <!-- Content -->
                            </div>
                        </div>
                    </article>
                </div>
            </div>
</div>

            <section class="section is-small">
                <h2 class="section-title has-text-centered">Who is talking about us?</h2>
            </section>

            <div class="quote">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ac massa non
                    massa dapibus blandit et non dui.</p>
            </div>

            <section class="section is-small">
                <h2 class="section-title has-text-centered">Find out more</h2>
            </section>

            <div class="contact-footer has-text-white">
                <div class="container">

                    <div class="form">
                        <h2 class="subtitle has-text-centered has-text-white is-size-3">Get our pitch pack</h2>

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
                                <div class="control">
                                    <a class="button is-medium">Submit</a>
                                </div>

                            </div>
                            <div class="column is-6">

                                <div class="control">
                                    <label>Email</label>
                                    <input class="input is-medium" type="text" placeholder="Your email">
                                </div>
                                <div class="control">
                                    <label>Message</label>
                                    <textarea
                                        class="textarea is-medium"
                                        type="textarea"
                                        placeholder="Your message"
                                        rows="3"
                                        cols="33"
                                        maxlength="200"></textarea>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>
            </div>

 <div class='carousel carousel-animated carousel-animate-slide' data-size="5">
  <div class='carousel-container'>
    <div class='carousel-item is-active'>
      <figure class="image is-2by1"><img src="assets/images/hayek-block.png"></figure>
    </div>
    <div class='carousel-item'>
      <figure class="image is-2by1"><img src="assets/images/fintech-block.png"></figure>
    </div>
    <div class='carousel-item'>
      <figure class="image is-2by1"><img src="assets/images/async-block.png"></figure>
    </div>
    <div class='carousel-item'>
      <figure class="image is-2by1"><img src="assets/images/winvestor-block.png"></figure>
    </div>
    <div class='carousel-item'>
      <figure class="image is-2by1"><img src="assets/images/fintech-block.png"></figure>
    </div>
    <div class='carousel-item'>
      <figure class="image is-2by1"><img src="assets/images/async-block.png"></figure>
    </div>
    <div class='carousel-item'>
      <figure class="image is-2by1"><img src="assets/images/winvestor-block.png"></figure>
    </div>
  </div>
</div>

        </div>
        <script src="../js/bulma.js"></script>
        <script src="../js/tabs.js"></script>
        <?php include('templates/footer.php'); ?>
    </body>
</html>