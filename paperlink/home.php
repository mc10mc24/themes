<?php
/**
/* Template Name: Home Page
 *
 * Displays Only home template
 *
 * @package WordPress
 * @subpackage paperlink
 * @since paperlink 1.0
 */

 get_header(); ?>
    
    <!--Main Slider-->
    <section class="main-slider">
    	
        <div class="rev_slider_wrapper fullwidthbanner-container"  id="rev_slider_one_wrapper" data-source="gallery">
            <div class="rev_slider fullwidthabanner" id="rev_slider_one" data-version="5.4.1">
                <ul>
                	


            <?php  $posts = new WP_Query( array( 'post_type' => 'slider' , 'order' => 'ASC' ) );
            while($posts->have_posts()) : $posts->the_post(); ?>

             <li data-description="Slide Description" data-easein="default" data-easeout="default" data-fsmasterspeed="1500" data-fsslotamount="7" data-fstransition="fade" data-hideafterloop="0" data-hideslideonmobile="off" data-index="rs-1688" data-masterspeed="default" data-param1="" data-param10="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-rotate="0" data-saveperformance="off" data-slotamount="default" data-thumb="images/main-slider/image-3.jpg" data-title="Slide Title" data-transition="parallaxvertical">
                    <img alt="" class="rev-slidebg" data-bgfit="cover" data-bgparallax="10" data-bgposition="center center" data-bgrepeat="no-repeat" data-no-retina="" src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>"> 
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['700','800','700','500']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-90','-100','-90','-80']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;text-transform:left;">
                    	<div class="title light text-center"><?php the_title();?></div>
                    </div>
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['900','800','800','500']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['-20','-20','-30','-20']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[-100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;text-transform:left;">
                    	<div class="text-center"><h1 class="light"><?php the_content();?></h1></div>
                    </div>
                    
                    <div class="tp-caption" 
                    data-paddingbottom="[0,0,0,0]"
                    data-paddingleft="[0,0,0,0]"
                    data-paddingright="[0,0,0,0]"
                    data-paddingtop="[0,0,0,0]"
                    data-responsive_offset="on"
                    data-type="text"
                    data-height="none"
                    data-width="['800','800','680','500']"
                    data-whitespace="normal"
                    data-hoffset="['0','0','0','0']"
                    data-voffset="['70','60','40','50']"
                    data-x="['center','center','center','center']"
                    data-y="['middle','middle','middle','middle']"
                    data-textalign="['top','top','top','top']"
                    data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;","mask":"x:0px;y:0px;s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":1000,"ease":"Power3.easeInOut"},{"delay":"wait","speed":1000,"to":"auto:auto;","mask":"x:0;y:0;s:inherit;e:inherit;","ease":"Power3.easeInOut"}]'
                    style="z-index: 7; white-space: nowrap;text-transform:left;">
                    	<div class="text-center">
                    		<a href="#" class="text">learn more</a>
                        </div>
                    </div>
                    
                    </li>
                    <?php endwhile; ?>
                
                    
                </ul>
            </div>
        </div>
    </section>
    <!--End Main Slider-->
    
    <!--Services Section-->
    <section class="services-section">
    	<div class="auto-container">
        	
            <!--Section Title-->
        	<div class="sec-title centered">
            	<h2>Designed to Make Your Portfolio Look More <span>Powerful</span></h2>
                <div class="text big-text">Our team integrates the core values of quality, honesty and competency which enables us to cater to worldwide customers. We serve our client passionately. We are always looking for growth this we don’t constrain ourselves with standard procedures.</div>
                <div class="logo-separator">paperlink</div>
            </div>
            
            <div class="row clearfix">
            	<!--Services Block Two-->
            	<div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-desktop"></span>
                        </div>
                        <h3><a href="#">design features</a></h3>
                        <div class="text">Adipisicing consectetur elitsd eiusmod temp dolore magna min veniam quis nosar exercitation ullam lab aliquip  uased consequat duis.</div>
                    </div>
                </div>
                
                <!--Services Block Two-->
            	<div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-interface-2"></span>
                        </div>
                        <h3><a href="#">quick support</a></h3>
                        <div class="text">Adipisicing consectetur elitsd eiusmod temp dolore magna min veniam quis nosar exercitation ullam lab aliquip  uased consequat duis.</div>
                    </div>
                </div>
                
                <!--Services Block Two-->
            	<div class="services-block-two col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<div class="icon-box">
                        	<span class="icon flaticon-correct"></span>
                        </div>
                        <h3><a href="#">expert services</a></h3>
                        <div class="text">Adipisicing consectetur elitsd eiusmod temp dolore magna min veniam quis nosar exercitation ullam lab aliquip  uased consequat duis.</div>
                    </div>
                </div>
                
            </div>
            <br><br>
            <!--Services Block Three-->
            <div class="services-block-three">
            	<div class="inner-box">

            <?php  $posts = new WP_Query( array( 'post_type' => 'Strategy' , 'order' => 'ASC' ) );
            while($posts->have_posts()) : $posts->the_post(); ?>
                	<div class="row clearfix">
                    	<!--Content Column-->
                    	<div class="content-column col-md-6 col-sm-12 col-xs-12">
                        	<div class="inner-column">
                            	<h2>Our <span><?php the_title();?></span></h2>
                                <div class="text"><?php the_content();?></div>
                            </div>
                        </div>
                        <!--Image Column-->
                    	<div class="image-column col-md-6 col-sm-12 col-xs-12">
                        	<div class="image">
                            	<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>" alt="" />
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                </div>
            </div>
            
            <!--Services Block Four-->
            <div class="services-block-four">
            	<div class="inner-box">
                	<div class="row clearfix">
                    	<!--Content Column-->
                    	<div class="content-column pull-right col-md-6 col-sm-12 col-xs-12">
                        	<div class="inner-column">
                            	<h2>How We <span>Work</span></h2>
                                <div class="text">We develop custom responsive websites and apps which in turn help us to meet qualified leads and generate greater brand awareness for our clients.As a graphic design company we are providing UI/UX,Logo,Landing page,Graphic designing service.</div>
                            </div>
                        </div>
                        <!--Image Column-->
                    	<div class="image-column pull-left col-md-6 col-sm-12 col-xs-12">
                        	<div class="image">
                            	<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/resource/services-2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <!--End Services Section-->
    
    
    
    
    <!--We Do Section-->
    <section class="we-do-section grey-bg">
        <div class="auto-container">
            <div class="row clearfix">
                <!--Title Column-->
                <div class="title-column col-md-4 col-sm-12 col-xs-12">
                    <div class="sec-title">
                        <h2>Our <span>Services</span></h2>
                    </div>
                    <div class="text">Adipisicing consectetur elitsd eiusmod tempor cid dolore magna aliqua enimad min veniam quis nosar exercitation ullamco laboris aliquip  comdo ruesed consequat ipsum duis aute dolor.</div>
                    <a href="about.html" class="theme-btn btn-style-one">view more</a>
                </div>
                <!--Services Column-->
                <div class="services-column col-md-8 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="row clearfix">
                         <?php  $posts = new WP_Query( array( 'post_type' => 'service' , 'order' => 'ASC' ) );
                            while($posts->have_posts()) : $posts->the_post(); ?>
                            <div class="services-block col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <a href="<?php the_permalink();?>" class="overlay-link"></a>
                                    <div class="icon-box">
                                       <!--  <span class="icon flaticon-layers-1"></span> -->
                                       <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'full' ); ?>">
                                    </div>
                                    <h3><?php the_title();?></h3>
                                </div>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End We Do Section-->


    <!--Project Section-->
    <section class="project-section">
        <div class="auto-container">
            <!--Section Title-->
              <div class="sec-title centered">
                    <h2>Our <span>Projects</span></h2>
                </div>
            
            <!--MixitUp Galery-->
            <div class="mixitup-gallery">     
                
                <div class="filter-list row clearfix">
                    
                    <!--Gallery Block-->
                    <div class="gallery-block mix all col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/1.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="#" class="icon"><span class="fa fa-link"></span></a>
                                            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/1.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block mix coaching business all col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/2.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="#" class="icon"><span class="fa fa-link"></span></a>
                                            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/2.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block mix all investment col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/3.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="#" class="icon"><span class="fa fa-link"></span></a>
                                            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/3.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block mix all financial col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/4.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="#" class="icon"><span class="fa fa-link"></span></a>
                                            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/4.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block mix coaching financial investment all col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/5.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="#" class="icon"><span class="fa fa-link"></span></a>
                                            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/5.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                    <!--Gallery Block-->
                    <div class="gallery-block mix all business financial col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="inner-box">
                            <figure class="image-box">
                                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/6.jpg" alt="">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="content">
                                            <a href="#" class="icon"><span class="fa fa-link"></span></a>
                                            <a href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/gallery/6.jpg" class="icon image-link lightbox-image" data-fancybox-group="example-gallery" title=""><span class="fa fa-search"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </figure>
                        </div>
                    </div>
                    
                </div>
            </div>
            <br>
            <div class="text-center">
                <a href="#" class="theme-btn btn-style-three">view more</a>
            </div>
            
        </div>
    </section>
    <!--End Project Section-->
    
    <!--Counter Section Two-->
    <section class="counter-section-two" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/background/1.jpg)">
    	<div class="auto-container">
        	<div class="fact-counter">
                <div class="row clearfix">
                
                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="3000" data-stop="167">0</span>
                            </div>
                            <h4 class="counter-title">Projects Launched</h4>
                        </div>
                    </div>
            
                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="2000" data-stop="24">0</span>
                            </div>
                            <h4 class="counter-title">Work With Companys</h4>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="4000" data-stop="500">0</span>
                            </div>
                            <h4 class="counter-title">Clients Worldwide</h4>
                        </div>
                    </div>
                    
                    <!--Column-->
                    <div class="column counter-column col-md-3 col-sm-6 col-xs-12">
                        <div class="inner">
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="13">0</span>
                            </div>
                            <h4 class="counter-title">Years Experience</h4>
                        </div>
                    </div>
            
                </div>
            </div>
        </div>
    </section>
    <!--End Counter Section Two-->
     <section class="project-section">
        <div class="container">
            <div class="sec-title centered">
                <h2>Our  <span>Process</span></h2>
            </div>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/ourprocesss.jpg">
        </div>
    </section>
    
   <!--Testimonial Section-->
    <section class="testimonial-section grey-bg">
        <div class="auto-container">
            <div class="sec-title centered">
                <h2>What <span>People</span> Say</h2>
            </div>
            <div class="single-item-carousel owl-carousel owl-theme">
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">Amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                        
                        <div class="designation">Chris A. beker <span>[CEO - NovaWorks]</span></div>
                    </div>
                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">Amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                        
                        <div class="designation">Chris A. beker <span>[CEO - NovaWorks]</span></div>
                    </div>

                </div>
                
                <!--Testimonial Block-->
                <div class="testimonial-block">
                    <div class="inner-box">
                        <div class="text">Amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</div>
                        
                        <div class="designation">Chris A. beker <span>[CEO - NovaWorks]</span></div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--End Testimonial Section-->
    
   



    <!--Subscribe Section-->
    <section class="subscribe-section">
    	<div class="">
        	<div class="inner-section">
            	<div class="row clearfix">
                	<div class="title-column col-md-4 col-sm-12 col-xs-12">
                    	<h2>Subscribe to Newsletter</h2>
                    </div>
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    	
                        <!--Subscribe Section-->
                        <div class="subscribe-form">
                            <form method="post" action="">
                                <div class="row clearfix">
                                    <!--Column-->
                                    <div class="column col-md-9 col-sm-12 col-xs-12">
                                        <div class="row clearfix">
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" name="name" value="" placeholder="Your Name" required>
                                            </div>
                                            <div class="form-group col-md-6 col-sm-6 col-xs-12">
                                                <input type="email" name="email" value="" placeholder="Email address" required>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Column-->
                                    <div class="column col-md-3 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-style-one">subscribe</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End Subscribe Section-->
    
<?php get_footer(); ?>