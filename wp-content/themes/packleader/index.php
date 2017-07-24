<?php get_header(); ?>

	<div class="site-container">
		<div class="section-subsciption-form">
			<div class="container-fluid">
				<div class="subsciption-form">
					<div class="row">
						<div class="col-md-7">
							<div class="devcon-city-container">
								<img src="<?php bloginfo('template_url'); ?>/images/devcon-city-design.png" class="devcon-city">
							</div>	
						</div>
						<div class="col-md-5 right-side">
							<img class="devcon-logo" src="<?php bloginfo('template_url'); ?>/images/logo.png">
							<div class="text-tag-container">
								<p class="text-tag">The Biggest Developer Conference Goes to Cagayan De Oro City!</p>
							</div>
							<p class="subscription-text">Subscribe now to get the first dibs ad get discounts!</p>
							<?php echo smlsubform(); ?>
							<p class="hashtag-devcon">#DevConSummitCDO</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

<?php get_footer(); ?>