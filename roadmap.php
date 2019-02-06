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
        <title>Ledgerium || Roadmap</title>
        <?php include('templates/head.php'); ?>
    </head>
    <body class="roadmap" >

        <!-- .hero-head -->
        <section class="hero is-fullheight is-large ">
            <div class="hero-body">
                <?php include('templates/navegation.php'); ?>
                <div class="container">
                    <h1 class="title has-text-centered">Trust your business with Ledgerium</h1>
                </div>
            </div>
            <div class="container has-text-centered down-arrow">
                <a id="downarrow" href="#" onclick="javascript:scrollToAnchor('roadmap');">
                    <img src="assets/images/down-arrow.svg" width="22" height="22">
                </a>
            </div>

            <a name="roadmap"></a>
            <div class="text-container">
                <h1 class="super-big has-text-centered">Roadmap</h1>
            </div>
        </section>
        <!-- /.hero-head -->

        <!-- .content -->
        <section class="section is-small">
            <h2 class="section-title has-text-centered">Helping businness to use Ledgerium product</h2>
        </section>

        <div class="container">

            <div class="timeline is-centered">
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="subtitle">2018 QUARTER 4</h2>
                        <p>UI/UX, system architecture design.
                            Implement and complete MVP.
                            Release public testnet.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="subtitle">2019 QUARTER 1</h2>
                        <p>Release public mainnet. Rollout initial version to testing partners. Release wallet.
                        </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="subtitle">2019 QUARTER 2</h2>
                        <p>Mainnet going live. Second major version release to testing partner.
                          Implementation and release beta frontend.
                          Integration with more platforms.
                        </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="subtitle">2019 QUARTER 3</h2>
                        <p>Genearl releases, mobile apps, 1-click deployments. End to end accounting system integration.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="subtitle">2019 QUARTER 4</h2>
                        <p>More financial system integration. Global public release frontend and services. 
                            Government certifications. Implement future product features.
                        </p>
                    </div>
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
        <section class="section is-small"></section>

        <!-- .hero-head -->
        <section class="hero hero-lgum is-fullheight is-large">
            <div class="hero-body">
                <div class="container">
                    <div class="columns is-desktop is-vcentered">
                        <div class="column is-8">
                            <h1 class="title" style="font-size:32px;line-height:40px;">Ledgerium focuses on bringing blockchain to the accounting and auditing industry. 
                            We aim to create a decentralized ledger through a triple entry accounting system that comprises three major components: Audit Confirmation, 
                            AP/AR Management, and Trust Account Audit. All these are deliveried via a reliable cloud based platform to provide great flexibility and scalability.  
                            Ledgerium also integrates with major accounting platforms and banking systems to enable seamless experience to all our customers. 
                            </h1>
                        </div>
                        <div class="column is-3 is-offset-1">
                            <figure class="image is-square">
                                <img src="assets/images/lgum.svg">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.hero-head -->

        <!-- /.content -->

        <?php include('templates/footer.php'); ?>
    </body>
</html>
