<?php 
if (is_front_page()){
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?php echo get_bloginfo( 'name' ); ?>
    </title>
    <link rel="shortcut icon" href="<?php echo get_theme_mod( 'favicon_logo' ); ?>" />
    <?php wp_head(); 
    define('BASE_URL', get_bloginfo('url'));
    ?>
  </head>	
  <body>
    <div class="main_block">
      <div class="inner_main_block">
        <header class="dark ">
          <nav role="navigation">
            <div class="container">
              <div class="header_block">
                <a href="javascript:void(0);" class="ic menu" tabindex="1">
                  <span class="line"></span>
                  <span class="line"></span>
                  <span class="line"></span>
                </a>
                <a href="javascript:void(0);" class="ic close"></a>
                <a class="navbar-brand " href="<?php echo BASE_URL; ?>">
                  <?php
                  if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
                    <img class="img-fluid"
                    src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" alt="logo">                
                  <?php else : ?>
                    <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                  <?php endif; ?>            
                </a>
                <ul class="main-nav">
                  <?php 
                  $menuLocations = get_nav_menu_locations();
                  $menuID = $menuLocations['header'];
                  $menu = wp_get_nav_menu_object($menuLocations['header']);                 
                  $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
                  $megaMenu = array();

                  foreach ($menuitems as $key => $mainMenuItem) {
                   
                    if($mainMenuItem->menu_item_parent == 0){                    
                      $megaMenu[$mainMenuItem->ID] = array(
                        "title" => $mainMenuItem->title,
                        "url" => $mainMenuItem->url
                      );
                    }else{
                      if(isset($megaMenu[$mainMenuItem->menu_item_parent])){
                        $megaMenu[$mainMenuItem->menu_item_parent]['sub_menu'][$mainMenuItem->ID] = array(
                          "title" => $mainMenuItem->title,
                          "url" => $mainMenuItem->url
                        ); 
                      }else{
                        foreach ($megaMenu as $parId => $subMenu) {
                          if(isset($subMenu['sub_menu'])){
                            foreach ($subMenu['sub_menu'] as $subId => $subSubMenu) {
                              if(isset($megaMenu[$parId]['sub_menu'][$subId]) && $mainMenuItem->menu_item_parent == $subId){
                                $megaMenu[$parId]['sub_menu'][$subId]['sub_sub_menu'][$mainMenuItem->ID] = array(
                                  "title" => $mainMenuItem->title,
                                  "url" => $mainMenuItem->url
                                );
                              }
                            }  
                          } 
                        }
                      }                    
                    }
                  }
                  foreach($megaMenu as $megaMenu=> $mainMenu){
                    //$current = ( $_SERVER['REQUEST_URI'] == parse_url( $mainMenu->url, PHP_URL_PATH ) ) ? 'current' : '';
                    ?>
                    <li class="top-level-link">
                      <?php 
                      if(isset($mainMenu['sub_menu'])){

                        ?>
                        <a class="mega-menu" href="<?php echo $mainMenu['url']; ?>"><span><?php echo $mainMenu['title']; ?></span></a>
                        
                        <div class="sub-menu-block">
                          <div class="row">
                            <?php 
                            $i = 0;
                            foreach($mainMenu['sub_menu'] as $smk=> $subMenu){
                              ?>
                              <div class="col-md-4 col-lg-4 col-sm-12">
                                <div class="submenu_inn afterclass_<?php echo $i;?>">
                                  <h2 class="sub-menu-head"><?php echo $subMenu['title']; ?></h2>
                                  <?php
                                  if(isset($subMenu['sub_sub_menu'])){
                                    $countSubSubMenu = count($subMenu['sub_sub_menu']);
                                    if($countSubSubMenu > 6){
                                     ?>
                                     <ul class="sub-menu-lists divided">
                                      <?php
                                      foreach ($subMenu['sub_sub_menu'] as $ssk => $subSubMenu) {
                                        ?>
                                        <li><a href="<?php echo $subSubMenu['url']; ?>"><?php echo $subSubMenu['title']; ?></a></li>
                                      <?php } ?>
                                    </ul>
                                  <?php } else{
                                    ?>
                                    <ul class="sub-menu-lists">
                                      <?php
                                      foreach ($subMenu['sub_sub_menu'] as $ssk => $subSubMenu) {
                                        ?>
                                        <li><a href="<?php echo $subSubMenu['url']; ?>"><?php echo $subSubMenu['title']; ?></a></li>
                                      <?php } ?>
                                    </ul>
                                  <?php }?>                                    
                                <?php } ?>
                              </div>
                            </div>
                          <?php $i++; }
                          ?>
                        </div>
                      </div>
                    <?php } else{
                      ?>
                      <a href="<?php echo $mainMenu['url']; ?>"><span><?php echo $mainMenu['title']; ?></span></a>
                    <?php }
                  }?>
                </li>
                <li class="top-level-link">                    
                  <a href="<?php echo BASE_URL.'/#contact-form'; ?>"><span>
                    <?php if ( get_theme_mod( 'text_setting' ) ) : ?>
                      <?php echo get_theme_mod( 'text_setting' );  ?>
                    <?php endif; ?>
                  </span></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>

    <?php }
    else{
      ?>
      <!DOCTYPE html>
      <html lang="en">
      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>
          <?php echo get_bloginfo( 'name' ); ?>
        </title>
        <link rel="shortcut icon" href="<?php echo get_theme_mod( 'favicon_logo' ); ?>" />
        <?php wp_head(); 
        define('BASE_URL', get_bloginfo('url'));
        ?>
      </head> 
      <body>
        <div class="main_block">
          <div class="inner_main_block">
            <header class="dark header_second">
              <nav role="navigation">
                <div class="container">
                  <div class="header_block">
                    <a href="javascript:void(0);" class="ic menu" tabindex="1">
                      <span class="line"></span>
                      <span class="line"></span>
                      <span class="line"></span>
                    </a>
                    <a href="javascript:void(0);" class="ic close"></a>
                    <a class="navbar-brand " href="<?php echo BASE_URL; ?>">
                      <?php
                      if ( get_theme_mod( 'your_theme_logo' ) ) : ?>
                        <img class="img-fluid"
                        src="<?php echo get_theme_mod( 'your_theme_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" alt="logo">                
                      <?php else : ?>
                        <h1 class="site-title"><?php bloginfo( 'name' ); ?></h1>
                      <?php endif; ?>            
                    </a>
                    <ul class="main-nav">
                      <?php 
                      $menuLocations = get_nav_menu_locations();
                      $menuID = $menuLocations['header'];
                      $menu = wp_get_nav_menu_object($menuLocations['header']);                 
                      $menuitems = wp_get_nav_menu_items($menu->term_id, array('order' => 'DESC'));
                      $megaMenu = array();
                      foreach ($menuitems as $key => $mainMenuItem) {
                        if($mainMenuItem->menu_item_parent == 0){
                          $megaMenu[$mainMenuItem->ID] = array(
                            "title" => $mainMenuItem->title,
                            "url" => $mainMenuItem->url
                          );
                        }else{
                          if(isset($megaMenu[$mainMenuItem->menu_item_parent])){
                            $megaMenu[$mainMenuItem->menu_item_parent]['sub_menu'][$mainMenuItem->ID] = array(
                              "title" => $mainMenuItem->title,
                              "url" => $mainMenuItem->url
                            ); 
                          }else{
                            foreach ($megaMenu as $parId => $subMenu) {
                              if(isset($subMenu['sub_menu'])){
                                foreach ($subMenu['sub_menu'] as $subId => $subSubMenu) {
                                  if(isset($megaMenu[$parId]['sub_menu'][$subId]) && $mainMenuItem->menu_item_parent == $subId){
                                    $megaMenu[$parId]['sub_menu'][$subId]['sub_sub_menu'][$mainMenuItem->ID] = array(
                                      "title" => $mainMenuItem->title,
                                      "url" => $mainMenuItem->url
                                    );
                                  }
                                }  
                              } 
                            }
                          }                    
                        }
                      }
                      foreach($megaMenu as $megaMenu=> $mainMenu){
                        ?>
                        <li class="top-level-link">
                          <?php 
                          if(isset($mainMenu['sub_menu'])){
                            ?>
                            <?php 
                              if(isset($mainMenu['url'])){
                            ?>
                            <a class="mega-menu" href="<?php echo $mainMenu['url']; ?>"><span><?php echo $mainMenu['title']; ?></span></a>
                          <?php }else{
                            ?>
                            <a class="mega-menu" href="javascript:void(0);"><span><?php echo $mainMenu['title']; ?></span></a>
                          <?php } ?>                            
                            <div class="sub-menu-block">
                              <div class="row">
                                <?php 
                               $i = 0;
                                foreach($mainMenu['sub_menu'] as $smk=> $subMenu){
                                  ?>
                                  <div class="col-md-4 col-lg-4 col-sm-12">
                                    <div class="submenu_inn afterclass_<?php echo $i;?>">
                                      <h2 class="sub-menu-head"><?php echo $subMenu['title']; ?></h2>
                                      <?php
                                      if(isset($subMenu['sub_sub_menu'])){
                                        $countSubSubMenu = count($subMenu['sub_sub_menu']);
                                        if($countSubSubMenu > 6){
                                         ?>
                                         <ul class="sub-menu-lists divided">
                                          <?php
                                          foreach ($subMenu['sub_sub_menu'] as $ssk => $subSubMenu) {
                                            ?>
                                            <li><a href="<?php echo $subSubMenu['url']; ?>"><?php echo $subSubMenu['title']; ?></a></li>
                                          <?php } ?>
                                        </ul>
                                      <?php } else{
                                        ?>
                                        <ul class="sub-menu-lists">
                                          <?php
                                          foreach ($subMenu['sub_sub_menu'] as $ssk => $subSubMenu) {
                                            ?>
                                            <li><a href="<?php echo $subSubMenu['url']; ?>"><?php echo $subSubMenu['title']; ?></a></li>
                                          <?php } ?>
                                        </ul>
                                      <?php }?>                                    
                                    <?php } ?>
                                  </div>
                                </div>
                              <?php $i++; }
                              ?>
                            </div>
                          </div>
                        <?php } else{
                          ?>
                          <a href="<?php echo $mainMenu['url']; ?>"><span><?php echo $mainMenu['title']; ?></span></a>
                        <?php }
                      }?>
                    </li>
               
                  </ul>
                </div>
              </div>
            </nav>
          </header>

          <?php } ?>

          <script>

// $(function(){
//     $('.top-level-link').click(function(){
//         $('.top-level-link.active').removeClass('active');
//         $(this).addClass('active');
//     });
// });
          </script>