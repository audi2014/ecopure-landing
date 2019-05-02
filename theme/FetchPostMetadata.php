<?php
/**
 * Created by PhpStorm.
 * User: arturmich
 * Date: 4/15/19
 * Time: 3:30 PM
 */

namespace EcopureTheme;


class FetchPostMetadata extends AbstractLazyInvoker {

    protected function invoke($data) {
        $postId = reset($data);
        global $wpdb;
        $SQL = <<<MySQL
SELECT
    meta_key, meta_value
FROM
    $wpdb->postmeta
WHERE
post_id = %d
ORDER BY post_id DESC
MySQL;
        $rows = $wpdb->get_results($wpdb->prepare($SQL, [$postId]));
        $result = [];
        foreach ($rows as $row) {
            $result[$row->meta_key] = $row->meta_value;
        }
        return $result;
    }
}