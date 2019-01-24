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
                    <div class="tile is-8 is-vertical">
                        <h1 class="title">
                            Accounting Ledger on the Blockchain</h1>
                        <span class="title" style="color:#fff;text-transform:none;font-weight:100;margin-bottom:20px;">Realtime | Cost-effective | Secure</span>
                    </div>
                </div>
            </div>
            <div class="container has-text-centered down-arrow">
                <a href="https://ledgerium.typeform.com/to/z4jsTC" target="_blank" class="button is-medium" style="width:200px;margin-bottom:60px">Free Trial</a>
                <br/>
                <a id="downarrow" href="#" onclick="javascript:scrollToAnchor('whatwedo');">
                    <img src="assets/images/down-arrow.svg" width="22" height="22">
                </a>
            </div>
        </section>
        <!-- /.hero-head -->

        <a name="whatwedo"></a>
        <section class="section is-small">
            <h2 class="section-title has-text-centered">What we do</h2>
        </section>

        <!-- -->


        <div class="info">
          <div class="info_container">

            <input class="radio_box" id="tab1" type="radio" name="tabs" checked>
            <label class="label_container" for="tab1">AUDIT CONFIRMATION</label>

            <input class="radio_box" id="tab2" type="radio" name="tabs">
            <label class="label_container" for="tab2">AR/AP MANAGEMENT</label>

            <input class="radio_box" id="tab3" type="radio" name="tabs">
            <label class="label_container" for="tab3">TRUST ACCOUNT AUDIT</label>

            <section class="content_container" id="content1" >
              <div class="columns">
                  <div class="colums is-6">
                    <iframe width="640" height="360" style="max-width:100%" src="https://www.youtube.com/embed/RyZtL4OCPCQ?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                  </div>
                  <div class="column is-offset-1 is-5 content" id="paragraph">
                  <h2 class="title">Audit Confirmation</h2>
                  <!--<h3 class="subtitle">Ledger systems</h3>-->
                  <span>Ledgerium as a confirmation platform is capable of recording transactions between parties on the Blockchain. 
                      By storing the hash after the data being encrypted could verify and provide proof of the occurrence, completeness, 
                      accuracy, cut-off of all the transactions.
                        <br/><br/>
                        You could send invoices or process bills in your accounting software, and we will handle the confirmation with 
                        the bank and across different accounting softwares such as Xero, MYOB, QuickBooks, Salesforce and more.
                    </span></div>
              </div>
            </section>

            <section class="content_container" id="content2">
              <div class="columns">

                  <div class="colums is-6">
                    <iframe width="640" height="360" style="max-width:100%" src="https://www.youtube.com/embed/RyZtL4OCPCQ?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                  </div>
                  <div class="column is-offset-1 is-5 content" id="paragraph">
                  <h2 class="title">AR/AP Management</h2>
                  <!--<h3 class="subtitle">Ledger systems</h3>-->
                  <span>The beauty of Ledgerium is not only confirming transactions being happened, but also a powerful tool to manage your 
                      account receivable and account payable functions.
                        <br/><br/>
                        While sending invoice and paying bills, there is an in-build AI credit rating system for all your transactions. 
                        Furthermore, data from the blockchain is recognised by the financial institutions to speed up your supply chain finance.
                    </span></div>
              </div>
            </section>

            <section class="content_container" id="content3">
              <div class="columns">
                  <div class="colums is-6">
                    <iframe width="640" height="360" style="max-width:100%" src="https://www.youtube.com/embed/RyZtL4OCPCQ?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                  </div>
                  <div class="column is-offset-1 is-5 content" id="paragraph">
                  <h2 class="title">Trust Account Audit</h2>
                  <!--<h3 class="subtitle">Ledger systems</h3>-->
                  <span>Trust account is for maintaining clients’ funding by financial institutions, body corporate, strata management, 
                      real estate agent and lawyer etc. Every ledger will need to be reconciled and examined by auditor. 
                        <br/><br/>
                        Ledgerium is a perfect software for managing the trust account reporting and audit. As every transaction of the 
                        trust accounts will need to be confirmed using smart contract, which will save the businesses and auditors huge 
                        amount of time, cost and more importantly less fraud.
                    </span></div>
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
                                <h2 class="subtitle">Entities need to be audited</h2>
                            </article>
                        </div>
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child notification bg-grey">
                                <h2 class="subtitle">Financial Institutions</h2>
                            </article>
                        </div>
                    </div>
                    <div class="tile">
                        <div class="tile is-parent is-vertical is-8">
                            <article class="tile is-child notification bg-brown-image">
                                <h2 class="subtitle">Entities need <br/> AR/AP Management</h2>
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
        <a name="moreinfo"></a>
        <section class="section is-small">
            <h2 class="section-title has-text-centered">Find out more</h2>
        </section>

        <div class="contact-footer has-text-white" style="height:750px;">
            <div class="container has-text-centered">
            <a href="https://ledgerium.typeform.com/to/z4jsTC" target="_blank" class="button is-medium" style="width:300px;margin-bottom:40px">Become Test Partner</a>
            <br/>
            <h2 class="subtitle has-text-centered has-text-white is-size-3">or</h2>
            <br/>
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
                    <figure class="image is-2by1"><img src="assets/images/adca-block.png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by1"><img src="assets/images/blockchainau-block.png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by1"><img src="assets/images/fintechau-block.png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by1"><img src="assets/images/fmaa-block.png"></figure>
                </div>
                <div class='carousel-item'>
                    <figure class="image is-2by1"><img src="assets/images/winvestor-block.png"></figure>
                </div>
            </div>
        </div>


    </div>
    <?php include('templates/footer.php'); ?>
</body>
</html>
