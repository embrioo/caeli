<!--<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>-->
<style type="text/css">
    .flag {
        width: 20px;
        height: 20px;
        margin: 0 6px;
    }
</style>
<header style="box-shadow: 0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12); border-bottom: none;">
	<div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-sm-1">
                        <div class="logo-box"><a href="./index.php" class="logo"><img alt="" src="./images/logo.png"></a></div>
                    </div>
                    <div class="col-sm-3">
                        <div class="logo-box">
                            <div class="text-box">
                                <h3><?php echo $current_lang['logo-text'] ?></h3>
                                <h4><?php echo $current_lang['logo-text-2'] ?></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <ul class="contact-us list-unstyled list-inline">
                            <li>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-default" style="padding: 4px;"><img class="flag" src="/images/flag_<?php echo $ln ?>.png" alt="<?php echo strtoupper($ln ) ?>" /></button>
                                    <button type="button" class="btn btn-default dropdown-toggle" style="height: 31px; padding: 4px;" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span class="caret"></span>
                                        <span class="sr-only">Toggle Dropdown</span>
                                    </button>
                                    <ul class="dropdown-menu">
                                        <li><a href="?lang=en" style="padding: 2px 5px; font-size: 14px;"><img class="flag" src="/images/flag_en.png" alt="UK" /><span style="margin-top: 2px;">English</span></a></li>
                                        <li><a href="?lang=bg" style="padding: 2px 5px; font-size: 14px;"><img class="flag" src="/images/flag_bg.png" alt="BG" /><span style="margin-top: 2px;">Български</span></a></li>
                                        <li><a href="?lang=gr" style="padding: 2px 5px; font-size: 14px;"><img class="flag" src="/images/flag_gr.png" alt="GR" /><span style="margin-top: 2px;">Ελληνικά</span></a></li>
                                        <!--    <li><a href="#" style="padding: 2px 5px; font-size: 14px;"><img class="flag" src="/images/flag_ru.png" alt="RU" /><span style="margin-top: 2px;">Русский</span></a></li>
                                            <li><a href="#" style="padding: 2px 5px; font-size: 14px;"><img class="flag" src="/images/flag_es.png" alt="ES" /><span style="margin-top: 2px;">Español</span></a></li>
                                            <li><a href="#" style="padding: 2px 5px; font-size: 14px;"><img class="flag" src="/images/flag_it.png" alt="IT" /><span style="margin-top: 2px;">Italiano</span></a></li>
                                            <li><a href="#" style="padding: 2px 5px; font-size: 14px;"><img class="flag" src="/images/flag_fr.png" alt="FR" /><span style="margin-top: 2px;">Français</span></a></li>
                                            <li><a href="#" style="padding: 2px 5px; font-size: 14px;"><img class="flag" src="/images/flag_de.png" alt="DE" /><span style="margin-top: 2px;">Deutsch</span></a></li>-->
                                    </ul>
                                </div>
                            </li>
                            <li class="mobilehidden"><a href="https://www.facebook.com/caeli.engineering/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li class="mobilehidden"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                        </ul>
                        <div class="navigation-box">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsemenu">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                             </button>
                            <div class="collapse navbar-collapse" id="collapsemenu">
                                <ul class="nav navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" id="applist" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" href="#mobile-collapse-nav1" ><?php echo $current_lang['nav-text-1'] ?><i class="fa fa-chevron-down ham-inner-arrow" aria-hidden="true"></i></a>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <div class="dropdown-menu" aria-labelledby="applist">
                                            <ul class="list-unstyled">
                                                <li><a href="./working-principle.php"><?php echo $current_lang['nav-tech-dropdown-text-5'] ?></a></li>
                                                <li><a href="./stand-alone.php"><?php echo $current_lang['nav-tech-dropdown-text-1'] ?></a></li>
                                                <li><a href="./tech-description.php"><?php echo $current_lang['nav-tech-dropdown-text-11'] ?></a></li>
                                                <li class="hidden"><a href="#"><?php echo $current_lang['nav-tech-dropdown-text-3'] ?></a></li>
                                                <li><a href="./industries-application.php"><?php echo $current_lang['nav-tech-dropdown-text-4'] ?></a></li>
                                                <li><a href="./vs-scrubbers.php"><?php echo $current_lang['nav-tech-dropdown-text-10'] ?></a></li>
                                            </ul>
                                        </div>
                                        <div id="mobile-collapse-nav1" class="collapse">
                                            <ul class="list-unstyled">
                                                <li><a href="./working-principle.php"><?php echo $current_lang['nav-tech-dropdown-text-5'] ?></a></li>
                                                <li><a href="./stand-alone.php"><?php echo $current_lang['nav-tech-dropdown-text-1'] ?></a></li>
                                                <li><a href="./tech-description.php"><?php echo $current_lang['nav-tech-dropdown-text-11'] ?></a></li>
                                                <li class="hidden"><a href="#"><?php echo $current_lang['nav-tech-dropdown-text-3'] ?></a></li>
                                                <li><a href="./industries-application.php"><?php echo $current_lang['nav-tech-dropdown-text-4'] ?></a></li>
                                                <li><a href="./vs-scrubbers.php"><?php echo $current_lang['nav-tech-dropdown-text-10'] ?></a></li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a  class="nav-link dropdown-toggle" id="techlist" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" href="#mobile-collapse-nav2"><?php echo $current_lang['nav-text-2'] ?><i class="fa fa-chevron-down ham-inner-arrow" aria-hidden="true"></i></a>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <div class="dropdown-menu" aria-labelledby="techlist">
                                            <ul class="list-unstyled">
                                                <li><a href="./tech-specification.php?caeli=spec1"><?php echo $current_lang['nav-tech-dropdown-text-6'] ?></a></li>
                                                <li><a href="./tech-specification.php?caeli=spec2"><?php echo $current_lang['nav-tech-dropdown-text-7'] ?></a></li>
                                                <li><a href="./tech-specification.php?caeli=spec3"><?php echo $current_lang['nav-tech-dropdown-text-8'] ?></a></li>
                                                <li><a href="./tech-specification.php?caeli=spec4"><?php echo $current_lang['nav-tech-dropdown-text-12'] ?></a></li>
                                                <li><a href="./stand-alone-800.php"><?php echo $current_lang['nav-tech-dropdown-text-1.2'] ?></a></li>
                                                <li><a href="./stand-alone-1100.php"><?php echo $current_lang['nav-tech-dropdown-text-1.3'] ?></a></li>
                                                <li><a href="./vs-scrubbers.php"><?php echo $current_lang['nav-tech-dropdown-text-10'] ?></a></li>
                                            </ul>
                                        </div>
                                        <div id="mobile-collapse-nav2" class="collapse">
                                            <ul class="list-unstyled">
                                                <li><a href="./tech-specification.php?caeli=spec1"><?php echo $current_lang['nav-tech-dropdown-text-6'] ?></a></li>
                                                <li><a href="./tech-specification.php?caeli=spec2"><?php echo $current_lang['nav-tech-dropdown-text-7'] ?></a></li>
                                                <li><a href="./tech-specification.php?caeli=spec3"><?php echo $current_lang['nav-tech-dropdown-text-8'] ?></a></li>
                                                <li><a href="./tech-specification.php?caeli=spec4"><?php echo $current_lang['nav-tech-dropdown-text-12'] ?></a></li>
                                                <li><a href="./stand-alone-800.php"><?php echo $current_lang['nav-tech-dropdown-text-1.2'] ?></a></li>
                                                <li><a href="./stand-alone-1100.php"><?php echo $current_lang['nav-tech-dropdown-text-1.3'] ?></a></li>
                                                <li><a href="./vs-scrubbers.php"><?php echo $current_lang['nav-tech-dropdown-text-10'] ?></a></li>
                                            </ul>
                                        </div>
                                    </li>


                                    <li class="nav-item dropdown">
                                        <a  class="nav-link dropdown-toggle" id="homelist" data-toggle="collapse" aria-haspopup="true" aria-expanded="false" href="#mobile-collapse-nav2"><?php echo $current_lang['nav-text-6'] ?><i class="fa fa-chevron-down ham-inner-arrow" aria-hidden="true"></i></a>
                                        <i class="fa fa-chevron-down" aria-hidden="true"></i>
                                        <div class="dropdown-menu" aria-labelledby="techlist">
                                            <ul class="list-unstyled">
                                                <li><a href="./stand-alone-400.php"><?php echo $current_lang['nav-tech-dropdown-text-13'] ?></a></li>
                                            </ul>
                                        </div>
                                        <div id="mobile-collapse-nav3" class="collapse">
                                            <ul class="list-unstyled">
                                                <li><a href="./stand-alone-400.php"><?php echo $current_lang['nav-tech-dropdown-text-13'] ?></a></li>
                                            </ul>
                                        </div>
                                    </li>



                                    <li class="hidden"><a href="clients.php"><?php echo $current_lang['nav-text-3'] ?></a></li>
                                    <li class="hidden"><a href="#"><?php echo $current_lang['nav-text-4'] ?></a></li>
                                    <li><a href="contact-us.php"><?php echo $current_lang['nav-text-5'] ?></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</header>