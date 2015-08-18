<?php /* Template Name: Generic Page */ get_header(); ?>



<div class="clearfix"></div>

<div class="page_title2">
<div class="container">
    
    <h1><?php echo get_the_title(); ?></h1>
     
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="content_fullwidth less">
<div class="container">
    
    <div class="divider_line1"></div>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>

            <!-- article -->
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

               <?php the_content(); ?>

            </article>
            <!-- /article -->

        <?php endwhile; ?>

        <?php else: ?>


        <?php endif; ?>

        <!-- /section -->

    </div>
    </div>



<?php get_footer(); ?>
