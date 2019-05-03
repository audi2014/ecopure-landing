<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once(__DIR__ . '/vendor/autoload.php');

new \EcopureTheme\AfterSetupTheme();
new \EcopureTheme\EnqueueScripts();
new \EcopureTheme\ThemeSupport();
new \EcopureTheme\TimberConfiguration();



//add_filter('timber/context', function ($context) {
//    $site = new \Timber\Site();
////    $context['headerMenu'] = new \Timber\Menu(\EcopureTheme\Constants::HEADER_MENU);
////    $context['footerMenu'] = new \Timber\Menu(\EcopureTheme\Constants::FOOTER_MENU);
////    $site = new \Timber\Site();
////    $context['site'] = [
////        'assets' => $site->theme->link() . '/app'
////    ];
//
////    $moc = json_decode(file_get_contents(__DIR__ . '/app/twig/data/index.twig.json'), true);
//    $moc = [];
//    $moc['site']['link'] = $site->link();
//    $moc['site']['assets'] = $site->theme->link() . '/app';
//    foreach ($moc as $k => $v) {
//        $context[$k] = $v;
//    }
//
//    return $context;
//});