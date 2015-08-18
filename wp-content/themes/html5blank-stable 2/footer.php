<?php 

    /*********************************************/
    /*         
        Get Homepage Variable Text
    */
    /*********************************************/

    $args = array(

        'pagename' => 'homepage-text'

    );

    $text = new WP_Query($args);

        if ( $text->have_posts() ) {
            while ( $text->have_posts() ) {
                $text->the_post(); 

                $post_id = get_the_ID();

                $footer_header = get_field('footer_header',$post_id);
                $footer_subhead = get_field('footer_subhead',$post_id);

                $contact_phone_number = get_field('contact_phone_number',$post_id);
                $contact_fax_number = get_field('contact_fax_number',$post_id);
                $contact_address = get_field('contact_address',$post_id);
                $contact_email = get_field('contact_email', $post_id);


            
            }
        } else {
                // no posts found
        }
        wp_reset_postdata();
        
?>

<div class="feature_sec9">
<div class="container transpef">
	
    <div class="title11">
    	<h2 class="white"><?php echo $footer_header ?>
        <em><?php echo $footer_subhead ?></em>
        </h2>
	</div>
    
    <div class="cforms">
        
        <form action="demo-contacts.php" method="post" id="sky-form" class="sky-form">
          <fieldset>
            <div class="row">
            
              <div class="col col-4">
                <label class="label"><strong>Your Name*</strong></label>
                <label class="input"> <i class="icon-append icon-user"></i>
                  <input type="text" name="name" id="name">
                </label>
              </div>
              
              <div class="col col-4">
                <label class="label"><strong>Your E-mail*</strong></label>
                <label class="input"> <i class="icon-append icon-envelope-alt"></i>
                  <input type="email" name="email" id="email">
                </label>
              </div>
            
                        
            <div class="col col-4">
              <label class="label"><strong>Phone Number</strong></label>
              <label class="input"> <i class="icon-append icon-tag"></i>
                <input type="text" name="subject" id="subject">
              </label>
            </div>
            
            </div>
  			
            <br />
             
            <div>
              <label class="label"><strong>Message*</strong></label>
              <label class="textarea"> <i class="icon-append icon-comment"></i>
                <textarea rows="5" name="message" id="message"></textarea>
              </label>
            </div>
            
          </fieldset>
          <footer>
            <button type="submit" class="subbutton">Submit Your Message</button>
          </footer>
          <div class="message"> <i class="icon-ok"></i>
            <p>Your message was successfully sent!</p>
          </div>
        </form>
        
	</div>
    
	<div class="clearfix margin_top4"></div>
    
</div>
</div><!-- end features section 9 -->

<footer>

<div class="footer">

    <div class="container">
    
        <div class="left animate" data-anim-type="fadeInLeft" data-anim-delay="300">
        
            <h5>Get Free Consultation</h5>
            <h6>Available 24/7</h6>
            <h3><?php echo $contact_phone_number ?></h3>
            
        </div><!-- end section -->
        
        <div class="center animate" data-anim-type="fadeIn" data-anim-delay="400">
        
            <h5>Message Us Now</h5>
            <h6>Available 24/7</h6>
            <h3><a href="mailto:<?php echo $contact_email ?>"><?php echo $contact_email ?></a></h3>
        
        </div><!-- end section -->
        
        <div class="right animate" data-anim-type="fadeInRight" data-anim-delay="500">
        
            <h5>Address Location</h5>
            <h6><?php echo $contact_address ?>  <br>Fax: <?php echo $contact_fax_number ?> <br /> <a href="https://www.google.com/maps/dir//4303+N+Central+Expy,+Dallas,+TX+75205/@32.8175451,-96.7913839,17z/data=!3m1!4b1!4m8!4m7!1m0!1m5!1m1!1s0x864e9f26362c3f5f:0xcacfcd2cdbc51ba2!2m2!1d-96.7890718!2d32.8175451?hl=en-US ">View Map</a></h6>
           
        </div><!-- end section -->
    
    </div>
    
</div><!-- end footer -->

<div class="copyrights">
<div class="container">

	<div class="one_half">Copyright © <?php echo the_date('Y'); ?> Law Offices of Randall B. Isenberg. All Rights Reserved</div>
	
    <div class="one_half last"><a href="<?php echo site_url(); ?>/privacypolicy">Privacy Policy</a> | <a href="<?php echo site_url(); ?>/disclaimer">Disclaimer</a></div>
    
    
</div>
</div><!-- end copyrights -->

</footer>


<a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->





</div>

    
<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/universal/jquery.js"></script>

<!-- style switcher -->
<script src="<?php bloginfo('template_url'); ?>/js/style-switcher/jquery-1.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/style-switcher/styleselector.js"></script>

<!-- animations -->
<script src="<?php bloginfo('template_url'); ?>/js/animations/js/animations.min.js" type="text/javascript"></script>

<!-- mega menu -->
<script src="<?php bloginfo('template_url'); ?>/js/mainmenu/bootstrap.min.js"></script> 
<script src="<?php bloginfo('template_url'); ?>/js/mainmenu/customeUI.js"></script> 

<!-- MasterSlider -->
<script src="<?php bloginfo('template_url'); ?>/js/masterslider/jquery.easing.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/masterslider/masterslider.min.js"></script>

<script type="text/javascript">
(function($) {
 "use strict";

	var slider = new MasterSlider();
	// adds Arrows navigation control to the slider.
	slider.control('arrows');
	slider.control('bullets');

	 slider.setup('masterslider' , {
		 width:1400,    // slider standard width
		 height:580,   // slider standard height
		 space:0,
		 speed:45,
		 layout:'fullwidth',
		 loop:true,
		 preload:0,
		 autoplay:true,
		 view:"basic"
	});

})(jQuery);
</script>

<!-- scroll up -->
<script src="<?php bloginfo('template_url'); ?>/js/scrolltotop/totop.js" type="text/javascript"></script>

<!-- sticky menu -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mainmenu/sticky.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/mainmenu/modernizr.custom.75180.js"></script>

<!-- forms -->
<script src="<?php bloginfo('template_url'); ?>/js/form/jquery.form.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/js/form/jquery.validate.min.js"></script>
<script type="text/javascript">
(function($) {
 "use strict";

	$(function()
	{
		// Validation
		$("#sky-form").validate(
		{					
			// Rules for form validation
			rules:
			{
				name:
				{
					required: true
				},
				email:
				{
					required: true,
					email: true
				},
				message:
				{
					required: true,
					minlength: 10
				}
			},
								
			// Messages for form validation
			messages:
			{
				name:
				{
					required: 'Please enter your name',
				},
				email:
				{
					required: 'Please enter your email address',
					email: 'Please enter a VALID email address'
				},
				message:
				{
					required: 'Please enter your message'
				}
			},
								
			// Ajax form submition					
			submitHandler: function(form)
			{
				$(form).ajaxSubmit(
				{
					success: function()
					{
						$("#sky-form").addClass('submited');
					}
				});
			},
			
			// Do not change code below
			errorPlacement: function(error, element)
			{
				error.insertAfter(element.parent());
			}
		});
	});			

})(jQuery);
</script>

<!-- cubeportfolio -->
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cubeportfolio/jquery.cubeportfolio.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/cubeportfolio/main.js"></script>

<!-- owl carousel -->
<script src="<?php bloginfo('template_url'); ?>/js/carouselowl/owl.carousel.js"></script>

<!-- tabs -->
<script src="<?php bloginfo('template_url'); ?>/js/tabs/assets/js/responsive-tabs.min.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/universal/custom.js"></script>




</body>
</html>
