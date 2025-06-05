<?php

namespace App\Http\Controllers\Transportation;
use App\Http\Controllers\Controller;
use App\Services\SanityService;
use App\Traits\SeoTrait;

class IndexController extends Controller{
    use SeoTrait;
    protected $sanityService;

    public function index(SanityService $sanityService){
        $this->makeSeo("transportation");

        $this->sanityService = $sanityService;
        $post = $this->sanityService->getRecentPost(2);
        
        return view('transportation.index', ['seo' => $this->seo, 'post' => $post]);
    }
}