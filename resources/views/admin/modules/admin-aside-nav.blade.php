<aside class="menu is-hidden-mobile">
    <p class="menu-label">@lang('content/admin/admin-aside-nav.cat_general')</p>
    <ul class="menu-list">
        <li><a href="{{ url('/admin') }}">@lang('auth.nav_dashboard')</a></li>
        <li><a href="#">@lang('content/admin/admin-aside-nav.cat_general_tasks')</a></li>
    </ul>
    <p class="menu-label">@lang('content/admin/admin-aside-nav.cat_subscribers')</p>
    <ul class="menu-list">
        <li><a href="/subscribers-list">@lang('content/admin/admin-aside-nav.cat_subscribers_list')</a></li>
    </ul>
    <p class="menu-label">@lang('content/admin/admin-aside-nav.cat_systems')</p>
    <ul class="menu-list">
        <li><a href="/register-system">@lang('content/admin/admin-aside-nav.cat_systems_register')</a></li>
    </ul>
</aside>