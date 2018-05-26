<?php 
    $page_title = 'Home';
    $class_wrapper = 'home-page';
    require  'init.php';
?>
		<main>
			<section class="page-banner banner">
				<div class="container-fluid">
					<div class="box"><h1><?php echo $current_lang['home-banner-text'] ?></h1></div>
				</div>
			</section>
			<section class="product-advantages">
				<div class="container">					
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1 col-xs-12">
							<h2 class="text-center">
								<?php echo $current_lang['home-intro-text-1'] ?><br/>
								<?php echo $current_lang['home-intro-text-2'] ?><br/>
								<?php echo $current_lang['home-intro-text-3'] ?>
							</h2>
							<h3><?php echo $current_lang['home-intro-text-4'] ?></h3>
							<div class="row">
								<div class="col-sm-4">
									<div class="img-title-box">
										<img src="./images/maintenance.png" alt="instruments">
										<h4>
											<?php echo $current_lang['advantage-heading-1'] ?><br/>
											<?php echo $current_lang['advantage-heading-2'] ?>
										</h4>
                                        <hr style="height: 1px; width: 90%; margin: 30px auto; background: #636769;" />
									</div>
									<p><?php echo $current_lang['advantage-p-text-1'] ?></p>
									<p>
										<span><?php echo $current_lang['advantage-span-text-1'] ?></span>
										<span><?php echo $current_lang['advantage-span-text-2'] ?></span>
									</p>
									<hr class="mobile-line" style="height: 1px; width: 90%; margin: 30px auto; background: #636769;" />
								</div>
								<div class="col-sm-4 negative-margin">
									<div class="img-title-box">
										<img src="./images/bacteria.png" alt="bacteria">
										<h4>
											<?php echo $current_lang['advantage-heading-3'] ?><br/>
											<?php echo $current_lang['advantage-heading-4'] ?>
										</h4>
                                        <hr style="height: 1px; width: 90%; margin: 30px auto; background: #636769;" />
									</div>
									<p><?php echo $current_lang['advantage-p-text-2'] ?></p>
									<p class="special">
										<span><?php echo $current_lang['advantage-span-text-3'] ?></span>
										<span><?php echo $current_lang['advantage-span-text-4'] ?></span></p>
									<hr class="mobile-line" style="height: 1px; width: 90%; margin: 30px auto; background: #636769;" />
								</div>
								<div class="col-sm-4">
									<div class="img-title-box">
										<img src="./images/plug-in.png" alt="plug">						
										<h4>
											<?php echo $current_lang['advantage-heading-5'] ?><br/>
											<?php echo $current_lang['advantage-heading-6'] ?>
										</h4>
                                        <hr style="height: 1px; width: 90%; margin: 30px auto; background: #636769;" />
									</div>
									<p><?php echo $current_lang['advantage-p-text-3'] ?></p>
									<hr class="mobile-line" style="height: 1px; width: 90%; margin: 30px auto; background: #636769;" />
								</div>
							</div>
						</div>
					</div>					
				</div>
			</section>
			<section class="innovative">				
				<div class="container">
					<div class="row">
						<div class="col-lg-10 col-lg-offset-1">
							<h2><?php echo $current_lang['innovative-heading'] ?></h2>
							<ul class="list-unstyled">
								<li><a href="/working-principle.php"><?php echo $current_lang['innovative-text-1'] ?></a></li>
								<li><a href="/tech-specification.php?caeli=spec2"><?php echo $current_lang['innovative-text-2'] ?></a></li>
								<li><a class="bigger-margin-bottom" href="/tech-description.php"><?php echo $current_lang['innovative-text-3'] ?></a></li>
								<li><a href="#"><?php echo $current_lang['innovative-text-4'] ?></a></li>
							</ul>
							<div class="round-image-box"><img class="avatar" src="./images/filter.png"></div>
						</div>
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
					<a class="order-now-button" href="https://www.facebook.com/pg/caeli.engineering/shop/?ref=page_internal" target="_blank"><?php echo $current_lang['order-now-link-text-1'] ?></a>
					<a class="contact-us-button" href="contact-us.php"><?php echo $current_lang['order-now-link-text-2'] ?></a>
                    <p class="final-text"><?php echo $current_lang['order-now-text-5'] ?>&nbsp;<span><?php echo $current_lang['order-now-text-6'] ?></span></p>
				</div>
			</section>
		</main>
<?php include 'footer.php' ?>
		