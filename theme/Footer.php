<?php
/**
 * Created by PhpStorm.
 * User: arturmich
 * Date: 5/3/19
 * Time: 4:23 PM
 */

namespace EcopureTheme;


class Footer {
    private $site;

    public function __construct($site) {
        $this->site = $site;
    }

    public function getData() {
        return [
            "copyright" => "©  EcoPure Cleaning Service, Inc. All rights reserved.",
            "docs" => [
                "privacy" => [
                    "title" => "Privacy",
                    "link" => "#"
                ],
                "terms" => [
                    "title" => "Terms",
                    "link" => "#"
                ],
            ],
            "social" => [
                [
                    "externalPath" => "#",
                    "icon" => "{$this->site->getAssetsUrl()}/img/icons/facebook.svg"
                ],
                [
                    "externalPath" => "#",
                    "icon" => "{$this->site->getAssetsUrl()}/img/icons/linkedin.svg"
                ],
                [
                    "externalPath" => "#",
                    "icon" => "{$this->site->getAssetsUrl()}/img/icons/yelp.svg"
                ],
                [
                    "externalPath" => "#",
                    "icon" => "{$this->site->getAssetsUrl()}/img/icons/ur.png"
                ]
            ]
        ];
    }
}