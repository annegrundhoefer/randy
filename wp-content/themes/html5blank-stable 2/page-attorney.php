<?php /* Template Name: Attorney Page */ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); 


$post_id = get_the_ID();

$attorney_info_heading = get_field('attorney_info_heading',$post_id);
$attorney_info_body = get_field('attorney_info_body',$post_id);
$attorney_info_phone_number = get_field('attorney_info_phone_number',$post_id);
$attorney_info_fax_number = get_field('attorney_info_fax_number',$post_id);
$attorney_info_email = get_field('attorney_info_email',$post_id);
$professional_experience_body = get_field('professional_experience_body',$post_id);
$practice_areas_body = get_field('practice_areas_body',$post_id);
$education_body = get_field('education_body',$post_id);
$bar_admissions_body = get_field('bar_admissions_body',$post_id);
$certifications_body = get_field('certifications_body',$post_id);
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );


?>

<div class="clearfix"></div>


<div class="full_biohead">
<div class="container">

	<img src="<?php echo $url ?>" alt="" />
    
	<h3><?php echo $attorney_info_heading ?></h3>
    <h6><?php echo $attorney_info_body ?></h6>
    
    <ul class="ctdet">
    	<li><i class="fa fa-phone-square"></i> <?php echo $attorney_info_phone_number ?></li>
        <li><i class="fa fa-fax"></i> <?php echo $attorney_info_fax_number ?></li>
        <li><i class="fa fa-envelope"></i> <a href="mailto:<?php echo $attorney_info_email ?>"><?php echo $attorney_info_email ?></a></li>
    </ul>
    
    <p><a href="#" class="button5">Download vCard</a> &nbsp;&nbsp; <a href="<?php echo $attorney_info_email ?>" class="button5">Send an Email</a></p>
   	
    
    <ul class="csocial">
    	<li><a href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
    </ul>
    
</div>
</div><!-- end full info head -->

<div class="clearfix"></div>

<div class="container tbp">
	
    <div class="clearfix"></div>
    
    <h3>Professional Experience</h3>
    
    <p class="big_text3"><?php echo $professional_experience_body ?></p>

    
    <div class="clearfix margin_top5"></div>
    
	<div class="one_third">
    <div class="graybgraph_box">
    	
        <h3>Practice Areas</h3>


        <ul>

            <?php


            $args = array(
                'post_type' => 'ri_areas',
                'posts_per_page' => -1,
                'order' => 'ASC'
            );
            
            $areas = new WP_Query( $args );
            
            if ( $areas->have_posts() ) {
                while ( $areas->have_posts() ) {
                    $areas->the_post();
            
                    echo '<li><i class="fa fa-arrow-circle-o-right"></i> <a href="' . get_the_permalink() . '">' . get_the_title() . '</a></li>';
            
                }
            } else {
                    // no posts found
            }
            wp_reset_postdata();
            
            ?>
        </ul>

	</div>
    </div><!-- end section -->
    
    <div class="one_third">
    <div class="graybgraph_box">
    	
        <h3>Education</h3>
        
        <?php echo $education_body ?>

	</div>
    </div><!-- end section -->
    
    <div class="one_third last">
    <div class="graybgraph_box">
    	
        <h3>Bar Admissions</h3>
        
        <?php echo $bar_admissions_body ?>
	</div>
    </div><!-- end all section -->
    
    <div class="clearfix margin_top6"></div>
    
    <div class="one_half">
    
        <h3>Certifications &amp; Memberships</h3>
        
        <?php echo $certifications_body ?>
    
    </div><!-- end section -->
    
    <div class="one_half last">
    
    	<div class="videofrafull"><iframe src="http://www.youtube.com/embed/03M7n8bMscM?wmode=transparent&amp;wmode=transparent"></iframe></div>
    
    </div><!-- end section -->

</div><!-- end content area -->

<div class="clearfix"></div>

<div class="feature_sec9">
<div class="container transpef">
	
    <div class="title11">
    	<h2 class="white">Need Legal Assistance - Do You Have a Claim?
        <em>Feel free to get in touch with any enquiries and one of our friendly members of staff will get back to you as soon as possible.</em>
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

<div class="clearfix"></div>

 <?php endwhile; ?>

<?php else: ?>
<?php endif; ?>

<style>

.full_biohead img {
    height: 450px;
    width: 450px;
}

</style>

<?php get_footer(); ?>