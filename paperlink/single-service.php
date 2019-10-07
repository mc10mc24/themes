<?php
/**
/* Template Name: services Page
 *
 * Displays Only services template
 *
 * @package WordPress
 * @subpackage paperlink
 * @since paperlink 1.0
 */

 get_header(); ?>

  <?php
    // TO SHOW THE PAGE CONTENTS
    while ( have_posts() ) : the_post(); ?> 
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(<?php echo esc_url( get_template_directory_uri() ); ?>/images/background/2.jpg)">
    	<div class="auto-container">
        	<h1><?php the_title();?></h1>
            <ul class="bread-crumb clearfix">
                <li><a href="index.html">Home</a></li>
                <li class="active"><?php the_title();?></li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Sidebar Page Container-->
    <div class="sidebar-page-container">
    	<div class="auto-container">
        	<div class="row clearfix">
            	
                <!--Content Side / Blogs Single-->
                <div class="content-side col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="blog-single">
						<div class="inner-box">
                        	<div class="image">
                            	<?php 

                            $image = get_field('service_images');

                            if( !empty($image) ): ?>

                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                            <?php endif; ?>
                            </div>
                            <div class="lower-box">
                            	<ul class="info-box"></ul>
                                <h3><?php the_title();?></h3>
                                <div class="text">
                                	<p><?php the_content();?></p>
                                    
                                </div>
                                <!--post-share-options-->
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--End Sidebar Page Container-->
    
    <!--Subscribe Section-->
    <section class="subscribe-section grey-bg">
    	<div class="auto-container">
        	<div class="inner-section">
            	<div class="row clearfix">
                	<div class="title-column col-md-4 col-sm-12 col-xs-12">
                    	<h2>Subscribe to Newsletter</h2>
                    </div>
                    <div class="form-column col-md-8 col-sm-12 col-xs-12">
                    	
                        <!--Subscribe Section-->
                        <div class="subscribe-form">
                            <form method="post" action="http://t.commonsupport.com/calena/contact.html">
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
    
  <?php endwhile; ?>
  <?php get_footer(); ?>