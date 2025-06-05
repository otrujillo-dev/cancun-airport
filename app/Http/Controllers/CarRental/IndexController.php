<?php

namespace App\Http\Controllers\CarRental;
use App\Http\Controllers\Controller;
use App\Traits\SeoTrait;

class IndexController extends Controller{
    use SeoTrait;

    public function index(){        
        $this->makeSeo("car-rental");
        return view('car-rental.index', ['seo' => $this->seo]);
    }
}