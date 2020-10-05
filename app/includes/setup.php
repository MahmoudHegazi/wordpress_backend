<?php

function ju_setup_theme() {
  add_theme_support( 'post-thumbnails' );
  register_nav_menu( 'primary', __( 'Main Menu', 'udemy' ) );

}

function ju_footer_menu() {
  register_nav_menu( 'secondary', __( 'Secondary Menu', 'udemy' ) );

}

 ?>
