<?php

namespace App\Http\Controllers\Tours;
use App\Http\Controllers\Controller;
use App\Services\SanityService;
use App\Traits\SeoTrait;

class IndexController extends Controller{
    use SeoTrait;
    protected $sanityService;

    public function index(){
        $this->makeSeo("tours");
        
        return view('tours.index', ['seo' => $this->seo]);
    }
}