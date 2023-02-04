 <?php
 /* Template Name: Test Template */

 get_header();
 ?>
 <div class="main_block">
   <div class="inner_main_block">
      <div class="portfolioslider_main_section">
         <div class="inner_portfolioslider">                  
            <div class="portfolioslider_main_page mt80">
               <div class="inner_portfolioslider_page">
                  <div class="container">
                     <div class="top_header">
                        <div class="page_header_main">
                           <h3><?php echo get_the_title(); ?></h3>
                       </div>
                       <p><?php echo get_the_content(); ?></p>
                   </div>
                   <!-- Image loader -->
                   <div id="wait" style="display:none;width:69px;height:89px;position:absolute;top:50%;left:50%;padding:2px;"><img src='<?php echo get_template_directory_uri(); ?>/assets/images/portfolioslider/demo_wait.gif' width="64" height="64" /></div>
                   <!-- Image loader -->
                   <div class="blog_list_detail ">
                    <div class="blog_list_page">
                       <input type="hidden" id="page_no_hidden" value="1">

                       <div class="table_center">
                           <div class="drop-down">
                                                  <div id="dropDown" class="drop-down__button">
                                                       <span class="drop-down__name">Account settings</span>
                                                   </div>
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
                                                                                                                         
                                                                  <div class="drop-down__menu" id="dropdownmenu">
                                                                   <button data-name="All" data-id="All" class="drop-down__item active" onclick="filtercategory()" id="defaultOpen">All</button>
                                                                  <?php
                                                                  foreach ( $terms as $term ){                                                               
                                                                   ?> 
                                                                    <button data-name="<?php echo $term->name; ?>" class="drop-down__item" data-id="<?php echo $term->slug; ?>" onclick="filtercategory()"><a><?php echo $term->name; ?></a></button>                                                                   
                                                               <?php } ?>
                                
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                           <div class="blogs_listing section_spacing" id="our_work_content">

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