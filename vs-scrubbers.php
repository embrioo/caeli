<?php
    $page_title = 'Vs-scrubbers';
    $class_wrapper = 'scrubbers-page';
    require  'init.php';
?>
<main>
	<section class="page-banner banner">
		<div class="container-fluid">
			<div class="box"><h1><?php echo $current_lang['home-banner-text'] ?></h1></div>
		</div>
	</section>
	<section class="scrubbers">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<h1 class="page-title"><?php echo $current_lang['scrubbers-page-title'] ?></h1>
					<div class="row border-row">
						<div class="col-sm-4">&nbsp;</div>
						<div class="col-xs-6 col-sm-4"><h4 class="marg-top"><?php echo $current_lang['scrubbers-scr_lbl'] ?></h4></div>
						<div class="col-xs-6 col-sm-4"><img alt="" src="./images/type-1.png"><h4 style="margin-left: 10px;"><?php echo $current_lang['scrubbers-flt_lbl'] ?></h4></div>
					</div>
					<div class="row heading-row">
						<div class="col-xs-12 col-sm-4"><h4><?php echo $current_lang['scrubbers-comp1_title'] ?></h4></div>
						<div class="col-xs-6 col-sm-4">
							<p><?php echo $current_lang['scrubbers-comp1_scr_desc1'] ?></p>
							<p><?php echo $current_lang['scrubbers-comp1_scr_desc2'] ?></p>
						</div>
						<div class="col-xs-6 col-sm-4">
							<ul class="list_dash">
								<li><p><?php echo $current_lang['scrubbers-comp1_flt_desc1'] ?></p></li>
								<li><p><?php echo $current_lang['scrubbers-comp1_flt_desc2'] ?></p></li>
                                <li><p><?php echo $current_lang['scrubbers-comp1_flt_desc3'] ?></p></li>
<!--								<li><p><?php echo $current_lang['scrubbers-comp1_flt_desc4'] ?></p></li>-->
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4"><h4><?php echo $current_lang['scrubbers-comp2_title'] ?></h4></div>
						<div class="col-xs-6 col-sm-4"><p><?php echo $current_lang['scrubbers-comp2_scr_desc1'] ?></p></div>
						<div class="col-xs-6 col-sm-4"><p><?php echo $current_lang['scrubbers-comp2_flt_desc1'] ?></p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4"><h4><?php echo $current_lang['scrubbers-comp3_title'] ?></h4></div>
						<div class="col-xs-6 col-sm-4">
                            <p style="margin-bottom: 10px;"><span><?php echo $current_lang['scrubbers-comp3_flt_desc0'] ?></span></p>
                            <p class="margin-down" style="height: 100px;"><?php echo $current_lang['scrubbers-comp3_scr_desc1'] ?></p>
                        </div>
						<div class="col-xs-6 col-sm-4">
                            <p style="margin-bottom: 10px;"><span><?php echo $current_lang['scrubbers-comp3_flt_desc0'] ?></span></p>
							<p class="dark-text">
								<span><?php echo $current_lang['scrubbers-comp3_flt_desc1'] ?></span>
								<span><?php echo $current_lang['scrubbers-comp3_flt_desc2'] ?></span>
                                <span><?php echo $current_lang['scrubbers-comp3_flt_desc3'] ?></span>
                                <span><?php echo $current_lang['scrubbers-comp3_flt_desc4'] ?></span>
								<span><a href="/working-principle.php?#wpht" style="color: #98ADBB; text-decoration: underline; font-weight: normal; display: block; margin: 15px;"><?php echo $current_lang['scrubbers-comp3_flt_desc5'] ?></a></span>
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4"><h4 class="padding-up"><?php echo $current_lang['scrubbers-comp4_title'] ?></h4></div>
						<div class="col-xs-6 col-sm-4"><p><?php echo $current_lang['scrubbers-comp4_scr_desc1'] ?><span class="colored-number"> 86%</span></p></div>
						<div class="col-xs-6 col-sm-4"><p><?php echo $current_lang['scrubbers-comp4_flt_desc1'] ?><span class="colored-number"> 99.3%</span></p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4"><h4><?php echo $current_lang['scrubbers-comp5_title'] ?></h4></div>
						<div class="col-xs-6 col-sm-4"><p><?php echo $current_lang['scrubbers-comp5_scr_desc1'] ?></p></div>
						<div class="col-xs-6 col-sm-4"><p><?php echo $current_lang['scrubbers-comp5_flt_desc1'] ?></p></div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4"><h4><?php echo $current_lang['scrubbers-comp6_title'] ?></h4></div>
						<div class="col-xs-6 col-sm-4">
							<p><?php echo $current_lang['scrubbers-comp6_scr_desc1'] ?></p>
							<p><?php echo $current_lang['scrubbers-comp6_scr_desc2'] ?></p>
						</div>
						<div class="col-xs-6 col-sm-4">
							<p><?php echo $current_lang['scrubbers-comp6_flt_desc1'] ?></p>
							<p><?php echo $current_lang['scrubbers-comp6_flt_desc2'] ?></p>
						</div>
					</div>
					<div class="row">
						<div class="col-xs-12 col-sm-4"><h4 style="line-height: 1.4;"><?php echo $current_lang['scrubbers-comp7_title'] ?></h4></div>
						<div class="col-xs-6 col-sm-4">
							<p><?php echo $current_lang['scrubbers-comp7_scr_desc1'] ?></p>
						</div>
						<div class="col-xs-6 col-sm-4">
							<p><?php echo $current_lang['scrubbers-comp7_flt_desc1'] ?></p>
							<p><?php echo $current_lang['scrubbers-comp7_flt_desc2'] ?></p>
						</div>
					</div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4"><h4><?php echo $current_lang['scrubbers-comp8_title'] ?></h4></div>
                        <div class="col-xs-6 col-sm-4">
                            <p><?php echo $current_lang['scrubbers-comp8_scr_desc1'] ?></p>
                        </div>
                        <div class="col-xs-6 col-sm-4">
                            <p><?php echo $current_lang['scrubbers-comp8_flt_desc1'] ?></p>
                        </div>
                    </div>
					<div class="row">
						<div class="col-xs-12 col-sm-4"><h4><?php echo $current_lang['scrubbers-comp9_title'] ?></h4></div>
						<div class="col-xs-6 col-sm-4">
							<p><?php echo $current_lang['scrubbers-comp9_scr_desc1'] ?></p>
							<p><?php echo $current_lang['scrubbers-comp9_scr_desc2'] ?></p>
						</div>
						<div class="col-xs-6 col-sm-4">
							<p><?php echo $current_lang['scrubbers-comp9_flt_desc1'] ?></p>
							<p><?php echo $current_lang['scrubbers-comp9_flt_desc2'] ?></p>
						</div>
					</div>
					<div class="contact-box">
						<a class="order-now-button" href="https://www.facebook.com/pg/caeli.engineering/shop/?ref=page_internal" target="_blank"><?php echo $current_lang['order-now-link-text-1'] ?></a>
						<a class="contact-us-button" href="contact-us.php"><?php echo $current_lang['order-now-link-text-2'] ?></a>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php' ?>
