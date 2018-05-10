<?php 
    $page_title = 'Contact us';
    $class_wrapper = 'contact-us';
    require  'init.php';
?>
<style type="text/css">

/* FontAwesome for working BootSnippet :> */
/*https://bootsnipp.com/snippets/featured/team-design-card-flipper-using-bootstrap-4*/


.btn-primary:hover,
.btn-primary:focus {
    background-color: #308F90;
    border-color: #308F90;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #308F90;
    border-color: #308F90;
}


#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #308F90 !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #308F90 !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}
</style>
<main>
    <section class="page-banner banner">
        <div class="container-fluid">
            <div class="box">
                <h1><?php echo $current_lang['home-banner-text'] ?></h1>
            </div>
        </div>
    </section>
<!-- Team -->
    <section id="team" class="pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1">
                    <h3 class="page-title text-center"><?php echo $current_lang['contact-page-title'] ?></h3>
                    <div class="row leaders">                        
                        <div class="col-sm-6 col-sm-push-6">
                            <div class="right-side">
                                <div class="img-box">
                                    <img alt="" src="./images/Rennie-pic.png">
                                </div>
                                <h4><?php echo $current_lang['contact-member1_name'] ?></h4>
                                <ul class="list-unstyled info-list">
                                    <li><p><?php echo $current_lang['contact-member1_pos'] ?></p></li>
                                    <li>
                                        <ul class="list-inline list-unstyled">
                                           <li><p><?php echo $current_lang['contact-member1_reg1'] ?></p></li>
                                           <li><p><?php echo $current_lang['contact-member1_reg2'] ?></p></li>
                                           <li><p><?php echo $current_lang['contact-member1_reg3'] ?></p></li>
                                           <li><p><?php echo $current_lang['contact-member1_reg4'] ?></p></li>
                                       </ul>
                                    </li>
                                    <li><a href="#">rennie.popcheva@caeli-engineering.com</a></li>
                                    <li><a href="#">+359 899 98 74 05</a></li>
                                    <li><p><?php echo $current_lang['contact-lbl_skype'] ?>:   rennie.embrioo</p></li>
                                </ul>
                            </div>                                            
                        </div>
                        <div class="col-sm-6 col-sm-pull-6">
                            <div class="left-side">
                                <div class="img-box">
                                    <img alt="" src="./images/Atanas-pic.png">
                                </div>
                                <h4><?php echo $current_lang['contact-member4_name'] ?></h4>
                                <ul class="list-unstyled info-list">
                                    <li><p><?php echo $current_lang['contact-member4_pos'] ?></p></li>
                                    <li>
                                       <ul class="list-inline list-unstyled">
                                           <li><p><?php echo $current_lang['contact-member4_reg1'] ?></p></li>
                                           <li><p><?php echo $current_lang['contact-member4_reg2'] ?></p></li>
                                           <li><p><?php echo $current_lang['contact-member4_reg3'] ?></p></li>
                                           <li><p><?php echo $current_lang['contact-member4_reg4'] ?></p></li>
                                       </ul> 
                                    </li>
                                    <li><a href="#">atanas.galchev@caeli-engineering.com</a></li>
                                    <li><a href="#">+359 886 86 86 68</a></li>
                                    <li><p><?php echo $current_lang['contact-lbl_skype'] ?>:   .....</p></li>
                                </ul>
                            </div>                                            
                        </div>
                    </div>
                    <h2><?php echo $current_lang['contact-lbl_all_team'] ?></h2>
                    <div class="row">
                        <!-- Team member -->
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p><img class=" img-fluid" src="./images/Mihail-pic.png" alt="card image"></p>
                                                <h4 class="card-title"><?php echo $current_lang['contact-member3_name'] ?></h4>
                                                <p class="card-text"><?php echo $current_lang['contact-member3_pos'] ?></p>
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus" style="color: #fff;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title"><?php echo $current_lang['contact-member3_name'] ?></h4>
                                                <p class="card-text"><?php echo $current_lang['contact-member3_desc1'] ?></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-skype"></i></a></li>
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./Team member -->
                        <!-- Team member -->
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p><img class=" img-fluid" src="./images/Todor-pic.png" title="Todor Givechev, Inventor, innovative air filters Caeli" alt="Todor Givechev, Inventor, innovative air filters, co-founder at Caeli Engineering LLC
"></p>
                                                <h4 class="card-title"><?php echo $current_lang['contact-member2_name'] ?></h4>
                                                <p class="card-text"><?php echo $current_lang['contact-member2_pos'] ?></p>
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus" style="color: #fff;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title"><?php echo $current_lang['contact-member2_name'] ?></h4>
                                                <p class="card-text"><?php echo $current_lang['contact-member2_desc1'] ?></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-skype"></i></a></li>
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./Team member -->
                        <!-- Team member -->
                        <div class="col-xs-12 col-sm-6 col-md-4">
                            <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                                <div class="mainflip">
                                    <div class="frontside">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <p><img class=" img-fluid" src="./images/Ivo-pic.png" title="Ivaylo Georgiev, innovative air filters Caeli Engineering LLC" alt="Ivaylo Georgiev, innovative air filters, co-founder at Caeli Engineering LLC "></p>
                                                <h4 class="card-title"><?php echo $current_lang['contact-member5_name'] ?></h4>
                                                <p class="card-text"><?php echo $current_lang['contact-member5_pos'] ?></p>
                                                <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus" style="color: #fff;"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="backside">
                                        <div class="card">
                                            <div class="card-body text-center mt-4">
                                                <h4 class="card-title"><?php echo $current_lang['contact-member5_name'] ?></h4>
                                                <p class="card-text"><?php echo $current_lang['contact-member5_desc1'] ?></p>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-twitter"></i></a></li>
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-skype"></i></a></li>
                                                    <li class="list-inline-item"><a class="social-icon text-xs-center" target="_blank" href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ./Team member -->
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Team -->			
</main>
<?php include 'footer.php' ?>
		