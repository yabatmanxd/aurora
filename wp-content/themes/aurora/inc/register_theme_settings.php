<?php
function register_theme_settings()
{
    add_settings_field('phone', 'Номер телефона', 'text_option_callback', 'discussion', 'default', [
        'option_name' => 'phone',
    ]);
    register_setting('discussion', 'phone');

    add_settings_field('slider_btn_url', 'Ссылка кнопки слайдера', 'text_option_callback', 'general', 'default', [
        'option_name' => 'slider_btn_url',
    ]);
    register_setting('general', 'slider_btn_url');

    add_settings_field('slider_btn_title', 'Заголовок кнопки слайдера', 'text_option_callback', 'general', 'default', [
        'option_name' => 'slider_btn_title',
    ]);
    register_setting('general', 'slider_btn_title');
}
function text_option_callback($val)
{ //коллбек для настроек в виде текста
    ?>
	<input type="text" name="<?php echo $val['option_name'] ?>" value="<?php echo esc_attr(get_option($val['option_name']))?>">
<?php }
add_action('admin_menu', 'register_theme_settings');
?>
