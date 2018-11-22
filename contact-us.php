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
        <title>Ledgerium || Contact Us</title>
        <?php include('templates/head.php'); ?>
    </head>
    <body class="contact-us">

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

        <!-- .hero-head -->
        <section class="hero is-fullheight has-text-white is-large">
            <div class="hero-body">
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

                        <div class="columns">
                            <div class="column is-4">
                                <h3 class="subtitle mark">Address</h3>
                                <p>Ground level East, 65 Southbank Blvd, Boulevard, VIC, 3006</p>
                            </div>
                            <div class="column is-4">
                                <h3 class="subtitle mark">Email</h3>
                                <p>info@ledgerium.net</p>
                            </div>
                            <div class="column is-4">
                                <h3 class="subtitle mark">Phone</h3>
                                <p>03 9999 9999</p>
                            </div>
                        </div>

                    </div>
                </div>
            </section>
            <!-- /.hero-head -->

            <?php include('templates/footer.php'); ?>
        </body>
    </html>