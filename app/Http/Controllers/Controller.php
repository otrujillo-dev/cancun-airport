<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public $seo = [
        'meta' => [
            'title' => '',
            'description' => '',
            'keywords' => '',
        ],
        'alternate' => []
    ];
}
