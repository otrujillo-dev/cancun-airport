@php
    use Carbon\Carbon;   
@endphp
@if($post['status'] == true)    
    @foreach($post['data'] as $key => $value)
    <div>
        <a href="@lang('links.blog_post',['category' => $value['fixed_tag']['slug'], 'slug' => $value['seo']['slug']])" title="{{ $value['heading'] }}">
            <img src="{{ \App\Traits\GeneralTrait::makeImageURI( $value['blog_image']['asset']['_ref'] ) }}?w=600&q=65&fit=clip&auto=format" srcset="{{ \App\Traits\GeneralTrait::makeImageURI( $value['blog_image']['asset']['_ref'] ) }}?w=500&q=65&fit=clip&auto=format 1x, {{ \App\Traits\GeneralTrait::makeImageURI( $value['blog_image']['asset']['_ref'] ) }}?w=500&q=65&fit=clip&auto=format 2x" alt="{{ $value['heading'] }}" title="{{ $value['heading'] }}" loading="lazy" width="400" height="150">
        </a>
        <div>
            <h3>
                <a href="@lang('links.blog_post',['category' => $value['fixed_tag']['slug'], 'slug' => $value['seo']['slug']])" title="{{ $value['heading'] }}">{{ $value['heading'] }}</a>
            </h3>
            <p>{{ $value['summary'] }}</p>
            <div>
                <div>                    
                    <img src="{{ \App\Traits\GeneralTrait::makeImageURI( $value['author']['author_image']['asset']['_ref'] ) }}?w=200&q=90&fit=clip&auto=format" srcset="{{ \App\Traits\GeneralTrait::makeImageURI( $value['author']['author_image']['asset']['_ref'] ) }}?w=300&q=90&fit=clip&auto=format 1x, {{ \App\Traits\GeneralTrait::makeImageURI( $value['author']['author_image']['asset']['_ref'] ) }}?w=400&q=90&fit=clip&auto=format 2x" alt="{{ $value['heading'] }}" title="{{ $value['heading'] }}" loading="lazy" width="50" height="50">
                    <div>
                        <p>{{ $value['author']['title'] }}</p>
                        <p>{{ Carbon::parse($value['published_at'])->format('M d, Y') }}</p>
                    </div>
                </div>
                <a href="@lang('links.blog_post',['category' => $value['fixed_tag']['slug'], 'slug' => $value['seo']['slug']])" class="btn" title="@lang('blog/main.read_more')">@lang('blog/main.read_more')</a>
            </div>
        </div>
    </div>
    @endforeach
@endif