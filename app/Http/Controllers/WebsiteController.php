<?php

namespace App\Http\Controllers;
use App\Services\SanityService;
use Illuminate\Support\Facades\Session;
use App\Traits\SeoTrait;

class WebsiteController extends Controller{
    use SeoTrait;
    protected $sanityService;

    public function index(SanityService $sanityService){
        $this->makeSeo("home");

        $this->sanityService = $sanityService;
        $post = $this->sanityService->getRecentPost(2);

        return view('website.home', ['seo' => $this->seo, 'post' => $post]);
    }
    
    public function terminals(){
        $this->makeSeo("terminals");        
        return view('website.terminals', ['seo' => $this->seo]);
    }

    public function terminalA(){
        $this->makeSeo("terminal-a");
        return view('website.terminal-a', ['seo' => $this->seo]);
    }

    public function terminalB(){
        $this->makeSeo("terminal-b");
        return view('website.terminal-b', ['seo' => $this->seo]);
    }

    public function arrivals(){
        $this->makeSeo("arrivals");        
        return view('website.arrivals', ['seo' => $this->seo]);
    }

    public function departures(){
        $this->makeSeo("departures");
        return view('website.departures', ['seo' => $this->seo]);
    }
    public function airportParking(){
        $this->makeSeo("airport-parking");
        return view('website.airport-parking', ['seo' => $this->seo]);
    }

    public function terms(){
        $this->makeSeo("transportation.terms");
        
        return view('website.terms-and-conditions', ['seo' => $this->seo]);
    }

    public function privacy(){
        $this->makeSeo("privacy-policy");
        
        return view('website.privacy-policy', ['seo' => $this->seo]);
    }

    public function cookies(){
        $this->makeSeo("cookies");
        
        return view('website.cookies', ['seo' => $this->seo]);
    }

    public function contact(){
        $this->makeSeo("contact");
        
        return view('website.contact', ['seo' => $this->seo]);
    }

    public function reviews(){
        $this->makeSeo("reviews");
        
        return view('website.reviews', ['seo' => $this->seo]);
    }

}