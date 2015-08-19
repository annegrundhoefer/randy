<?php get_header(); ?>

<div class="clearfix"></div>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="page_title2">
<div class="container">
	
    <h1><?php the_title(); ?></h1>
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="content_fullwidth">
	<div class="container">

	<div class="content_left">
        	
        <div class="blog_post">	
            <div class="blog_postcontent">
            <div class="image_frame">
            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
					<?php the_post_thumbnail(); // Fullsize image for the single post ?>
				</a>
			<?php endif; ?>
			</div>
            
             <div class="clearfix"></div>
            <p><?php the_content(); ?></p>
            </div>
        </div><!-- /# end post -->
            
            <div class="clearfix divider_line9 lessm"></div>

   <?php endwhile; ?>

		<?php else: ?>

			<?php endif; ?>
			</div>

			<div class="right_sidebar">

	<div class="sidebar_widget">
    
    	<div class="sidebar_title"><h4>Practice<i> Areas</i></h4></div>
		<ul class="arrows_list1">		
        <?php 

            $args = array(
                'post_type' => 'ri_areas',
                'posts_per_page' => '-1',
                'order' => 'ASC'
            );
            
            $areas = new WP_Query( $args );
            
            if ( $areas->have_posts() ) {
                while ( $areas->have_posts() ) {
                    $areas->the_post();
            
                    echo '<li><a href="#"><i class="fa fa-caret-right"></i> ' . get_the_title() . '</a></li>';
            
                }
            } else {
                    // no posts found
            }
            wp_reset_postdata();
            
        ?>
		</ul>
        
	</div><!-- end section -->
    
    
    
   
  </div>
</div><!-- end right sidebar -->
		</div>
	</div>



<?php get_footer(); ?>
