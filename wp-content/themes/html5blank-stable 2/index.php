<?php get_header(); ?>

	<!-- Slider
======================================= -->  

<div class="mstslider">

<!-- masterslider -->
<div class="master-slider ms-skin-default" id="masterslider">

    <?php 

    $args = array(

        'post_type' => 'ri_slides',
        'posts_per_page' => -1

    );

    $slides = new WP_Query($args);

    $count = 1;


        if ( $slides->have_posts() ) {
            while ( $slides->have_posts() ) {
                $slides->the_post(); 

                $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                $title = get_field('formatted_title',$post->ID);
                $desc = get_the_content();
                ?>
        
    
                        <div class="ms-slide slide-<?php echo $count ?>" data-delay="7">
         
                            <img src="<?php echo $url ?>" data-src="<?php echo $url ?>" alt="<?php echo $title ?>"/>     
                            
                             <img src="<?php echo $url ?>" data-src="<?php bloginfo('template_url'); ?>/images/randy2.png" alt="" class="ms-layer"
                                style="bottom:0; right:120px"
                                data-effect="right(72)"
                                data-delay="0"
                                data-duration="300"
                                data-type="image"
                            />
                            
                            <div class="ms-layer text1"
                                style="left:116px; top:123px"
                                data-effect="bottom(50)"
                                data-duration="900"
                                data-delay="300"
                                data-ease="easeOutExpo"
                            ><?php echo $title ?>
                            </div>
                            
                            <div class="ms-layer text2"
                                style="left:116px; top:305px"
                                data-effect="left(100)"
                                data-duration="2000"
                                data-delay="500"
                                data-ease="easeOutExpo"
                            ><?php echo $desc ?></div>
                             
                            <div class="ms-layer sldbut1"
                                style="left:116px; top:455px"
                                data-effect="right(50)"
                                data-duration="2000"
                                data-delay="500"
                                data-ease="easeOutExpo"
                            ><a href="<?php echo site_url(); ?>/attorneys/">Learn More</a></div>
                                    
                        </div><!-- end slide -->


                <?php 
        
                $count++;            
            
            }
        } else {
                // no posts found
        }
        wp_reset_postdata();
        
        ?>

</div><!-- end of masterslider -->

</div><!-- end slider -->

<div class="clearfix"></div>

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

                $main_text_title = get_field('main_text_title',$post_id);
                $main_text_subhead = get_field('main_text_subhead',$post_id);
                $main_text_body = get_field('main_text_body',$post_id);

                $feature_red_word = get_field('feature_red_word',$post_id);
                $feature_title = get_field('feature_title',$post_id);
                $feature_subhead = get_field('feature_subhead',$post_id);
                $feature_body = get_field('feature_body', $post_id);

                $about_title = get_field('about_title',$post_id);
                $about_body = get_field('about_body',$post_id);

                $contact_phone_number = get_field('contact_phone_number',$post_id);
            
            }
        } else {
                // no posts found
        }
        wp_reset_postdata();
        
?>



<div class="feature_sec1">
<div class="container">

    <div class="title11">
    	<h2><?php echo $main_text_title ?>
        <em><?php echo $main_text_subhead ?></em>
        <span class="line"></span></h2>
	</div>
	
    <p><?php echo $main_text_body ?></p>
        
    <h5>Get your Free Consultation <strong class="animate" data-anim-type="fadeIn" data-anim-delay="300"><a href="tel:+12146969253"><?php echo $contact_phone_number ?></a> </strong> Available 24/7 </h5>
    
</div>
</div><!-- end features section 1 -->

<div class="clearfix"></div>

<div class="feature_sec18">
<div class="container">
    
    <div class="box animate" data-anim-type="fadeInUp" data-anim-delay="500">
    
        <h1><?php echo $feature_red_word ?></h1>
        <h3><?php echo $feature_title; ?></h3>
        <h5><?php echo $feature_subhead ?></h5>
        
        <p><?php echo $feature_body ?></p>
        
    </div>

</div>
</div><!-- end features section 18 -->


<div class="clearfix"></div>

<div class="feature_sec5">
<div class="container">
    
    <div class="two_third">
    
        <img src="<?php bloginfo('template_url'); ?>/images/awards.png" alt="" class="img_left1 animate" data-anim-type="fadeInRight" data-anim-delay="500" />
        
        <h2 class="small">About <strong><?php echo $about_title ?></strong></h2>
        
        <p><?php echo $about_body ?></p>
        <br />
        <span class="big_text1">Call Us Confidentially Now:</span> &nbsp;<span class="big_text1 color"><?php echo $contact_phone_number ?></span>
        <br /><br />
        <div class="alicent"><img src="<?php bloginfo('template_url'); ?>/images/h-line10.png" alt="" /> <br /><br /> <div class="scriptfont">Randall Isenberg</div></div>

    </div><!-- end section -->
    
    <div class="one_third last animate" data-anim-type="fadeIn" data-anim-delay="200">
    
        <h2 class="small">Case <strong>Results</strong></h2>
        
        <div class="caseresult">
            <div class="inborder">
            

            <?php 


            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 3,
                'order' => 'DESC'
            );
            
            $results = new WP_Query( $args );
            
            if ( $results->have_posts() ) {
                while ( $results->have_posts() ) {
                    $results->the_post();
            
                    ?>

                    <p><?php echo get_the_title() ?></p>
                
                    <div class="divider_line22"></div>

                    <?php 
            
                }
            } else {
                    // no posts found
            }
            wp_reset_postdata();
            
            ?>
            
            
            <br /><br />
            
            <a href="/results" class="button4"><strong>All Cases &amp; Results</strong></a>
            
            </div>
        </div>

    </div>

 </div>
</div><!-- end features section 5 -->


<div class="clearfix"></div>

<div class="feature_sec3">
<div class="container">
	
    <div class="one_half animate" data-anim-type="fadeIn" data-anim-delay="500">
    	
        <h2 class="small">Why Clients <strong>Love Us</strong></h2>
        
    	<div id="owl-demo2" class="owl-carousel small">

            <?php


                $args = array(
                    'post_type' => 'ri_testimonials',
                    'posts_per_page' => -1,
                );

                $count = 1;
                
                $testimonials = new WP_Query( $args );
                
                if ( $testimonials->have_posts() ) {
                    while ( $testimonials->have_posts() ) {
                        $testimonials->the_post(); 

                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        $content = get_the_content();
                        $title = get_the_title(); 

                        if ($count % 2 === 0)  {

                        ?>
                             
    
                            <div>
            
                            
                                
                                <p><?php echo $content; ?></p>
                                
                                
                                <div class="divider_line21 last"></div>
                                
                            </div><!-- end section -->
                    
                        
                        <?php
                        }
                        $count++;
                    }
                } else {

                }
                wp_reset_postdata();
                

            ?>
            
		</div>
    </div><!-- end all section -->
    
    
    <div class="one_half hpeosays animate" data-anim-type="fadeIn" data-anim-delay="700">
    	
        <h2 class="small"></h2>

        <div id="owl-demo3" class="owl-carousel small">
    
            <?php


                $args = array(
                    'post_type' => 'ri_testimonials',
                    'posts_per_page' => -1,
                );
                
                $testimonials = new WP_Query( $args );
                    
                $countnext = 1;

                if ( $testimonials->have_posts() ) {
                    while ( $testimonials->have_posts() ) {
                        $testimonials->the_post(); 

                        $url = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
                        $content = get_the_content();
                        $title = get_the_title(); 

                        if ($countnext % 2 !== 0)  {

                        ?>
                             
    
                            <div>
                                
                                <p><?php echo $content; ?></p>
                                
                                <div class="divider_line21 last"></div>
                                
                            </div><!-- end section -->
                    
                        
                        <?php
                        }
                        $countnext++;
                    }
                } else {

                }
                wp_reset_postdata();
                

            ?>
               
		</div>
	</div><!-- end all section -->
	
    
        
    
    </div><!-- end tabs section -->
     
</div>
</div><!-- end features section 3 -->

<div class="clearfix"></div>

<div class="feature_sec4">
<div class="container">
	
	<div class="title11">
    
    	<h2 class="small">Practice <strong>Areas</strong>
        <span class="line2"></span></h2>
        
	</div>
    
    <br />
    
    <div id="grid-container" class="cbp-l-grid-fullScreen smallthu">
    
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
            
                    $title = get_the_title(); 
                    $permalink = get_the_permalink();
                    $icon = get_field('ri_areas_icon', get_the_ID());

                    ?>

                     <li class="cbp-item">
                        <a href="<?php echo $permalink; ?>" class="cbp-caption">
                            <div class="cbp-caption-defaultWrap">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignLeft">
                                    <div class="cbp-l-caption-body">
                                        <div class="cbp-l-caption-title"><i class="fa fa-<?php echo $icon ?>"></i> <br /> <strong><?php echo $title; ?></strong></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>

                    <?php
            
                }
            } else {

            }
            wp_reset_postdata();

            ?>
               
        </ul>
    </div>
     
    <div class="cbp-l-loadMore-text">
        <div data-href="<?php bloginfo('template_url'); ?>ajax/loadMore.html" class="cbp-l-loadMore-text-link"></div>
    </div>
    
</div>
</div><!-- end features section 2 -->

<div class="clearfix"></div>

<?php get_footer(); ?>
