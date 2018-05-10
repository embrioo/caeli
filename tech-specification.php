<?php 
    $page_title = 'Tech specifications';
    $class_wrapper = 'specification-page';
    require  'init.php';
?>
<style type="text/css">
    span { line-height: 1.8; }
    .specifications p {
        margin-bottom: 25px;
    }
</style>
<main>
	<section class="page-banner banner">
		<div class="container-fluid">
			<div class="box">
				<h1><?php echo $current_lang['home-banner-text'] ?></h1>
				<h4 class="text-capitalize"><?php echo $current_lang['specification-f800_desc'] ?></h4>
			</div>
		</div>
	</section>
	<section class="specifications">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<div class="row">
						<h3 class="page-title"><?php echo $current_lang['specification-page-title'] ?></h3>
						<ul class="nav nav-tabs nav-default">
							<li class="active"><a id="tab-spec1" data-toggle="tab" href="#spec1" onclick="changeText('spec1')"><?php echo $current_lang['specification-'] ?><?php echo $current_lang['specification-btn_f800'] ?></a></li>
							<li><a id="tab-spec2" data-toggle="tab" href="#spec2" onclick="changeText('spec2')"><?php echo $current_lang['specification-'] ?><?php echo $current_lang['specification-btn_f1100'] ?></a></li>
							<li><a id="tab-spec3" data-toggle="tab" href="#spec3" onclick="changeText('spec3')"><?php echo $current_lang['specification-'] ?><?php echo $current_lang['specification-btn_f1500'] ?></a></li>
						</ul>
						<div class="tab-content">
							<div id="spec1" class="tab-pane active">
								<div class="container">
									<div class="row">
										<div class="col-md-2">
											<img alt="" src="./images/type-3.png">
										</div>

                                        <div class="col-md-10">
                                            <div class="tech-info-box">
                                                <h2><?php echo $current_lang['specification-f800_name'] ?></h2>
                                                <p class="sub-label text-uppercase orange-colored"><?php echo $current_lang['specification-f800_desc'] ?></p>
                                                <p class="margin-bottom"><?php echo $current_lang['specification-f800_subs'] ?></p>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop1_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop1_val'] ?></span></p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop2_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop2_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop3_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop3_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4 dark-color"><?php echo $current_lang['specification-f800_prop4_lbl'] ?></span><span class="spec-value col-sm-8 dark-color"><?php echo $current_lang['specification-f800_prop4_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop5_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop5_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop6_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop6_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4 dark-color"><?php echo $current_lang['specification-f800_prop7_lbl'] ?></span><span class="spec-value col-sm-8 dark-color"><?php echo $current_lang['specification-f800_prop7_val'] ?></span></p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop8_lbl'] ?></span><span class="spec-value col-sm-8 dark-color"><?php echo $current_lang['specification-f800_prop8_val'] ?></span></p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop9_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop9_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop10_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop10_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop11_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop11_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop12_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop12_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop13_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop13_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop14_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop14_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop15_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop15_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop16_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop16_val'] ?></span></p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop17_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop17_val'] ?></span></p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop18_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop18_val'] ?></span></p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop19_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop19_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop20_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop20_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f800_prop21_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f800_prop21_val'] ?></span></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									</div>
								</div>
							</div>
							<div id="spec2" class="tab-pane">
								<div class="container">
									<div class="row">
										<div class="col-md-2">
											<img alt="" src="./images/type-3.png">
										</div>
										<div class="col-md-10">
											<div class="tech-info-box">
												<h2><?php echo $current_lang['specification-f1100_name'] ?></h2>
												<p class="sub-label text-uppercase orange-colored"><?php echo $current_lang['specification-f1100_desc'] ?></p>
												<p class="margin-bottom"><?php echo $current_lang['specification-f1100_subs'] ?></p>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop1_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop1_val'] ?></span></p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop2_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop2_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop3_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop3_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4 dark-color"><?php echo $current_lang['specification-f1100_prop4_lbl'] ?></span><span class="spec-value col-sm-8 dark-color"><?php echo $current_lang['specification-f1100_prop4_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop1_lb5'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop5_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop1_lb6'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop6_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4 dark-color"><?php echo $current_lang['specification-f1100_prop7_lbl'] ?></span><span class="spec-value col-sm-8 dark-color"><?php echo $current_lang['specification-f1100_prop7_val'] ?></span></p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop8_lbl'] ?></span><span class="spec-value col-sm-8 dark-color"><?php echo $current_lang['specification-f1100_prop8_val'] ?></span></p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop9_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop9_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop10_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop10_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop11_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop11_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop12_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop12_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop13_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop13_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop14_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop14_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop15_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop15_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop16_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop16_val'] ?></span></p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop17_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop17_val'] ?></span></p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop18_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop18_val'] ?></span></p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop19_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop19_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop20_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop20_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1100_prop21_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1100_prop21_val'] ?></span></p>
                                                    </div>
                                                </div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div id="spec3" class="tab-pane">
								<div class="container">
									<div class="row">
										<div class="col-md-2">
											<img alt="" src="./images/type-3.png">
										</div>
										<div class="col-md-10">
											<div class="tech-info-box">
												<h2><?php echo $current_lang['specification-f1500_name'] ?></h2>
												<p class="sub-label text-uppercase orange-colored"><?php echo $current_lang['specification-f1500_desc'] ?></p>
												<p class="margin-bottom"><?php echo $current_lang['specification-f1500_subs'] ?></p>
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop1_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop1_val'] ?></span></p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop12lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop2_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop3_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop3_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4 dark-color"><?php echo $current_lang['specification-f1500_prop4_lbl'] ?></span><span class="spec-value col-sm-8 dark-color"><?php echo $current_lang['specification-f1500_prop4_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop5_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop5_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop6_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop6_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4 dark-color"><?php echo $current_lang['specification-f1500_prop7_lbl'] ?></span><span class="spec-value col-sm-8 dark-color"><?php echo $current_lang['specification-f1500_prop7_val'] ?></span></p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop8_lbl'] ?></span><span class="spec-value col-sm-8 dark-color"><?php echo $current_lang['specification-f1500_prop8_val'] ?></span></p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop9_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop9_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop10_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop10_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop11_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop11_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop12_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop12_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop13_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop13_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop14_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop14_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop15_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop15_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop16_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop16_val'] ?></span></p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop17_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop17_val'] ?></span></p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop18_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop18_val'] ?></span></p>
                                                        <p class="row row-spec">
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop19_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop19_val'] ?></span>
                                                            <span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop20_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop20_val'] ?></span>
                                                        </p>
                                                        <p class="row row-spec"><span class="spec-title col-sm-4"><?php echo $current_lang['specification-f1500_prop21_lbl'] ?></span><span class="spec-value col-sm-8"><?php echo $current_lang['specification-f1500_prop21_val'] ?></span></p>
                                                    </div>
                                                </div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="ordering-box">
							<a class="order-now-button" href="#"><?php echo $current_lang['order-now-link-text-1'] ?></a>
							<a class="contact-us-button" href="contact-us.php"><?php echo $current_lang['order-now-link-text-2'] ?></a>
          		            <p><?php echo $current_lang['order-now-text-5'] ?></p>
						</div>
                        <h3 class="page-title"><?php echo $current_lang['specification-page-end-title'] ?></h3>
                        <ul class="nav nav-tabs nav-default">
                            <li class="active"><a id="tab-spec1" data-toggle="tab" href="#spec1" onclick="changeText('spec1')"><?php echo $current_lang['specification-'] ?><?php echo $current_lang['specification-btn_f800'] ?></a></li>
                            <li><a id="tab-spec2" data-toggle="tab" href="#spec2" onclick="changeText('spec2')"><?php echo $current_lang['specification-'] ?><?php echo $current_lang['specification-btn_f1100'] ?></a></li>
                            <li><a id="tab-spec3" data-toggle="tab" href="#spec3" onclick="changeText('spec3')"><?php echo $current_lang['specification-'] ?><?php echo $current_lang['specification-btn_f1500'] ?></a></li>
                        </ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php' ?>
