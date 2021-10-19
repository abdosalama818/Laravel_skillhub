<nav id="nav">
    <form action="{{ url('logout') }}" id="logout-form" method="post" style="display: none">
        @csrf
    </form>
    <ul class="main-menu nav navbar-nav navbar-right">
        <li><a href="index.html">@lang('web.home')</a></li>
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">@lang('web.cat') <span class="caret"></span></a>
            <ul class="dropdown-menu">
                @foreach ($cats as $cat )
                <li><a href="{{ url("/categories/show/$cat->id") }}">{{ $cat->name() }}</a></li>
                @endforeach


            </ul>
        </li>
        <li><a href="contact.html">@lang('web.contact')</a></li>
        @guest
        <li><a href="{{ url('/login') }}">@lang('web.signin')</a></li>
        <li><a href="{{ url('/register') }}">@lang('web.signup')</a></li>
        @endguest

@auth
<li><a id="logout-link" href="#">@lang('web.logout')</a></li>
@endauth


        @if (App::getLocale()=="en")


        <li><a href="{{ url('set/lang/ar') }}">AR</a></li>

        @else
        <li><a href="{{ url('set/lang/en') }}">EN</a></li>


        @endif

    </ul>
</nav>
