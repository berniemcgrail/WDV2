<?php
/*
Template Name: Pricing
*/
get_header();
?>

 <div class="hero pricing" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bg8.png'); background-size: cover; background-repeat: no-repeat; background-position: bottom;">
    <div class="row cfx">
        <h1 class="logo">We do B&B</h1>
        <div class="hero-text">
            <h2>Packages & Pricing</h2>
        </div>
        
        <nav class="cfx">

            <div class="hamburger-container">
                <div class="hamburger">
                    <div class="line line-1"></div>
                    <div class="line line-2"></div>
                    <div class="line line-3"></div>
                </div>
            </div>

            <div class="nav-container">

    <?php wp_nav_menu( array( 'menu' => 'pricing','sort_column' => 'menu_order', 'container_class' => 'nav' ) ); ?>
            </div>
            <ul class="social-icons mobile">
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="facebook"></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" alt="twitter"></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/google.svg" alt="google"></a></li>
    </ul>

        </nav>
    </div>
    
</div>

<section class="pricing-table">
	<div class="row">
		<h2>Packages</h2>
		<div class="pricing-table-container">
			<div class="table-row titles">
				<div>&nbsp;</div>
				<div class="yellow">Bronze</div>
				<div class="orange">Silver</div>
				<div class="red">Gold</div>
			</div>
			<div class="table-row">
				<div>One off payment</div>
				<div class="yellow">£399</div>
				<div class="orange">£599</div>
				<div class="red">£799</div>
			</div>
			<div class="table-row">
				<div>Number of pages</div>
				<div class="yellow">Up to 4</div>
				<div class="orange">Up to 8</div>
				<div class="red">Up to 12</div>
			</div>
			<div class="table-row">
				<div>Mobile compatible</div>
				<div class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticky.svg" alt=""></div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Choice of designs</div>
				<div class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticky.svg" alt=""></div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Booking System</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Payment System</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange">&nbsp;</div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Newsletter Signup</div>
				<div class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticky.svg" alt=""></div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Events Calendar</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Special Offer Support</div>
				<div class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticky.svg" alt=""></div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>SEO</div>
				<div class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticky.svg" alt=""></div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Set up on social media</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>CMS</div>
				<div class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticky.svg" alt=""></div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Google Map</div>
				<div class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticky.svg" alt=""></div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Google analytics</div>
				<div class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticky.svg" alt=""></div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Set up on TripAdvisor</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Blog/News Section</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange">&nbsp;</div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Set up on Google Places</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange">&nbsp;</div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
		</div>
		<h2>Monthly Plans</h2>
		<div class="pricing-table-container">
			<div class="table-row titles">
				<div>&nbsp;</div>
				<div class="yellow">Plan 1</div>
				<div class="orange">Plan 2</div>
				<div class="red">Plan 3</div>
			</div>
			<div class="table-row">
				<div>Cost per month</div>
				<div class="yellow">£15</div>
				<div class="orange">£25</div>
				<div class="red">£40</div>
			</div>
			<div class="table-row">
				<div>Domain registration</div>
				<div class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticky.svg" alt=""></div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Hosting</div>
				<div class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticky.svg" alt=""></div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Security updates</div>
				<div class="yellow"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticky.svg" alt=""></div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Email marketing campaigns</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Social media marketing campaigns</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Social media monitoring</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange">&nbsp;</div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Website backups</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange">&nbsp;<img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Analytics reports</div>
				<div class="yellow">&nbsp;</div>
				<div class="orange"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/ticko.svg" alt=""></div>
				<div class="red"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/tickr.svg" alt=""></div>
			</div>
			<div class="table-row">
				<div>Changes and amends each month</div>
				<div class="yellow">30 mins</div>
				<div class="orange">1 hour</div>
				<div class="red">2 hours</div>
			</div>
			<div class="table-row">
				<div>Discount on new features</div>
				<div class="yellow">10%</div>
				<div class="orange">20%</div>
				<div class="red">30%</div>
			</div>
		</div>
		<h2>Extra Services</h2>
		<div class="pricing-table-container">
			<div class="table-row titles">
				<div>Extra Pages</div>
				<div>£30 each</div>
			</div>
			<div class="table-row">
				<div>Logo Design</div>
				<div>£200</div>
			</div>
			<div class="table-row">
				<div>Branding</div>
				<div>£300</div>
			</div>
			<div class="table-row">
				<div>Photography</div>
				<div>Contact us for a quote</div>
			</div>
		</div>
	</div>
	
</section>


<section class="contact light" id="contact">
	<div class="row cfx">
		<div class="contact-text light">
			<h3>Contact Us</h3>
			<p>Email, call or send us a message and we’ll get back to you right away.</p>
		</div>
		<div class="contact-form">
			<?php echo do_shortcode('[contact-form-7 id="11" title="Contact form 1"]'); ?>
		</div>
	</div>
</section>


<?php
get_footer();
?>
