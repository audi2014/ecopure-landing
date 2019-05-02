<?php
/**
 * Created by PhpStorm.
 * User: arturmich
 * Date: 4/15/19
 * Time: 3:40 PM
 */

namespace EcopureTheme;
class ThemeSupport {
    public function __construct() {
        add_action('init', function () {
            add_theme_support('post-thumbnails');
            add_theme_support('menus');
        });
    }


}