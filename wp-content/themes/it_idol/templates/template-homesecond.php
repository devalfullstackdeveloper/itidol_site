<?php
/* Template Name: Homesecond Template */
get_header();

$exploreUrlLink =  BASE_URL.'/'.get_post_meta(get_the_ID(), 'explore_url', true);

$pageId = get_the_ID();
$bannerAttachment = get_post_meta( $pageId, 'Banner_banner_image', true ); /* Banner Get Attachment Id */
$bannerImage = wp_get_attachment_url( $bannerAttachment ); 

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

  <div class="main_block">
    <div class="inner_main_block">
     


      <div class="banner_section_outer">
        <div class="banner_top_images"></div>
        <div class="banner_section">
          <div class="container">
            <div class="your_goals">
              <div class="main_heading">
                <h2>your <br><span class="goal">goals</span> <span class="are_our">are <br>our</span>&nbsp;<span
                    class="goal">Target</span></h2>
              </div>
              <div class="sub_heading mt35">
                <p>We Serve with a Smile & Dedication <br>We assure our Hard-Work for <br>your Business’s Success</p>
              </div>
              <button class="button btn-light mt40" data-aos="fade-up" data-aos-duration="3000">get in touch <span><img
                    class="img-fluid" src="assets/images/home_page/Vector.png" alt="arrow"></span></button>
            </div>

          </div>
        </div>
        <div class="overlay d-md-none"></div>
      </div>



      <div class="slider_section section_spacing">
        <div class="inner_slider">
          <main>
            <ul id="cards">
              <li class="card" id="card_1">
                <div class=" row card__content bgimages_slide1 ">
                  <div class="col-md-6 d-none d-md-block">
                    <div class="contetn_block">
                      <div data-aos="zoom-in-right" data-aos-duration="4000">
                        <h2>Card One</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <figure class="d-flex align-items-center h-100 w-100 justify-content-center">
                      <img class="img-fluid slide1_img" src="assets/images/home_page/slider/Group-189.png"
                        alt="Image description" data-aos="zoom-in-left" data-aos-duration="3000">
                      <img class="img-fluid slide2_img" src="assets/images/home_page/slider/jobguru-PNG-iMac-Pro-1.png"
                        alt="Image description" data-aos="zoom-in-right" data-aos-duration="3000">

                    </figure>
                  </div>
                </div>
              </li>
              <li class="card card_one" id="card_2">
                <div class=" row card__content bgimages_slide2">
                  <div class="col-md-6 d-none d-md-block">
                    <div class="contetn_block">
                      <div data-aos="zoom-in-right" data-aos-duration="4000">
                        <h2>Card Two</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <figure class="d-flex block_section h-100 w-100 ">
                      <img class="img-fluid slide3_img" src="assets/images/home_page/slider/Group 199.png"
                        alt="Image description"  data-aos-duration="3000">
                      <img class="img-fluid slide4_img" src="assets/images/home_page/slider/123.png"
                        alt="Image description"  data-aos-duration="3000">
                    </figure>
                  </div>
                </div>
              </li>
              <li class="card card_two" id="card_3">
                <div class=" row card__content bgimages_slide3">
                  <div class="col-md-6 d-none d-md-block">
                    <div class="contetn_block">
                      <div data-aos="zoom-in-right" data-aos-duration="3000">
                        <h2>Card Three</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>

                      </div>
                    </div>
                  </div>

                  <div class="col-md-6 col-sm-12">
                    <figure class="d-flex block_section position-relative h-100 w-100 overflow-hidden">
                      <img class="img-fluid slide5_img" src="assets/images/home_page/slider/jobguru-PNG-Galaxy-S8-1.png"
                        alt="Image description" data-aos="zoom-in-right" data-aos-duration="3000">
                      <img class="img-fluid slide6_img" src="assets/images/home_page/slider/jobguru-PNG-Galaxy-S8-1.png"
                        alt="Image description" data-aos="zoom-in-right" data-aos-duration="3000">
                      <img class="img-fluid slide7_img" src="assets/images/home_page/slider/jobguru-PNG-Galaxy-S8-1.png"
                        alt="Image description" data-aos="zoom-in-right" data-aos-duration="3000">
                      <img class="img-fluid slide8_img" src="assets/images/home_page/slider/jobguru-PNG-Galaxy-S8-1.png"
                        alt="Image description" data-aos="zoom-in-right" data-aos-duration="3000">
                    </figure>
                  </div>
                </div>
              </li>
              <li class="card card_three" id="card_4">
                <div class="row card__content bgimages_slide4">
                  <div class="col-md-6  d-none d-md-block">
                    <div class="contetn_block">
                      <div data-aos="zoom-in-right" data-aos-duration="3000">
                        <h2>Card Four</h2>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                    <figure class="d-flex  position-relative h-100 w-100" data-aos="zoom-in-right"
                      data-aos-duration="3000">

                      <img class="img-fluid slide10_img" src="assets/images/home_page/slider/123.png"
                        alt="Image description" data-aos="zoom-in-right" data-aos-duration="3000">
                      <img class="img-fluid slide9_img" src="assets/images/home_page/slider/Group-189.png"
                        alt="Image description" data-aos="zoom-in-right" data-aos-duration="3000">
                    </figure>
                  </div>
                </div>
              </li>
            </ul>
          </main>

        </div>
      </div>



      <div class="application_web section_spacing">
        <div class="inner_app_web">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="d-flex" data-aos="fade-up">
                  <div class="left">
                    <div class="image_block">
                      <img class="img-fluid" src="assets/images/home_page/web.jpg" alt="image">
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
                    <h3>Web</h3>
                  </div>
                  <div class="content_detail">
                    <p>We give custom web-based business improvement administrations to businesses that trust in
                      building incredible online experiences. We are also a Service Provider for Development of Tailored
                      Application for your Web Based Business or Entity in the domains like Educational, finance, Oil &
                      Gas – Mining, Energy & Utilities, Transportation & Logistics , Retail, Health Care, Travel &
                      Hospitality, BFSI, Media & Entertainment and Sports and E-Commerce Services. Using any one of the
                      latest technology for Web Based Application, we aid your business in one of the most critical
                      aspects of Generating a great experience & reliable functioning of your Product</p>
                  </div>
                  <div class="hexagon_four"></div>
                  <div class="list_of_language">
                    <ul>
                      <li>
                        <p>+ PHP</p>
                      </li>
                      <li>
                        <p>+ React</p>
                      </li>
                      <li>
                        <p>+ CodeIgnitor</p>
                      </li>
                      <li>
                        <p>+ YII</p>
                      </li>
                      <li>
                        <p>+ Node JS</p>
                      </li>
                      <li>
                        <p>+ Laravel</p>
                      </li>
                      <li>
                        <p>+ CakePHP</p>
                      </li>
                      <li>
                        <p>+ API </p>
                      </li>
                      <li>
                        <p>+ Angular</p>
                      </li>
                      <li>
                        <p>+ WordPress</p>
                      </li>
                      <li>
                        <p>+ UI/UX Design</p>
                      </li>
                      <li>
                        <p>+ HTML/CSS</p>
                      </li>
                    </ul>
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
                    <h3>App Development for
                      Mobile Platforms</h3>
                  </div>
                  <div class="content_detail">
                    <p>We give custom web-based business improvement administrations to businesses that trust in
                      building incredible online experiences. We are also a Service Provider for Development of Tailored
                      Application for your Web Based Business or Entity in the domains like Educational, finance, Oil &
                      Gas – Mining, Energy & Utilities, Transportation & Logistics , Retail, Health Care, Travel &
                      Hospitality, BFSI, Media & Entertainment and Sports and E-Commerce Services. Using any one of the
                      latest technology for Web Based Application, we aid your business in one of the most critical
                      aspects of Generating a great experience & reliable functioning of your Product</p>
                  </div>
                  <div class="hexagon_four"></div>
                  <div class="list_of_language">
                    <ul>
                      <li>
                        <p>+ Iconic</p>
                      </li>
                      <li>
                        <p>+ Android Native</p>
                      </li>
                      <li>
                        <p>+ React Native</p>
                      </li>
                      <li>
                        <p>+ Flutter</p>
                      </li>
                      <li>
                        <p>+ IOS Native</p>
                      </li>
                      <li>
                        <p>+ Native Script</p>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-6 order-md-2 order-sm-1">
                <div class="outer_block" data-aos="fade-down">
                  <div class="left">
                    <div class="image_block">
                      <img class="img-fluid" src="assets/images/home_page/discussing-mobile-app.jpg" alt="image">
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
                      <img class="img-fluid" src="assets/images/home_page/ecm.png" alt="image">
                    </div>
                    <div class="lihg_pink_shadow"></div>
                  </div>

                </div>
              </div>
              <div class="col-md-6">
                <div class="content_web" data-aos="fade-up">
                  <div class="content_header">
                    <h3>e-Commerce</h3>
                  </div>
                  <div class="content_detail">
                    <p>The Primary benefit We are an adept provider of Services for E-Commerce Web Store Applications.
                      E-Commerce Web Store Applications are providing a very Important and Inter-dependent Structure for
                      any business, nowadays. From its basic design to full scale Web Store Application, we provide our
                      expertise to ensure that concept as envisioned by our clients is implemented while also ensuring
                      that the E-Commerce Web Store Application is in line with the practical demands as per business
                      requirements specific to that Application. Also, we do provide support & migration services for
                      your existing E-Commerce Web Store Application. Depending on your requirements and vision, we can
                      implement or provide support for all of the latest E-Commerce Web Stores using any of the popular
                      frameworks.</p>
                  </div>

                  <div class="list_of_language">
                    <ul>
                      <li>
                        <p>+ Magento</p>
                      </li>
                      <li>
                        <p>+ Woo Commerce </p>
                      </li>
                      <li>
                        <p>+ Shopify</p>
                      </li>
                      <li>
                        <p>+ PrestaShop</p>
                      </li>
                      <li>
                        <p>+ Laravel-Ecommerce</p>
                      </li>
                    </ul>
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
                    <h3>Something About Us</h3>
                  </div>
                  <div class="content_detail">
                    <p>We give custom web-based business improvement administrations to businesses that trust in
                      building incredible online experiences. We are also a Service Provider for Development of Tailored
                      Application for your Web Based Business or Entity in the domains like Educational, finance, Oil &
                      Gas – Mining, Energy & Utilities, Transportation & Logistics , Retail, Health Care, Travel &
                      Hospitality, BFSI, Media & Entertainment and Sports and E-Commerce Services. Using any one of the
                      latest technology for Web Based Application, we aid your business in one of the most critical
                      aspects of Generating a great experience & reliable functioning of your Product</p>
                  </div>
                  <div class="learn_more">
                    <button class="button btn-primary">Learn More</button>
                  </div>
                </div>
              </div>
              <div class="col-md-6 order-md-2 order-sm-1">
                <div class="outer_block" data-aos="fade-up">
                  <div class="left">
                    <div class="image_block somthing_about">
                      <img class="img-fluid"
                        src="assets/images/home_page/young-creative-people-with-laptop-sketches-discussing-new-project-together-group-guys-gals-working-modern-cozy-office.jpg"
                        alt="image">
                    </div>
                    <div class="angle_shadow"></div>
                    <div class="block_dotted">
                      <img class="img-fluid" src="assets/images/home_page/Framee.png" alt="image">
                    </div>
                  </div>

                </div>
              </div>

            </div>
            <div class="blue_shadow"></div>
          </div>
        </div>

      </div>

      <div class="our_expert section_spacing">
        <!-- <div class="container-fluid"> -->
        <div class="bg_image_block">
          <div class="desk_expert d-md-block d-none">
            <div class="row p-0 m-0 ">
              <div class="col-md-1 p-0">
                <div class="our_expert_text">
                  <div class="text_block">
                    <p>Our&nbsp;Expertise </p>
                  </div>
                </div>
              </div>
              <div class="col-md-11 p-0 ">
                <div class="expert_right">

                  <div class="tab">
                    <button class="tablinks" onclick="openCity(event, 'ecome')" id="defaultOpen">E-Commerce</button>
                    <button class="tablinks" onclick="openCity(event, 'mobile')">Mobile App</button>
                    <button class="tablinks" onclick="openCity(event, 'tech')">Technologies</button>
                  </div>

                  <div id="ecome" class="tabcontent">
                    <div class="big_screen">
                      <div class="fisrt_block polygon" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/shopy.png" alt="shopy">
                      </div>
                      <div class="second_block polygon" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/presta.png" alt="presta">
                      </div>
                      <div class="third_block polygon" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/vtech.png" alt="vtech">
                      </div>
                      <div class="four_block polygon" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/woo.png" alt="woo">
                      </div>
                      <div class="five_block polygon" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/magento.png" alt="magento">
                      </div>
                    </div>
                  </div>

                  <div id="mobile" class="tabcontent">
                    <div class="big_screen">
                      <div class="fisrt_block polygon" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/anrod.png" alt="android">
                      </div>
                      <div class="second_block polygon" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/React.png" alt="react">
                      </div>
                      <div class="third_block polygon" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/round.png" alt="round">
                      </div>
                      <div class="four_block polygon bgblck" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/apple.png" alt="aple">
                      </div>
                      <div class="five_block polygon" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/arrw.png" alt="arrw">
                      </div>
                    </div>
                  </div>

                  <div id="tech" class="tabcontent">
                    <div class="big_screen">
                      <div class="fisrt_block polygon orngrlight" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/drpl.png" alt="drupl">
                      </div>
                      <div class="second_block polygon lightblue" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/html.png" alt="html">
                      </div>
                      <div class="third_block polygon prple" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/php.png" alt="php">
                      </div>
                      <div class="four_block polygon yellow" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/javas.png" alt="js">
                      </div>
                      <div class="five_block polygon lightpink" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/angular.png" alt="angulr">
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>

          <div class="expert_mobile d-md-none d-block ">
            <div class="text_block">
              <p>Our&nbsp;Expertise </p>
            </div>
            <div class="tabs effect-1">
              <!-- tab-title -->
              <input type="radio" id="tab-1" name="tab-effect-1" checked="checked">
              <span>E-Comerce</span>

              <input type="radio" id="tab-2" name="tab-effect-1">
              <span>Mobile App</span>

              <input type="radio" id="tab-3" name="tab-effect-1">
              <span>Technologies </span>

              <input type="radio" id="tab-4" name="tab-effect-1">
              <span> </span>

              <input type="radio" id="tab-5" name="tab-effect-1">
              <span> </span>


              <!-- tab-content -->
              <div class="tab-content">
                <section id="tab-item-1">
                  <div class="row mobile_screen ">
                    <div class="col-12">
                      <div class="fisrt_block_m polygon_m" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/shopy.png" alt="shopy">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="second_block_m polygon_m" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/presta.png" alt="presta">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="third_block_m polygon_m" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/vtech.png" alt="vtech">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="four_block_m polygon_m" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/woo.png" alt="woo">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="five_block_m polygon_m" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/magento.png" alt="magento">
                      </div>
                    </div>

                  </div>
                </section>
                <section id="tab-item-2">
                  <div class="row mobile_screen ">
                    <div class="col-12">
                      <div class="fisrt_block_m polygon_m" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/anrod.png" alt="android">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="second_block_m polygon_m" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/React.png" alt="react">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="third_block_m polygon_m" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/round.png" alt="round">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="four_block_m polygon_m bgblck" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/apple.png" alt="aple">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="five_block_m polygon_m" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/arrw.png" alt="arrw">
                      </div>
                    </div>

                  </div>
                </section>
                <section id="tab-item-3">
                  <div class="row mobile_screen ">
                    <div class="col-12">
                      <div class="fisrt_block_m polygon_m orngrlight" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/drpl.png" alt="drupl">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="second_block_m polygon_m lightblue" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/html.png" alt="html">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="third_block_m polygon_m prple" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/php.png" alt="php">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="four_block_m polygon_m yellow" data-aos="fade-down" data-aos-easing="linear"
                        data-aos-duration="1500">
                        <img class="img-fluid" src="assets/images/home_page/javas.png" alt="js">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="five_block_m polygon_m lightpink" data-aos="fade-up" data-aos-duration="3000">
                        <img class="img-fluid" src="assets/images/home_page/angular.png" alt="angulr">
                      </div>
                    </div>

                  </div>
                </section>
              </div>
            </div>
          </div>

          <!-- </div> -->
        </div>
      </div>

            <div class="second_expert_block section_spacing">
        
          <div class="main_heading">
            <h2>Our Expertise </h2>
          </div>
        <div class="inner_expert_block">
            <div class="container-fluid">
              <div class="slick-carouseles">
                <div>
                   <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">
                    <div class="image_block">
                      <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/1156668_android_logo_interface_icon.png" alt="images">
                    </div>
                    <div class="content_block android">
                        <h5>Android</h5>
                        <p>Android is a leading open source operating system that is used for Smart Phones, Smart Wearable Devices, Smart TVs & Mobile Tablets.</p>
                         <div class="read_mor">
                          <button class="button btn_readmore">Read More</button>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                 <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                    <div class="image_block">
                      <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/1010043_code_development_logo_magento_icon.png" alt="images">
                    </div>
                    <div class="content_block magento">
                        <h5>Magento</h5>
                        <p>Development using the popular Open Source E-Commerce Solution “Magento” for integration of E-Commerce Functionality.</p>
                         <div class="read_mor">
                          <button class="button btn_readmore">Read More</button>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                 <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">
                    <div class="image_block ">
                      <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/1156660_ecommerce_logo_shopify_icon.png" alt="images">
                    </div>
                    <div class="content_block Shopify">
                        <h5>Shopify</h5>
                        <p>Shopify allows for a suite of various services which include (but are not limited to) payments, shipping & customer engagement sub-services</p>
                         <div class="read_mor">
                          <button class="button btn_readmore">Read More</button>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                 <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                    <div class="image_block">
                      <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/1269843_app_development_framework_htm_hybrid_icon.png" alt="images">
                    </div>
                    <div class="content_block ionic">
                        <h5>Ionic</h5>
                        <p>Mobile (iOS or Android) & Web, using the Ionic Framework.
                          A framework that is more than just a library of UI Components</p>
                         <div class="read_mor">
                          <button class="button btn_readmore">Read More</button>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                 <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">
                    <div class="image_block">
                      <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/physics.png" alt="images">
                    </div>
                    <div class="content_block Reactative">
                        <h5>React Native</h5>
                        <p>Application development for both or either of the platforms, as best fits the target platform of the Application, i.e. Web Based or Native or Both.</p>
                         <div class="read_mor">
                          <button class="button btn_readmore">Read More</button>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                 <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                    <div class="image_block red">
                      <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/NativeScript_logo.png" alt="images">
                    </div>
                    <div class="content_block nativescript">
                        <h5>Native Script</h5>
                        <p>Using NativeScript allows for a faster application implementation cycle, as a process for development is in many ways quite similar to that of the development process of any web projects.</p>
                         <div class="read_mor">
                          <button class="button btn_readmore">Read More</button>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                 <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">
                    <div class="image_block">
                      <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/nodee.png" alt="images">
                    </div>
                    <div class="content_block nodejs">
                        <h5>Node Js</h5>
                        <p>Node.js is a truly generic development & service platform which utilizes the Open Source V8 Engine from Google Inc.</p>
                         <div class="read_mor">
                          <button class="button btn_readmore">Read More</button>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                 <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                    <div class="image_block">
                      <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/pngegg.png" alt="images">
                    </div>
                    <div class="content_block apidev">
                        <h5>API</h5>
                        <p>Social Media API Integration,SMS API Integration,Payment Gateway API Integration,Shipping API Integration,SOAP & REST API</p>
                         <div class="read_mor">
                          <button class="button btn_readmore">Read More</button>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                 <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">
                    <div class="image_block">
                      <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/WooCommerce_logo 1.png" alt="images">
                    </div>
                    <div class="content_block WooComerce">
                        <h5>WOO COMMERCE</h5>
                        <p>E-Commerce functionality for your WordPress based Web Application using the popular WooCommerce.</p>
                         <div class="read_mor">
                          <button class="button btn_readmore">Read More</button>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                 <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                    <div class="image_block">
                      <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/Laravel 1.png" alt="images">
                    </div>
                    <div class="content_block laravel">
                        <h5>Laravel</h5>
                        <p>Web Application implemented with Laravel which is a mature and reliable framework for those seeking to Launch their Web Site with a clear and concise picture in mind.</p>
                         <div class="read_mor">
                          <button class="button btn_readmore">Read More</button>
                         </div>
                      </div>
                   </div>
                </div> 
                <div>
                 <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">
                    <div class="image_block">
                      <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/yii3_sign 1.png" alt="images">
                    </div>
                    <div class="content_block yii">
                        <h5>Yii</h5>
                        <p>YII allows for simple routing, as it is very much providing default route actions, which result in a huge gain.</p>
                         <div class="read_mor">
                          <button class="button btn_readmore">Read More</button>
                         </div>
                      </div>
                   </div>
                </div>
                <div>
                  <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/We-bake-with-CakePHP 1.png" alt="images">
                     </div>
                     <div class="content_block CakePHP">
                         <h5>CakePHP</h5>
                         <p>CakePHP`s faster performance with projects having a certain dataset or size.</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                 </div>
                <div>
                  <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/Group 16 10.png" alt="images">
                     </div>
                     <div class="content_block uiux">
                         <h5>UI/UX Design</h5>
                         <p>UI/UX Design solutions with consistent uniqueness, design which lead to intrigue and also are easy on the visual aspect, if not downright pleasing</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                </div>
                <div>
                  <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/WordPress_blue_logo 1.png" alt="images">
                     </div>
                     <div class="content_block WordPress">
                         <h5>WordPress</h5>
                         <p>ordPress has been a Content Management System (CMS), which allows managing a wide variety of Content.</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                </div>
                 <div>
                  <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/Laravel 1.png" alt="images">
                     </div>
                     <div class="content_block laravel">
                         <h5>Laravel E-commerce</h5>
                         <p>e Laravel can be used to provide E-Commerce functionality from Scratch, there are a plethora of E-Commerce Packages available.</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                 </div> 
                 <div>
                  <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/Prestashop 1.png" alt="images">
                     </div>
                     <div class="content_block Prestashop">
                         <h5>Presta Shop</h5>
                         <p>Prestashop is an open source-based e-commerce solution that allows for brand based deployment of your Web Application.</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                 </div> 
                 <div>
                  <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/fluter.png" alt="images">
                     </div>
                     <div class="content_block Flutter">
                         <h5>Flutter</h5>
                         <p>Flutter is just one of the various toolsets that we use to develop and deliver to this end.</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                 </div> 
                 <div>
                  <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/apple 1.png" alt="images">
                     </div>
                     <div class="content_block iosnative">
                         <h5>IOS Native</h5>
                         <p>Mobile Application is deliberately scaled back to provide App Services only for IOS based mobile devices.</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                 </div> 
                 <div>
                  <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/php.png" alt="images">
                     </div>
                     <div class="content_block php">
                         <h5>PHP</h5>
                         <p>Web Application Services and customization / implementation of Dynamic Websites using PHP scripting language.</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                 </div> 
                 <div>
                  <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/Angular_full_color_logo 1.png" alt="images">
                     </div>
                     <div class="content_block Angular">
                         <h5>Angular</h5>
                         <p> “Angular” technology both as a standalone solution and also as a light flexible framework for UI based implementation of Front – Ends</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div>
                  <div class="block_outer" data-aos="fade-up" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/React 3.png" alt="images">
                     </div>
                     <div class="content_block React">
                         <h5>React</h5>
                         <p> React is available as “a Javascript Library” & also as a mobile application framework, i.e. React JS & React Native, respectively.</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div>
                  <div class="block_outer" data-aos="fade-down" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/CODEIGNITOR 1.png" alt="images">
                     </div>
                     <div class="content_block CodeIgniter">
                         <h5>CodeIgniter</h5>
                         <p>“CodeIgniter” in various projects as per the applicable suitability of the concerned client & client`s project.</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div>
                  <div class="block_outer"  data-aos="fade-up" data-aos-duration="3000">
                     <div class="image_block">
                       <img class="img-fluid wobble-hor-bottom" src="assets/images/technology/HTML-CSS 1.png" alt="images">
                     </div>
                     <div class="content_block htmlcss">
                         <h5>HTML/CSS</h5>
                         <p>he Primary Information Technology Service that is provided is for Development, Implementations of Customized Applications.</p>
                          <div class="read_mor">
                           <button class="button btn_readmore">Read More</button>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
            </div>
        </div>
      </div>

      <div class="testimonial">
        <div class="inner_testimonial">
          <div class="container">
            <div class="leaves">
              <!-- <img class="img-fluid" src="assets/images/home_page/leav.png" alt="leave"> -->
              <div class="three_leavs">
                <img class="img-fluid img1" src="assets/images/home_page/orange-leavs.png" alt="leave"
                  data-aos="fade-down-right" data-aos-duration="1000">
                <img class="img-fluid img2" src="assets/images/home_page/yellow-leavs.png" alt="leave"
                  data-aos="flip-up" data-aos-duration="1000">
                <img class="img-fluid img3" src="assets/images/home_page/blue-leavs.png" alt="leave"
                  data-aos="fade-down-left" data-aos-duration="1000">
              </div>
            </div>
            <div class="slick-testimonial">
              <div>
                <div class="slide_block text-center">
                  <p>We Developed a great partnership with IT IDOL TECHNOLOGIES and their dedication to our website is
                    evident in all aspects of the site. We appreciate their attention to detail and creative approach to
                    bringing our new exhibit to life online. </p>
                  <h4>PEGGY MARTIN SD
                    <br> VEND
                  </h4>
                </div>
              </div>
              <div>
                <div class="slide_block text-center">
                  <p>We Developed a great partnership with IT IDOL TECHNOLOGIES and their dedication to our website is
                    evident in all aspects of the site. We appreciate their attention to detail and creative approach to
                    bringing our new exhibit to life online. </p>
                  <h4>PEGGY MARTIN SD
                    <br> VEND
                  </h4>
                </div>
              </div>
              <div>
                <div class="slide_block text-center">
                  <p>We Developed a great partnership with IT IDOL TECHNOLOGIES and their dedication to our website is
                    evident in all aspects of the site. We appreciate their attention to detail and creative approach to
                    bringing our new exhibit to life online. </p>
                  <h4>PEGGY MARTIN SD
                    <br> VEND
                  </h4>
                </div>
              </div>
              <div>
                <div class="slide_block text-center">
                  <p>We Developed a great partnership with IT IDOL TECHNOLOGIES and their dedication to our website is
                    evident in all aspects of the site. We appreciate their attention to detail and creative approach to
                    bringing our new exhibit to life online. </p>
                  <h4>PEGGY MARTIN SD
                    <br> VEND
                  </h4>
                </div>
              </div>
              <div>
                <div class="slide_block text-center">
                  <p>We Developed a great partnership with IT IDOL TECHNOLOGIES and their dedication to our website is
                    evident in all aspects of the site. We appreciate their attention to detail and creative approach to
                    bringing our new exhibit to life online. </p>
                  <h4>PEGGY MARTIN SD
                    <br> VEND
                  </h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="contact_form section_spacing">
        <div class="inner_block_contact">
          <div class="container">
            <form class="form_outer">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group mb-5">
                    <input type="text" class="form-control" placeholder="Name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-5">
                    <input type="email" class="form-control" placeholder="E-mail">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-5">
                    <select class="form-select form-control" aria-label="Default select example">
                      <option selected>Open this select menu</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group mb-5">
                    <input type="tel" class="form-control" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}"
                      placeholder="Phone number">
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group mb-5">
                    <textarea class="form-control" rows="3" placeholder="Message"></textarea>
                  </div>
                  <div class="button_submit text-center">
                    <button class="button btn-secondary ">Send Query</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="orange_belt"></div>
      </div>
     
    </div>
  </div>


<script>
  document.getElementById("defaultOpen").click();
  AOS.init({
    duration: 1000,
  });
</script>
<?php

get_footer();
?>