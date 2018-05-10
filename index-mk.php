<?php 
    include 'languages.php';
    $ln='en';
    $current_lang=$lang[$ln];
    include 'head.php'; 
?>
<body>
    <div class="home-page wrapper">    
    <?php include 'header.php'; ?>    
        <main>
            <section class="banner">
                <div class="container-fluid">
                    <div class="box">
                        <h1><?php echo $current_lang['home-banner-text'] ?></h1>
                    </div>
                </div>
            </section>
            <section class="product-advantages">
                <div class="container">
                    <h3>
                        <span><?php echo $current_lang['home-intro-text-1'] ?></span>
                        <span><?php echo $current_lang['home-intro-text-2'] ?></span>
                        <span><?php echo $current_lang['home-intro-text-3'] ?></span>
                    </h3>
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1 col-xs-12">
                            <div class="row">
                                <div class="col-sm-4">
                                    <div class="img-title-box">
                                        <img src="./images/maintenance.png" alt="instruments">
                                        <h4>
                                            <span><?php echo $current_lang['advantage-heading-1'] ?></span>
                                            <span><?php echo $current_lang['advantage-heading-2'] ?></span>
                                        </h4>
                                        <hr style="height: 1px; width: 90%; margin: 30px auto; background: #636769;" />
                                    </div>
                                    <p><?php echo $current_lang['advantage-p-text-1'] ?></p>
                                    <p>
                                        <span><?php echo $current_lang['advantage-span-text-1'] ?></span>
                                        <span><?php echo $current_lang['advantage-span-text-2'] ?></span>
                                    </p>
                                </div>
                                <div class="col-sm-4" style="margin-left: -15px; margin-right: -15px; padding: 20px 15px 5px;">
                                    <div class="img-title-box">
                                        <img src="./images/bacteria.png" alt="bacteria">
                                        <h4>
                                            <span><?php echo $current_lang['advantage-heading-3'] ?></span>
                                            <span><?php echo $current_lang['advantage-heading-4'] ?></span>
                                        </h4>
                                        <hr style="height: 1px; width: 90%; margin: 30px auto; background: #636769;" />
                                    </div>
                                    <p><?php echo $current_lang['advantage-p-text-2'] ?></p>
                                    <p class="special">
                                        <span><?php echo $current_lang['advantage-span-text-3'] ?></span>
                                        <span><?php echo $current_lang['advantage-span-text-4'] ?></span></p>
                                </div>
                                <div class="col-sm-4">
                                    <div class="img-title-box">
                                        <img src="./images/plug-in.png" alt="plug">                        
                                        <h4>
                                            <span><?php echo $current_lang['advantage-heading-5'] ?></span>
                                            <span><?php echo $current_lang['advantage-heading-6'] ?></span>
                                        </h4>
                                        <hr style="height: 1px; width: 90%; margin: 30px auto; background: #636769;" />
                                    </div>
                                    <p><?php echo $current_lang['advantage-p-text-3'] ?></p>
                                </div>
                            </div>
                        </div>
                    </div>                    
                </div>
            </section>
            <section class="innovative">
                <h2><?php echo $current_lang['innovative-heading'] ?></h2>
                <div class="container">
                    <ul class="list-unstyled">
                        <li>
                            <a href="#"><?php echo $current_lang['innovative-text-1'] ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo $current_lang['innovative-text-2'] ?></a>
                        </li>
                        <li>
                            <a class="bigger-margin-bottom" href="#"><?php echo $current_lang['innovative-text-3'] ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo $current_lang['innovative-text-4'] ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo $current_lang['innovative-text-5'] ?></a>
                        </li>
                    </ul>
                    <div class="round-image-box">
                        <img class="avatar" src="./images/filter.png">
                    </div>
                </div>
            </section>
            <section class="order-now">
                <div class="container">
                    <h3>
                        <span><?php echo $current_lang['order-now-text-1'] ?></span>
                        <span><?php echo $current_lang['order-now-text-2'] ?></span>
                        <span><?php echo $current_lang['order-now-text-3'] ?></span>
                        <span><?php echo $current_lang['order-now-text-4'] ?></span>
                    </h3>
                    <h2><?php echo $current_lang['order-now-heading'] ?></h2>
                    <a class="order-now-button" href="#"><?php echo $current_lang['order-now-link-text-1'] ?></a>
                    <a class="contact-us-button" href="#"><?php echo $current_lang['order-now-link-text-2'] ?></a>
                </div>
                <p><?php echo $current_lang['order-now-text-5'] ?></p>
            </section>
        </main>
<?php include 'footer.php' ?>
        