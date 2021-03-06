@if( is_active_sidebar('sidebar-footer-a') || is_active_sidebar('sidebar-footer-b') )
<section class="c-section">
  <div class="c-container-s">
    <div class="c-row">
      <div class="c-col-1-2">
        @php(dynamic_sidebar('sidebar-footer-a'))
      </div>
      <div class="c-col-1-2">
        @php(dynamic_sidebar('sidebar-footer-b'))
      </div>
    </div>
  </div>
</section>
@endif

@if( has_nav_menu('footer_navigation_left') || has_nav_menu('footer_navigation_right') )
<footer class="c-section">
  <div class="c-container">
    <nav class="o-nav-h">
      <div class="o-nav-h__left">
        {{ cnotv_nav_menu('footer_navigation_left') }}
      </div>
      <div class="o-nav-h__right">
        {{ cnotv_nav_menu('footer_navigation_right') }}
      </div>
    </div>
  </div>
</footer>
@endif

@include('partials.modal')
