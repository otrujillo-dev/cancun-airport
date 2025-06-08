<?php

namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;
use App\Services\SanityService;
use Illuminate\Http\Request;
use App\Traits\SeoTrait;
use Illuminate\Support\Facades\Cache;

class IndexController extends Controller{
    use SeoTrait;

    protected $sanityService;

    public function index(SanityService $sanityService){
        $this->makeSeo("blog");
        $this->sanityService = $sanityService;
        
        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url').__('links.home'),
            "name" => (( app()->getLocale() == "en" )?'Home':'Inicio')
        ];
        $breadcrumbs[2] = [            
            "name" => (( app()->getLocale() == "en" )?'Blog':'Blog')
        ];

        $categories = $this->sanityService->getCategories();
        $post = $this->sanityService->getRecentPost();
        
        if($post['status'] == true):
            $post = $this->sanityService->build( $post['data'] );
        endif;

        return view('blog.index', ['seo' => $this->seo, 'breadcrumbs' => $breadcrumbs, 'post' => $post, 'categories' => $categories]);
    }

    public function post(SanityService $sanityService){
        
        $this->makeSeo("empty");
        $this->sanityService = $sanityService;

        $params = request()->route()->parameters();        
        $post = $this->sanityService->getSinglePost( $params['slug'] );
        //dd($post);
        $language = app()->getLocale();

        if( $post == false ):
            return redirect( trans('links.home') );
        endif;
            
        $this->seo['meta']['title'] = $post['seo'][$language]['title'];
        $this->seo['meta']['description'] = $post['seo'][$language]['description'];        
        
        $this->seo['alternate']['en'] = '/press/'.$post['fixed_tag']['en']['slug'].'/'.$post['seo']['en']['slug'];
        $this->seo['alternate']['es'] = '/es/prensa/'.$post['fixed_tag']['es']['slug'].'/'.$post['seo']['es']['slug'];        

        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url').__('links.home'),
            "name" => (( app()->getLocale() == "en" )?'Home':'Inicio')
        ];
        $breadcrumbs[2] = [
            "URL" => config('app.url').__('links.blog'),
            "name" => 'Blog'
        ];
        $breadcrumbs[3] = [
            "URL" => config('app.url').__('links.blog_category', ['slug' => $post['fixed_tag']['slug'] ]),
            "name" => $post['fixed_tag']['name']
        ];
        $breadcrumbs[4] = [            
            "name" => $post['heading']
        ];

        return view('blog.post', ['seo' => $this->seo, 'breadcrumbs' => $breadcrumbs, 'post' => $post]);
    }

    public function category(SanityService $sanityService){
        $this->makeSeo("empty");
        $this->sanityService = $sanityService;

        $params = request()->route()->parameters();
        $language = app()->getLocale();
        
        $category = $this->sanityService->getCategory( $params['category'] );
        $categories = $this->sanityService->getCategories();
        $post = $this->sanityService->getPostsByCategory( $params['category'] );        
        
        if( $category == false ):
            return redirect( trans('links.home') );
        endif;

        $this->seo['meta']['title'] = $category['data']['seo'][$language]['title'];
        $this->seo['meta']['description'] = $category['data']['seo'][$language]['description'];

        $this->seo['alternate']['en'] = '/press/'.$category['data']['seo']['en']['slug'];
        $this->seo['alternate']['es'] = '/es/prensa/'.$category['data']['seo']['es']['slug'];
        
        $breadcrumbs = [];
        $breadcrumbs[1] = [
            "URL" => config('app.url').__('links.home'),
            "name" => (( app()->getLocale() == "en" )?'Home':'Inicio')
        ];
        $breadcrumbs[2] = [
            "URL" => config('app.url').__('links.blog'),
            "name" => 'Blog'
        ];
        $breadcrumbs[3] = [
            "name" => $category['data']['name']
        ];
        
        return view('blog.category', ['seo' => $this->seo, 'breadcrumbs' => $breadcrumbs, 'category' => $category, 'categories' => $categories, 'post' => $post]);
    }

    public function clear(){        
        Cache::flush();       
        return response()->json(['message' => 'Todo el caché ha sido borrado.']);
    }
}