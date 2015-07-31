<?php /* Template Name: Practice Areas Page */ get_header(); ?>

<div class="clearfix"></div>

<div class="page_title2">
<div class="container">
	
    <h1>Practice Areas</h1>
    
     
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="feature_sec4 two">
<div class="container">
	
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
        <div data-href="ajax/loadMore.html" class="cbp-l-loadMore-text-link"></div>
    </div>
    
</div>
</div>



<?php get_footer(); ?>