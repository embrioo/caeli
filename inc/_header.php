<header>        
    <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-12 col-sm-12 col-xs-12">



<nav class="navbar ">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand logo" href="./index.php">
                <div class="logo-box">
                    <img src="./images/logo.png">
                    <div class="text-box" style="float: right;">
                        <h3><?php echo $current_lang['logo-text'] ?></h3>
                        <h4><?php echo $current_lang['logo-text-2'] ?></h4>
                    </div>            
                </div>

<!--                <div class="logo-box">
                    <a href="./index.php" class="logo">
                        <img src="./images/logo.png">
                    </a>
                    <div class="text-box">
                        <h3><?php echo $current_lang['logo-text'] ?></h3>
                        <h4><?php echo $current_lang['logo-text-2'] ?></h4>
                    </div>            
                </div>-->
            </a>
          </div>
          <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" id="applist" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><?php echo $current_lang['nav-text-1'] ?></a>                    
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <div class="dropdown-menu" aria-labelledby="applist">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-1'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-2'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-3'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-4'] ?></a>
                                    </li>                            
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" id="techlist" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><?php echo $current_lang['nav-text-2'] ?></a>                    
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <div class="dropdown-menu" aria-labelledby="techlist">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="working-principle.php"><?php echo $current_lang['nav-tech-dropdown-text-5'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-6'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-7'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-8'] ?></a>
                                    </li>                            
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-10'] ?></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="clients.php"><?php echo $current_lang['nav-text-3'] ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo $current_lang['nav-text-4'] ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo $current_lang['nav-text-5'] ?></a>
                        </li>
                    </ul>
                    <ul class="contact-us list-unstyled list-inline">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>    
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav>


<!--                <div class="navigation-box">
                    <ul class="nav navbar-nav">
                        <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" id="applist" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><?php echo $current_lang['nav-text-1'] ?></a>                    
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <div class="dropdown-menu" aria-labelledby="applist">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-1'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-2'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-3'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-4'] ?></a>
                                    </li>                            
                                </ul>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a  class="nav-link dropdown-toggle" id="techlist" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><?php echo $current_lang['nav-text-2'] ?></a>                    
                            <i class="fa fa-chevron-down" aria-hidden="true"></i>
                            <div class="dropdown-menu" aria-labelledby="techlist">
                                <ul class="list-unstyled">
                                    <li>
                                        <a href="working-principle.php"><?php echo $current_lang['nav-tech-dropdown-text-5'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-6'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-7'] ?></a>
                                    </li>
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-8'] ?></a>
                                    </li>                            
                                    <li>
                                        <a href="#"><?php echo $current_lang['nav-tech-dropdown-text-10'] ?></a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="clients.php"><?php echo $current_lang['nav-text-3'] ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo $current_lang['nav-text-4'] ?></a>
                        </li>
                        <li>
                            <a href="#"><?php echo $current_lang['nav-text-5'] ?></a>
                        </li>
                    </ul>
                    <ul class="contact-us list-unstyled list-inline">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>    
                </div>-->
            </div>
        </div>
    </div>
</header>