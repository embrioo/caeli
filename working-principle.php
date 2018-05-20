<?php 
    $page_title = 'Working principle';
    $class_wrapper = 'principle-page';
    require  'init.php';
?>
<main>
	<section class="page-banner banner">
		<div class="container-fluid">
			<div class="box"><h1><?php echo $current_lang['home-banner-text'] ?></h1></div>
		</div>
	</section>
	<section class="principle">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-lg-offset-1">
					<h3><?php echo $current_lang['principle-heading-text'] ?></h3>
					<div class="row">
						<div class="col-sm-4 float-xs-left">
							<div class="type-view">
								<h4>
								    <span><?php echo $current_lang['principle-type1-span-text-1'] ?></span>
								    <span><?php echo $current_lang['principle-type1-span-text-2'] ?></span>
								    <span><?php echo $current_lang['principle-type1-span-text-3'] ?></span>
							    </h4>
							    <img src="./images/type-1.png" alt="first-type">
							</div>									
						</div>
						<div class="col-sm-4">
                            <p><?php echo $current_lang['principle-paragraph-text-1'] ?></p>
							<p><?php echo $current_lang['principle-paragraph-text-1-1'] ?></p>
						</div>
						<div class="col-xs-12 col-sm-4">
							<h4 class="text-uppercase">
								<span><?php echo $current_lang['principle-particle-span-text-1'] ?></span>
								<span><?php echo $current_lang['principle-particle-span-text-2'] ?></span>
							</h4>
							<ul class="list-inline" style="margin-top: 13px;">
								<li><img alt="" src="./images/particle-1.png"></li>
								<li><img alt="" src="./images/particle-2.png"></li>
								<li><img alt="" src="./images/particle-3.png"></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 float-xs-left">
							<div class="type-view middle-one">
								<h4>
									<span><?php echo $current_lang['principle-type2-span-text-1'] ?></span>
									<span><?php echo $current_lang['principle-type2-span-text-2'] ?></span>
									<span><?php echo $current_lang['principle-type2-span-text-3'] ?></span>
								</h4>
								<img src="./images/type-2.png" alt="second-type">
							</div>
						</div>
						<div class="col-sm-4">
							<p><?php echo $current_lang['principle-paragraph-text-2'] ?></p>
							<p><?php echo $current_lang['principle-paragraph-text-3'] ?></p>
							<p><?php echo $current_lang['principle-paragraph-text-4'] ?></p>
						</div>
						<div class="col-xs-12 col-sm-4">
							<h4 class="text-uppercase">
								<span><?php echo $current_lang['principle-bacteria-span-text-1'] ?></span>
								<span><?php echo $current_lang['principle-bacteria-span-text-2'] ?></span>
							</h4>
							<ul class="list-inline bacterias" style="margin-top: 13px;">
								<li><img alt="" src="./images/chemicals.png"></li>
								<li><img alt="" src="./images/viruses.png"></li>
								<li><img alt="" src="./images/bacterias.png"></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4 float-xs-left">
							<div class="type-view">
								<h4>
									<span><?php echo $current_lang['principle-type3-span-text-1'] ?></span>
									<span><?php echo $current_lang['principle-type3-span-text-2'] ?></span>
									<span><?php echo $current_lang['principle-type3-span-text-3'] ?></span>
								</h4>
								<img src="./images/type-3.png" alt="third-type" style="margin-top: -10px;">
							</div>
						</div>
						<div class="col-sm-4">
							<p><?php echo $current_lang['principle-paragraph-text-5'] ?></p>
							<p><?php echo $current_lang['principle-paragraph-text-6'] ?></p>
							<p><?php echo $current_lang['principle-paragraph-text-7'] ?></p>
						</div>
						<div class="col-xs-12 col-sm-4">
							<h4 class="text-uppercase"><?php echo $current_lang['principle-moisture-text'] ?></h4>
                            <ul class="list-inline" style="margin-top: 13px; padding-left: 6px;">
                                <li style="padding: 0 2px;"><img alt="" src="./images/Moisture-goes-out-Caeli-Filters.png" style="width: 69px;"></li>
                                <li style="padding: 0 2px;"><img alt="" src="./images/Moisture-goes-out-Caeli-Filters.png" style="width: 69px;"></li>
                                <li style="padding: 0 2px;"><img alt="" src="./images/Moisture-goes-out-Caeli-Filters.png" style="width: 69px;"></li>
                            </ul>
						</div>
					</div>
					<h4 class="copyrights"><?php echo $current_lang['principle-copyrights-text'] ?></h4>
				</div>						
			</div>
		</div>
	</section>
</main>
<?php include 'footer.php' ?>
		