 <?php
 /* Template Name: Portfolio Slider Template */

 get_header();

 ?>


 <div class="main_block">
     <div class="inner_main_block">
          <div class="portfolioslider_main_section">
               <div class="inner_portfolioslider">                  
                    <div class="portfolioslider_main_page mt80">
                         <div class="inner_portfolioslider_page" style="position: relative;">
                              <div class="container">
                                   <div class="top_header">
                                        <div class="page_header_main">
                                             <h3><?php echo get_the_title(); ?></h3>
                                        </div>
                                        <p><?php echo get_the_content(); ?></p>
                                   </div>
                                   <!-- Image loader -->
                                   <div id="wait" style="display:block;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;transform: translate(-60%, 105%);z-index: 999;"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/portfolioslider/demo_wait.gif' width="64" height="64" /></div>
                                   
                                   <!-- Image loader -->

                                   <input type="hidden" id="page_no_hidden" value="1">

                                   <?php
                                   $term_args = 
                                   array(
                                       'post_type'              => 'work',
                                       'taxonomy'               => 'categories',
                                       'hide_empty'             => true,
                                       'fields'                 => 'all'
                                  );
                                   $term_query = new WP_Term_Query( $term_args );
                                   $taxonomy = 'categories';
                                    $terms = get_terms($taxonomy); // Get all terms of a taxonomy
                                    ?>
                                    <div class="blog_list_detail ">
                                        <div class="blog_list_page">
                                             <input type="hidden" id="page_no_hidden" value="1">
                                             <ul class="nav" id="dropdownmenu">
                                              <li  data-name="All" data-id="All" class="drop-down__item active" onclick="filtercategory()" id="defaultOpen">
                                                  <a class="">
                                                  <!-- <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                  <path d="M43.0927 19.6955C46.0677 21.008 46.0677 23.178 43.0927 24.4905L32.7677 29.0755C31.5952 29.6005 29.6702 29.6005 28.4977 29.0755L18.1727 24.4905C15.1977 23.178 15.1977 21.008 18.1727 19.6955L28.4977 15.1105C29.6702 14.5855 31.5952 14.5855 32.7677 15.1105L43.0927 19.6955Z" stroke="#1176BB" stroke-width="2.625" stroke-linecap="round" stroke-linejoin="round"/>
                                                  <path d="M15.25 29.25C15.25 30.72 16.3525 32.4175 17.7 33.0125L29.5825 38.2975C30.4925 38.7 31.525 38.7 32.4175 38.2975L44.3 33.0125C45.6475 32.4175 46.75 30.72 46.75 29.25" stroke="#1176BB" stroke-width="2.625" stroke-linecap="round" stroke-linejoin="round"/>
                                                  <path d="M15.25 38C15.25 39.6275 16.2125 41.0975 17.7 41.7625L29.5825 47.0475C30.4925 47.45 31.525 47.45 32.4175 47.0475L44.3 41.7625C45.7875 41.0975 46.75 39.6275 46.75 38" stroke="#1176BB" stroke-width="2.625" stroke-linecap="round" stroke-linejoin="round"/>
                                                  </svg> -->
                                                  ALL
                                                  </a>
                                             </li>
                                             <?php
                                             foreach ( $terms as $term ){ 
                                                  $termName = $term->name;                                                
                                                  if($termName == 'Mobile Apps') { 
                                                       ?> 
                                                       <li  data-name="<?php echo $term->name; ?>" class="drop-down__item" data-id="<?php echo $term->slug; ?>" onclick="filtercategory()">
                                                            <!-- <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                 <path d="M46.4108 40.4951C46.4108 48.0951 44.511 49.9951 36.9117 49.9951H25.5128C17.9135 49.9951 16.0137 48.0951 16.0137 40.4951V21.4951C16.0137 13.8951 17.9135 11.9951 25.5128 11.9951H36.9117C44.511 11.9951 46.4108 13.8951 46.4108 21.4951V40.4951Z" stroke="#1176BB" stroke-width="2.84982" stroke-linecap="round" stroke-linejoin="round"/>
                                                                 <path d="M35.0153 18.6475H27.416" stroke="#1176BB" stroke-width="2.84982" stroke-linecap="round" stroke-linejoin="round"/>
                                                                 <path fill-rule="evenodd" clip-rule="evenodd" d="M31.2143 44.4837C29.5879 44.4837 28.2695 43.1652 28.2695 41.5387C28.2695 39.9123 29.5879 38.5938 31.2143 38.5938C32.8406 38.5938 34.159 39.9123 34.159 41.5387C34.159 43.1652 32.8406 44.4837 31.2143 44.4837Z" stroke="#1176BB" stroke-width="2.84982" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg> -->
                                                            <a class=""><?php echo $term->name; ?></a>
                                                       </li>
                                                  <?php }else { ?>
                                                       <li  data-name="<?php echo $term->name; ?>" class="drop-down__item" data-id="<?php echo $term->slug; ?>" onclick="filtercategory()">
                                                            <!-- <svg width="62" height="62" viewBox="0 0 62 62" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M41.3176 11.7886C48.081 11.7886 49.7718 13.4796 49.7718 20.2246V32.2515C49.7718 39.0155 48.081 40.6875 41.3366 40.6875H20.2106C13.4662 40.7065 11.7754 39.0155 11.7754 32.2705V20.2246C11.7754 13.4796 13.4662 11.7886 20.2106 11.7886H41.3176Z" stroke="#1176BB" stroke-width="2.84982" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M30.7676 40.709V49.791" stroke="#1176BB" stroke-width="2.84982" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M11.7754 32.6904H49.7718" stroke="#1176BB" stroke-width="2.84982" stroke-linecap="round" stroke-linejoin="round"/>
                                                            <path d="M22.2129 49.7915H39.3113" stroke="#1176BB" stroke-width="2.84982" stroke-linecap="round" stroke-linejoin="round"/>
                                                            </svg> -->
                                                            <a class=""><?php echo $term->name; ?></a>
                                                       </li>
                                                  <?php }} ?>
                                             </ul>
                                        </div>
                                        <div class="blogs_listing" id="our_work_content">

                                        </div>
                                   </div>
                              </div>
                         </div>                              
                    </div>
               </div>
          </div>
     </div>
</div>


<!-- Modal -->
<div class="modal fade portfolio_modal" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false"
tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog  modal-xl modal-dialog-centered">
     <div class="modal-content">
          <div class="modal-header">
               <a type="button" data-bs-dismiss="modal" aria-label="Close"><i class="ti ti-close"></i></a>
          </div>                    
          <div class="modal-body" id="viewPopup"></div>
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