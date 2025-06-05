@extends('layouts.main')

@push("push-top")    
    <link href="{{ mix('/assets/css/press/category.min.css') }}" rel="preload" as="style" >
    <link href="{{ mix('/assets/css/press/category.min.css') }}" rel="stylesheet">
@endpush
@push("push-bottom")    
@endpush

@section('content')
    @include('layouts.header.general', ['link' => \App\Traits\GeneralTrait::alternate( $seo )])

    <main class="main">

        <div class="container blog-top">
            <div class="wrapper">
                <div class="top">
                    <h1>{{ $category['data']['title'] }}</h1>
                    <div>
                        @php
                            echo \App\Traits\GeneralTrait::makeBlockContent( $category['data']['description'] );                            
                        @endphp
                    </div>
                </div>
                <div class="bottom">
                    @if( $categories['status'] )
                        @foreach($categories['data'] as $key => $value)
                            <a href="@lang('links.blog_category', ['slug' => $value['seo']['slug'] ])" title="{{ $value['name'] }}">{{ $value['name'] }}</a>
                        @endforeach
                    @endif
                </div>
            </div>
        </div>

        <div class="container blog">
            <div class="wrapper">
                @if( $post['status'] )
                    <div class="middle">
                        @foreach($post['data'] as $key => $value)
                            <a href="@lang('links.blog_post',['category' => $value['fixed_tag']['slug'], 'slug' => $value['seo']['slug']])" title="{{ $value['fixed_tag']['name'] }}">
                                <div class="top">
                                    <img src="{{ \App\Traits\GeneralTrait::makeImageURI( $value['image']['asset']['_ref'] ) }}?w=828&q=65&fit=clip&auto=format" srcset="{{ \App\Traits\GeneralTrait::makeImageURI( $value['image']['asset']['_ref'] ) }}?w=640&q=65&fit=clip&auto=format 1x, {{ \App\Traits\GeneralTrait::makeImageURI( $value['image']['asset']['_ref'] ) }}?w=828&q=65&fit=clip&auto=format 2x" alt="{{ $value['fixed_tag']['name'] }}" title="{{ $value['fixed_tag']['name'] }}" loading="lazy" width="414" height="276">
                                </div>
                                <div class="bottom">
                                    <p>{{ $value['fixed_tag']['name'] }}</p>
                                    <h2>{{ $value['heading'] }}</h2>
                                    <p>@lang("blog/main.best_for"): <span>{{ $value['best_for'] }}</span></p>
                                </div>
                            </a>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

    </main>

    @include('layouts.footer.general')

@endsection