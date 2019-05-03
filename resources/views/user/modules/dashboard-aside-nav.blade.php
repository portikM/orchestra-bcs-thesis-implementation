<aside class="menu is-hidden-mobile">
    <p class="menu-label">@lang('content/user/dashboard-aside-nav.cat_general')</p>
    <ul class="menu-list">
        <li><a href="{{ url('/dashboard') }}">@lang('content/user/dashboard-aside-nav.cat_general_dashboard')</a></li>
        <li><a href="#">@lang('content/user/dashboard-aside-nav.cat_general_about')</a></li>
    </ul>
    <p class="menu-label">@lang('content/user/dashboard-aside-nav.cat_subscriber')</p>
    <ul class="menu-list">
        @if(Auth::user()->subscriber)
            <li><a href="/subscriber-system/{{Auth::user()->id}}">@lang('content/user/dashboard-aside-nav.cat_subscriber_system')</a></li>
        @endif
        <li>
            <a>@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_info')</a>
            <ul>
                @if(Auth::user()->subscriber)
                    <li><a href="/subscriber-info/{{Auth::user()->id}}">@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_info_view')</a></li>
                    <li><a href="/subscriber-edit/{{Auth::user()->id}}">@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_info_edit')</a></li>
                @else
                    <li><a href="/add-info/{{Auth::user()->id}}">@lang('content/user/dashboard-aside-nav.cat_subscriber_subcat_info_add')</a></li>
                @endif
            </ul>
        </li>
    </ul>
    <p class="menu-label">@lang('content/user/dashboard-aside-nav.cat_support')</p>
    <ul class="menu-list">
        <li><a href="#">@lang('content/user/dashboard-aside-nav.cat_support_faq')</a></li>
        <li><a href="#">@lang('content/user/dashboard-aside-nav.cat_support_knowledge')</a></li>
        <li><a href="#">@lang('content/user/dashboard-aside-nav.cat_support_contact')</a></li>
    </ul>
</aside>