<?php
get_header();
$pageId = get_the_ID();
$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID), 'thumbnail' );

$logoAttachment = get_post_meta( $pageId, 'logo', true ); /* logo Attachment Id */
$logoImage = wp_get_attachment_url( $logoAttachment );

$searviceAttachment1 = get_post_meta( $pageId, 'service_searvice_1_image', true ); /* Satisfaction Attachment Id */
$searviceImage1 = wp_get_attachment_url( $searviceAttachment1 );
$searviceAttachment2 = get_post_meta( $pageId, 'service_searvice_2_image', true ); /* Dedicated Attachment Id */
$searviceImage2 = wp_get_attachment_url( $searviceAttachment2 );  
$searviceAttachment3 = get_post_meta( $pageId, 'service_searvice_3_image', true ); /* Fixed  Get Attachment Id */
$searviceImage3 = wp_get_attachment_url( $searviceAttachment3 );  
$searviceAttachment4 = get_post_meta( $pageId, 'service_searvice_4_image', true ); /* Surity  Get Attachment Id */
$searviceImage4 = wp_get_attachment_url( $searviceAttachment4 ); 

$content = get_the_content();
$is_service = get_post_meta(get_the_ID(), 'is_tl', true);
$myvals = get_post_meta(get_the_ID());
?>

<?php

if ( have_posts() ) :
  /* Start the Loop */
  while ( have_posts() ) : the_post(); 


    if(empty($is_service)){?>

      <div class="technologies_main mt80">

        <div class="banner_tech <?php echo get_post_meta(get_the_ID(), 'service_name', true); ?>">
          <div class="bg_banner" style="background-image: url(<?php 
            if($url)
              echo $url; ?>);"></div>
            <div class="outer_banner_text h-100">
             <div class="top_banner">
              <div class="image_block h-100" data-aos="fade-up" data-aos-duration="3000">
                <?php if($logoImage){
                  ?>
                  <img class="img-fluid" src="<?php echo $logoImage ?>" alt="tech_images">
                <?php } ?>
              </div>
              <div class="content_technologies">
                <h3><?php the_title(); ?></h3>             
              </div>
            </div>
          </div>
        </div>
        <div class="technologies_description">
          <div class="container">
            <p data-aos="fade-up"><?php echo $content; ?></p>
          </div>
        </div>
        <div class="satisfaction_section mt80 mb-0">
          <div class="inner_satisfaction w-100">
            <div class="row m-0">
              <div class="col-md-7  ps-md-0 pe-md-0" data-aos="fade-up">
                <div class="satisfaction_text_left h-100">
                  <div class="heading_satisfaction">
                    <h2><?php echo get_post_meta(get_the_ID(), 'service_searvice_1_title', true); ?></h2>
                  </div>
                  <div class="content_satisfaction">
                    <p><?php echo get_post_meta(get_the_ID(), 'service_searvice_1_description', true); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-5 ps-md-0 pe-md-0" data-aos="fade-down">
                <div class="satisfaction_text_right h-100 ">
                  <?php if($searviceImage1){
                    ?>
                    <img class="img-fluid" src="<?php echo $searviceImage1 ?>" alt="satisfied">
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dedicate_professionals">
          <div class="inner_dedicate_profession">
            <div class="row m-0">
              <div class="col-md-5 pe-md-0  ps-md-0 " data-aos="fade-down">
                <div class="images_left_block h-100">
                  <?php if($searviceImage2){
                    ?>
                    <img class="img-fluid" src="<?php echo $searviceImage2 ?>" alt="metting">
                  <?php } ?>               
                </div>
              </div>
              <div class="col-md-7 ps-md-0 pe-md-0 " data-aos="fade-up">
                <div class="dedicate_expert_block h-100">
                  <div class="heading_satisfaction pt80">
                    <h2><?php echo get_post_meta(get_the_ID(), 'service_searvice_2_title', true); ?></h2>
                  </div>
                  <div class="content_satisfaction">
                    <p><?php echo get_post_meta(get_the_ID(), 'service_searvice_2_description', true); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="satisfaction_section flexi_cost mt80 mb-0">
          <div class="inner_satisfaction w-100">
            <div class="row m-0">
              <div class="col-md-7  ps-md-0 pe-md-0" data-aos="fade-up">
                <div class="satisfaction_text_left h-100">
                  <div class="heading_satisfaction pt80">
                    <h2><?php echo get_post_meta(get_the_ID(), 'service_searvice_3_title', true); ?></h2>
                  </div>
                  <div class="content_satisfaction">
                    <p><?php echo get_post_meta(get_the_ID(), 'service_searvice_3_description', true); ?></p>
                  </div>
                </div>
              </div>
              <div class="col-md-5 ps-md-0 pe-md-0" data-aos="fade-down">
                <div class="satisfaction_text_right h-100">
                  <?php if($searviceImage3){
                    ?>
                    <img class="img-fluid" src="<?php echo $searviceImage3 ?>" alt="satisfied">
                  <?php } ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="dedicate_professionals surity_zero_reliable">
          <div class="inner_dedicate_profession">
            <div class="row m-0">
              <div class="col-md-5 pe-md-0  ps-md-0 " data-aos="fade-up">
                <div class="images_left_block h-100">
                  <?php if($searviceImage4){
                    ?>
                    <img class="img-fluid" src="<?php echo $searviceImage4 ?>" alt="metting">
                  <?php } ?>

                </div>
              </div>
              <div class="col-md-7 ps-md-0 pe-md-0 " data-aos="fade-down">
                <div class="dedicate_expert_block h-100">
                  <div class="heading_satisfaction pt80">
                    <h2><?php echo get_post_meta(get_the_ID(), 'service_searvice_4_title', true); ?></h2>
                  </div>
                  <div class="content_satisfaction">
                    <p><?php echo get_post_meta(get_the_ID(), 'service_searvice_4_description', true); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<?php }
else{ ?>
  <div class="technologies_main mt80">

    <div class="banner_tech <?php echo get_post_meta(get_the_ID(), 'service_name', true); ?>">
      <div class="bg_banner" style="background-image: url(<?php 
        if($url)
          echo $url; ?>);"></div>
        <div class="outer_banner_text h-100">
         <div class="top_banner">
          <div class="image_block h-100" data-aos="fade-up" data-aos-duration="3000">
            <?php if($logoImage){
              ?>
              <img class="img-fluid" src="<?php echo $logoImage ?>" alt="tech_images">
            <?php } ?>
          </div>
          <div class="content_technologies">
            <h3><?php the_title(); ?></h3>             
          </div>
        </div>
      </div>
    </div>
    <div class="technologies_description">
      <div class="container">
        <p data-aos="fade-up"><?php echo $content; ?></p>
      </div>
    </div>
    <?php if(isset($myvals['wp_custom_ques'])){
     ?>
     <div class="development_service">
      <div class="inner_development_service">
        <div class="container">
          <div class="content_header">
            <h3><?php the_title(); ?></h3>
          </div>
          <div class="accordion" id="accordionExample">
           <?php
           $i = 0;
           foreach($myvals['wp_custom_ques'] as $key=>$val){
             $serviceQuestion =$myvals['wp_custom_ques'][$key];
             $serviceAnswer =$myvals['wp_custom_ans'][$key];        
             ?>
             <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse_<?php echo $i;?>" aria-expanded="true" aria-controls="collapse_<?php echo $i;?>">
                  <?php echo $serviceQuestion; ?>
                </button>
              </h2>
              <div id="collapse_<?php echo $i;?>" class="accordion-collapse collapse" aria-labelledby="heading_<?php echo $i;?>" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <p><?php echo $serviceAnswer ?></p>
                </div>
              </div>
            </div> 
            <?php  $i++; } ?>           
          </div>
        </div>
      </div>
    </div>
  <?php } ?>
  <div class="satisfaction_section mt80 mb-0">
    <div class="inner_satisfaction w-100">
      <div class="row m-0">
        <div class="col-md-7  ps-md-0 pe-md-0" data-aos="fade-up">
          <div class="satisfaction_text_left h-100">
            <div class="heading_satisfaction">
              <h2><?php echo get_post_meta(get_the_ID(), 'service_searvice_1_title', true); ?></h2>
            </div>
            <div class="content_satisfaction">
              <p><?php echo get_post_meta(get_the_ID(), 'service_searvice_1_description', true); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-5 ps-md-0 pe-md-0" data-aos="fade-down">
          <div class="satisfaction_text_right h-100 ">
            <?php if($searviceImage1){
              ?>
              <img class="img-fluid" src="<?php echo $searviceImage1 ?>" alt="satisfied">
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dedicate_professionals">
    <div class="inner_dedicate_profession">
      <div class="row m-0">
        <div class="col-md-5 pe-md-0  ps-md-0 " data-aos="fade-down">
          <div class="images_left_block h-100">
            <?php if($searviceImage2){
              ?>
              <img class="img-fluid" src="<?php echo $searviceImage2 ?>" alt="metting">
            <?php } ?>               
          </div>
        </div>
        <div class="col-md-7 ps-md-0 pe-md-0 " data-aos="fade-up">
          <div class="dedicate_expert_block h-100">
            <div class="heading_satisfaction pt80">
              <h2><?php echo get_post_meta(get_the_ID(), 'service_searvice_2_title', true); ?></h2>
            </div>
            <div class="content_satisfaction">
              <p><?php echo get_post_meta(get_the_ID(), 'service_searvice_2_description', true); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="satisfaction_section flexi_cost mt80 mb-0">
    <div class="inner_satisfaction w-100">
      <div class="row m-0">
        <div class="col-md-7  ps-md-0 pe-md-0" data-aos="fade-up">
          <div class="satisfaction_text_left h-100">
            <div class="heading_satisfaction pt80">
              <h2><?php echo get_post_meta(get_the_ID(), 'service_searvice_3_title', true); ?></h2>
            </div>
            <div class="content_satisfaction">
              <p><?php echo get_post_meta(get_the_ID(), 'service_searvice_3_description', true); ?></p>
            </div>
          </div>
        </div>
        <div class="col-md-5 ps-md-0 pe-md-0" data-aos="fade-down">
          <div class="satisfaction_text_right h-100">
            <?php if($searviceImage3){
              ?>
              <img class="img-fluid" src="<?php echo $searviceImage3 ?>" alt="satisfied">
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="dedicate_professionals surity_zero_reliable">
    <div class="inner_dedicate_profession">
      <div class="row m-0">
        <div class="col-md-5 pe-md-0  ps-md-0 " data-aos="fade-up">
          <div class="images_left_block h-100">
            <?php if($searviceImage4){
              ?>
              <img class="img-fluid" src="<?php echo $searviceImage4 ?>" alt="metting">
            <?php } ?>

          </div>
        </div>
        <div class="col-md-7 ps-md-0 pe-md-0 " data-aos="fade-down">
          <div class="dedicate_expert_block h-100">
            <div class="heading_satisfaction pt80">
              <h2><?php echo get_post_meta(get_the_ID(), 'service_searvice_4_title', true); ?></h2>
            </div>
            <div class="content_satisfaction">
              <p><?php echo get_post_meta(get_the_ID(), 'service_searvice_4_description', true); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php if(isset($myvals['wp_custom_choose'])){
   ?>
   <div class="why_choose section_spacing">
    <div class="inner_why_choose">
      <div class="container">
        <div class="content_header">
          <h3>Why Choose <?php the_title(); ?>?</h3>
        </div>
        <div class="choose_section">
          <div class="row">
            <?php
            foreach($myvals['wp_custom_choose'] as $key=>$val){
             $serviceChoose =$myvals['wp_custom_choose'][$key]; 
             ?>
             <div class="col-md-6 mt-3">
              <div class="blue_box">
                <div class="inner_blue_section">
                  <p> <?php echo $serviceChoose; ?></p>
                </div>
              </div>
            </div>
          <?php } ?>                       
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
</div>
<?php	} endwhile; 
endif;
?>
<?php get_footer();
?>
<script>
  AOS.init({
    duration: 1000,
  });
</script>

