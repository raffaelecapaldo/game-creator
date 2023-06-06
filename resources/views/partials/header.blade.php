<header>
    <div class="container h-100 d-flex justify-content-between align-items-center">
        <div class="box-logo py-1">
            <img src="/img/logo.png" alt="">
        </div>
        <ul class="d-flex justify-content-center align-items-center list-unstyled gap-4 pt-3">
            <li><a href="{{route('home')}}">Home</a></li>
            <li><a href="@yield('characterlink')">Characters</a></li>
            <li><a href="#">Rules</a></li>
            <li><a href="#">Team</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <div class="authentication">
            <ul class="navbar-nav d-flex flex-row gap-3 mb-0">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('/admin') }}">{{ __('Dashboard') }}</a>
                            <a class="dropdown-item" href="{{ url('/admin/profile') }}">{{ __('Profile') }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</header>
