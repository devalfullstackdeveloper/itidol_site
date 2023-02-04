<?php
/* Enqueue script and styles*/
//Custom script call.
function customadmin_script() 
{
  //JS
 wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . '/assets/js/customtheme.js', array( 'jquery' ) );
}  
add_action( 'admin_enqueue_scripts', 'customadmin_script' );

function itidol_scripts() 
{

  // CSS
  wp_enqueue_style( 'itidol-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
  wp_enqueue_style( 'itidol-style', get_template_directory_uri() . '/assets/css/style.css' );
  wp_enqueue_style( 'itidol-themify', get_template_directory_uri() . '/assets/css/themify.css' );
  wp_enqueue_style( 'itidol-aos', get_template_directory_uri() . '/assets/css/aos.css' );
  wp_enqueue_style( 'itidol-slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.min.css' );
  wp_enqueue_style( 'itidol-slick', get_template_directory_uri() . '/assets/css/slick.css' );
  // JS
  wp_enqueue_script( 'itidol-jquery', get_template_directory_uri() . '/assets/js/jquery.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'itidol-bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'itidol-flowtype', get_template_directory_uri() . '/assets/js/flowtype.js', array( 'jquery' ) );
  wp_enqueue_script( 'itidol-slick', get_template_directory_uri() . '/assets/js/slick.min.js', array( 'jquery' ) );
  wp_enqueue_script( 'itidol-aos', get_template_directory_uri() . '/assets/js/aos.js', array( 'jquery' ) );
  wp_enqueue_script( 'itidol-main', get_template_directory_uri() . '/assets/js/main.js', array( 'jquery' ) );
  wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . '/assets/js/customtheme.js', array( 'jquery' ) );


//   $admin_url= get_admin_url().'admin-ajax.php';
//   wp_localize_script( 'itidol-script', 'ajax_object', array(
//     'ajaxurl' =>$admin_url,
// ));
  
}  
add_action( 'wp_enqueue_scripts', 'itidol_scripts' );

/*Remove the version from script/css*/
function remove_css_js_version( $src ) {
  if( strpos( $src, '?ver=' ) )
    $src = remove_query_arg( 'ver', $src );
  return $src;
}
add_filter( 'style_loader_src', 'remove_css_js_version', 9999 );
add_filter( 'script_loader_src', 'remove_css_js_version', 9999 );

/* customizer section */
function theme_mycustom_customizer($wp_customize){

  // Header Logo section
  $wp_customize->add_setting('your_theme_logo');
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'your_theme_logo',
    array(
      'label' => 'Header Logo',
      'section' => 'title_tagline',
      'settings' => 'your_theme_logo',
    ) ) );

    // site favicon Logo 
  $wp_customize->add_setting('favicon_logo');
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'favicon_logo',
    array(
      'label' => 'Favicon Logo',
      'section' => 'title_tagline',
      'settings' => 'favicon_logo',
    ) ) );

 //  // Header Contact section
 //  $wp_customize->add_section('contact_section', array(
 //    'title'  => 'Header Contact Mail',
 //    'description' => __( 'Add content here' ),
 //    'priority' => 160,
 //  ));
 //  $wp_customize->add_setting('text_setting', array(
 //   'default' => '',
 // ));
 //  $wp_customize->add_control('text_setting', array(
 //   'section' => 'contact_section',
 //   'type'    => 'text',
 // ));

// Footer Logo section.
  $wp_customize->add_setting('footer_logo');
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'footer_logo',
    array(
      'label' => 'Footer Logo',
      'section' => 'title_tagline',
      'settings' => 'footer_logo',
    ) ) );

  /*Social link section*/
  $wp_customize->add_section('Social_section', array(
    'title'  => 'Footer Social Links',
    'description' => __( 'Social' ),
    'priority' => 160,
  ));
  $wp_customize->add_control( array(
   'section' => 'Social_section',
 ));

  /*Facebook section*/
  $wp_customize->add_setting('facebook_icon'); // facebook logo 
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'facebook_icon',
    array(
      'label' => 'Facebook Logo',
      'section' => 'Social_section',
      'settings' => 'facebook_icon',
    ) ) );

  $wp_customize->add_setting('facebook_social_setting', array(
   'default' => '',
 ));
  $wp_customize->add_control('facebook_social_setting', array(
    'label'  => 'Facebook URL',
    'section' => 'Social_section',
    'type'    => 'text',
  ));

  /* Linkedin Section*/
  $wp_customize->add_setting('linkedin_icon'); // facebook logo 
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'linkedin_icon',
    array(
      'label' => 'Linkedin Logo',
      'section' => 'Social_section',
      'settings' => 'linkedin_icon',
    ) ) );

  $wp_customize->add_setting('linkedin_social_setting', array(
   'default' => '',
 ));
  $wp_customize->add_control('linkedin_social_setting', array(
    'label'  => 'Linkedin URL',
    'section' => 'Social_section',
    'type'    => 'text',
  ));

  /* Twitter Section*/
  $wp_customize->add_setting('twitter_icon'); // facebook logo 
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'twitter_icon',
    array(
      'label' => 'Twitter Logo',
      'section' => 'Social_section',
      'settings' => 'twitter_icon',
    ) ) );

  $wp_customize->add_setting('twitter_social_setting', array(
   'default' => '',
 ));
  $wp_customize->add_control('twitter_social_setting', array(
    'label'  => 'Twitter URL',
    'section' => 'Social_section',
    'type'    => 'text',
  ));

  /* Instagram Section*/
  $wp_customize->add_setting('instagram_icon'); // facebook logo 
  $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'instagram_icon',
    array(
      'label' => 'Instagram Logo',
      'section' => 'Social_section',
      'settings' => 'instagram_icon',
    ) ) );

  $wp_customize->add_setting('instagram_social_setting', array(
   'default' => '',
 ));
  $wp_customize->add_control('instagram_social_setting', array(
    'label'  => 'Instagram URL',
    'section' => 'Social_section',
    'type'    => 'text',
  ));

  //Editor Contact Us section on footer
  $wp_customize->add_section('footer_section', array(
    'title'  => 'Footer Contact',
    'priority' => 170,
  ));
  $wp_customize->add_setting('contact_setting', array(
   'default' => '',
 ));
  $wp_customize->add_control(new WP_Customize_Teeny_Control( $wp_customize, 'contact_setting',
    array(
      'label' => 'Footer section',
      'section' => 'footer_section',
      'settings' => 'contact_setting',
    )));
}
add_action('customize_register', 'theme_mycustom_customizer');

//For Custom Editor  
if (class_exists('WP_Customize_Control')) {
  class WP_Customize_Teeny_Control extends WP_Customize_Control {
    function __construct($manager, $id, $options) {
      parent::__construct($manager, $id, $options);

      global $num_customizer_teenies_initiated;
      $num_customizer_teenies_initiated = empty($num_customizer_teenies_initiated)
      ? 1
      : $num_customizer_teenies_initiated + 1;
    }
    function render_content() {
      global $num_customizer_teenies_initiated, $num_customizer_teenies_rendered;
      $num_customizer_teenies_rendered = empty($num_customizer_teenies_rendered)
      ? 1
      : $num_customizer_teenies_rendered + 1;

      $value = $this->value();
      ?>
      <label>
        <span class="customize-text_editor"><?php echo esc_html($this->label); ?></span>
        <input id="<?php echo $this->id ?>-link" class="wp-editor-area" type="hidden" <?php $this->link(); ?> value="<?php echo esc_textarea($value); ?>">
        <?php
        wp_editor($value, $this->id, [
          'textarea_name' => $this->id,
          'media_buttons' => true,
          'drag_drop_upload' => true,
          'teeny' => true,
          'quicktags' => true,
          'textarea_rows' => 5,
              // MAKE SURE TINYMCE CHANGES ARE LINKED TO CUSTOMIZER
          'tinymce' => [
            'setup' => "function (editor) {
              var cb = function () {
                var linkInput = document.getElementById('$this->id-link')
                linkInput.value = editor.getContent()
                linkInput.dispatchEvent(new Event('change'))
              }
              editor.on('Change', cb)
              editor.on('Undo', cb)
              editor.on('Redo', cb)
              editor.on('KeyUp', cb) // Remove this if it seems like an overkill
            }"
          ]
        ]);
        ?>
      </label>
      <?php
      // PRINT THEM ADMIN SCRIPTS AFTER LAST EDITOR
      if ($num_customizer_teenies_rendered == $num_customizer_teenies_initiated)
        do_action('admin_print_footer_scripts');
    }
  }
}

/* For Menu */
function my_theme_setup() {
  register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer_link' => 'Footer Link',
  ) );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

// Auto-Draft post delete

// function wp_delete_autodraft() {
//     global $wpdb;

//     // Delete auto-drafts.
//     $old_posts = $wpdb->get_col( "SELECT ID FROM $wpdb->posts WHERE post_status = 'draft'" );
//     foreach ( (array) $old_posts as $delete ) {
//         // Force delete.
//         wp_delete_post( $delete, true );
//     }
// }
// add_action( 'init', 'wp_delete_autodraft' );

/*Custom Servive Post*/

function create_customservice() {
  register_post_type( 'service',
    array(
      'labels' => array(
       'name' => __( 'Service' ),
       'singular_name' => __( 'Service' ),
       'add_new' => _x('Add New Service', 'add new'),
       'add_new_item' => __('Add New'),
       'edit_item' => __('Edit Service'),
       'all_items' => __('All Service'),
     ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'Service'),
      'supports' => array('title','editor','thumbnail') 
    )
  );
}
add_action( 'init', 'create_customservice' );

// Create Custom Metabox for Service Question Answer
function service_featured_add_custom_box() {
    $screens = [ 'service', 'Service_featured' ];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'Service_featured',                
            'Add Service_featured',      
            'check_box_html',  
            $screen                          
        );
    }

}
add_action( 'add_meta_boxes', 'service_featured_add_custom_box' );

function check_box_html( $post ) {

  wp_nonce_field(plugin_basename(__FILE__), 'wp_custom_attachment_nonce');

  $myvals = get_post_meta($post->ID);
  $checked_value = get_post_meta( $post->ID, 'is_tl', true );
    ?>
    <p class="meta-options hcf_field">
        <label for="hcf_is_tl">Is Service Featured</label>
         <input type="checkbox" id="is_tl" name="is_tl"  <?php if( $checked_value == '1' ) { ?>checked="checked"<?php } ?> >
    </p>

    <html>
      <div class="form-group count" id="team-add">
        <table class="table table-bordered" id="dynamic_field">
          <?php
          if(isset($myvals['wp_custom_ques']))
          {
          
            $i=1;
            foreach($myvals['wp_custom_ques'] as $key=>$val)

          {
          ?>
                    <tr id="row<?php echo $i;?>">
                        <td>
                          <label for="hcf_ques">Service Question</label>
                          <input id="hcf_ques" type="text" name="wp_custom_ques[]" value="<?php echo $myvals['wp_custom_ques'][$key] ?>" >
                        </td>
                        <td>
                          <label for="hcf_ans">Service Answer</label>
                          
                          <input id="hcf_ans" type="text" name="wp_custom_ans[]" value="<?php echo $myvals['wp_custom_ans'][$key] ?>">
                          
                        </td>
                        <td><button type="button" name="remove" id="<?php echo $i;?>" class="btn btn-danger btn_remove">X</button></td>
                    </tr>

                
            <?php  
            $i++;
          } ?>
            <button type="button" name="add" id="add" class="btn btn-success">Add More</button>
            <?php
        } 
        else 
        { ?> 
          <tr id="row<?php echo $i;?>">
                      <td>
                        <label for="hcf_ques">Service Question</label>
                        <input id="hcf_ques" type="text" name="wp_custom_ques[]">
                      </td>
                      <td>
                        <label for="hcf_ans">Service Answer</label>
                
                        <input id="hcf_ans" type="text" name="wp_custom_ans[]">
                      </td>          
                      <td><button type="button" name="add" id="add" class="btn btn-success">Add More</button></td>
                  </tr>
        <?php } ?>
      </table>
        </div>
    </html>
  
    <?php
}

// Save the checkbox value of meta box 
function save_meta_box( $post_id ) {

  
  global $wpdb;


   /* --- security verification --- */
        if(!wp_verify_nonce($_POST['wp_custom_attachment_nonce'], plugin_basename(__FILE__))) {
          return $post_id;
        } // end if

        if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
          return $post_id;
        } 

        if('page' == $_POST['post_type']) {
          if(!current_user_can('edit_page', $post_id)) {
            return $post_id;
          } 
        } else {
            if(!current_user_can('edit_page', $post_id)) {
                return $post_id;
            } 
        } 


  $fetch_results = $wpdb->get_results("select * FROM `wp_postmeta` WHERE `post_id`='$post_id' and meta_key IN('wp_custom_ques','wp_custom_ans')");
  foreach ($fetch_results as $key => $val) 
  {

    delete_post_meta( $post_id, 'wp_custom_ques', $fetch_results['wp_custom_ques'][$key]);
    delete_post_meta( $post_id, 'wp_custom_ans', $fetch_results['wp_custom_ans'][$key]);
  }

  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }   
    // Add more data stored   
    if(isset($_POST['wp_custom_ques'])){
      foreach ($_POST['wp_custom_ques'] as $key => $field) {  

        add_post_meta($post_id,'wp_custom_ques',$_POST['wp_custom_ques'][$key]);
        add_post_meta($post_id,'wp_custom_ans',$_POST['wp_custom_ans'][$key]);   
        
      }
    }
    // Checkbox value stored.
    $ischecked_tl= isset($_POST['is_tl'])? 1 : 0 ;
    update_post_meta( $post_id, 'is_tl', $ischecked_tl );

}
add_action( 'save_post', 'save_meta_box' );

// Create Custom Metabox for Why Choose Service
function why_choose_service_add_custom_box() {
    $screens = [ 'service', 'Service_why_choose' ];
    foreach ( $screens as $screen ) {
        add_meta_box(
            'Service_why_choose',                
            'Add Service_featured',      
            'check_box_html_why',  
            $screen                          
        );
    }

}
add_action( 'add_meta_boxes', 'why_choose_service_add_custom_box' );

function check_box_html_why( $post ) {

  $myvals = get_post_meta($post->ID);
  //$checked_value = get_post_meta( $post->ID, 'why_is_service', true );
    ?>

    <html>
      <div class="form-group count" id="team-add">
        <table class="table table-bordered" id="dynamic_field_choose">
          <?php
          if(isset($myvals['wp_custom_choose']))
          {
          
            $i=1;
            foreach($myvals['wp_custom_choose'] as $key=>$val)

          {
          ?>
                    <tr id="rowchoose<?php echo $i;?>">
                        <td>
                          <label for="hcf_ques">Why Choose</label>
                          <input id="hcf_ques" type="text" name="wp_custom_choose[]" value="<?php echo $myvals['wp_custom_choose'][$key] ?>" >
                        </td>
                        <td><button type="button" name="remove" id="<?php echo $i;?>" class="btn btn-danger btn_remove_choose">X</button></td>
                    </tr>                
            <?php  
            $i++;
          } ?>
            <button type="button" name="add" id="choose_add" class="btn btn-success">Add More</button>
            <?php
        } 
        else 
        { ?> 
          <tr id="rowchoose<?php echo $i;?>">
                      <td>
                        <label for="hcf_ques">Why Choose</label>
                        <input id="hcf_ques" type="text" name="wp_custom_choose[]">
                      </td>                               
                      <td><button type="button" name="add" id="choose_add" class="btn btn-success">Add More</button></td>
                  </tr>
        <?php } ?>
      </table>
        </div>
    </html>
  
    <?php
}

// Save the checkbox value of meta box 
function why_choose_save_meta_box( $post_id ) {
  global $wpdb;
   /* --- security verification --- */
        if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
          return $post_id;
        } 

        if('page' == $_POST['post_type']) {
          if(!current_user_can('edit_page', $post_id)) {
            return $post_id;
          } 
        } else {
            if(!current_user_can('edit_page', $post_id)) {
                return $post_id;
            } 
        } 


  $fetch_results = $wpdb->get_results("select * FROM `wp_postmeta` WHERE `post_id`='$post_id' and meta_key IN('wp_custom_choose')");
  foreach ($fetch_results as $key => $val) 
  {

    delete_post_meta( $post_id, 'wp_custom_choose', $fetch_results['wp_custom_choose'][$key]);
  }

  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( $parent_id = wp_is_post_revision( $post_id ) ) {
        $post_id = $parent_id;
    }   
    // Add more data stored   
    if(isset($_POST['wp_custom_choose'])){
      foreach ($_POST['wp_custom_choose'] as $key => $field) {  
        add_post_meta($post_id,'wp_custom_choose',$_POST['wp_custom_choose'][$key]);
      }
    }
    // Checkbox value stored.
    $ischecked_tl= isset($_POST['why_is_service'])? 1 : 0 ;
    update_post_meta( $post_id, 'why_is_service', $ischecked_tl );

}
add_action( 'save_post', 'why_choose_save_meta_box' );

/*Custom Feedback Post*/

function create_customfeedback() {
  register_post_type( 'feedback',
    array(
      'labels' => array(
       'name' => __( 'Feedbacks' ),
       'singular_name' => __( 'Feedbacks' ),
       'add_new' => _x('Add New Feedback', 'add new'),
       'add_new_item' => __('Add New'),
       'edit_item' => __('Edit Feedback'),
       'all_items' => __('All Feedbacks'),
     ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'Feedback'),
    )
  );
}
add_action( 'init', 'create_customfeedback' );

/*Custom Blog Post*/

function create_customblog() {
  register_post_type( 'Blog',
    array(
      'labels' => array(
       'name' => __( 'Blog' ),
       'singular_name' => __( 'Blog' ),
       'add_new' => _x('Add New Blog', 'add new'),
       'add_new_item' => __('Add New'),
       'edit_item' => __('Edit Blog'),
       'all_items' => __('All Blog'),
     ),
      'public' => true,
      'has_archive' => false,
      'rewrite' => array('slug' => 'Blog'),
      'supports' => array('title','editor','thumbnail') 
    )
  );
}
add_action( 'init', 'create_customblog' );

/* Custom Metabox For blog Post  */
function is_featured_add_custom_box() {
  $screens = [ 'Blog', 'is_featured' ];
  foreach ( $screens as $screen ) {
    add_meta_box(
      'is_featured',                
      'Set Blog as Feature',      
      'is_featured_post',  
      $screen                          
    );
  }

}
add_action( 'add_meta_boxes', 'is_featured_add_custom_box' );

function is_featured_post($post) { 

  $checked_value = get_post_meta( $post->ID, 'is_featured', true );
  ?>

  <div class="form-check">
   <label class="form-check-label" for="flexCheckDefault">Set as Feature</label>
   <input type="checkbox" value="" id="flexCheckDefault" name="is_featured"  <?php if( $checked_value == '1' ) { ?>checked="checked"<?php } ?> />
 </div>

 <?php
}

/* Save Featured Post */
function save_is_featured_post($post_id) {

  if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
    return $post_id;
  } 

  // check for correct user capabilities 
  if ( ! current_user_can( 'edit_post', $post_id ) ){
    return;
  }

  /* Checkbox value stored*/
  $ischecked_featured= isset($_POST['is_featured'])? 1 : 0 ;
  update_post_meta( $post_id, 'is_featured', $ischecked_featured );

}
add_action( 'save_post', 'save_is_featured_post' );


/*Custom Work Post*/
add_action('init', 'post_work_register');  

add_theme_support('post-thumbnails');
add_post_type_support( 'Work', 'thumbnail' );  
function post_work_register() {   

  $labels = array( 
    'name' => _x('Work', 'post type general name'), 
    'singular_name' => _x('Work Item', 'post type singular name'), 
    'add_new' => _x('Add New Work', 'work item'), 
    'add_new_item' => __('Add New Work Item'), 
    'edit_item' => __('Edit Work Item'), 
    'new_item' => __('New Work Item'), 

    'view_item' => __('View Work Item'), 
    'search_items' => __('Search Work'), 
    'not_found' => __('Nothing found'), 
    'not_found_in_trash' => __('Nothing found in Trash'), 
    'parent_item_colon' => '' ,
    'public' => true,
    'has_archive' => true
  );


  $args = array( 
    'labels' => $labels, 
    'public' => true, 
    'publicly_queryable' => true, 
    'show_ui' => true, 
    'query_var' => true, 
    'rewrite' => array( 'slug' => 'work', 'with_front'=> false ), 'capability_type' => 'post', 
    'hierarchical' => true, 
    'menu_position' => null, 
    'supports' => array('title','editor','thumbnail') 
  );   

  register_post_type( 'work' , $args ); 
  register_taxonomy("categories", array("work"), array("hierarchical" => true, "label" => "Add Work Categories", "singular_label" => "Category", "rewrite" => array( 'slug' => 'work', 'with_front'=> false )));
}

// Hide Editor from custom post
add_action( 'init', function() {
  remove_post_type_support( 'work', 'editor' );
  remove_post_type_support( 'feedback', 'editor' );
});

/*Display Popup on View more Blog page*/

add_action( 'wp_ajax_pagination_blog', 'pagination_blog' );
add_action( 'wp_ajax_nopriv_pagination_blog', 'pagination_blog' );

function pagination_blog () {
  global $post;
  $page_no = isset($_POST['page_no']) ? $_POST['page_no'] : $paged;
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
              <p><a class="text_underline" href="<?php the_permalink() ?>">Read More</a></p>
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
              <p><a class="text_underline" href="<?php the_permalink() ?>">Read More</a></p>
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

  <?php  exit(); }   

  /*Display Popup on View more Blog page*/

  add_action( 'wp_ajax_post_by_category', 'post_by_category' );
  add_action( 'wp_ajax_nopriv_post_by_category', 'post_by_category' );

  function post_by_category () {
    global $post;
    $post_id= isset($_POST['post_id']) ? $_POST['post_id'] : "";
    $post = get_post($post_id);
    $feildspostid = get_the_ID();
    $title = $post->post_title;
    //$sub_title = get_post_meta($feildspostid, 'work_sub_title', true); 
    $description = get_post_meta($feildspostid, 'work_description', true); 
    $work_image= get_the_post_thumbnail_url( $post_id);


    $html = '<div class="modal_block">
    <div class="row">
    <div class="col-md-6">
    <div class="inner_modal">
    <div class="images_block">
    <img class="img-fluid" src='.$work_image.' alt="image_modal">
    </div>
    </div>
    </div>
    <div class="col-md-6">
    <div class="outer_section">
    <div class="inner_modal">
    <div class="heading_section">
    
    <h3>'.$title.'</h3>
    </div>
    <div class="detail_section">
    <p>'.$description.'</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>';
    echo $html;
    exit();

  }    

  /*Display work post by filter*/

  add_action( 'wp_ajax_post_by_filter', 'post_by_filter' );
  add_action( 'wp_ajax_nopriv_post_by_filter', 'post_by_filter' );

  function post_by_filter () {
    global $post;
    global $wpdb;
    $category_slug= isset($_POST['cat_name']) ? $_POST['cat_name'] : "";
    $page_no = isset($_POST['page_no']) ? $_POST['page_no'] : $paged;

    if($category_slug=='All')
    {
      $args = array(  
        'post_type' => 'work',
        'posts_per_page' => 9, 
        'order'=>'ASC',
        'paged' => $page_no
      );
    }
    else{
      $args = array(
        'post_type' => 'work',
        'order'=>'ASC',
        'posts_per_page' => 9, 
        'paged' => $page_no,
        'tax_query' => array(
          array(
            'taxonomy' => 'categories',
            'field' => 'slug',
            'terms' => $category_slug
          )
        )
      );
    }

    $loop = new WP_Query( $args );
    ?>
    <div class="slider-nav">
      <div class="slider_outer_block">
        <div class="row">
          <?php 
          $i=2;
          $array_i = array($i);
          while ( $loop->have_posts() ) : $loop->the_post();        
            $feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); 
            if ($i % 2 == 0 ) {                                                            
              ?>
              <div class="col-lg-4 col-md-6  " data-aos="fade-up">
                <div class="inner_image_box" data-toggle="modal" data-target="#exampleModal">
                  <div class="potfolio_title">
                    <h3 class="porfolio_red"><?php the_title(); ?></h3>
                   
                  </div>
                  <?php if($feat_image){
                   ?>
                   <div class="images_portfolio_section">
                    <img class="img-fluid" alt="image_block" src=<?php  echo $feat_image; ?>>
                  </div>
                <?php } ?>
                <div class="portfolio_detail">
                  <button class="button btn-light" data-bs-toggle="modal" data-id="<?php echo $post->ID ?>" data-bs-target="#staticBackdrop" onclick="viewcategory(this)">View More</button>
                </div>
              </div>
            </div> 
          <?php } 
          else { ?>
            <div class="col-lg-4 col-md-6  " data-aos="fade-up">
              <div class="inner_image_box" data-toggle="modal" data-target="#exampleModal">
                <div class="potfolio_title">
                  <h3 class="porfolio_purple"><?php the_title(); ?></h3>
                  
                </div>
                <?php if($feat_image){
                 ?>
                 <div class="images_portfolio_section">
                  <img class="img-fluid" alt="image_block" src=<?php  echo $feat_image; ?>>
                </div>
              <?php } ?>
              <div class="portfolio_detail">
                <button class="button btn-light" data-bs-toggle="modal" data-id="<?php echo $post->ID ?>" data-bs-target="#staticBackdrop" onclick="viewcategory(this)">View More</button>
              </div>
            </div>
          </div> 
        <?php }
        $i+=3;
        array_push($array_i,$i);
      endwhile;
      wp_reset_postdata(); 
      ?>                                                              
    </div>
  </div>

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
<?php exit(); } 

// Latest blog display on detail page
function latest_post() {

  $args = array(
    'posts_per_page' => 3, /* post you need to display */
    'offset' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_type' => 'Blog', /* post type name */
    'post_status' => 'publish'
  );
  $query = new WP_Query($args);
  if ($query->have_posts()) :
    while ($query->have_posts()) : $query->the_post();
      $id = $query->post->ID;
      $feat_image = wp_get_attachment_url( get_post_thumbnail_id($id) );
      $content = wp_trim_words( get_the_content(), 40, '...' );
      ?>
      <div class="outer_bloging">
        <div class="row mt-5">
          <div class="col-md-6">
            <div class="used_blog">
              <?php if($feat_image){
                ?> 
                <img class="img-fluid"
                src="<?php  echo $feat_image; ?>"
                alt="blog">
              <?php } ?>
            </div>
          </div>
          <div class="col-md-6">
            <div class="content_blog_detail">
              <p><?php echo $content; ?></p>
              <p><a id="blog_post" data-id="<?php echo $id ?>" onclick="blogpostdisplay(this)">Read More<i class="ti ti-arrow-right"></i></a></p>
            </div>
          </div>
        </div>
      </div>                          
      <?php
    endwhile;
  endif;
}

add_shortcode('lastest-post', 'latest_post');

/*Blog Detail Post*/
add_action( 'wp_ajax_blog_detail', 'blog_detail' );
add_action( 'wp_ajax_nopriv_blog_detail', 'blog_detail' );

function blog_detail () {
  global $post;
  $post_id= isset($_POST['post_id']) ? $_POST['post_id'] : "";
  $post = get_post($post_id);
  $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
  $content = get_the_content();
  $author_id = get_post_field ('post_author', $post_id);
  $display_name = get_the_author_meta( 'display_name' , $author_id ); 
  $date = get_the_date();
  if (get_post_type( $post->ID ) == 'blog' )
    update_post_meta( $post->ID, '_last_viewed', current_time('mysql') );
  ?>

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
      <div class="heading_blog">
        <h3><?php the_title(); ?></h3>
      </div>
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

    <?php echo $content; ?>
    <!-- <div class="subheading_blogdetail">
      <h4 class="m-0"> <?php echo $display_name; ?> | <?php echo $date ?></h4>
    </div> -->
  </div>


  <?php  exit(); }

  /*validation title for Feedback Post*/
  add_action('save_post', 'feedback_save_post', 10, 2);

  function feedback_save_post( $feedback_id, $feedback ) {

    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE || $feedback->post_type != 'feedback') return;
    $errors = array();

  // Validation filters
    $title = $feedback->post_title;

    if ( ! $title ) {
      $errors['title'] = "The title is required";
    }

  // if we have errors lets setup some messages
    if (! empty($errors)) {

    // we must remove this action or it will loop for ever
      remove_action('save_post', 'feedback_save_post');

    // save the errors as option
      update_option('feedback_errors', $errors);

    // Change post from published to draft
      $feedback->post_status = 'draft';

    // update the post
      wp_update_post( $feedback );

    // we must add back this action
      add_action('save_post', 'feedback_save_post');

    // admin_notice is create by a $_GET['message'] with a number that wordpress uses to
    // display the admin message so we will add a filter for replacing default admin message with a redirect
      add_filter( 'redirect_post_location', 'feedback_post_redirect_filter' );
    }
  }

  function feedback_post_redirect_filter( $location ) {

  // remove $_GET['message']
    $location = remove_query_arg( 'message', $location );

  // add our new query sting
    $location = add_query_arg( 'feedback', 'error', $location );

  // return the location query string
    return $location;
  }

// Add new admin message
  add_action( 'admin_notices', 'feedback_post_error_admin_message' );

  function feedback_post_error_admin_message() {
    if ( isset( $_GET['feedback'] ) && $_GET['feedback'] == 'error' ) {
    // lets get the errors from the option feedback_errors
      $errors = get_option('feedback_errors');

    // now delete the option feedback errors
      delete_option('feedback_errors');

      $display = '<div id="notice" class="error"><ul>';

      // Because we are storing as an array we should loop through them
      foreach ( $errors as $error ) {
        $display .= '<li>' . $error . '</li>';
      }

      $display .= '</ul></div>';

    // finally echo out our display
      echo $display;

    // add some jQuery
      ?>
    
      <?php
    }
  }

  /*validation for Service Post*/
  add_action('save_post', 'service_save_post', 10, 2);

  function service_save_post( $service_id, $service ) {


    if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE || $service->post_type != 'service') return;
    $errors = array();

    // Validation filters
    $title = $service->post_title;
    $content = $service->post_content;


    if ( ! $title ) {
      $errors['title'] = "The title is required";
    }
    if ( ! $content ) {
      $errors['content'] = "The content is required";
    }
    if(!has_post_thumbnail()) {
     $errors['feature'] = "The Feature Image is required";
   } 

    // if we have errors lets setup some messages
   if (! empty($errors)) {

        // we must remove this action or it will loop for ever
    remove_action('save_post', 'service_save_post');

        // save the errors as option
    update_option('service_errors', $errors);

        // Change post from published to draft
    $service->post_status = 'draft';

        // update the post
    wp_update_post( $service );

        // we must add back this action
    add_action('save_post', 'service_save_post');

        // admin_notice is create by a $_GET['message'] with a number that wordpress uses to
        // display the admin message so we will add a filter for replacing default admin message with a redirect
    add_filter( 'redirect_post_location', 'service_post_redirect_filter' );
  }
}

function service_post_redirect_filter( $location ) {
    // remove $_GET['message']
  $location = remove_query_arg( 'message', $location );

    // add our new query sting
  $location = add_query_arg( 'service', 'error', $location );

    // return the location query string
  return $location;
}

// Add new admin message
add_action( 'admin_notices', 'service_post_error_admin_message' );

function service_post_error_admin_message() {
  if ( isset( $_GET['service'] ) && $_GET['service'] == 'error' ) {
        // lets get the errors from the option service_errors
    $errors = get_option('service_errors');

        // now delete the option service errors
    delete_option('service_errors');

    $display = '<div id="notice" class="error"><ul>';

        // Because we are storing as an array we should loop through them
    foreach ( $errors as $error ) {
      $display .= '<li>' . $error . '</li>';
    }

    $display .= '</ul></div>';
    echo $display;  
    ?>

    <?php
  }
}

/*validation for Blog Post*/
add_action('save_post', 'blog_save_post', 10, 2);

function blog_save_post( $blog_id, $blog ) {


  if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE || $blog->post_type != 'blog') return;
  $errors = array();

  // Validation filters
  $title = $blog->post_title;
  $content = $blog->post_content;


  if ( ! $title ) {
    $errors['title'] = "The title is required";
  }
  if ( ! $content ) {
    $errors['content'] = "The content is required";
  }
  if(!has_post_thumbnail()) {
   $errors['feature'] = "The Feature Image is required";
 }

    // if we have errors lets setup some messages
 if (! empty($errors)) {

        // we must remove this action or it will loop for ever
  remove_action('save_post', 'blog_save_post');

        // save the errors as option
  update_option('blog_errors', $errors);

        // Change post from published to draft
  $blog->post_status = 'draft';

        // update the post
  wp_update_post( $blog );

        // we must add back this action
  add_action('save_post', 'blog_save_post');

        // admin_notice is create by a $_GET['message'] with a number that wordpress uses to
        // display the admin message so we will add a filter for replacing default admin message with a redirect
  add_filter( 'redirect_post_location', 'blog_post_redirect_filter' );
}
}

function blog_post_redirect_filter( $location ) {
    // remove $_GET['message']
  $location = remove_query_arg( 'message', $location );

    // add our new query sting
  $location = add_query_arg( 'blog', 'error', $location );

    // return the location query string
  return $location;
}

// Add new admin message
add_action( 'admin_notices', 'blog_post_error_admin_message' );

function blog_post_error_admin_message() {
  if ( isset( $_GET['blog'] ) && $_GET['blog'] == 'error' ) {
        // lets get the errors from the option blog_errors
    $errors = get_option('blog_errors');

        // now delete the option blog errors
    delete_option('blog_errors');

    $display = '<div id="notice" class="error"><ul>';

        // Because we are storing as an array we should loop through them
    foreach ( $errors as $error ) {
      $display .= '<li>' . $error . '</li>';
    }

    $display .= '</ul></div>';
    echo $display;  
    ?>

    <?php
  }
}

/*validation for Work Post*/
add_action('save_post', 'work_save_post', 10, 2);

function work_save_post( $work_id, $work ) {

  if( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE || $work->post_type != 'work') return;
  $errors = array();

    // Validation filters
  $title = $work->post_title;

  if ( ! $title ) {
    $errors['title'] = "The title is required";
  }
  if(!has_post_thumbnail()) {
   $errors['feature'] = "The Feature Image is required";
 }
    // if we have errors lets setup some messages
 if (! empty($errors)) {

        // we must remove this action or it will loop for ever
  remove_action('save_post', 'work_save_post');

        // save the errors as option
  update_option('work_errors', $errors);

        // Change post from published to draft
  $work->post_status = 'draft';

        // update the post
  wp_update_post( $work );

        // we must add back this action
  add_action('save_post', 'work_save_post');

        // admin_notice is create by a $_GET['message'] with a number that wordpress uses to
        // display the admin message so we will add a filter for replacing default admin message with a redirect
  add_filter( 'redirect_post_location', 'work_post_redirect_filter' );
}
}

function work_post_redirect_filter( $location ) {
    // remove $_GET['message']
  $location = remove_query_arg( 'message', $location );

    // add our new query sting
  $location = add_query_arg( 'work', 'error', $location );

    // return the location query string
  return $location;
}

// Add new admin message
add_action( 'admin_notices', 'work_post_error_admin_message' );

function work_post_error_admin_message() {
  if ( isset( $_GET['work'] ) && $_GET['work'] == 'error' ) {
        // lets get the errors from the option work_errors
    $errors = get_option('work_errors');

        // now delete the option work errors
    delete_option('work_errors');

    $display = '<div id="notice" class="error"><ul>';

        // Because we are storing as an array we should loop through them
    foreach ( $errors as $error ) {
      $display .= '<li>' . $error . '</li>';
    }

    $display .= '</ul></div>';
    echo $display;  
    ?>

    <?php
  }
}

function members_skip_trash($post_id) {

  global $post;
  $post = $post->post_type;

    if (get_post_type($post_id) == $post) { // post type
        // Force delete
        wp_delete_post( $post_id, true );
    }
}
add_action('trashed_post', 'members_skip_trash');


// function add_active_class_to_menu_item($classes, $item) {
//     if (in_array('current-menu-item', $classes) ){
//         $classes[] = 'active ';
//     }
//     return $classes;
// }
// add_filter('nav_menu_css_class' , 'add_active_class_to_menu_item' , 10 , 2);

// add_filter('nav_menu_css_class', 'add_active_class', 10, 2 );

// function add_active_class($classes, $item) {
//   if( $item->menu_item_parent == 0 && in_array('current-menu-item', $classes) ) {
//     $classes[] = "active";
//   }

//   return $classes;
// }

add_filter('nav_menu_css_class', 'add_active_class', 10, 2 );

function add_active_class($classes, $item) {
  $class_names = array( 'current-menu-item', 'current-menu-ancestor', 'current-menu-parent', 'current_page_parent',  'current_page_ancestor' );

  if( $item->menu_item_parent == 0 && in_array( $class_names, $classes) ) {
    $classes[] = "active";
  }

  return $classes;
}