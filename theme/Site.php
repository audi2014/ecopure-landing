<?php
/**
 * Created by PhpStorm.
 * User: arturmich
 * Date: 5/3/19
 * Time: 4:44 PM
 */

namespace EcopureTheme;


class Site {
    private $site;

    public function __construct() {
        $this->site = new \Timber\Site();
    }

    public function getTimberSite() {
        return $this->site;
    }
    public function getAssetsUrl() {
        return $this->getTimberSite()->theme->link() . '/app';
    }

    public function getData() {
        return [
            'url' => [
                'index' => $this->getTimberSite()->link(),
                'get_started' => $this->getTimberSite()->link() . '/get-started',
                'learn_more' => $this->getTimberSite()->link() . '/learn-more',
            ],
            'assets' => $this->getTimberSite()->theme->link() . '/app'
        ];
    }
}