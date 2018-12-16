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
                    </div>
                </div>
            </div>
            <div class="container has-text-centered down-arrow">
                <img src="assets/images/down-arrow.svg" width="22" height="22">
            </div>
        </section>
        <!-- /.hero-head -->

        <section class="section is-small">
            <h2 class="section-title has-text-centered">Ledgerium</h2>
        </section>

        <!-- -->


        <div class="info">
          <div class="info_container">

            <input class="radio_box" id="tab1" type="radio" name="tabs" checked>
            <label class="label_container" for="tab1">BLOCKCHAIN TECHNOLOGY</label>

            <input class="radio_box" id="tab2" type="radio" name="tabs">
            <label class="label_container" for="tab2">MODERN ACCOUNTING</label>

            <input class="radio_box" id="tab3" type="radio" name="tabs">
            <label class="label_container" for="tab3">SECURE</label>

            <section class="content_container" id="content1" >
              <div class="columns is-vcentered">
                  <div class="colums is-6">
                    <iframe width="640" height="360" style="max-width:100%" src="https://www.youtube.com/embed/RyZtL4OCPCQ?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                  </div>
                  <div class="column is-offset-1 is-5 content" id="paragraph">
                  <h2 class="title">Blockchain technology</h2>
                  <h3 class="subtitle">Ledger systems</h3>
                  <span>Blockchain is a ledger can be written onto with new information, but the
                    previous information, stored in blocks, cannot be edited, adjusted or changed. 
                    Blockchains are based on a consensus-driven mechanism, with mathematical proof 
                    and decentralized databases is a solution to the above issues. The features of 
                    the Blockchain are its game changing technology. Any digital form of asset certification, 
                    recording, registration, storage, trading, payment, circulation can be achieved through 
                    the Blockchain. The main advantage of the Blockchain is that it requires no intermediary 
                    participation, the process is efficient and transparent, the cost is low, and the data 
                    is highly secure.</span></div>
              </div>
            </section>

            <section class="content_container" id="content2">
              <div class="columns is-vcentered">

                  <div class="colums is-6">
                    <iframe width="640" height="360" style="max-width:100%" src="https://www.youtube.com/embed/RyZtL4OCPCQ?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                  </div>
                  <div class="column is-offset-1 is-5 content" id="paragraph">
                  <h2 class="title">MODERN ACCOUNTING</h2>
                  <h3 class="subtitle">Ledger systems</h3>
                  <span>Auditors generally use confirmations as the substantive procedure 
                        during an audit. This process involves obtaining and evaluating a direct 
                        communication from a third party in response to a request for 
                        information about a particular item affecting financial statement 
                        assertions. the current audit confirmation process is slow 
                        and resource intensive, only a small sample of transactions are audited, 
                        there is a high degree of errors and overall still prone to fraud. With 
                        Ledgerium capturing every transaction and writing it onto the 
                        blockchain and the use of smart contracts to acknowledge and confirm
                        that the transaction has occurred, significant time and cost savings can be achieved. </span></div>
              </div>
            </section>

            <section class="content_container" id="content3">
              <div class="columns is-vcentered">
                  <div class="colums is-6">
                    <iframe width="640" height="360" style="max-width:100%" src="https://www.youtube.com/embed/RyZtL4OCPCQ?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                  </div>
                  <div class="column is-offset-1 is-5 content" id="paragraph">
                  <h2 class="title">Secure</h2>
                  <h3 class="subtitle">Ledger systems</h3>
                  <span>Security and Privacy are major concerns for all networked systems. As 
                        such, two key critical components in the ecosystem will address this concern; 
                        <br/>
                        <strong>Identity Platform (LIP)</strong>: allows users, including individuals, 
                        companies, accountants, institutions and governments to register to the 
                        Ledgerium network, having authenticated accesses through our website or mobile application. 
                        <br/>
                        <strong>File System (LFS)</strong>: based on IPFS’ distributed file system to 
                        provide secure, efficient file store to users across Ledgerium.</span></div>
              </div>
            </section>
          </div>

        </div>

        <section class="section is-small">
            <h2 class="section-title has-text-centered">Who needs ledgerium</h2>
        </section>

        <!-- .titles -->
        <div class="container">
            <div class="tile is-ancestor">
                <div class="tile is-vertical is-8">
                    <div class="tile">
                        <div class="tile is-parent is-vertical is-4">
                            <article class="tile is-child notification bg-blue">
                                <h2 class="subtitle">Business entities need to be audited</h2>
                            </article>
                        </div>
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child notification bg-grey">
                                <h2 class="subtitle">Non-commercial subjects need to be audited</h2>
                            </article>
                        </div>
                    </div>
                    <div class="tile">
                        <div class="tile is-parent is-vertical is-8">
                            <article class="tile is-child notification bg-brown-image">
                                <h2 class="subtitle">Small and medium business need investment</h2>
                            </article>
                        </div>
                        <div class="tile is-parent is-vertical is-4">
                            <article class="tile is-child notification bg-brown">
                                <h2 class="subtitle">Blockchain related business</h2>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="tile is-parent is-vertical">
                    <article class="tile is-child notification bg-blue-image">
                        <h2 class="subtitle">Audit firms and government authorities</h2>
                    </article>
                </div>
            </div>
        </div>
        <svg>
          <filter id="blue-tint" color-interpolation-filters="sRGB">
            <feColorMatrix type="matrix"
              values="0.44 0 0 0  0.00
                      0.47 0 0 0  0.06
                      0.40 0 0 0  0.2
                        0  0 0 1  0" />
          </filter>
      </svg>
        <section class="section is-small" id="moreinfo">
            <h2 class="section-title has-text-centered">Find out more</h2>
        </section>

        <div class="contact-footer has-text-white" style="height:600px;">
            <div class="container">
            <script type="text/javascript">
                $(document).ready(function()
                {
                    $('#contactform').load('https://www.ledgerium.net/ledgerium/ .wpcf7-form');
                })
            </script>
                <div class="form">
                    <h2 class="subtitle has-text-centered has-text-white is-size-3">Get our pitch pack</h2>

                    <div id="contactform"></div>
                    <!--<div class="columns">
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
                    -->
                </div>
            </div>
        </div>



        <div class='carousel carousel-animated carousel-animate-slide' data-size="5">
            <div class='carousel-container'>
                <div class='carousel-item is-active'>
                    <figure class="image is-2by1"><img src="assets/images/collinstar-block.png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by1"><img src="assets/images/hayek-block.png"></figure>
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
                    <figure class="image is-2by1"><img src="assets/images/collinstar-block.png"></figure>
                </div>
            </div>
        </div>


    </div>
    <?php include('templates/footer.php'); ?>
</body>
</html>
