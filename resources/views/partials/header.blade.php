<header>
    <div class="h-100 w-100 d-flex justify-content-between align-items-center">
        <div class="box-logo py-1">
            <img src="/img/logo.png" alt="">
        </div>
        <div id="navbar">
            <ul class="list-unstyled pt-3">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="@yield('characterlink')">Characters</a></li>
                <li><a href="#">Rules</a></li>
                <li><a href="#">Team</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
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
    {{-- HAMBURGER MENU --}}
    <div class="dropdown">
        <i class="fa-solid fa-bars fs-2" data-bs-toggle="dropdown" aria-expanded="false"></i>
        <ul class="dropdown-menu w-100">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
        </ul>
    </div>
</header>
