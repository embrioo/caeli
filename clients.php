<?php 
    $page_title = 'Clients';
    $class_wrapper = 'clients-page';
    require  'init.php';
?>
<main>
	<section class="page-banner banner">
		<div class="container-fluid">
			<div class="box">
				<h1><?php echo $current_lang['home-banner-text'] ?></h1>
			</div>
		</div>
	</section>
	<section class="our-clients">
        <div class="container" style="margin-bottom: 50px;">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1 ">
                    <h3 class="page-title"><?php echo $current_lang['clients-page-title'] ?></h3>
					<div class="texts-box">
						<h4><?php echo $current_lang['clients-texts-box1_h4'] ?></h4>
						<p><?php echo $current_lang['clients-texts-box1_p1'] ?></p>
						<p><?php echo $current_lang['clients-texts-box1_p2'] ?></p>
					</div>
					<div class="rating-box">
						<img alt="<?php echo $current_lang['clients-alt_'] ?>" src="./images/Optimized-stars.jpg">
						<p<?php echo $current_lang['clients-rating-box'] ?>></p>
					</div>
					<div class="row border-bot">
						<div class="col-sm-4"><img class="mobile-hide" alt="" src="./images/biovet-1.png"></div>
						<div class="col-sm-4"><img alt="" src="./images/biovet-2.png"></div>
						<div class="col-sm-4"><img class="mobile-hide" alt="" src="./images/biovet-4.png"></div>
					</div>
                    <div class="texts-box">
                        <h4><?php echo $current_lang['clients-texts-box2_h4'] ?></h4>
                        <p><?php echo $current_lang['clients-texts-box2_p1'] ?></p>
                        <p><?php echo $current_lang['clients-texts-box2_p2'] ?></p>
                    </div>
                    <div class="row border-bot">
                        <div class="col-sm-4"><img alt="" src="./images/panacea1.png"></div>
                        <div class="col-sm-4"><img class="mobile-hide" alt="" src="./images/panacea2.png"></div>
                        <div class="col-sm-4"><img class="mobile-hide" alt="" src="./images/panacea3.png"></div>
                    </div>
<!--                    <div class="texts-box">
						<h4><?php echo $current_lang['clients-texts-box3_h4'] ?></h4>
						<p><?php echo $current_lang['clients-texts-box3_p1'] ?></p>
						<p><?php echo $current_lang['clients-texts-box3_p2'] ?></p>
					</div>
					<div class="row">
						<div class="col-sm-8"><img alt="" src="./images/soflab.png"></div>
						<div class="col-sm-4"><img alt="" src="./images/soflab2.png"></div>
					</div>-->
				</div>
            </div>
		</div>
	</section>
</main>
<?php include 'footer.php' ?>
		