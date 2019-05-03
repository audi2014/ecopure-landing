<?php
/**
 * Created by PhpStorm.
 * User: arturmich
 * Date: 5/3/19
 * Time: 2:00 PM
 */

namespace EcopureTheme;


class HomePage {
    public $fetchPostMetadata = [];

    public function __construct(FetchPostMetadata $fetchPostMetadata) {
        $this->fetchPostMetadata = $fetchPostMetadata;
    }

    private function nestedGet($array, $path) {
        foreach ($path as $key) {
            if ($key && isset($array[$key])) {
                $array = $array[$key];
            } else {
                return null;
            }
        }
        return $array;
    }


    private function mapListItems($post_meta, $keys, $mask, $startIdx, $endIdx) {
        $items = [];
        for ($i = $startIdx; $i <= $endIdx; $i++) {
            $item = [];
            foreach ($keys as $key) {
                $item[$key] = $this->nestedGet($post_meta, [sprintf($mask, $i, strtolower($key))]);
            }
            $items[] = $item;
        }
        return $items;
    }


    public function getData($postId) {
        $fetch = $this->fetchPostMetadata;
        $post_meta = $fetch($postId, 'home_');


        $data = [
            'home_main' => [
                'first' => $this->nestedGet($post_meta, ['home_main_first']),
                'second' => $this->nestedGet($post_meta, ['home_main_second']),
                'get_started_link' => get_permalink($this->nestedGet($post_meta, ['home_main_get_started_link'])),
            ],
            'why' => [
                'head' => $this->nestedGet($post_meta, ['home_why_head']),
                'list' => array_map(
                    function ($item) {
                        if (isset($item['img'])) {
                            $item['img'] = wp_get_attachment_image_src($item['img'], 'full')[0];
                        }
                        return $item;
                    },
                    $this->mapListItems(
                        $post_meta,
                        ["img", "head", "text",],
                        "home_why_list_item_%d_why_list_%s",
                        1, 4
                    )
                ),
            ],
            'how_it_works' => [
                'head' => $this->nestedGet($post_meta, ['home_how_it_works_head']),
                'list' => explode("\n", $this->nestedGet($post_meta, ['home_how_it_works_list'])),
                'learn_more' => get_permalink($this->nestedGet($post_meta, ['home_how_it_works_learn_more'])),
            ],
            'live_it' => [
                'head' => $this->nestedGet($post_meta, ['home_live_it_head']),
                'footer' => $this->nestedGet($post_meta, ['home_live_it_footer']),
                'photos' => array_map(
                    function ($item) {
                        if (isset($item['img'])) {
                            $item['img'] = wp_get_attachment_image_src($item['img'], 'full')[0];
                        }
                        return $item;
                    },
                    $this->mapListItems(
                        $post_meta,
                        ["img", "externalRef",],
                        "home_live_it_photos_list_item_%d_%s",
                        1, 8
                    )
                ),
            ],
            'advantages' => [
                'head' => $this->nestedGet($post_meta, ['home_advantages_head']),
                'text' => $this->nestedGet($post_meta, ['home_advantages_text']),
                'learn_more_link' => get_permalink($this->nestedGet($post_meta, ['home_advantages_learn_more_link'])),
                'certificates' => [
                    wp_get_attachment_image_src($this->nestedGet($post_meta, ['home_advantages_certificates_item_1']), 'full')[0],
                    wp_get_attachment_image_src($this->nestedGet($post_meta, ['home_advantages_certificates_item_2']), 'full')[0],
                    wp_get_attachment_image_src($this->nestedGet($post_meta, ['home_advantages_certificates_item_3']), 'full')[0],
                ]
            ],
            'customers' => [
                'head' => $this->nestedGet($post_meta, ['home_customers_head']),
                'customer_items' => array_map(
                    function ($item) {
                        if (isset($item['img'])) {
                            $item['img'] = wp_get_attachment_image_src($item['img'], 'full')[0];
                        }
                        return $item;
                    },
                    $this->mapListItems(
                        $post_meta,
                        [
                            'img',
                            'title',
                            'message',
                            'author',
                        ],
                        "home_customers_list_item_%d_%s",
                        1, 4
                    )
                ),
            ],
            'faq' => [
                'head' => $this->nestedGet($post_meta, ['home_faq_head']),
                'faq_list' => $this->mapListItems(
                    $post_meta,
                    [
                        'title',
                        'text',
                    ],
                    "home_faq_list_item_%d_%s",
                    1, 3
                ),

            ],
        ];


//        die(json_encode([
//            $post_meta,
//            $data,
//        ]));


        return $data;


    }
}