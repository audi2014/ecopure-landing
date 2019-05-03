<?php
/**
 * Created by PhpStorm.
 * User: arturmich
 * Date: 5/3/19
 * Time: 4:54 PM
 */

namespace EcopureTheme;


class Location {
    public function getData() {
        return [
            "address" => "Hoboken, NJ",
            "tel" => "(201) 555-5555",
            "isSessionActive" => false,
            "isBookingComplete" => false,
            "location_page" => true
        ];
    }
}