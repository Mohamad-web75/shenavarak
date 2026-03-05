<?php


  add_action('wp_footer' , 'darvish_func' ,99);

  function darvish_func(){

    include( DW_CALL_PLUGIN_PATH . '/view/dw_call_main_template_html.php' );
   
  }

add_action( 'wp_enqueue_scripts' , function(){
  wp_enqueue_style( 
      'dw_call_view_css',
      DW_CALL_PLUGIN_URL . '/view/assets/callview.css',
      [],
      '1.0.0'
  );
  wp_enqueue_script( 
      'dw_call_view_js',
      DW_CALL_PLUGIN_URL . '/view/assets/callview.js',
      ['jquery'],
      '1.0.0'
  );
});   

?>