<?php
/**
 * Created by PhpStorm.
 * User: arturmich
 * Date: 5/3/19
 * Time: 4:23 PM
 */

namespace EcopureTheme;


class Navigation {

    public function getData() {
        return [
            'global' =>
                [
                    [
                        'path' => '#how',
                        'title' => 'How it Works',
                        'isActive' => true,
                    ],
                    [
                        'path' => '#advantages',
                        'title' => 'EcoPure Advantage',
                        'isActive' => false,
                        'sub_nav' =>
                            [
                                [
                                    'path' => '#',
                                    'title' => 'Why EcoPure Home?',
                                    'isActive' => false,
                                ],
                                [
                                    'path' => '#',
                                    'title' => 'Technology',
                                    'isActive' => false,
                                ],
                                [
                                    'path' => '#',
                                    'title' => 'EcoPure vs. Traditional Cleaning',
                                    'isActive' => false,
                                ],
                                [
                                    'path' => '#',
                                    'title' => 'Aromatherapy',
                                    'isActive' => false,
                                ],
                                [
                                    'path' => '#',
                                    'title' => 'Gallery',
                                    'isActive' => false,
                                ],
                            ],
                    ],
                    [
                        'path' => '#',
                        'title' => 'Franchising',
                        'isActive' => false,
                    ],
                    [
                        'path' => '#',
                        'title' => 'Property Managers',
                        'isActive' => false,
                    ],
                ],
            'local' =>
                [
                    [
                        'path' => '#',
                        'title' => 'About',
                        'isActive' => false,
                    ],
                    [
                        'path' => '#',
                        'title' => 'Services',
                        'isActive' => false,
                        'sub_nav' =>
                            [
                                [
                                    'path' => '#',
                                    'title' => 'Apartment Cleaning',
                                    'isActive' => false,
                                ],
                                [
                                    'path' => '#',
                                    'title' => 'House Cleaning',
                                    'isActive' => false,
                                ],
                                [
                                    'path' => '#',
                                    'title' => 'Move-Out Cleaning',
                                    'isActive' => false,
                                ],
                                [
                                    'path' => '#',
                                    'title' => 'Carpet Cleaning',
                                    'isActive' => false,
                                ],
                                [
                                    'path' => '#',
                                    'title' => 'Commercial & Office Cleaning',
                                    'isActive' => false,
                                ],
                            ],
                    ],
                    [
                        'path' => '#',
                        'title' => 'Rates',
                        'isActive' => false,
                    ],
                    [
                        'path' => '#',
                        'title' => 'Areas We Serve',
                        'isActive' => false,
                    ],
                ],
            'footer' =>
                [

                    [
                        'path' => '#',
                        'title' => 'Home',
                    ],

                    [
                        'path' => '#',
                        'title' => 'Services',
                    ],

                    [
                        'path' => '#',
                        'title' => 'EcoPure Advantage',
                    ],

                    [
                        'path' => '#',
                        'title' => 'About Us',
                    ],

                    [
                        'path' => '#',
                        'title' => 'Contact Us',
                    ],
                ],
        ];
    }
}