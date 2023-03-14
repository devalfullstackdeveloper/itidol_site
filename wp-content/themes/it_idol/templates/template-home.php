<?php
/* Template Name: Home Template */
get_header();
//$exploreUrlLink =  BASEURL.'/'.get_post_meta(get_the_ID(), 'explore_url', true);
$baseurl=  home_url(); 

$pageId = get_the_ID();
$bannerAttachment = get_post_meta( $pageId, 'Banner_banner_image', true ); /* Banner Get Attachment Id */
$bannerImage = wp_get_attachment_url( $bannerAttachment ); 
$banner_videoAttachment = get_post_meta( $pageId, 'Banner_banner_video', true ); /* Banner Get Attachment Id */
$banner_video_url = wp_get_attachment_url( $banner_videoAttachment ); 

$service1Attachment = get_post_meta( $pageId, 'Service 1_service_image', true ); /* Service 1 Get Attachment Id */
$service1Image = wp_get_attachment_url( $service1Attachment ); 
$service2Attachment = get_post_meta( $pageId, 'Service 2_service_image', true ); /* Service 2 Get Attachment Id */
$service2Image = wp_get_attachment_url( $service2Attachment );
$service3Attachment = get_post_meta( $pageId, 'Service 3_service_image', true ); /* Service 3 Get Attachment Id */
$service3Image = wp_get_attachment_url( $service3Attachment );
$service4Attachment = get_post_meta( $pageId, 'Service 4_service_image', true ); /* Service 4 Get Attachment Id */
$service4Image = wp_get_attachment_url( $service4Attachment );
$frameAttachment = get_post_meta( $pageId, 'frame_image', true ); /* Service 4 Get Attachment Id */
$frameImage = wp_get_attachment_url( $frameAttachment );

/* Card 1 */
$card1Attachment = get_post_meta( $pageId, 'Crad 1_card_1_image1', true ); 
$card1Image = wp_get_attachment_url( $card1Attachment ); 
$card2Attachment = get_post_meta( $pageId, 'Crad 1_card_1_image2', true ); 
$card2Image = wp_get_attachment_url( $card2Attachment );
/* Card 2 */
$card2Attachment_1 = get_post_meta( $pageId, 'Card 2_card_2_image1', true ); 
$card2Image_1 = wp_get_attachment_url( $card2Attachment_1 );
$card2Attachment_2 = get_post_meta( $pageId, 'Card 2_card_2_image2', true ); 
$card2Image_2 = wp_get_attachment_url( $card2Attachment_2 );
/* Card 3*/
$card3Attachment_1 = get_post_meta( $pageId, 'Card 3_card_3_image1', true );
$card3Image_1 = wp_get_attachment_url( $card3Attachment_1 );
$card3Attachment_2 = get_post_meta( $pageId, 'Card 3_card_3_image2', true ); 
$card3Image_2 = wp_get_attachment_url( $card3Attachment_2 );
$card3Attachment_3 = get_post_meta( $pageId, 'Card 3_card_3_image_3', true ); 
$card3Image_3 = wp_get_attachment_url( $card3Attachment_3 );
$card3Attachment_4 = get_post_meta( $pageId, 'Card 3_card_3_image_4', true ); 
$card3Image_4 = wp_get_attachment_url( $card3Attachment_4 );
/* Card 4*/
$card4Attachment_1 = get_post_meta( $pageId, 'Card 4_card_4_image1', true );
$card4Image_1 = wp_get_attachment_url( $card4Attachment_1 );
$card4Attachment_2 = get_post_meta( $pageId, 'Card 4_card_4_image2', true ); 
$card4Image_2 = wp_get_attachment_url( $card4Attachment_2 );

/* Expertise */
/* E-COMMERCE */
$shopyAttachment = get_post_meta( $pageId, 'E-Commerce_image1', true ); 
$shopyImage = wp_get_attachment_url( $shopyAttachment ); 
$prestaAttachment = get_post_meta( $pageId, 'E-Commerce_image2', true ); 
$prestaImage = wp_get_attachment_url( $prestaAttachment );
$vtechAttachment = get_post_meta( $pageId, 'E-Commerce_image3', true ); 
$vtechImage = wp_get_attachment_url( $vtechAttachment );
$wooAttachment = get_post_meta( $pageId, 'E-Commerce_image4', true ); 
$wooImage = wp_get_attachment_url( $wooAttachment );
$magentoAttachment = get_post_meta( $pageId, 'E-Commerce_image5', true );
$magentoImage = wp_get_attachment_url( $magentoAttachment );

/* Mobile App*/
$androidAttachment = get_post_meta( $pageId, 'Mobile_image1', true ); 
$androidImage = wp_get_attachment_url( $androidAttachment ); 
$reactAttachment = get_post_meta( $pageId, 'Mobile_image2', true ); 
$reactImage = wp_get_attachment_url( $reactAttachment );
$roundAttachment = get_post_meta( $pageId, 'Mobile_image3', true ); 
$roundImage = wp_get_attachment_url( $roundAttachment );
$apleAttachment = get_post_meta( $pageId, 'Mobile_image4', true ); 
$apleImage = wp_get_attachment_url( $apleAttachment );
$arrwAttachment = get_post_meta( $pageId, 'Mobile_image5', true );
$arrwImage = wp_get_attachment_url( $arrwAttachment );

/* Technologies*/
$druplAttachment = get_post_meta( $pageId, 'Technologies_image_1', true ); 
$druplImage = wp_get_attachment_url( $druplAttachment ); 
$htmlAttachment = get_post_meta( $pageId, 'Technologies_image_2', true ); 
$htmlImage = wp_get_attachment_url( $htmlAttachment );
$phpAttachment = get_post_meta( $pageId, 'Technologies_image_3', true ); 
$phpImage = wp_get_attachment_url( $phpAttachment );
$jsAttachment = get_post_meta( $pageId, 'Technologies_image_4', true ); 
$jsImage = wp_get_attachment_url( $jsAttachment );
$angulrAttachment = get_post_meta( $pageId, 'Technologies_image_5', true );
$angulrImage = wp_get_attachment_url( $angulrAttachment );

?>
<!-- Banner section start -->
<div class="banner_section_outer">
  <div class="banner_top_images">
     <div class="banner_top_images"> 
      <video controls class="banner_top_images"  loop="true" autoplay="autoplay" controls muted>
        <source src="<?php  echo $banner_video_url; ?>" type="video/mp4">                      
      </video> 
     </div>
      </div>
    <div class="banner_section">
        <div class="your_goals">
          <?php
          $Banner_banner_discription = get_post_meta(get_the_ID(), 'Banner_banner_discription', true);
          if($Banner_banner_discription)
           echo get_post_meta(get_the_ID(), 'Banner_banner_discription', true); ?>
         <a  href="<?php echo $baseurl.'/#contact-form'; ?>" >
          <button class="button btn-light" data-aos="fade-up" data-aos-duration="3000"><?php echo get_post_meta(get_the_ID(), 'Banner_banner_button', true); ?><span><img
            class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home_page/Vector.png" alt="arrow"></span>
          </button>
        </a>
    </div>
  </div>
  <div class="overlay d-md-none"></div>
</div>
<!-- Banner section end -->
  <!-- Service section start -->
  <div class="application_web section_spacing">
    <div class="inner_app_web">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="d-flex" data-aos="fade-up">
              <div class="left">
                <div class="image_block">
                  <?php if($service1Image){
                    ?>
                    <img class="img-fluid" alt="image" src=<?php echo $service1Image; ?>>
                  <?php }?>
                </div>
              </div>
              <div class="right">
                <div class="hexagonal">
                  <div class="hexagon_one"></div>
                  <div class="hexagon_two"></div>
                  <div class="hexagon_three"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content_web" data-aos="fade-down">
              <div class="content_header">
                <h3><?php echo get_post_meta(get_the_ID(), 'Service 1_service_title', true); ?></h3>
              </div>
              <div class="content_detail">
                <p><?php echo get_post_meta(get_the_ID(), 'Service 1_service_description', true); ?></p>
              </div>
              <div class="hexagon_four"></div>
              <div class="list_of_language">
                <?php 
                $service1 = str_replace(BASEURL,home_url(),get_post_meta(get_the_ID(), 'Service 1_service_framework', true));
                
                ?>
                <?php //echo get_post_meta(get_the_ID(), 'Service 1_service_framework', true); ?>
                <?php echo $service1; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="application_web section_spacing mobile_app">
    <div class="inner_app_web">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-6 order-md-1 order-sm-2">
            <div class="content_web" data-aos="fade-up">
              <div class="content_header">
                <h3><?php echo get_post_meta(get_the_ID(), 'Service 2_service_title', true); ?></h3>
              </div>
              <div class="content_detail">
                <p><?php echo get_post_meta(get_the_ID(), 'Service 2_service_description', true); ?></p>
              </div>
              <div class="hexagon_four"></div>
              <!-- <div class="list_of_language">
                <?php echo get_post_meta(get_the_ID(), 'Service 2_service_framework', true); ?>
              </div> -->
              <div class="list_of_language">
                <?php 
                $service1 = str_replace(BASEURL,home_url(),get_post_meta(get_the_ID(), 'Service 2_service_framework', true));
                
                ?>
                <?php //echo get_post_meta(get_the_ID(), 'Service 1_service_framework', true); ?>
                <?php echo $service1; ?>
              </div>
            </div>
          </div>
          <div class="col-md-6 order-md-2 order-sm-1">
            <div class="outer_block" data-aos="fade-down">
              <div class="left">
                <div class="image_block">
                  <?php if($service2Image){
                    ?>
                    <img class="img-fluid" alt="image" src=<?php echo $service2Image; ?>>
                  <?php }?>                
                </div>
                <div class="lihg_pink_shadow"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="blue_shadow"></div>
      </div>
    </div>
  </div>

  <div class="application_web section_spacing app">
    <div class="inner_app_web">
      <div class="container position-relative">
        <div class="row">
          <div class="col-md-6">
            <div class="outer_block" data-aos="fade-down">
              <div class="left">
                <div class="image_block">
                  <?php if($service3Image){
                    ?>
                    <img class="img-fluid" alt="image" src=<?php echo $service3Image; ?>>
                  <?php }?>                
                </div>
                <div class="lihg_pink_shadow"></div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content_web" data-aos="fade-up">
              <div class="content_header">
                <h3><?php echo get_post_meta(get_the_ID(), 'Service 3_service_title', true); ?></h3>
              </div>
              <div class="content_detail">
                <p><?php echo get_post_meta(get_the_ID(), 'Service 3_service_description', true); ?></p>
              </div>

              <!-- <div class="list_of_language">
               <?php echo get_post_meta(get_the_ID(), 'Service 3_service_framework', true); ?>
             </div> -->
             <div class="list_of_language">
                <?php 
                $service1 = str_replace(BASEURL,home_url(),get_post_meta(get_the_ID(), 'Service 3_service_framework', true));
                
                ?>
                <?php //echo get_post_meta(get_the_ID(), 'Service 1_service_framework', true); ?>
                <?php echo $service1; ?>
              </div>
           </div>
         </div>
       </div>
       <div class="blue_shadow"></div>
     </div>
   </div>
 </div>

 <div class="application_web section_spacing about">
  <div class="inner_app_web">
    <div class="container position-relative">
      <div class="row">
        <div class="col-md-6 order-md-1 order-sm-2">
          <div class="content_web" data-aos="fade-down">
            <div class="content_header">
              <h3><?php echo get_post_meta(get_the_ID(), 'Service 4_service_title', true); ?></h3>
            </div>
            <div class="content_detail">
              <p><?php echo get_post_meta(get_the_ID(), 'Service 4_service_description', true); ?></p>
            </div>
            <div class="learn_more">
              <a href="<?php echo home_url().'/'.get_post_meta(get_the_ID(), 'Service 4_service_button_url', true);?>">
                <button  class="button btn-primary"><?php echo get_post_meta(get_the_ID(), 'Service 4_service_button', true); ?></button>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6 order-md-2 order-sm-1">
          <div class="outer_block" data-aos="fade-up">
            <div class="left">
              <div class="image_block somthing_about">
                <?php if($service4Image){
                  ?>
                  <img class="img-fluid" alt="image" src=<?php echo $service4Image; ?>>
                <?php } ?>                
              </div>
              <div class="angle_shadow"></div>
              <div class="block_dotted">
                <img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/images/home_page/Framee.png" alt="image" >
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="blue_shadow"></div>
    </div>
  </div>
</div>
<!-- Service section end -->

<!-- Our Expertise start -->


<!-- Second Our Expertise section -->
<?php 
$args = array(
  'post_type' => 'service',
  'post_status' => 'publish',
  'order' => 'ASC',
);
$query = new WP_Query($args);          
?>

<div class="second_expert_block section_spacing">

  <div class="main_heading">
    <h2>Our Expertise </h2>
  </div>
  <div class="inner_expert_block">
    <div class="container-fluid">
      <div class="slick-carouseles">

        <?php                                                            
        while ( $query->have_posts() ) : $query->the_post();
          $id = $query->post->ID;
          //$content = wp_trim_words( get_the_content(), 40, '...' );
          $serviceTagline = get_post_meta( $id , 'service_tagline', true );
          $pageId = get_the_ID();
          $logoAttachment = get_post_meta( $pageId, 'logo', true ); /* logo Attachment Id */
          $logoImage = wp_get_attachment_url( $logoAttachment );
          ?>
            <div>
                 <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                    <div class="image_block">
                      <?php if($logoImage){                                                              
                  ?>
                  <img class="img-fluid" src="<?php  echo $logoImage; ?>" alt="images">                            
                <?php } ?> 
                      
                    </div>
                    <div class="content_block <?php echo get_post_meta(get_the_ID(), 'service_name', true); ?>">
                        <h5><?php the_title(); ?></h5>
                        <p><?php echo $serviceTagline; ?></p>
                         <div class="read_mor">
                          <a class="button btn_readmore" href="<?php the_permalink(); ?>">Read More</a>
                         </div>
                      </div>
                   </div>
                </div>
             
       
          <?php   
        endwhile;
        ?>        
      </div>
    </div>
  </div>
</div>


<!-- Feedback section start -->
<div class="testimonial">
  <div class="inner_testimonial">
    <div class="container">
      <div class="leaves">
        <!-- <img class="img-fluid" src="assets/images/home_page/leav.png" alt="leave"> -->
        <div class="three_leavs">
          <img class="img-fluid img1" src="<?php echo get_template_directory_uri(); ?>/assets/images/home_page/orange-leavs.png" alt="leave"
          data-aos="fade-down-right" data-aos-duration="1000">
          <img class="img-fluid img2" src="<?php echo get_template_directory_uri(); ?>/assets/images/home_page/yellow-leavs.png" alt="leave"
          data-aos="flip-up" data-aos-duration="1000">
          <img class="img-fluid img3" src="<?php echo get_template_directory_uri(); ?>/assets/images/home_page/blue-leavs.png" alt="leave"
          data-aos="fade-down-left" data-aos-duration="1000">
        </div>
      </div>
      <?php
      $args = array(
        'post_type' => 'feedback',
      );
      $feedbackQuery = new WP_Query($args);
      ?>
      <div class="slick-testimonial">
        <?php
        while ($feedbackQuery->have_posts()) : $feedbackQuery->the_post();
          ?>
          <div>
            <div class="slide_block text-center">
              <p><?php echo get_post_meta($post->ID, 'feedback_message', true); ?></p>
              <h4><?php echo get_post_meta($post->ID, 'feedback_author', true); ?></h4>
            </div>
          </div>
          <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </div>
    </div>
  </div>
</div>
<!-- Feedback section end -->

<!-- Query contact form shortcode -->


<script>
  //document.getElementById("defaultOpen").click();
  AOS.init({
    duration: 1000,
  });
</script>
<?php

get_footer();
?>