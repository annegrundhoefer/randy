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
       
    </ul>
    
    <p><a href="mailto:<?php echo $contact_email ?>" class="button5">Send an Email</a></p>
   	
    
    <ul class="csocial">
    	<li><a href="https://www.facebook.com/randall.isenberg.9" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.linkedin.com/pub/randall-isenberg/21/737/a56" target="_blank"><i class="fa fa-linkedin"></i></a></li>
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
    	
        <h3><span class="smaller">State Bar Admissions & Specializations</span></h3>
        
        <?php echo $bar_admissions_body ?>
	</div>
    </div><!-- end all section -->
    
    <div class="clearfix margin_top6"></div>
    
    <div class="one_half">
    
        <h3>Certifications &amp; Memberships</h3>
        
        <?php echo $certifications_body ?>
    
    </div><!-- end section -->
    
    <div class="one_half last">
    
    	<div class="videofrafull"><iframe src="https://www.youtube.com/embed/6Q9xbk779ZM"></iframe></div>
    
    </div><!-- end section -->

</div><!-- end content area -->

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