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
					<h1 class="page-title"><?php echo $current_lang['stand-alone-page-title'] ?></h1>
					<h4><?php echo $current_lang['stand-alone-intro-text'] ?><span><?php echo $current_lang['stand-alone-intro-text2'] ?></span></h4>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-1">
							<p class="pad-top">The air flows into the filter thanks to a fan, turbine and electric motor which are located at the outlet of the filter.The fan, the turbine and the electrical motor are assembled into a common compact device.</p>
							<img class="arrow-right" src="./images/arrow-right.png">
						</div>
						<div class="col-sm-2">
							<img class="arrow-up" src="./images/arrow-up.png">
							<img src="./images/stand-alone.png">
						</div>
						<div class="col-sm-5">
							<img class="arrow-downleft" src="./images/arrow-downleft.png">
							<p>Hepa Filter is installed at the outlet to regulate the outlet air jet, otherwise the jet of already clean air will go out  of the filter under high pressure.</p>
						</div>

					</div>
					<div class="row">
						<div class="col-sm-4 col-sm-offset-1">
							<img class="arrow-curved" src="./images/arrow-curved.png">
							<p>Contaminated water is drained either manually or via sewerage (with a connection between the filter and the sewer) - an individual solution depending on the type of the pollutant and the infrastructural features of the premises.</p>
						</div>
						<div class="col-sm-2">
						
						</div>
						<div class="col-sm-5">
							<img class="arrow-upleft" src="./images/arrow-upleft.png">
							<p>2 options - for stationary, permanent space positioning or for flexibility in moving the filter around the space (by fitting wheels).</p>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php' ?>