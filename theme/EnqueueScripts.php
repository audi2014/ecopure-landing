<?php
/**
 * Created by PhpStorm.
 * User: arturmich
 * Date: 4/15/19
 * Time: 3:42 PM
 */

namespace EcopureTheme;


class EnqueueScripts {

    const SCRIPTS = [
//        ['cookiebanner', '/js/cookiebanner.min.js', [], '1.0.0', true],
//        ['scripts', '/js/scripts.min.js', [], '1.0.0', true],

    ];
    const STYLES = [
//        ['scripts', '/css/main.min.css', [], '1.0.0'],
//        ['style', '/style.css', [], '1.0.0'],
    ];

    public function __construct() {
        $this->registerSrc();

        add_action('wp_enqueue_scripts', function () {
            foreach (self::SCRIPTS as $data) {
                wp_enqueue_script($data[0]);
            }
            foreach (self::STYLES as $data) {
                wp_enqueue_style($data[0]);
            }
            wp_enqueue_script('cookiebanner');
        });
    }

    protected function registerSrc() {
        $dir = get_template_directory_uri();
        foreach (self::SCRIPTS as $data) {
            wp_register_script($data[0], $dir . $data[1], $data[2], $data[3], $data[4]);
        }
        foreach (self::STYLES as $data) {
            wp_register_style($data[0], $dir . $data[1], $data[2], $data[3]);
        }
    }

}