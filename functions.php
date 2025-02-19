<?php

// подключаем стили
add_action('wp_enqueue_scripts', 'theme_style_and_script');
function theme_style_and_script()
{
    wp_enqueue_style('fancybox-css', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('fancybox-script',  'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/app.js', array('fancybox-script'), '1.0.0', true);
}

function install_required_plugins()
{
    $plugin_slug = 'advanced-custom-fields-pro/acf.php'; // Основной файл плагина
    $zip_path = get_template_directory() . '/plugins/advanced-custom-fields-pro_v6.3.1.2.zip';
    $plugin_dir = WP_PLUGIN_DIR . '/advanced-custom-fields-pro/';

    // Проверяем, активен ли плагин
    if (!is_plugin_active($plugin_slug)) {

        // Если папка плагина не существует, распаковываем архив
        if (!file_exists($plugin_dir)) {
            unzip_plugin($zip_path, WP_PLUGIN_DIR);
        }

        // Активируем плагин
        activate_plugin($plugin_slug);
    }
}

// Функция для распаковки ZIP-архива
function unzip_plugin($zip_path, $destination)
{
    if (!class_exists('ZipArchive')) {
        return false; // Если нет ZipArchive, то пропускаем
    }

    $zip = new ZipArchive;
    if ($zip->open($zip_path) === TRUE) {
        $zip->extractTo($destination);
        $zip->close();
        return true;
    } else {
        return false;
    }
}

// Выполняем установку при активации темы
add_action('after_setup_theme', 'install_required_plugins');


if (function_exists('acf_add_local_field_group')) {

    acf_add_local_field_group(array(
        'key' => 'group_reviews',
        'title' => 'Отзывы',
        'fields' => array(
            array(
                'key' => 'field_reviews',
                'label' => 'Отзывы',
                'name' => 'reviews',
                'type' => 'repeater',
                'button_label' => 'Добавить отзыв',
                'sub_fields' => array(
                    array(
                        'key' => 'field_review_photo',
                        'label' => 'Фотография',
                        'name' => 'photo',
                        'type' => 'image',
                        'return_format' => 'url',
                        'preview_size' => 'thumbnail',
                        'library' => 'all',
                    ),
                    array(
                        'key' => 'field_review_name',
                        'label' => 'Имя',
                        'name' => 'name',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_review_position',
                        'label' => 'Должность',
                        'name' => 'position',
                        'type' => 'text',
                    ),
                    array(
                        'key' => 'field_review_text',
                        'label' => 'Текст отзыва',
                        'name' => 'text',
                        'type' => 'textarea',
                    ),
                ),
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'options_page',
                    'operator' => '==',
                    'value' => 'theme-reviews-settings',
                ),
            ),
        ),
    ));

    // Добавляем страницу в админку
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title'    => 'Отзывы',
            'menu_title'    => 'Отзывы',
            'menu_slug'     => 'theme-reviews-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
    }
}


add_action('wp_ajax_driver_form', 'handle_driver_form');
add_action('wp_ajax_nopriv_driver_form', 'handle_driver_form');

function handle_driver_form()
{
    check_ajax_referer('driver_form_nonce', 'driver_nonce');

    $data = [
        'subject' => sanitize_text_field($_POST['form_subject']),
        'name' => sanitize_text_field($_POST['client_name']),
        'phone' => sanitize_text_field($_POST['client_phone']),
        'format' => sanitize_text_field($_POST['ad_format'])
    ];

    $to = 'kotashov03@gmail.com';
    $subject = $data['subject'];
    $headers = ['Content-Type: text/html; charset=UTF-8'];

    $message = "
        <h1>Новая заявка</h1>
        <p><strong>Имя:</strong> {$data['name']}</p>
        <p><strong>Телефон:</strong> {$data['phone']}</p>
        <p><strong>Формат рекламы:</strong> {$data['format']}</p>
    ";

    if (wp_mail($to, $subject, $message, $headers)) {
        wp_send_json_success();
    } else {
        wp_send_json_error('Ошибка отправки письма');
    }
}
