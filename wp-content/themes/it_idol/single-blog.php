 <?php
 get_header();

 $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
 $content = get_the_content();
 $author_id = get_post_field ('post_author', $post_id);
 //$display_name = get_the_author_meta( 'display_name' , $author_id ); 
 $date = get_the_date();
 //$formatDate = date("dS F Y", strtotime($date));

 ?>
  <?php 
    if (get_post_type( $post->ID ) == 'Blog' )
      update_post_meta( $post->ID, '_last_viewed', current_time('mysql') );
   ?>
 <div class="blog_detail_main mt80">
    <div class="inner_blog_detail">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="inner_blog_detail_block" id="blogdetail">
                       
                        <div class="blog_detail_images">
                         <?php if($large_image_url){
                            ?>                           
                            <img class="img-fluid"
                            src="<?php echo $large_image_url[0]; ?>"
                            alt="detail_images">
                        <?php } ?>
                    </div>
                    <div class="content_blogdetail">
                        <div class="outer_heading_blog">
                            <div class="row">
                                <div class="col-md-7">
                                  <div class="heading_blog">
                                    <h3><?php the_title(); ?></h3>                              
                                  </div>
                                </div>
                                <div class="col-md-5">
                                <div class="folow">
                                <p class="mb-0">Follow Us</p>
                                <div class="social_img">
                                    <ul>
                                        <li>
                                            <a href="<?php echo get_theme_mod( 'facebook_social_setting' ); ?>" target="_blank">
                                                <img class="img-fluid"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blogdetail/facebook.png" alt="social"
                                                data-aos="fade-down">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo get_theme_mod( 'instagram_social_setting' ); ?>" target="_blank">
                                                <img class="img-fluid"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blogdetail/instagram.png" alt="social"
                                                data-aos="fade-up">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo get_theme_mod( 'linkedin_social_setting' ); ?>" target="_blank">
                                                <img class="img-fluid"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blogdetail/linkedin.png" alt="social"
                                                data-aos="fade-down">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?php echo get_theme_mod( 'twitter_social_setting' ); ?>" target="_blank">
                                                <img class="img-fluid"
                                                src="<?php echo get_template_directory_uri(); ?>/assets/images/blogdetail/twitter.png" alt="social"
                                                data-aos="fade-up">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                                </div>
                            </div>
                           
                           
                        </div>
                       <?php echo $content; ?>                         
                        <!-- <div class="subheading_blogdetail">
                            <h4 class="m-0"> <?php echo $display_name; ?> | <?php echo $formatDate ?></h4>
                        </div> -->
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5">
                <div class="inner_blog_detail_block slider_section border-0 pt-0">
                    <div class="latest_blog"><h3>Latest news and blogs</h3>
                    </div>
                    <div class="top_rcent_blog mt-4">
                        <?php echo do_shortcode('[lastest-post]'); ?>                        
                        <div class="blog-slider">
                            <div class="latest_blog">
                                <h3>Recent blogs</h3>
                            </div>
                            <?php
                            $args = array(
                                'post_type' => 'blog',
                                'posts_per_page' => 2,
                                'meta_key' => '_last_viewed',
                                // 'orderby' => 'meta_value',
                                'order' => 'DESC'
                            );
                            query_posts( $args );
                            ?>
                            <?php if( have_posts() ) : ?>
                                <?php while( have_posts() ) : the_post();    
                                    $id = $query->post->ID;
                                    $feat_image = wp_get_attachment_url( get_post_thumbnail_id($id) );
                                    $recentContent = wp_trim_words( get_the_content(), 40, '...' );                             
                                    ?>
                                    <div class="outer_slider_blog mt-5">
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
                                        <div class="heading_text">
                                            <h3><?php the_title(); ?></h3>
                                            <p><?php echo $recentContent; ?></p>
                                            <p><a class="text_underline" data-id="<?php echo $post->ID ?>" onclick="blogpostdisplay(this)">Read More</a></p>
                                        </div>
                                    </div>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                        <?php wp_reset_query(); ?>
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

</script>


<?php

get_footer();
?>