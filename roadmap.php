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
                    <h1 class="title has-text-centered">Build your way with Ledgerium</h1>
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
            <h2 class="section-title has-text-centered">Helping businness to use blockchain</h2>
        </section>

        <div class="container">

            <div class="timeline is-centered">
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="subtitle">2018 QUARTER 4</h2>
                        <p>Implement wallet & blockchain look up features.
                            Complete cross platform frontend for smart contract execution.
                            Release on ethereum main-net for testing.
                            Marketing campaign in Asia-pacific region, including the
                            US, Canada, Australia and China. </p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="subtitle">2019 QUARTER 1</h2>
                        <p>Implementation of Proof of Stake with masternood support.
                            Implement number of supporting EIPs.
                            Marketing campaign in Asia-pacific region, including
                            the US, Japan, South Korea and Singapore.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="subtitle">2019 QUARTER 2</h2>
                        <p>Release IOS and Android application. Main-net going live, token swap.
                          Implementation of Ledgerium Identity Services.
                          Marketing campaign in Europe region.</p>
                    </div>
                </div>
                <div class="timeline-item">
                    <div class="timeline-marker"></div>
                    <div class="timeline-content">
                        <h2 class="subtitle">2019 QUARTER 3</h2>
                        <p>Full public release of complete platform globally.
                            Design and implement on further features and
                            design milestone for next iteration - Internal Control.</p>
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
                            <h1 class="title">Ledgerium is the company that shall bring Blockchain to the accounting
and audit industry. We aim to create a decentralized ledger through a triple
entry accounting system and revolutionise the traditional audit procedure.
We believe in the trust mechanism of Blockchain that will allow small and
medium businesses to access auditing and other high-level accounting services
previously only available to large companies, allowing a fairer, more transparent
business world to flourish.</h1>
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
