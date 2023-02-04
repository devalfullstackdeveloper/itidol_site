<?php
/* Footer file for the it_idol theme. */

?>
<?php wp_footer(); ?>
<?php
  $page_id = get_queried_object_id();
  // global $wp;
  // $current_url = home_url( add_query_arg( array(), $wp->request ) );
  if($page_id == '819'){
    ?>
<div id="contact-form" class="carrer_form">
    <div class="contact_form section_spacing ">
        <div class="inner_block_contact">
            <div class="content_header">
                <h3 style="text-align:center;">Looking for a job change?</h3>
            </div>
            <div class="tow_form_block">
                <div class="row m-0">
                    <div class="col-lg-4">
                        <div class="left_form_Sectiion carrer">
                            <div class="img_dote">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/home_page/Group 4.svg">
                            </div>
                            <div class="hexagone"></div>
                            <div class="hexagone_small"></div>
                            <div class="rectengal"></div>
                            <div class="form_left_outer">
                                <div class="inner_form_section">
                                    <p class="heading_one">KICK-START</p>
                                    <p class="heading_two">YOUR CAREER</p>
                                    <p class="heading_one">WITH US</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form_detail">
                            <?php echo do_shortcode("[contact-form-7 id='989' title='Career Reach out to us']"); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php }
else {
  ?>
<div id="contact-form">
    <div class="contact_form section_spacing ">
        <div class="inner_block_contact">
            <div class="content_header">
                <h3 style="text-align:center;">Reach out to us!</h3>
            </div>
            <div class="tow_form_block">
                <div class="row m-0">
                    <div class="col-lg-4">
                        <div class="left_form_Sectiion">
                            <div class="img_dote">
                                <img
                                    src="<?php echo get_template_directory_uri(); ?>/assets/images/home_page/Group 4.svg">
                            </div>
                            <div class="hexagone"></div>
                            <div class="hexagone_small"></div>
                            <div class="rectengal"></div>
                            <div class="form_left_outer">
                                <div class="inner_form_section">
                                    <p class="heading_one">Your Project</p>
                                    <p class="heading_two">is the best part of</p>
                                    <h3 class="heading_three">our job!</h3>
                                    <p class="heading_four">WE WOULD LIKE TO KNOW MORE</p>
                                    <p class="heading_five">ABOUT YOUR PROJECT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="form_detail">
                            <?php echo do_shortcode("[contact-form-7 id='213' title='Footer Reach out to us']"); ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<?php
}
?>

<div class="footer">
    <div class="inner_footer">
        <div class="footer_bg">
            <div class="blackshadow"></div>
            <div class="footer_inner">
                <div class="container">
                    <div class="footer_block">
                        <ul class="foter_main_ul">
                            <li>
                                <div class="footer_logo">
                                    <?php
                        if ( get_theme_mod( 'footer_logo' ) ) : ?>
                                    <a href="<?php echo BASE_URL; ?>">
                                        <img class="img-fluid" src="<?php echo get_theme_mod( 'footer_logo' ); ?>"
                                            alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                                            alt="footer-logo">
                                    </a>
                                    <?php else : ?>
                                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                                    <?php endif; ?>
                                    <!--  <img class="img-fluid" src="assets/images/logo/Frame 35.png" alt="footer-logo"> -->
                                </div>
                                <div class="social_media">
                                    <div class="text_social">
                                        <p>Follow Us On :</p>
                                    </div>
                                    <div class="social_img">
                                        <ul>
                                            <li>
                                                <?php
                                if ( get_theme_mod( 'facebook_icon' ) ) : ?>
                                                <a href="<?php echo get_theme_mod( 'facebook_social_setting' ); ?>"
                                                    target="_blank">
                                                    <img class="img-fluid"
                                                        src="<?php echo get_theme_mod( 'facebook_icon' ); ?>"
                                                        alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                                                        alt="social">
                                                </a>
                                                <?php endif; ?>
                                            </li>
                                            <li>
                                                <?php
                                if ( get_theme_mod( 'linkedin_icon' ) ) : ?>
                                                <a href="<?php echo get_theme_mod( 'linkedin_social_setting' ); ?>"
                                                    target="_blank">
                                                    <img class="img-fluid"
                                                        src="<?php echo get_theme_mod( 'linkedin_icon' ); ?>"
                                                        alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                                                        alt="social">
                                                    <?php endif; ?>
                                                </a>
                                            </li>
                                            <li>
                                                <?php
                                if ( get_theme_mod( 'twitter_icon' ) ) : ?>
                                                <a href="<?php echo get_theme_mod( 'twitter_social_setting' ); ?>"
                                                    target="_blank">
                                                    <img class="img-fluid"
                                                        src="<?php echo get_theme_mod( 'twitter_icon' ); ?>"
                                                        alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                                                        alt="social">
                                                    <?php endif; ?>
                                                </a>
                                            </li>
                                            <li>
                                                <?php
                                if ( get_theme_mod( 'instagram_icon' ) ) : ?>
                                                <a href="<?php echo get_theme_mod( 'instagram_social_setting' ); ?>"
                                                    target="_blank">
                                                    <img class="img-fluid"
                                                        src="<?php echo get_theme_mod( 'instagram_icon' ); ?>"
                                                        alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"
                                                        alt="social">
                                                    <?php endif; ?>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- <div class="subscribe_form">
                        <p>Subscribe To Our Newsletter</p>
                        <form class="site-search single-block-form" method="get" action="/search">
                          <input type="text" name="q" id="search-site" placeholder="Your Email Address.."
                            class="sbf__input">
                          <label for="search-site" class="-vis-hidden">Your Email Address</label>
                          <input type="submit" value="Subscribe" class="sbf__button btn-primary">
                        </form>
                      </div> -->
                            </li>
                            <li>
                                <div class="footer_list_header">
                                    <h4>Useful Links</h4>
                                </div>
                                <div class="list_footer mt-3">
                                    <ul>
                                        <?php 
                          $menu_name = 'footer_link'; //menu slug
                          $locations = get_nav_menu_locations();
                          $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                          $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                          foreach ($menuitems as $key => $value) {
                            $menuId= $value->ID;
                            if($menuId % 2 == 0 )
                            {
                              ?>
                                        <li><a href=<?php echo $value->url ?>><?php echo $value->title ?></a></li>
                                        <?php }
                           else{
                            ?>
                                        <li><a href=<?php echo $value->url ?>><?php echo $value->title ?></a></li>
                                        <?php }
                            }                          
                           ?>
                                    </ul>
                                </div>
                            </li>
                            <li>
                                <div class="footer_list_header">
                                    <h4>Contact Us</h4>
                                </div>
                                <div class="list_footer mt-3">
                                    <?php if ( get_theme_mod( 'contact_setting' ) ) : ?>
                                    <?php echo get_theme_mod( 'contact_setting' );  ?>
                                    <?php endif; ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</body>

</html>