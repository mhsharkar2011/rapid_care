<?php 
namespace App\Helpers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class Helper
{
    public static function uppercase(string $string)
    {
        return strtoupper($string);
    }
}

function PageLimit($page)
    {
        $pageLimit = request()->per_page ?? $page;
        return $pageLimit; 
    }

if (!function_exists('calculateAutoIncrementIndex')) {
        function calculateAutoIncrementIndex($page, $pageLimit) {
            $i = calculateAutoIncrementIndex(request()->input('page', 1), $pageLimit);
            return $i;

        }
    }
    