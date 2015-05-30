<?php
/*
Template Name: Home
*/
get_header();
?>

 <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/img/bedroom.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
    <div class="row cfx">
        <h1 class="logo">We do B&B</h1>
        <div class="hero-text">
            <h2>Introducing a new service for bed & breakfasts</h2>
        <a data-scroll="" data-options="{&quot;offset&quot;: 20}" href="#features" class="button">Learn More</a>
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

    <?php wp_nav_menu( array( 'menu' => 'menu','sort_column' => 'menu_order', 'container_class' => 'nav' ) ); ?>
            </div>
            <ul class="social-icons mobile">
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="facebook"></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" alt="twitter"></a></li>
        <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/icons/google.svg" alt="google"></a></li>
    </ul>

        </nav>
    </div>
    
</section>

<section class="features" id="features">
	<div class="row cfx">
		<div class="features-feature">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/affordable.svg" alt="" class="features-feature-image">
			<p class="features-feature-title">Affordable packages</p>
			<p class="features-feature-text">No hidden extras and a simple pricing scheme.</p>
			<a data-scroll href="#affordable" class="features-feature-link">Read More</a>
			<div class="hr"></div>
		</div>
		<div class="features-feature">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/support.svg" alt="" class="features-feature-image">
			<p class="features-feature-title">Unparalleled support</p>
			<p class="features-feature-text">We’re here when you need us - online or on the phone.</p>
			<a data-scroll href="#support" class="features-feature-link">Read More</a>
			<div class="hr"></div>
		</div>
		<div class="features-feature">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/designs.svg" alt="" class="features-feature-image">
			<p class="features-feature-title">Choice of designs</p>
			<p class="features-feature-text">Use your own logo, colours and images.</p>
			<a data-scroll href="#design" class="features-feature-link">Read More</a>
			<div class="hr"></div>
		</div>
		<div class="features-feature">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/booking.svg" alt="" class="features-feature-image">
			<p class="features-feature-title">Booking system</p>
			<p class="features-feature-text">Allow your guests to book directly online - optional payment system.</p>
			<a data-scroll href="#booking" class="features-feature-link">Read More</a>
			<div class="hr"></div>
		</div>
		<div class="features-feature">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/responsive.svg" alt="" class="features-feature-image">
			<p class="features-feature-title">Mobile Optimised</p>
			<p class="features-feature-text">Guests have all the information they need right on their phone.</p>
			<a data-scroll href="#mobile" class="features-feature-link">Read More</a>
			<div class="hr"></div>
		</div>
		<div class="features-feature">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/social.svg" alt="" class="features-feature-image">
			<p class="features-feature-title">SEO & social media</p>
			<p class="features-feature-text">Get found, increase bookings and spread the word.</p>
			<a data-scroll href="#social" class="features-feature-link">Read More</a>
		</div>
	</div>
</section>

<section class="large-features">
	
	<div class="large-features-feature">
		<div class="row cfx">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/affordable2.svg" alt="" class="large-features-feature-image">
			<div class="large-features-feature-text" id="affordable">
				<h3>Affordable packages</h3>
				<div class="hr"></div>
				<p>We have a number of packages to suit any budget. Every package includes a shiny new website using your choice of images, colours and logo.<br><br>
				There are no hidden costs and maintenence plans ensure you’re always secrue, up to date and can make changes cheaply.</p>
			</div>
		</div>
	</div>
	<div class="large-features-feature">
		<div class="row cfx">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/support2.svg" alt="" class="large-features-feature-image">
			<div class="large-features-feature-text" id="support">
				<h3>Unparalleled support</h3>
				<div class="hr"></div>
				<p>We are always available to help, just send us an email or give us a call. And we won’t disappear when the website has been built, we offer support for as long as you’re with us, as well as updates, security checks, ideas to help you grow and any other support you may need.</p>
			</div>
		</div>
	</div>
	<div class="large-features-feature">
		<div class="row cfx">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/designs2.svg" alt="" class="large-features-feature-image">
			<div class="large-features-feature-text" id="design">
				<h3>Choice of designs</h3>
				<div class="hr"></div>
				<p>We know what makes a great website - it’s what we do! Together we can chose and customise a design that uses your exiting logo, colour scheme and branding, or we can make all this for you, what ever you need.<br><br>
				We can even help with photography and editing, all to make your site stand out and be the best it can be.</p>
			</div>
		</div>
	</div>
	<div class="large-features-feature">
		<div class="row cfx">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/booking2.svg" alt="" class="large-features-feature-image">
			<div class="large-features-feature-text" id="booking">
				<h3>Booking System</h3>
				<div class="hr"></div>
				<p>We can create a booking system for you which can be managed easily from your computer. It comes with a diary and you can take bookings directly from your website, or just recieve booking enquiries, up to you!<br><br>
				We can also set up payments directly from your website, allowing guests to book directly, saving those commission charges from booking sites and agencies.</p>
			</div>
		</div>
	</div>
	<div class="large-features-feature">
		<div class="row cfx">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/responsive2.svg" alt="" class="large-features-feature-image">
			<div class="large-features-feature-text" id="mobile">
				<h3>Mobile optimised</h3>
				<div class="hr"></div>
				<p>We can create a booking system for you which can be managed easily from your computer. It comes with a diary and you can take bookings directly from your website, or just recieve booking enquiries, up to you!<br><br>
				We can also set up payments directly from your website, allowing guests to book directly, saving those commission charges from booking sites and agencies.</p>
			</div>
		</div>
	</div>
	<div class="large-features-feature">
		<div class="row cfx">
			<img src="<?php echo get_template_directory_uri(); ?>/img/icons/social2.svg" alt="" class="large-features-feature-image">
			<div class="large-features-feature-text" id="social">
				<h3>SEO & Social media</h3>
				<div class="hr"></div>
				<p>We can create a booking system for you which can be managed easily from your computer. It comes with a diary and you can take bookings directly from your website, or just recieve booking enquiries, up to you!<br><br>
				We can also set up payments directly from your website, allowing guests to book directly, saving those commission charges from booking sites and agencies.</p>
			</div>
		</div>
	</div>
</section>

<section class="slider">	
	<div class="row cfx">
		<div class="flexslider">
		  <ul class="slides">
		    <li>
		    <div class="slides-text">
		      	<h3>Feature Links</h3>
		    	<p>Large easy to use links to other key areas of your website. The images can be yours, or beautiful images selected with us.</p>
		      </div>
		      <img class="slides-image" src="<?php echo get_template_directory_uri(); ?>/img/slide-logo.png" />
		    </li>
		    <li>
		    <div class="slides-text">
		      	<h3>Feature Links</h3>
		    	<p>Large easy to use links to other key areas of your website. The images can be yours, or beautiful images selected with us.</p>
		      </div>
		      <img class="slides-image" src="<?php echo get_template_directory_uri(); ?>/img/slide-offers.png" />
		    </li>
		    <li>
		    <div class="slides-text">
		      	<h3>Feature Links</h3>
		    	<p>Large easy to use links to other key areas of your website. The images can be yours, or beautiful images selected with us.</p>
		      </div>
		      <img class="slides-image" src="<?php echo get_template_directory_uri(); ?>/img/slide-rates.png" />
		    </li>
		    <li>
		    <div class="slides-text">
		      	<h3>Feature Links</h3>
		    	<p>Large easy to use links to other key areas of your website. The images can be yours, or beautiful images selected with us.</p>
		      </div>
		      <img class="slides-image" src="<?php echo get_template_directory_uri(); ?>/img/slide-reservation.png" />
		    </li>
		    <li>
		    <div class="slides-text">
		      	<h3>Feature Links</h3>
		    	<p>Large easy to use links to other key areas of your website. The images can be yours, or beautiful images selected with us.</p>
		      </div>
		      <img class="slides-image" src="<?php echo get_template_directory_uri(); ?>/img/slide-feature-link.png" />
		    </li>
		    <li>
		    <div class="slides-text">
		      	<h3>Feature Links</h3>
		    	<p>Large easy to use links to other key areas of your website. The images can be yours, or beautiful images selected with us.</p>
		      </div>
		      <img class="slides-image" src="<?php echo get_template_directory_uri(); ?>/img/slide-awards.png" />
		    </li>
		    <li>
		    <div class="slides-text">
		      	<h3>Feature Links</h3>
		    	<p>Large easy to use links to other key areas of your website. The images can be yours, or beautiful images selected with us.</p>
		      </div>
		      <img class="slides-image" src="<?php echo get_template_directory_uri(); ?>/img/slide-social.png" />
		    </li>
		    <li>
		    <div class="slides-text">
		      	<h3>Feature Links</h3>
		    	<p>Large easy to use links to other key areas of your website. The images can be yours, or beautiful images selected with us.</p>
		      </div>
		      <img class="slides-image" src="<?php echo get_template_directory_uri(); ?>/img/slide-newsletter.png" />
		    </li>
		  </ul>
		</div>
	</div>
	
</section>




<section class="pricing">
	<div class="row cfx">
		<h3>Pricing & Packages</h3>
		<div class="pricing-package">
			<p class="pricing-package-title">Basic</p>
			<p class="pricing-package-price"><span>£</span>399</p>
			<ul class="pricing-package-list">
				<li>Choice of designs</li>
				<li>Mobile compatible</li>
				<li>Support</li>
				<li></li>
				<a href="#" class="pricing-package-button">Compare</a>
			</ul>	
		</div>
		<div class="pricing-package">
			<p class="pricing-package-title">Basic</p>
			<p class="pricing-package-price"><span>£</span>599</p>
			<ul class="pricing-package-list">
				<li>Choice of designs</li>
				<li>Mobile compatible</li>
				<li>Support</li>
				<li>Booking system</li>
				<a href="#" class="pricing-package-button">Compare</a>
			</ul>
		</div>
		<div class="pricing-package">
			<p class="pricing-package-title">Basic</p>
			<p class="pricing-package-price"><span>£</span>799</p>
			<ul class="pricing-package-list">
				<li>Choice of designs</li>
				<li>Mobile compatible</li>
				<li>Support</li>
				<li>Booking system</li>
				<li>Payment system</li>
				<a href="#" class="pricing-package-button">Compare</a>
			</ul>
		</div>
	</div>

</section>
<section class="contact" id="contact">
	<div class="row cfx">
		<div class="contact-text">
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
