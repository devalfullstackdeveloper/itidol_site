 <?php
 /* Template Name: Carrer Template */

 get_header();
 $pageId = get_the_ID();
 $bannerAttachment = get_post_meta( $pageId, 'background_image', true ); /* Banner Image */
 $bannerImage = wp_get_attachment_url( $bannerAttachment ); 
 
 $proffesionalAttachment = get_post_meta( $pageId, 'proffesional_image', true ); //Proffesional 
 $proffesionalImage = wp_get_attachment_url( $proffesionalAttachment ); 
 $flexibleAttachment = get_post_meta( $pageId, 'flexible_image', true ); //Flexible 
 $flexibleImage = wp_get_attachment_url( $flexibleAttachment ); 
 $serviceAttachment = get_post_meta( $pageId, 'service_image', true ); //Service 
 $serviceImage = wp_get_attachment_url( $serviceAttachment ); 

 $compensationAttachment = get_post_meta( $pageId, 'compensation_image', true ); //Compensation
 $compensationImage = wp_get_attachment_url( $compensationAttachment ); 
 $growthAttachment = get_post_meta( $pageId, 'growth_image', true ); //Growth 
 $growthImage = wp_get_attachment_url( $growthAttachment ); 
 $cultureAttachment = get_post_meta( $pageId, 'culture_image', true ); //Culture
 $cultureImage = wp_get_attachment_url( $cultureAttachment ); 
 ?>

 <?php 
 $args = array(  
  'post_type' => 'ris_gallery',
  'order'=>'ASC',
  'post_status'=>'publish'
);
 $query = new WP_Query($args);  
 $sliderArray = array();
 
 while ( $query->have_posts() ) : $query->the_post(); 
  $slider = get_post_meta(get_the_ID());
  $sliderImgArray = array();
  if(isset($slider['ris_all_photos_details'][0])){
    $sliderImagesPost = unserialize($slider['ris_all_photos_details'][0]);
    if(count($sliderImagesPost) > 0){
      foreach ($sliderImagesPost as $sliderImagesPostId) {                
        $sliderImages = $sliderImagesPostId['rpgp_image_id'];
        $sliderImagesAttachment = get_post_meta($sliderImages);
        $uploads = wp_upload_dir(); 
        $sliderImagePath = isset($sliderImagesAttachment['_wp_attached_file'][0]) ? $uploads['baseurl'].'/'.$sliderImagesAttachment['_wp_attached_file'][0] : '';
        $sliderImgArray[]=$sliderImagePath;
      }
    }          
  }
  $sliderArray[]=array_chunk($sliderImgArray, 2);
endwhile;
wp_reset_postdata(); 
?>

<div class="main_career_block mt80">
  <div class="inner_career_block">
    <div class="page_header_main">
      <h3> <?php the_content(); ?> </h3>
    </div>

    <div class="slider_life_at_comapny">
      <div class="life-comapny">
        <?php 
        foreach ($sliderArray as $slider) {
          ?>
          <div class="outer_career_at_life">
            <div class="inner_career_life ">
              <div class="grid-container row"> 
                <?php 
                foreach ($slider as $sliderImg) {
                  ?>
                  <div class="column">
                    <?php 
                    if(isset($sliderImg[0]))
                    {
                      ?>
                      <div class="outer_image_border">
                        <img src="<?php echo $sliderImg[0]; ?>">
                      </div>
                    <?php } if(isset($sliderImg[1])){
                      ?>
                      <div class="outer_image_border">
                        <img src="<?php echo $sliderImg[1]; ?>">
                      </div>
                    <?php } ?>
                  </div> 
                <?php }
                ?>               

              </div>
            </div>
          </div>
        <?php }

        ?>
      </div>

    </div>

    <div class="paralex_image" style="background-image: url(<?php if($bannerImage) echo $bannerImage; ?>);">
      <div class="inner_paralex_blog">
        <div class="container">
         <div class="block_paralex">
          <div class="row m-0 p-0">
            <div class="col-md-4">
              <div class="inner_contet_paralex">
               <div class="image_block">
                <?php if($proffesionalImage){
                  ?>
                  <img class="img-fluid" src="<?php echo $proffesionalImage; ?>">
                <?php } ?>
              </div>
              <div class="contetn">
                <h3><?php echo get_post_meta(get_the_ID(), 'proffesional_title', true); ?></h3>
                <p><?php echo get_post_meta(get_the_ID(), 'proffesional_description', true); ?></p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="inner_contet_paralex">
             <div class="image_block">
              <?php if($flexibleImage){
                ?>
                <img class="img-fluid" src="<?php echo $flexibleImage; ?>">
              <?php } ?>
              
            </div>
            <div class="contetn">
              <h3><?php echo get_post_meta(get_the_ID(), 'flexible_title', true); ?></h3>
              <p><?php echo get_post_meta(get_the_ID(), 'flexible_description', true); ?></p>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="inner_contet_paralex">
           <div class="image_block">
            <?php if($serviceImage){
              ?>
              <img class="img-fluid" src="<?php echo $serviceImage; ?>">
            <?php } ?>
            
          </div>
          <div class="contetn">
            <h3><?php echo get_post_meta(get_the_ID(), 'service_title', true); ?></h3>
            <p><?php echo get_post_meta(get_the_ID(), 'service_description', true); ?></p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="inner_contet_paralex">
         <div class="image_block">
          <?php if($compensationImage){
            ?>
            <img class="img-fluid" src="<?php echo $compensationImage; ?>">
          <?php } ?>

        </div>
        <div class="contetn">
          <h3><?php echo get_post_meta(get_the_ID(), 'compensation_title', true); ?></h3>
          <p><?php echo get_post_meta(get_the_ID(), 'compensation_description', true); ?></p>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="inner_contet_paralex">
       <div class="image_block">
        <?php if($growthImage){
          ?>
          <img class="img-fluid" src="<?php echo $growthImage; ?>">
        <?php } ?>
        
      </div>
      <div class="contetn">
        <h3><?php echo get_post_meta(get_the_ID(), 'growth_title', true); ?></h3>
        <p><?php echo get_post_meta(get_the_ID(), 'growth_description', true); ?></p>
      </div>
    </div>
  </div>
  <div class="col-md-4">
    <div class="inner_contet_paralex">
     <div class="image_block">
      <?php if($cultureImage){
        ?>
        <img class="img-fluid" src="<?php echo $cultureImage; ?>">
      <?php } ?>
      
    </div>
    <div class="contetn">
      <h3><?php echo get_post_meta(get_the_ID(), 'culture_title', true); ?></h3>
      <p><?php echo get_post_meta(get_the_ID(), 'culture_description', true); ?></p>
    </div>
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
  
  $( document ).ready(function() {
    
    setTimeout(function() {
      $(".attachment-msg .codedropz-upload-inner h3").text("Attach your Resume/CV here");
    }, 100);
});
</script>
<?php

get_footer();
?>