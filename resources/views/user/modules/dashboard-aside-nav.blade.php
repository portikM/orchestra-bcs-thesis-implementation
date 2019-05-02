<aside class="menu is-hidden-mobile">
    <p class="menu-label">General</p>
    <ul class="menu-list">
        <li><a href="{{ url('/dashboard') }}">Dashboard</a></li>
        <li><a href="#">About</a></li>
    </ul>
    <p class="menu-label">Subscriber</p>
    <ul class="menu-list">
        @if(Auth::user()->subscriber)
            <li><a href="/subscriber-system/{{Auth::user()->id}}">Your System</a></li>
        @endif
        <li>
            <a>Your Info</a>
            <ul>
                @if(Auth::user()->subscriber)
                    <li><a href="/subscriber-info/{{Auth::user()->id}}">View Your Info</a></li>
                    <li><a href="/subscriber-edit/{{Auth::user()->id}}">Edit Your Info</a></li>
                @else
                    <li><a href="/add-info/{{Auth::user()->id}}">Add info</a></li>
                @endif
            </ul>
        </li>
    </ul>
    <p class="menu-label">Support</p>
    <ul class="menu-list">
        <li><a href="#">Knowledge Base</a></li>
        <li><a href="#">Contact Support</a></li>
    </ul>
</aside>