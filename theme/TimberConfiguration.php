<?php
/**
 * Created by PhpStorm.
 * User: arturmich
 * Date: 4/11/19
 * Time: 10:35 AM
 */

namespace EcopureTheme;


class TimberConfiguration {
    public function __construct() {
        if (class_exists(\Timber\Timber::class)) {

            new \Timber\Timber();
//Timber\Timber::$cache = true;
//Timber\Timber::$twig_cache = true;
            /**
             * Sets the directories (inside your theme) to find .twig files
             */
            \Timber\Timber::$dirname = ['app'];
            /**
             * By default, Timber does NOT autoescape values. Want to enable Twig's autoescape?
             * No prob! Just set this value to true
             */
//Timber::$autoescape = false;
        } else {
            add_action('admin_notices', function () {
                echo '<div class="error"><p>Timber not activated.</p></div>';
            });
        }
    }
}