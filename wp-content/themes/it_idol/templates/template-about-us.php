 <?php
 /* Template Name: About Us Template */

 get_header();
 $pageId = get_the_ID();
 $aboutApprochAttachment = get_post_meta( $pageId, 'Approch_image', true ); /* Approch Get Attachment Id */
 $aboutApprochImage = wp_get_attachment_url( $aboutApprochAttachment );
 $aboutVisionAttachment = get_post_meta( $pageId, 'Vision_image', true ); /* Vision Get Attachment Id */
 $aboutVisionImage = wp_get_attachment_url( $aboutVisionAttachment );  
 $aboutProcessAttachment = get_post_meta( $pageId, 'Process_image', true ); /* Process Get Attachment Id */
 $aboutProcessImage = wp_get_attachment_url( $aboutProcessAttachment ); 
 ?>
 <div class="main_block">
  <div class="inner_main_block">
    <div class="about_us_main">
      <div class="about_use_main_page mt80">
        <div class="inner_about_use">
          <div class="page_header_main">
            <h3><?php echo get_the_title(); ?></h3>
          </div>
          <div class="our_vision_block">
            <div class="inner_our_block">
              <div class="container">
                <div class="row">
                  <div class="col-md-6">
                    <div class="left_vision_block" data-aos="fade-down">
                      <div class="content_header mt-sm-0">
                        <h3><?php echo get_post_meta(get_the_ID(), 'Vision_title', true); ?></h3>
                      </div>
                      <div class="content_vision">
                        <p><?php echo get_post_meta(get_the_ID(), 'Vision_description', true); ?></p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="right_vision_block" data-aos="fade-up">
                      <?php if($aboutVisionImage){
                      ?>
                      <img class="img-fluid" alt="images" src=<?php echo $aboutVisionImage; ?>>
                      <?php } ?>
                    </div>
                  </div>
                </div>
              </div>
              <div class="blue_light_box"></div>
            </div>
          </div>
          <div class="tow_our_block">
            <div class="vertical_box"></div>
            <div class="two_second_block">
              <div class="our_vision_block section_spacing our_approch">
                <div class="inner_our_block">
                  <div class="container">
                    <div class="row ">
                      <div class="col-md-6 second_block  order-md-1 order-2">
                        <div class="right_vision_block" data-aos="fade-up">
                        <?php if($aboutApprochImage){
                        ?>
                        <img class="img-fluid" alt="images" src=<?php echo $aboutApprochImage; ?>>
                        <?php } ?>                          
                        </div>
                      </div>
                      <div class="col-md-6 order-md-2 order-1">
                        <div class="left_vision_block" data-aos="fade-down">
                          <div class="content_header">
                            <h3><?php echo get_post_meta(get_the_ID(), 'Approch_title', true); ?></h3>
                          </div>
                          <div class="content_vision">
                            <p><?php echo get_post_meta(get_the_ID(), 'Approch_description', true); ?></p>
                          </div>

                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="blue_light_box"></div>
            </div>
            <div class="our_vision_block our_process section_spacing">
              <div class="inner_our_block">
                <div class="container">
                  <div class="row      ">
                    <div class="col-md-6">
                      <div class="left_vision_block" data-aos="fade-down">
                        <div class="content_header">
                          <h3><?php echo get_post_meta(get_the_ID(), 'Process_title', true); ?></h3>
                        </div>
                        <div class="content_vision">
                          <p><?php echo get_post_meta(get_the_ID(), 'Process_description', true); ?></p>
                        </div>
                      </div>

                    </div>
                    <div class="col-md-6">
                      <div class="right_vision_block" data-aos="fade-up">
                      <?php if($aboutProcessImage){
                      ?>
                      <img class="img-fluid" alt="images" src=<?php echo $aboutProcessImage; ?>>
                      <?php } ?>                      
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- </div> -->
            </div>
          </div>

        </div>
       
      </div>
    </div>
  </div>
</div>
<script>
  AOS.init({
    duration: 1000,
  });
</script>
<?php

get_footer();
?>