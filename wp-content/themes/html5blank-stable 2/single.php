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
            <h3><?php the_title(); ?></h3>
             <div class="clearfix"></div>
             <div class="margin_top1"></div>
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
            <li><a href="#"><i class="fa fa-caret-right"></i> Economics</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Social Media</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Economics</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Online Gaming</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Entertainment</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Technology</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Make Money Online</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Photography</a></li>
            <li><a href="#"><i class="fa fa-caret-right"></i> Web Tutorials</a></li>
		</ul>
        
	</div><!-- end section -->
    
    
    
    <div class="clearfix margin_top4"></div>
    
    <div class="clientsays_widget">
    
    	<div class="sidebar_title"><h4>Our <i>Clients</i></h4></div>
        
        <img src="http://placehold.it/50x50" alt="" />
			<strong>- Michle Siminson</strong><p>Lorem Ipsum passage, and going through the cites of the word here classical literature passage discovere there undou btable source looks reasonable the generated charac eristic words.</p>  
                
	</div><!-- end section -->
  </div>
</div><!-- end right sidebar -->
		</div>
	</div>



<?php get_footer(); ?>
