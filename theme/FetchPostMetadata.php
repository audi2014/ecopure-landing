<?php
/**
 * Created by PhpStorm.
 * User: arturmich
 * Date: 4/15/19
 * Time: 3:30 PM
 */

namespace EcopureTheme;


class FetchPostMetadata extends AbstractLazyInvoker {

    protected function invoke($data, $metaKeyPrefix = null) {
        global $wpdb;
        $postId = $data[0];
        $metaKeyPrefix = isset($data[1]) ? $data[1] : null;
        $args = [$postId];
        if($metaKeyPrefix) {
            $args[]= $wpdb->esc_like($metaKeyPrefix)."%";
            $likeMetaKey = "AND meta_key like %s";
        } else {
            $likeMetaKey = "";
        }
        $SQL = <<<MySQL
SELECT
    meta_key, meta_value
FROM
    $wpdb->postmeta
WHERE
post_id = %d $likeMetaKey
ORDER BY post_id DESC
MySQL;
        $rows = $wpdb->get_results($wpdb->prepare($SQL, $args));
        $result = [];
        foreach ($rows as $row) {
            $result[$row->meta_key] = $row->meta_value;
        }
        return $result;
    }
}