<?php

namespace App\Services;

use Sanity\Client;
use Sanity\BlockContent;
use Illuminate\Support\Facades\Cache;

class SanityService
{
    private $client;
    
    public function __construct(){
        $this->client = new Client([
            'projectId' => config('sanity.project_id'),
            'dataset' => config('sanity.dataset'),
            'token' => config('sanity.token'),
            'useCdn' => false, // Usa false si necesitas datos en tiempo real.
        ]);
    }

    public function image(){
        return new ImageUrlBuilder($this->client);
    }

    public function handler($path = '', $query = ''){
        //return $this->client->fetch($query);
        //Cache por 7 días
        return Cache::remember($path, ( 7 * 24 * 60 * 60 ), function () use ($query) {
            return $this->client->fetch($query);
        });
    }

    public function getSinglePost( $slug = "" ){        
        $language = app()->getLocale();
        
        $query = '*[_type == "blog" && is_active == true && coalesce(seo_slug["'.$language.'"], "") == "'.$slug.'"] | order(published_at desc) {
            title,
            "heading": coalesce(heading["'.$language.'"], ""),
            "best_for": coalesce(best_for["'.$language.'"], ""),
            "summary": coalesce(summary["'.$language.'"], ""),
            "reading_time": coalesce(reading_time["'.$language.'"], ""),
            "image": image,
            "content": coalesce(content["'.$language.'"], ""),
            published_at,
            "seo": {
                "en" : {
                  "slug": coalesce(seo_slug.en, ""),
                  "title": coalesce(seo_title.en, ""),
                  "description": coalesce(seo_description.en, "")
                },
                "es" : {
                  "slug": coalesce(seo_slug.es, ""),
                  "title": coalesce(seo_title.es, ""),
                  "description": coalesce(seo_description.es, "")
                }
            },
            "author": author->{
                title,
                author_slug,
                email,
                "bio": coalesce(author_bio["'.$language.'"], ""),
                image
            },
            "fixed_tag": fixed_tag->{
                "en" : {
                    "name": coalesce(name["en"], ""),
                    "slug": coalesce(seo_slug["en"], "")
                },
                "es" : {
                    "name": coalesce(name["es"], ""),
                    "slug": coalesce(seo_slug["es"], "")
                },
                "name": coalesce(name["'.$language.'"], ""),
                "slug": coalesce(seo_slug["'.$language.'"], "")
            },
            "tags": tags[]->{
                "name": coalesce(name["'.$language.'"], ""),
                "slug": coalesce(seo_slug["'.$language.'"], "")
            },
            "related_posts": related_post[]->{
                "heading": coalesce(heading["'.$language.'"], ""),
                "slug": coalesce(seo_slug["'.$language.'"], ""),
                image,
                "best_for": coalesce(best_for["'.$language.'"], ""),
                "fixed_tag": fixed_tag->{
                    "name": coalesce(name["'.$language.'"], ""),
                    "slug": coalesce(seo_slug["'.$language.'"], "")
                }
            }
        }';

        $path = "post.single.".$language.".".$slug;
        $data = $this->handler($path, $query);
        if(sizeof( $data ) > 0):
            return $data[0];
        else:
            return false;
        endif;
    }

    public function getRecentPost($limit = null){

        $language = app()->getLocale();

        $query = '*[_type == "blog" && is_active == true] | order(published_at desc) {
            "heading": coalesce(heading["'.$language.'"], ""),
            "summary": coalesce(summary["'.$language.'"], ""),
            "blog_image": image,
            "published_at": published_at,
            "seo": {
                "slug": coalesce(seo_slug["'.$language.'"], ""),
            },
            "fixed_tag": fixed_tag->{
                "name": coalesce(name["'.$language.'"], ""),
                "slug": coalesce(seo_slug["'.$language.'"], "")
            },
            "author": author->{
                title,
                author_slug,
                email,
                "bio": coalesce(author_bio["'.$language.'"], ""),
                "author_image": image
            },
            "best_for": coalesce(best_for["'.$language.'"], "")
        }';

        $path = "post.recents.".$language;
        $data = $this->handler($path, $query);
        
        if ($limit !== null) {
            $data = array_slice($data, 0, $limit);
        }

        $items = [
            "status" => false,
            "data" => [],
        ];

        if(sizeof( $data ) > 0):
            $counter = 0;
            foreach($data as $key => $value):
                $counter++;

                $items['status'] = true;
                $items['data'][] = $value;

            endforeach;
        endif;
        
        return $items;
    }

    public function getCategories(){

        $language = app()->getLocale();

        $query = '*[_type == "category_type"] | order(title desc) {
            "title": coalesce(title, ""),
            "name": coalesce(name["'.$language.'"], ""),
            "image": image,
            "seo": {
              "slug": coalesce(seo_slug["'.$language.'"], ""),
              "title": coalesce(seo_title["'.$language.'"], ""),
              "description": coalesce(seo_description["'.$language.'"], "")
            },
            "description": coalesce(description, "")
        }';
        
        $path = "post.categories.".$language;
        $data = $this->handler($path, $query);

        $items = [
            "status" => false,
            "data" => []
        ];

        if( sizeof( $data ) > 0 ):
            $items['status'] = true;
            $items['data'] = $data;
        endif;

        return $items;
    }

    public function getCategory( $slug = "" ){        
        $language = app()->getLocale();

        $query = '*[_type == "category_type" && seo_slug["'.$language.'"] == "'.$slug.'" ] | order(title desc) {
            "title": coalesce(title, ""),
            "name": coalesce(name["'.$language.'"], ""),
            "image": image,
            "seo": {
                "en" : {
                  "slug": coalesce(seo_slug.en, ""),
                  "title": coalesce(seo_title.en, ""),
                  "description": coalesce(seo_description.en, "")
                },
                "es" : {
                  "slug": coalesce(seo_slug.es, ""),
                  "title": coalesce(seo_title.es, ""),
                  "description": coalesce(seo_description.es, "")
                }
            },
            "description": coalesce(description["'.$language.'"], "")
        }';

        $path = "post.category.".$language.".".$slug;
        $data = $this->handler($path, $query);

        $items = [
            "status" => false,
            "data" => []
        ];

        if( sizeof( $data ) > 0 ):
            $items['status'] = true;
            $items['data'] = $data[0];
        endif;

        return $items;
    }

    public function getPostsByCategory( $slug = "" ){        
        $language = app()->getLocale();
        
        $query = '*[_type == "blog" && is_active == true && fixed_tag->seo_slug["'.$language.'"] == "'.$slug.'"] | order(published_at desc) {
            "heading": coalesce(heading["'.$language.'"], ""),
            "image": image,
            "seo": {
                "slug": coalesce(seo_slug["'.$language.'"], ""),
            },
            "fixed_tag": fixed_tag->{
                "name": coalesce(name["'.$language.'"], ""),
                "slug": coalesce(seo_slug["'.$language.'"], "")
            },
            "best_for": coalesce(best_for["'.$language.'"], "")
        }';

        $path = "post.by.category.".$language.".".$slug;
        $data = $this->handler($path, $query);

        $items = [
            "status" => false,
            "data" => [],
        ];

        if(sizeof( $data ) > 0):
            $items['status'] = true;
            $items['data'] = $data;
        endif;
        
        return $items;
    }

    public function build($items){
        $data = [
            "top" => [
                "status" => false,
                "data" => []
            ],
            "items" => [
                "status" => false,
                "data" => []
            ]
        ];

        $cont = 0;
        foreach($items as $key => $value):
            $cont++;
            if($cont == 1){
                $data['top']['status'] = true;
                $data['top']['data'] = $value;
            }else{
                $data['items']['status'] = true;
                $data['items']['data'][] = $value;
            }
        endforeach;

        return $data;
    }

}