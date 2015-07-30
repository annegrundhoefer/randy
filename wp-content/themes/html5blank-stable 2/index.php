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
                $title = get_the_title();
                $desc = get_the_content();
                ?>
        
    
                        <div class="ms-slide slide-<?php echo $count ?>" data-delay="7">
         
                            <img src="<?php echo $url ?>" data-src="<?php echo $url ?>" alt="<?php echo $title ?>"/>     
                            
                             <img src="<?php echo $url ?>" data-src="<?php bloginfo('template_url'); ?>/images/rrr.jpg" alt="" class="ms-layer"
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
                            ><a href="#">Learn More</a></div>
                                    
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
        
    <h5>Get your Free Consultation <strong class="animate" data-anim-type="fadeIn" data-anim-delay="300">(214) 696-9253 </strong> Available 24/7 </h5>
    
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
        <span class="big_text1">Call Us Confidentially Now:</span> &nbsp;<span class="big_text1 color">(888) 123-456-7890</span>
        <br /><br />
        <div class="alicent"><img src="<?php bloginfo('template_url'); ?>/images/h-line10.png" alt="" /> <br /><br /> <div class="scriptfont">Randall Isenberg</div></div>

    </div><!-- end section -->
    
    <div class="one_third last animate" data-anim-type="fadeIn" data-anim-delay="200">
    
        <h2 class="small">Case <strong>Results</strong></h2>
        
        <div class="caseresult">
            <div class="inborder">
            
            <p><span class="big_text1">$4.9 billion</span> in verdicts and settlements over 35 years. Does not reflect adjustments for fees, costs, or medical liens.</p>
            
            <div class="divider_line22"></div>
            
            <p><span class="big_text1">$1 Million</span> Settlement; School Student Suffers Brain Injury in Truck-Auto Crash.</p>
            
            <div class="divider_line22"></div>
            
            <p><span class="big_text1">$3.75 Million</span> Undue Influence to Disabled Woman in her Estate Trust Decisions Results in Settlement.</p>
            
            <br /><br />
            
            <a href="#" class="button4"><strong>All Cases &amp; Results</strong></a>
            
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
    
            <div>
            
            <img src="http://placehold.it/116x126" alt="" />
                
                <p><strong>Lorem that more</strong> less normal distribution of letters as opposed to using content here content making it look like readable english many web page editors now used model structure looks Ipsum always and a of model sentence structures to generate which looks.</p>
                
                <b>- Ricky Holness, <em>additional info</em></b>
                
                <div class="divider_line21 last"></div>
                
            </div><!-- end section -->
            
            <div>
                <img src="http://placehold.it/116x126" alt="" />
            
            	<p><strong>Lorem that more</strong> less normal distribution of letters as opposed to using content here content making it look like readable english many web page editors now used model structure looks Ipsum always and a of model sentence structures to generate which looks.</p>
                
                <b>- Ricky Holness, <em>additional info</em></b>
                
                
                <div class="divider_line21 last"></div>
                
            </div><!-- end section -->
            
            <div>
                <img src="http://placehold.it/116x126" alt="" /> 

            	<p><strong>Lorem that more</strong> less normal distribution of letters as opposed to using content here content making it look like readable english many web page editors now used model structure looks Ipsum always and a of model sentence structures to generate which looks.</p>
                
                <b>- Ricky Holness, <em>additional info</em></b>
                
                
                <div class="divider_line21 last"></div>
                
            </div><!-- end section -->
            
            <div>
            
            	<img src="http://placehold.it/116x126" alt="" />
                
                <p><strong>Lorem that more</strong> less normal distribution of letters as opposed to using content here content making it look like readable english many web page editors now used model structure looks Ipsum always and a of model sentence structures to generate which looks.</p>
                
                <b>- Ricky Holness, <em>additional info</em></b>
                
                <div class="divider_line21 last"></div>
                
            </div><!-- end section -->
            
		</div>
    </div><!-- end all section -->
    
    
    <div class="one_half hpeosays animate" data-anim-type="fadeIn" data-anim-delay="700">
    	
        <h2 class="small"></h2>

        <div id="owl-demo3" class="owl-carousel small">
    
            <div>
            
            	<img src="http://placehold.it/116x126" alt="" />
                
                <p><strong>Lorem that more</strong> less normal distribution of letters as opposed to using content here content making it look like readable english many web page editors now used model structure looks Ipsum always and a of model sentence structures to generate which looks.</p>
                
                <b>- Ricky Holness, <em>additional info</em></b>
                
                <div class="divider_line21 last"></div>
                
            </div><!-- end section -->
            
            <div>
            
            	<img src="http://placehold.it/116x126" alt="" />
                
                <p><strong>Packages that</strong> less normal distribution of letters as opposed to using content here content making it look like readable english many web page editors now used model structure looks Ipsum always and a of model sentence structures to generate which looks.</p>
                
                <b>- Jean Desmond, <em>additional info</em></b>
                
                <div class="divider_line21 last"></div>
                
            </div><!-- end section -->
            
            <div>
            
            	<img src="http://placehold.it/116x126" alt="" />
                
                <p><strong>Apposed to using</strong> less normal distribution of letters as opposed to using content here content making it look like readable english many web page editors now used model structure looks Ipsum always and a of model sentence structures to generate which looks.</p>
                
                <b>- Devin Braedon, <em>additional info</em></b>
                
                <div class="divider_line21 last"></div>
                
            </div><!-- end section -->
            
            <div>
            
            	<img src="http://placehold.it/116x126" alt="" />
                
                <p><strong>Webpage editors</strong> less normal distribution of letters as opposed to using content here content making it look like readable english many web page editors now used model structure looks Ipsum always and a of model sentence structures to generate which looks.</p>
                
                <b>- Cason Harrison, <em>additional info</em></b>
                
                <div class="divider_line21 last"></div>
                
            </div><!-- end section -->
               
		</div>
	</div><!-- end all section -->
	
    
        
    
    </div><!-- end tabs section -->
     
</div>
</div><!-- end features section 3 -->

<div class="clearfix"></div>

<div class="feature_sec4">
<div class="container">
	
	<div class="title11">
    
    	<h2 class="white">Practice <strong>Areas</strong>
        <span class="line2"></span></h2>
        
	</div>
    
    <br />
    
    <div id="grid-container" class="cbp-l-grid-fullScreen smallthu">
    
        <ul>
        
            <li class="cbp-item">
                <a href="#" class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title"><i class="fa fa-briefcase"></i> <br /> <strong>Business &amp; Financial</strong></div>
                            </div>
                        </div>
                    </div>
                </a>
            </li><!-- end item -->
            
            <li class="cbp-item">
                <a href="#" class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title"><i class="fa fa-home"></i> <br /> <strong>Real Estate &amp; Land</strong></div>
                            </div>
                        </div>
                    </div>
                </a>
            </li><!-- end item -->
            
            <li class="cbp-item">
                <a href="#" class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title"><i class="fa fa-medkit"></i> <br /> <strong>Medical Malpractice</strong></div>
                            </div>
                        </div>
                    </div>
                </a>
            </li><!-- end item -->
            
            <li class="cbp-item">
                <a href="#" class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title"><i class="fa fa-car"></i> <br /> <strong>Vehicle Accidents</strong></div>
                            </div>
                        </div>
                    </div>
                </a>
            </li><!-- end item -->
            
            <li class="cbp-item">
                <a href="#" class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title"><i class="fa fa-users"></i> <br /> <strong>Family Law</strong></div>
                            </div>
                        </div>
                    </div>
                </a>
            </li><!-- end item -->
            
            <li class="cbp-item">
                <a href="#" class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title"><i class="fa fa-edit"></i> <br /> <strong>Premises Liability</strong></div>
                            </div>
                        </div>
                    </div>
                </a>
            </li><!-- end item -->
            
            <li class="cbp-item">
                <a href="#" class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title"><i class="fa fa-money"></i> <br /> <strong>Business &amp; Tax</strong></div>
                            </div>
                        </div>
                    </div>
                </a>
            </li><!-- end item -->
            
            <li class="cbp-item">
                <a href="#" class="cbp-caption">
                    <div class="cbp-caption-defaultWrap">
                    </div>
                    <div class="cbp-caption-activeWrap">
                        <div class="cbp-l-caption-alignLeft">
                            <div class="cbp-l-caption-body">
                                <div class="cbp-l-caption-title"><i class="fa fa-university"></i> <br /> <strong>Other Cases</strong></div>
                            </div>
                        </div>
                    </div>
                </a>
            </li><!-- end item -->
               
        </ul>
    </div>
     
    <div class="cbp-l-loadMore-text">
        <div data-href="<?php bloginfo('template_url'); ?>ajax/loadMore.html" class="cbp-l-loadMore-text-link"></div>
    </div>
    
</div>
</div><!-- end features section 2 -->


<div class="clearfix"></div>

<div class="feature_sec9">
<div class="container transpef">
	
    <div class="title11">
    	<h2 class="white">Need Legal Assistance - Do You Have a Claim?
        <em>Feel free to get in touch with any enquiries and one of our friendly members of staff will get back to you as soon as possible.</em>
        </h2>
	</div>
    
    <div class="cforms animate" data-anim-type="fadeIn" data-anim-delay="500">
        
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

<?php get_footer(); ?>
