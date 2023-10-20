<?php

namespace App\helpers;

if (!function_exists('paginateWithIndex')) {
    function paginateWithIndex($data, $pageLimit) {
        $slValue = (request()->index('page') - 1) * $pageLimit;

        return [
            'data' => $data,
            'slValue' => $slValue,
        ];
    }
}