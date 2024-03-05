<?php

namespace App\Helpers;

class MetaHelper
{
    public static function sanitize(array $values): array
    {
        $data = array_filter($values, function ($value) {
            return !empty($value);
        });
        
        return array_map(function ($value) {
            return str_replace("'", '', strtolower($value));
        }, $data);
    }
}
