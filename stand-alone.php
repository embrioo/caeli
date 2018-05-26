<?php 
    $page_title = 'Stand Alone';
    $class_wrapper = 'stand-alone-page';
    require  'init.php';
?>
<main>
	<section class="page-banner banner">
		<div class="container-fluid">
			<div class="box"><h1><?php echo $current_lang['home-banner-text'] ?></h1></div>
		</div>
	</section>
	<section class="stand-alone">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<h1 class="page-title"><?php echo $current_lang['stand-alone-page-title'] ?><span><?php echo $current_lang['stand-alone-page-title2'] ?></span></h1>
					<h4><?php echo $current_lang['stand-alone-intro-text'] ?><span><?php echo $current_lang['stand-alone-intro-text2'] ?></span></h4>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-1">
							<div class="wraping-box left-side">						
								<div class="details-box first-one">
									<p class="pad-top"><?php echo $current_lang['stand-alone-p1-txt'] ?></p>
								<img class="arrow-right" src="./images/arrow-right.png">
								</div>
								<div class="details-box">
									<img class="arrow-curved" src="./images/arrow-curved.png">
									<p><?php echo $current_lang['stand-alone-p2-txt'] ?></p>
								</div>
							</div>
							<img class="show-on-mobile" src="./images/Water-Cyclone-Air-Filter-Caeli-Stand-alone-Innovation.png" alt="Water Cyclone air filters by Caeli-Engineering - Innovative technology that capture 99.3% of all air particles (Caeli Stand-alone) - 800">			
						</div>
						<div class="col-sm-2">
							<img class="arrow-up" src="./images/arrow-up.png">
							<img class="hide-on-mobile" src="./images/Water-Cyclone-Air-Filter-Caeli-Stand-alone-Innovation.png" alt="Water Cyclone air filters by Caeli-Engineering - Innovative technology that capture 99.3% of all air particles (Caeli Stand-alone) - 800">
						</div>
						<div class="col-sm-5">
							<img class="show-on-mobile" src="./images/Water-Cyclone-Air-Filter-Caeli-Stand-alone-Innovation.png" alt="Water Cyclone air filters by Caeli-Engineering - Innovative technology that capture 99.3% of all air particles (Caeli Stand-alone) - 800">	
							<div class="wraping-box right-side">								
								<div class="details-box third-one">
									<img class="arrow-downleft" src="./images/arrow-downleft.png">
									<p><?php echo $current_lang['stand-alone-p3-txt'] ?></p>
								</div>
								<div class="details-box">								
									<p><?php echo $current_lang['stand-alone-p4-txt'] ?></p>
									<img class="arrow-upleft" src="./images/arrow-upleft.png">
								</div>							
							</div>										
						</div>
					</div>					
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php' ?>