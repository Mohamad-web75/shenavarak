<?php
// بارگذاری CSS و JS پنل مدیریت
add_action('admin_enqueue_scripts', function($hook) {
    if( $hook !== 'toplevel_page_dw_call' ) return; // فقط در صفحه پلاگین

    wp_enqueue_style( 
        'dw_admin_css',
        DW_CALL_PLUGIN_URL . '/admin/assets/css/dw-admin-style.css',
        [],
        '1.0.0'
    );

    // بارگذاری color picker وردپرس
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script('dw-admin-js', DW_CALL_PLUGIN_URL . '/admin/assets/js/dw-admin.js', ['wp-color-picker'], '1.0.0', true);
});

// صفحه تنظیمات
add_action('admin_menu', function() {
    add_menu_page(
        'شناورک',
        'شناورک',
        'administrator',
        'dw_call',
        'dw_call_page',
        'dashicons-phone',
        25
    );
});

function dw_call_page() {
    // دریافت گزینه‌ها
    $options = get_option('shnavork_options', [
        'main_text' => 'تماس با ما',
        'button_color' => '#ff6600', // مقدار پیش‌فرض رنگ
        'show_whatsapp' => 0,
        'link_whatsapp' => '',
        'show_telegram' => 0,
        'link_telegram' => '',
        'show_instagram' => 0,
        'link_instagram' => '',
        'show_phone' => 0,
        'link_phone' => '',
    ]);

    // بررسی ارسال فرم
    if( isset($_POST['dw_save_options']) && check_admin_referer('dw_save_options_nonce') ) {
        $options['main_text'] = sanitize_text_field($_POST['main_text']);
        $options['button_color'] = sanitize_hex_color($_POST['button_color']); // ذخیره رنگ

        $options['show_whatsapp'] = isset($_POST['show_whatsapp']) ? 1 : 0;
        $options['link_whatsapp'] = sanitize_text_field($_POST['link_whatsapp']);
        $options['show_telegram'] = isset($_POST['show_telegram']) ? 1 : 0;
        $options['link_telegram'] = sanitize_text_field($_POST['link_telegram']);
        $options['show_instagram'] = isset($_POST['show_instagram']) ? 1 : 0;
        $options['link_instagram'] = sanitize_text_field($_POST['link_instagram']);
        $options['show_phone'] = isset($_POST['show_phone']) ? 1 : 0;
        $options['link_phone'] = sanitize_text_field($_POST['link_phone']);

        update_option('shnavork_options', $options);

        echo '<div class="updated notice"><p>تنظیمات ذخیره شد.</p></div>';
    }
    ?>
    <div class="wrap">
        <h1>تنظیمات افزونه شناورک</h1>
        <form method="post">
            <?php wp_nonce_field('dw_save_options_nonce'); ?>
            <table class="form-table">
                <tr>
                    <th>متن دکمه اصلی</th>
                    <td><input type="text" name="main_text" value="<?php echo esc_attr($options['main_text']); ?>" /></td>
                </tr>
                <tr>
                    <th>رنگ دکمه اصلی</th>
                    <td>
                        <input type="text" name="button_color" class="dw-color-field" value="<?php echo esc_attr($options['button_color']); ?>" />
                    </td>
                </tr>
                <tr>
                    <th>نمایش واتساپ</th>
                    <td>
                        <input type="checkbox" name="show_whatsapp" value="1" <?php checked(1, $options['show_whatsapp']); ?> />
                        لینک: <input type="text" name="link_whatsapp" value="<?php echo esc_attr($options['link_whatsapp']); ?>" />
                    </td>
                </tr>
                <tr>
                    <th>نمایش تلگرام</th>
                    <td>
                        <input type="checkbox" name="show_telegram" value="1" <?php checked(1, $options['show_telegram']); ?> />
                        لینک: <input type="text" name="link_telegram" value="<?php echo esc_attr($options['link_telegram']); ?>" />
                    </td>
                </tr>
                <tr>
                    <th>نمایش اینستاگرام</th>
                    <td>
                        <input type="checkbox" name="show_instagram" value="1" <?php checked(1, $options['show_instagram']); ?> />
                        لینک: <input type="text" name="link_instagram" value="<?php echo esc_attr($options['link_instagram']); ?>" />
                    </td>
                </tr>
                <tr>
                    <th>نمایش تماس مستقیم</th>
                    <td>
                        <input type="checkbox" name="show_phone" value="1" <?php checked(1, $options['show_phone']); ?> />
                        شماره: <input type="text" name="link_phone" value="<?php echo esc_attr($options['link_phone']); ?>" />
                    </td>
                </tr>
            </table>
            <p><input type="submit" name="dw_save_options" class="button button-primary" value="ذخیره تنظیمات"></p>
        </form>
    </div>
    <?php
}
