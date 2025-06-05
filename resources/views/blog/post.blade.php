@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/press/post.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/press/post.min.css') }}" rel="stylesheet">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "NewsArticle",
            "headline": "{!! $post['heading'] !!}",
            "image": [
                "{!! \App\Traits\GeneralTrait::makeImageURI( $post['image']['asset']['_ref'] ) !!}?w=1000&h=1000&fit=crop",
                "{!! \App\Traits\GeneralTrait::makeImageURI( $post['image']['asset']['_ref'] ) !!}?w=1200&h=900&fit=crop",
                "{!! \App\Traits\GeneralTrait::makeImageURI( $post['image']['asset']['_ref'] ) !!}?w=1600&h=900&fit=crop"
            ],
            "datePublished": "{!! $post['published_at'] !!}",
            "dateModified": "{!! $post['published_at'] !!}",
            "author": [{
                "@type": "Person",
                "name": "{!! $post['author']['title'] !!}"
            }]
        }
    </script>
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">

        <div class="container blog-post">
            <div class="wrapper">
                <div class="left">
                    <x-breadcrumb :breadcrumbs="$breadcrumbs"/>

                    <h1>{{ $post['heading'] }}</h1>
                    
                    <div class="main-elements">
                        <div class="blog-information">
                            <p><a href="@lang('links.blog_category',['slug' => $post['fixed_tag']['slug'] ])" title="{{ $post['fixed_tag']['name'] }}">{{ $post['fixed_tag']['name'] }}</a> <span>{{ $post['reading_time'] }}</span></p>
                            <p><strong>@lang('blog/main.best_for'):</strong> {{ $post['best_for'] }}</p>
                        </div>
                        <div class="blog-banner">
                            <img alt="{{ $post['heading'] }}" title="{{ $post['heading'] }}" loading="lazy" width="1080" height="720" srcset="{{ \App\Traits\GeneralTrait::makeImageURI( $post['image']['asset']['_ref'] ) }}?w=1080&amp;q=65&amp;fit=clip&amp;auto=format 1x, {{ \App\Traits\GeneralTrait::makeImageURI( $post['image']['asset']['_ref'] ) }}?w=3840&amp;q=65&amp;fit=clip&amp;auto=format 2x" src="{{ \App\Traits\GeneralTrait::makeImageURI( $post['image']['asset']['_ref'] ) }}?w=3840&amp;q=65&amp;fit=clip&amp;auto=format">
                        </div>
                        <div class="post-blogger">
                            <p>@lang('blog/main.written_by') {{ $post['author']['title'] }}</p>
                            <p>
                                @if(app()->getLocale() == "en")
                                    Discover the way, connect with nature.
                                @else
                                    Descubre el camino, conecta con la naturaleza.°
                                @endif
                            </p>
                        </div>
                        <div class="post-summary">
                            <h3>@lang('blog/main.article_summary')</h3>
                            <p>{{ $post['summary'] }}</p>
                        </div>
                    </div>

                    <div class="post-content">
                        @php
                            echo \App\Traits\GeneralTrait::makeBlockContent( $post['content'] );
                        @endphp
                        <p class="published">@lang('blog/main.published') {{ date("M d, Y", strtotime($post['published_at'])) }}</p>
                    </div>
                    
                </div>

                <div class="right">                   
                    <div class="items">
                        <h2>@lang('blog/main.related_articles')</h2>
                        @if( sizeof($post['related_posts']) > 0 )
                            @foreach($post['related_posts'] as $key => $value)
                                <a href="@lang('links.blog_post',['category' => $value['fixed_tag']['slug'], 'slug' => $value['slug'] ])" title="{{ $value['heading'] }}">
                                    <div class="top">
                                        <img src="{{ \App\Traits\GeneralTrait::makeImageURI( $value['image']['asset']['_ref'] ) }}?w=828&q=65&fit=clip&auto=format" srcset="{{ \App\Traits\GeneralTrait::makeImageURI( $value['image']['asset']['_ref'] ) }}?w=640&q=65&fit=clip&auto=format 1x, {{ \App\Traits\GeneralTrait::makeImageURI( $value['image']['asset']['_ref'] ) }}?w=828&q=65&fit=clip&auto=format 2x" alt="{{ $value['heading'] }}" title="{{ $value['heading'] }}" loading="lazy" width="414" height="276">
                                    </div>
                                    <div class="bottom">
                                        <p>{{ $value['fixed_tag']['name'] }}</p>
                                        <h3>{{ $value['heading'] }}</h3>
                                        <p>@lang('blog/main.best_for'): <span>{{ $value['best_for'] }}</span></p>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>

    @include('layouts.footer.general')

@endsection