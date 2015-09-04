<?php /* Template Name: Results Page */ get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="clearfix"></div>

<div class="page_title2">
<div class="container">
	
    <h1><?php echo get_the_title(); ?></h1>
    
</div>
</div><!-- end page title --> 

<div class="clearfix"></div>

<div class="content_fullwidth">
<div class="container">

        <div class="tabs-content">
        
            <div id="demo-tab-1" class="tabs-panel bgimg1">
	
    <p class="big_text3"><?php echo get_the_content(get_the_ID()); ?></p>
   
 
    	</div><!-- end all tabs -->

        
		<div class="clearfix divider_line10"></div>
    
    	<ul class="tabs2">

            <?php 

            $idObj = get_category_by_slug('topic'); 
            $id = $idObj->term_id;

            $args = array(
                'type'                     => 'post',
                'child_of'                 => $id,
                'parent'                   => $id,
                'orderby'                  => 'name',
                'order'                    => 'ASC',
                'hide_empty'               => 0,
                'hierarchical'             => 1,
                'exclude'                  => '',
                'include'                  => '',
                'number'                   => '',
                'taxonomy'                 => 'category',
                'pad_counts'               => false 

            ); 
            
            $categories = get_categories( $args );

            $count = 1;
            foreach ($categories as $category) {
                echo '<li><a href="#example-2-tab-' . $count . '" target="_self">' . $category->cat_name . '</a></li>';
                $count++;
            }

            ?>

        </ul>
        
        <div class="tabs-content2 fullw">
            <div class="viewall">
            <a href="#" target="_blank"><span class="big_text1 color">View All Results</span></a>
            </div>

        <?php 

            $newCount = 1;

            foreach ($categories as $cat) {
                echo '<div id="example-2-tab-' . $newCount . '" class="tabs-panel2">';
                echo '<table><tbody>';
                $newCount++;

                $monthIdObj = get_category_by_slug('dates'); 
                $date_id = $monthIdObj->term_id;

                $args = array(
                    'type'                     => 'post',
                    'child_of'                 => $date_id,
                    'parent'                   => $date_id,
                    'orderby'                  => 'name',
                    'order'                    => 'ASC',
                    'hide_empty'               => 0,
                    'hierarchical'             => 1,
                    'exclude'                  => '',
                    'include'                  => '',
                    'number'                   => '',
                    'taxonomy'                 => 'category',
                    'pad_counts'               => false 

                ); 
                
                $years = get_categories( $args );



                foreach ($years as $year) {
                    
                    $yearId = $year->term_id;

                    $args = array(
                        'type'                     => 'post',
                        'child_of'                 => $yearId,
                        'parent'                   => $yearId,
                        'orderby'                  => 'name',
                        'order'                    => 'ASC',
                        'hide_empty'               => 0,
                        'hierarchical'             => 1,
                        'exclude'                  => '',
                        'include'                  => '',
                        'number'                   => '',
                        'taxonomy'                 => 'category',
                        'pad_counts'               => false 

                    ); 
                    
                    $months = get_categories( $args );

                    foreach ($months as $month) {

                        if ($month->cat_name == 'January') {
                            echo '<div class="third">';
                        }

                        if ($month->cat_name == 'May') {
                            echo '</div><div class="third">';
                        }

                        if ($month->cat_name == 'September') {
                            echo '</div><div class="third">';
                        }

                        
                        
                            echo '<h3 style="margin-bottom: 8px; margin-top: 32px;">' . $month->cat_name . ' ' . $year->cat_name . '</h3>';

                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => '-1',
                                'category__and' => array($month->term_id, $year->term_id, $cat->term_id),
                                'order' => 'DESC'
                            );
                            
                            $results = new WP_Query( $args );

                            if ( $results->have_posts() ) {
                                while ( $results->have_posts() ) {
                                    $results->the_post();
                                    
                                    echo '<p>' . get_the_title() . '<br>';
                                }
                            } else {
                                    // no posts found
                            }
                            wp_reset_postdata();

                            echo '</p>';
                       
                    }


                    echo '</div>';

                }


                echo '</tbody></table>';
                echo '</div>';

            }

            
        ?>

        </div><!-- end all tabs -->
        </div>
        
    
</div>
</div><!-- end content area -->


 <?php endwhile; ?>

<?php else: ?>
<?php endif; ?>

<?php get_footer(); ?>