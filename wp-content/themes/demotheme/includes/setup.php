<?php
function d_setup_theme(){
  add_theme_support('editor-styles');

  add_editor_style([
    'https://fonts.googleapis.com/css2?family=Pacifico&family=Rubik:wght@300;400;500;700&display=swap',
    'assets/css/bootstrap/bootstrap.min.css',
    'assets/css/stylesheet.css',
    'assets/js/overlay-menu/css/style12.css'
  ]);
}