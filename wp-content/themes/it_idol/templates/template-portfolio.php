 <?php
 /* Template Name: Portfolio Template */


 $pageId = get_the_ID();
 $siteLogoAttachment = get_post_meta( $pageId, 'site_details_logo', true ); /* Banner Get Attachment Id */
 $siteLogoImage = wp_get_attachment_url( $siteLogoAttachment ); 
 $recent1Attachment = get_post_meta( $pageId, 'recent_details_image1', true ); /* Recent1 Get Attachment Id */
 $recent1Image = wp_get_attachment_url( $recent1Attachment ); 
 $recent2Attachment = get_post_meta( $pageId, 'recent_details_image2', true ); /* Recent2 Get Attachment Id */
 $recent2Image = wp_get_attachment_url( $recent2Attachment ); 
 $responsivebgAttachment = get_post_meta( $pageId, 'responsive_background_image', true ); /* Responsive Background Attachment Id */
 $responsivebgImage = wp_get_attachment_url( $responsivebgAttachment ); 
 $responsiveBlogAttachment = get_post_meta( $pageId, 'responsive_blog_outer_image', true ); /* Responsive blog_outer Attachment Id */
 $responsiveblogImage = wp_get_attachment_url( $responsiveBlogAttachment ); 
 $responsiveBlogAttachment = get_post_meta( $pageId, 'responsive_blog_outer_image', true ); /* Responsive blog_outer Attachment Id */
 $responsiveblogImage = wp_get_attachment_url( $responsiveBlogAttachment ); 
 $facebookAttachment = get_post_meta( $pageId, 'responsive_social_facebook', true ); /* facebook Attachment */
 $facebookImage = wp_get_attachment_url( $facebookAttachment ); 
 $linkdinAttachment = get_post_meta( $pageId, 'responsive_social_linkdin', true ); /* linkdin Attachment */
 $linkdinImage = wp_get_attachment_url( $linkdinAttachment );
 $twitterAttachment = get_post_meta( $pageId, 'responsive_social_twitter', true ); /* twitter Attachment */
 $twitterImage = wp_get_attachment_url( $twitterAttachment );
 $instagramAttachment = get_post_meta( $pageId, 'responsive_social_insta', true ); /* instagram Attachment */
 $instagramImage = wp_get_attachment_url( $instagramAttachment );
 $homeUrl = home_url();
 $exploreButtonUrl = $homeUrl.'/'.get_post_meta(get_the_ID(), 'recent_details_button_url', true);
 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
      <?php echo get_bloginfo( 'name' ); ?>
  </title>
  <link rel="shortcut icon" href="<?php echo get_theme_mod( 'favicon_logo' ); ?>" />
  <?php wp_head(); ?>
</head> 
<div class="main_block">
    <div class="inner_main_block">
        <div class="portfolio_outer">
            <div class="container">
                <div class="up_block">
                    <div class="inner_block">
                        <div class="page_block">
                            <div class="explore_butn top">
                                <a href="<?php echo $exploreButtonUrl ?>"> 
                                    <button class="button btn-portfolio"><?php echo get_post_meta(get_the_ID(), 'recent_details_button_text', true); ?></button>
                                </a>
                            </div>
                            <div class="blue_line"></div>
                        </div>
                        <div class="upper_two_block">

                            <div class="logo_blog">

                                <div class="imge_block">
                                    <?php if($siteLogoImage){
                                        ?>
                                        <a href="<?php echo $homeUrl ?>"> <img class="img-fluid" alt="logo" data-aos="fade-up" src=<?php echo $siteLogoImage; ?>></a>
                                    <?php } ?>
                                </div>
                                <div class="mobile_number" data-aos="fade-down">
                                    <p><?php echo get_post_meta(get_the_ID(), 'site_details_contact_no', true); ?></p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="responsive_block ">
                            <div class="inner_responsive">
                                <div class="imge_block" style="background-image: url(<?php 
                                    if($responsivebgImage)
                                        echo $responsivebgImage; ?>);">
                                    <div class="responsive_contetn" data-aos="fade-up">
                                        <div class="inner_contetn">
                                            <div class="responsive_header">
                                                <h3><?php echo get_post_meta(get_the_ID(), 'responsive_title1', true); ?></h3>
                                            </div>
                                            <div class="content_text_responsive">
                                                <p><?php echo get_post_meta(get_the_ID(), 'responsive_description1', true); ?></p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="explore_butn top">
                                <a href="<?php echo $exploreButtonUrl ?>"> 
                                    <button class="button btn-portfolio"><?php echo get_post_meta(get_the_ID(), 'recent_details_button_text', true); ?></button>
                                </a>
                            </div>
                        </div>
                        <div class="recent_block section_spacing">
                            <div class="inner_recent_block">
                                <div class="three_block">
                                    <div class="first_block">
                                        <ul>
                                            <li data-aos="fade-down">
                                                <div class="squre_block">
                                                    <div class="header_text">
                                                        <p><?php echo get_post_meta(get_the_ID(), 'recent_details_title', true); ?></p>
                                                    </div>
                                                    <div class="content_detail">
                                                        <p><?php echo get_post_meta(get_the_ID(), 'recent_details_description', true); ?></p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li data-aos="fade-down">
                                                <div class="squre_block">
                                                    <?php if($recent1Image){
                                                        ?>
                                                        <img class="img-fluid" alt="detail_design" src=<?php echo $recent1Image; ?>>
                                                    <?php } ?>                                                    
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="secod_block">
                                        <ul>
                                            <li data-aos="fade-up">
                                                <div class="squre_block">
                                                    <?php if($recent2Image){
                                                        ?>
                                                        <img class="img-fluid" alt="detail_design" src=<?php echo $recent2Image; ?>>
                                                    <?php } ?>                                                     
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="explore_butn">
                                    <a href="<?php echo $exploreButtonUrl ?>"> 
                                        <button class="button btn-portfolio"><?php echo get_post_meta(get_the_ID(), 'recent_details_button_text', true); ?></button>
                                    </a>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                </div>



            </div>
            <div class="blog_outer_section ">
                <div class="blog_design section_spacing">
                        <!-- <div class="inner_blog">
                            <div class="two_block">
                                <div class="left_side w-lg-50 w-100">
                                    <div class="block_outer_design" data-aos="fade-up">
                                        <?php if($responsiveblogImage){
                                        ?>
                                        <img class="img-fluid" alt="blog" src=<?php echo $responsiveblogImage; ?>>
                                        <?php } ?>                                        
                                    </div>
                                </div>
                                <div class="right_side w-lg-50 w-100 mt-md-0 mt-3 ms-lg-3 ms-0">
                                    <div class="block_outer_design" data-aos="fade-down">
                                        <div class="blog_detai_content">
                                            <div class="header">
                                                <h4><?php echo get_post_meta(get_the_ID(), 'responsive_title2', true); ?></h4>
                                            </div>
                                            <p><?php echo get_post_meta(get_the_ID(), 'responsive_description2', true); ?></p>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="thanx_block">
                            <div class="thanku_block">
                                <div class="inner_thanku">
                                    <div class="inner_block" data-aos="fade-up">
                                        <h2><?php echo get_post_meta(get_the_ID(), 'responsive_thankyou', true); ?></h2>
                                    </div>
                                    <div class="social_block">
                                        <ul>
                                            <li data-aos="fade-down">
                                                <a href="<?php echo get_theme_mod( 'facebook_social_setting' ); ?>" target="_blank">
                                                    <div class="images_social"><img class="img-fluid" alt="social" src=<?php echo $facebookImage; ?>></div>
                                                </a>
                                            </li>
                                            <li data-aos="fade-up">
                                                <a href="<?php echo get_theme_mod( 'linkedin_social_setting' ); ?>" target="_blank">
                                                    <div class="images_social"><img class="img-fluid" alt="social" src=<?php echo $linkdinImage; ?>></div>
                                                </a>
                                            </li>
                                            <li data-aos="fade-down">
                                                <a href="<?php echo get_theme_mod( 'twitter_social_setting' ); ?>" target="_blank">
                                                    <div class="images_social"><img class="img-fluid" alt="social" src=<?php echo $twitterImage; ?>></div>
                                                </a>
                                            </li>
                                            <li data-aos="fade-up">
                                                <a href="<?php echo get_theme_mod( 'instagram_social_setting' ); ?>" target="_blank">
                                                    <div class="images_social"><img class="img-fluid" alt="social" src=<?php echo $instagramImage; ?>></div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="email_id">
                                <p><a href="mailto:<?php echo get_post_meta(get_the_ID(), 'recent_details_email', true); ?>"><?php echo get_post_meta(get_the_ID(), 'recent_details_email', true); ?></a></p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </html>

    <script>
        AOS.init({
            duration: 1000,
        });
    </script>
    <?php

?>