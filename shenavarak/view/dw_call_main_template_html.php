  <?php
$options = get_option('shnavork_options', [
    'main_text' => 'تماس با ما',
    'show_whatsapp' => 0,
    'link_whatsapp' => '',
    'show_telegram' => 0,
    'link_telegram' => '',
    'show_instagram' => 0,
    'link_instagram' => '',
    'show_phone' => 0,
    'link_phone' => '',
]);

$plugin_url = plugin_dir_url( __FILE__ );
?>
  
  <div class="call_box">
    <div class="call_main">
      <ul>
          <?php if ($options['show_whatsapp']): ?>
        <li>
          <a class="flexd" rel="nofollow noopener" href="<?php echo esc_url($options['link_whatsapp']); ?>" target="_blank">
            <span>ارتباط در واتساپ</span>
            <div class="call_item_icon">
                <img src="<?php echo $plugin_url . 'assets/ws.svg' ?>" width="33">
                </div>
          </a>
        </li>
        <?php endif; ?>
        
        <?php if ($options['show_telegram']): ?>
        <li>
          <a class="flexd" rel="nofollow noopener" href="<?php echo esc_url($options['link_telegram']); ?>" target="_blank">
               <span>ارتباط در تلگرام</span>
            <div class="call_item_icon">
                <img src="<?php echo $plugin_url . 'assets/tel.svg' ?>" width="33">
                </div>
          </a>
        </li>
        <?php endif; ?>
        <?php if ($options['show_instagram']): ?>
        <li>
          <a class="flexd" rel="nofollow noopener" href="<?php echo esc_url($options['link_instagram']); ?>" target="_blank">
            <span>اینستاگرام ما</span>
            <div class="call_item_icon">
                <img src="<?php echo $plugin_url . 'assets/insta.svg' ?>" width="33">
</div>
          </a>
        </li>
         <?php endif; ?>
          <?php if ($options['show_phone']): ?>
       <li>
          <a class="flexd" rel="nofollow noopener" href="tel:<?php echo esc_attr($options['link_phone']); ?>" target="_blank">
            <span>تماس مستقیم</span>
            <div class="call_item_icon">
                <img src="<?php echo $plugin_url . 'assets/phone.svg' ?>" width="33">
            </div>
          </a>
        </li>
       <?php endif; ?>
      </ul>

    </div>
    <div class="call_button noselect pluser" style="background-color: <?php echo esc_attr( $options['button_color'] ?: '#0c9d38' ); ?>;">

      <div class="dw-open-caller" style="">
 <img src="<?php echo $plugin_url . 'assets/iconchat.svg' ?>" class="no-lazy" width="32" style="display: block;">

        <span class="title_caller"><?php echo esc_html( !empty($options['main_text']) ? $options['main_text'] : 'تماس با ما' ); ?>
</span>

      </div>

      <div class="dw-close-caller">
        <svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink"
          xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 329.269 329"
          style="enable-background:new 0 0 512 512" xml:space="preserve">
          <g>
            <path
              d="M194.8 164.77 323.013 36.555c8.343-8.34 8.343-21.825 0-30.164-8.34-8.34-21.825-8.34-30.164 0L164.633 134.605 36.422 6.391c-8.344-8.34-21.824-8.34-30.164 0-8.344 8.34-8.344 21.824 0 30.164l128.21 128.215L6.259 292.984c-8.344 8.34-8.344 21.825 0 30.164a21.266 21.266 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25l128.21-128.214 128.216 128.214a21.273 21.273 0 0 0 15.082 6.25c5.46 0 10.922-2.09 15.082-6.25 8.343-8.34 8.343-21.824 0-30.164zm0 0"
              fill="#FFFFFF" data-original="#000000" opacity="1"></path>
          </g>
        </svg>
      </div>

    </div>
  </div>