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
        <section class="hero is-fullheight  is-large">
            <div class="hero-body">
                <?php include('templates/navegation.php'); ?>
                <div class="container">
                    <div class="tile is-8 is-vertical">
                        <h1 class="title">
                            Bridging Trust</h1>
                        <span class="title" style="color:#fff;text-transform:none;font-weight:100;margin-bottom:20px;">Real-time | Cost-effective | Secure</span>
                    </div>
                </div>
            </div>
            <div class="container has-text-centered down-arrow">
                <a href="https://ledgerium.typeform.com/to/z4jsTC" target="_blank" class="button is-medium" style="width:320px;margin-bottom:60px">Become A Test Partner</a>
                <br/>
                <a id="downarrow" href="#" onclick="javascript:scrollToAnchor('whatwedo');">
                    <img src="assets/images/down-arrow.svg" width="22" height="22">
                </a></div>
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
            <label class="label_container" for="tab2">COMING SOON</label>

            <section class="content_container" id="content1" >
              <div class="columns">
                  <div class="colums is-6">
                    <iframe width="640" height="360" style="max-width:100%" src="https://www.youtube.com/embed/j3msw9Q_EZk?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                  </div>
                  <div class="column is-offset-1 is-5 content" id="paragraph">
                  <h2 class="title" style="font-size:1.3em">Luca&trade; by Ledgerium</h2>
                  <!--<h3 class="subtitle">Ledger systems</h3>-->
                  <span>Luca is a confirmation platform that is capable of recording transactions between parties on the Blockchain. 
                      <br/><br/>
                      By putting the hash on to blockchain to allow verifying authenticity and provide proof of the occurrence, completeness, 
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
                    <iframe width="640" height="360" style="max-width:100%" src="https://www.youtube.com/embed/j3msw9Q_EZk?feature=oembed" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                  </div>
                  <div class="column is-offset-1 is-5 content" id="paragraph">
                  <h2 class="title" style="font-size:1.3em">Coming Soon</h2>
                  <!--<h3 class="subtitle">Ledger systems</h3>-->
                  <span><strong>AR/AP Management</strong> - manage your account receivable and account payable functions.
                        While sending invoice and paying bills, there is an in-build AI credit rating system for all your transactions. 
                        Furthermore, data from the blockchain is recognised by the financial institutions to speed up your supply chain finance.
                        <br/><br/>
                        <strong>Trust Account Audit</strong> - maintain clients’ funding by financial institutions, body corporate, strata management, 
                        real estate agent and lawyer etc. Every ledger will need to be reconciled and examined by auditor. Every transaction of the 
                        trust accounts will be confirmed using smart contract, which will save the businesses and auditors huge amount of time, cost 
                        and more importantly less fraud.
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
                            <article class="tile is-child notification bg-blue effect effect-slide">
                                <h2 class="subtitle effect_heading">Business</h2>
                                <h2 class="subtitle effect_subheading">Better cashflow with AP/AR automation</h2>
                            </article>
                        </div>
                        <div class="tile is-parent is-vertical">
                            <article class="tile is-child notification bg-grey effect effect-slide">
                                <h2 class="subtitle effect_heading">Accounting firm</h2>
                                <h2 class="subtitle effect_subheading">More efficient and lower risk</h2>
                            </article>
                        </div>
                    </div>
                    <div class="tile">
                        <div class="tile is-parent is-vertical is-8">
                            <article class="tile is-child notification bg-brown-image effect effect-slide">
                                <h2 class="subtitle effect_heading">Trust account</h2>
                                <h2 class="subtitle effect_subheading">Audit and compliance become effortless</h2>
                            </article>
                        </div>
                        <div class="tile is-parent is-vertical is-4">
                            <article class="tile is-child notification bg-brown effect effect-slide">
                                <h2 class="subtitle effect_heading">Non for profit</h2>
                                <h2 class="subtitle effect_subheading">Compliance with improved transparency</h2>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="tile is-parent is-vertical">
                    <article class="tile is-child notification bg-blue-image effect effect-slide">
                        <h2 class="subtitle effect_heading">Financial Institution</h2>
                        <h2 class="subtitle effect_subheading">Faster supply chain finance means more clients</h2>
                    </article>
                </div>
            </div>
        </div>
        <svg style="display:none;">
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

        <div class="contact-footer has-text-white" style="height:250px;">
            <div class="container has-text-centered">
                <a href="https://ledgerium.typeform.com/to/z4jsTC" target="_blank" class="button is-medium" style="width:320px;margin-right:40px">Become A Test Partner</a>
                <a href="./contact-us.php" class="button is-medium" style="width:320px;">Get Pitch Pack</a>
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
