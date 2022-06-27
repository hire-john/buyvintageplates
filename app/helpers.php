<?php
if (! function_exists('bvpaid')) {
    function bvpaid() {
        $bvpaid = array(
            "category" => "1",
            "product" => "1",
            "location" => "1",
            "bin" => "1"
        );
        $bvpaid['formatted'] = implode("-", $bvpaid);
        $bvpaid['raw'] = implode($bvpaid);
        return $bvpaid;
    }
}