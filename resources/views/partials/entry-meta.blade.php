<time class="updated" datetime="{{ get_post_time('c', true) }}">{{ get_the_date() }}</time>

<div>
  @include('partials.social')
</div>
  
<div class="">
  @if(is_singular( 'post' ))
    {!! taxonomy_cloud('post_tag','Tags:') !!}
  @endif
  @if(is_singular( 'portfolio_category' ))
    {!! taxonomy_cloud('portfolio_category', 'Categories:') !!}
  @endif
  @if(!is_singular( 'post' ))
    {!! taxonomy_cloud('subfields') !!}
    {!! taxonomy_cloud('tools', 'Stack:') !!}
  @endif
</div>