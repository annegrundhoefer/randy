
<?php /* Template Name: About Page */ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); 


$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

$subhead = get_field('about_page_subhead',$post->ID);
$content = get_field('about_page_body',$post->ID);
$banner_image = get_field('about_page_banner_image', $post->ID);
$banner = get_field('about_page_banner', $post->ID);

?>

<div class="page_title" style="background-image: url('<?php echo $url ?>') no-repeat center top;">
<div class="container">
	
    <h1><?php echo get_the_title(); ?></h1>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="container tbp">

	<h4><?php echo $subhead ?></h4>
    
    <p class="big_text3"><?php echo $content ?></p>
    
</div><!-- end section -->

<div class="clearfix"></div>

<div class="feature_sec10">
<div class="container">
	
    <div class="title11">
    
    	<h2>Criminal Defense <strong>Overview</strong>
        <span class="line2"></span></h2>
        
	</div>
    
    <br />
    
    <div id="owl-demo6" class="owl-carousel">

            <?php 

            $args = array(
                'post_type' => 'ri_overviews',
                'posts_per_page' => -1,
                'order' => 'DESC'
            );
            
            $overviews = new WP_Query( $args );
            
            if ( $overviews->have_posts() ) {
                while ( $overviews->have_posts() ) {
                    $overviews->the_post(); 

                    $title = get_the_title();
                    $content = get_the_content();
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                    ?>
                
                    <div>
            
                        <div class="one_half"><img src="<?php echo $url ?>"></div>
                        
                        <div class="one_half last">
                        
                            <h3 class="color"><?php echo $title ?></h3>
                            
                            <?php echo $content ?>
                            
                        </div>
                        
                        <div class="clearfix margin_top2"></div>
                             
                    </div><!-- end section -->

                    
                 <?php

                }
            } else {
                    // no posts found
            }
            wp_reset_postdata();

            ?>
              
		</div>

</div>
</div><!-- end features section 10 -->



<div class="clearfix"></div>

<div class="feature_sec11" style="background-image: url('<?php echo $banner_image ?>');">
<div class="container">

	<h1 class="white"><?php echo $banner ?></h1>
    
</div>
</div><!-- end features section 11 -->


<div class="clearfix"></div>

<div class="feature_sec13">
<div class="container">
	
    <div class="one_third">
    
    	<h3>Hear from our<strong> Clients</strong></h3>
        
        <div id="owl-demo10" class="owl-carousel small three">

            <?php 


            $args = array(
                'post_type' => 'ri_testimonials',
                'posts_per_page' => 4,
                'order' => 'DESC'
            );
            
            $testimonials = new WP_Query( $args );
            
            if ( $testimonials->have_posts() ) {
                while ( $testimonials->have_posts() ) {
                    $testimonials->the_post(); 

                    $title = get_the_title();
                    $testimonial = get_the_content();
                    $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

                    ?>

                        <div>
            
                            <div class="peoplesays">
                            
                               <?php echo $testimonial ?>
                            </div>
                            
                            <div class="peoimg"><img src="<?php echo $url ?>" alt="" /> <strong>- <?php echo $title ?></strong></div>
                               
                        </div><!-- end section -->

    

                    <?php
            
                    
            
                }
            } else {
                    // no posts found
            }
            wp_reset_postdata();

            ?>
            
   		</div>
        
    </div><!-- end all section -->
    
	
    <div class="one_third">
    
    	<h3>Case <strong>Results</strong></h3>
    	
        <div id="st-accordion-four" class="st-accordion-five">
        <ul>

            <?php 


            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 4,
                'order' => 'DESC'
            );
            
            $results = new WP_Query( $args );
            
            if ( $results->have_posts() ) {
                while ( $results->have_posts() ) {
                    $results->the_post(); 

                    $title = get_the_title();
                    $excerpt = get_the_excerpt();
                    $permalink = get_the_permalink();

                    ?>
                
                     <li>
                        <a href="<?php echo $permalink ?>"><?php echo $title ?></span></a>
                        <div class="st-content">
                            <p><?php echo $excerpt ?></p>
                        </div>
                    </li>
            <?php            
                }
            } else {
                    // no posts found
            }
            wp_reset_postdata();
            
            ?>
            
		</ul>
    	</div>

	</div><!-- end all section -->
    
    <div class="one_third last">
    	
        <h3>Play <strong>Videos</strong></h3>
        
    	<iframe src="http://www.youtube.com/embed/VT_3xtI2kvM?wmode=transparent" class="videofra"></iframe>
    
    </div>

</div>
</div><!-- end features section 13 -->



<div class="clearfix"></div>



 <?php endwhile; ?>

<?php else: ?>
<?php endif; ?>

<style>
.view-article {
    display: none !important;
}
</style>

<?php get_footer(); ?>