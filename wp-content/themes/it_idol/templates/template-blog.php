<?php
/* Template Name: Blog Template */
get_header();
$pageId = get_the_ID();
$backgroundAttachment = get_post_meta( $pageId, 'blog_banner_background_image', true ); /* Blog Attachment Id */
$blogImage = wp_get_attachment_url( $backgroundAttachment );

?>
<div class="main_block">
  <div class="inner_main_block">
    <div class="Blog_main_section">
      <section class="latest_news mt80">
        <div class="inner_latest_news">
          <div class="map_images">
            <?php if($blogImage){
            ?><img class="img-fluid" src="<?php echo $blogImage; ?>" alt="map">
          <?php } ?>
          <div class="overlay"></div>
          <div class="slide_content">
            <div class="on_map_header">
              <h3><?php echo get_post_meta(get_the_ID(), 'blog_banner_title', true);?></h3>
              <p><?php echo get_post_meta(get_the_ID(), 'blog_banner_description', true);?></p>
            </div>
          </div>
        </div>

      </div>
    </section>

    <!-- Recent blogs section -->
    <?php 
    $args = array(
      'post_type' => 'Blog',
      'post_status' => 'publish',
      'order' => 'ASC',
    );
    $query = new WP_Query($args);          
    ?>

    <div class="second_expert_block blog_slider_main">

      <div class="main_heading ">
        <h2>Recent blogs</h2>
      </div>
      <div class="inner_expert_block blog_slider">
        <div class="container">
          <div class="slick-carouseles-blog">

            <?php                                                            
            while ( $query->have_posts() ) : $query->the_post();
              $id = $query->post->ID;
              $feat_image = wp_get_attachment_url( get_post_thumbnail_id($id) );
              $recentContent = wp_trim_words( get_the_content(), 40, '...' ); 
              ?>
              <div>
                <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">                  
                 <div class="outer_slider_blog">
                  <div class="blog_three_boxes mt-2 mb-2">
                    <div class="images_section zoomin column">
                      <figure>  <?php if($feat_image){
                        ?>                           
                        <img class="img-fluid"
                        src="<?php echo $feat_image; ?>"
                        alt="detail_images">
                      <?php } ?>
                    </figure>
                    <div class="overlay"></div>
                  </div>
                  <div class="heading_text p-0">
                     <div class="head_blocking">
                     <h3><?php the_title(); ?></h3>
                      </div>
                    <!-- <p><?php echo $recentContent; ?></p> -->
                    <!-- <button class="blog_read_more_slider"><a class="text_underline" data-id="<?php echo $post->ID ?>" onclick="blogpostdisplay(this)">Read More</a></button> -->
                  </div>
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

<?php

$args = array(
 'post_type' => 'Blog',
 'post_status' => 'publish',
 'posts_per_page' => 6, 
 'paged' => $page_no,
 'order' => 'ASC',
 'meta_query' => array(
   array(
     'key' => 'is_featured',
     'value' => '1',
     'compare' => '!='
   ),
 ),
);
$loop = new WP_Query($args);    
?>
<section class="three_block_section pb-5 ">
  <div class="container">
    <input type="hidden" id="page_no_hidden" value="1">
    <div class="inner_three_block" id="our_blog_content">
      <div class="row">
        <?php                                                            
        while ( $loop->have_posts() ) : $loop->the_post();                   
          $i_value = $loop->current_post;
          $content = wp_trim_words( get_the_content(), 40, '...' );
          $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) );              
          if ($i_value % 2 == 0 ) {
            ?>
            <div class="col-lg-4 col-md-6 pt-4" data-aos="fade-up" data-aos-duration="2000">
              <div class="blog_three_boxes">
                <div class="images_section zoomin column">
                  <figure> 
                    <?php if($feat_image){                                                              
                      ?>
                      <img class="img-fluid" src="<?php  echo $feat_image; ?>" alt="blogimages">                              
                    <?php } ?>

                  </figure>
                  <div class="overlay"></div>
                </div>
                <div class="heading_text">
                  <h3><?php the_title(); ?></h3>
                  <p> <?php echo $content ?> </p> 
                  <p><button class="blog_read_more"><a class="text_underline" href="<?php the_permalink() ?>">Read More..</a></button></p>
                </div>
              </div>
            </div>   
          <?php }
          else{ ?>
            <div class="col-lg-4 col-md-6 pt-4" data-aos="fade-down" data-aos-duration="3000">
              <div class="blog_three_boxes">
                <div class="images_section zoomin column">
                  <figure> 
                    <?php if($feat_image){                                                              
                      ?>
                      <img class="img-fluid" src="<?php  echo $feat_image; ?>" alt="blogimages">                              
                    <?php } ?>
                  </figure>
                  <div class="overlay"></div>
                </div>
                <div class="heading_text">
                  <h3><?php the_title(); ?></h3>
                  <p> <?php echo $content ?> </p>
                  <p><button class="blog_read_more"><a class="text_underline" href="<?php the_permalink() ?>">Read More..</a></button></p>
                </div>

              </div>
            </div> 
          <?php } ?>   
          <?php   
        endwhile;
        wp_reset_postdata(); 
        ?>             
      </div>
      <div class="slider-dots-box pagination">
        <?php
        $fallback_base = str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) );
        $base = isset( $_POST[ 'base' ] ) ? trailingslashit( $_POST[ 'base' ] ) . '%_%' : $fallback_base;

        echo paginate_links( array(
          'base'         => $base,
          'total'        => $loop->max_num_pages,
          'current'      => max( 1, $page_no ),
          'format'       => '?paged=%#%',
          'show_all'     => false,
          'type'         => 'plain',
          'end_size'     => 2,
          'mid_size'     => 1,
          'prev_next'    => true,
          'prev_text'    => sprintf( '%1$s', __( 'Previous', 'text-domain' ) ),
          'next_text'    => sprintf( '%1$s', __( 'Next', 'text-domain' ) ),
          'add_args'     => false,
          'add_fragment' => '',
        ));
        ?>
      </div>
    </div>
  </div>
</section>
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