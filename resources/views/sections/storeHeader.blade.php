<div class="header">
    <div class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo/Brand -->
            <a href="/{{ $store->slug }}" class="navbar-brand">
                {{ $store->name }}
            </a>

            <!-- Navbar Toggler -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Navbar Menu -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- Search Box -->
                <div class="search-box ms-auto">
                    <form class="d-flex search-form">
                        <input class="" type="search" placeholder="Search" aria-label="Search">
                        <button class="" type="submit">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </form>
                </div>

                <style>
                    .store-icon {
                        font-size: 1.5rem;
                    }
                </style>

                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"> <i class="store-icon fa-regular fa-heart"></i> </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="store-icon fa-solid fa-cart-shopping"></i></a>
                                </li>
                                @if ( Route::has('login'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                    </li>
                                @endif

                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('register') }}">{{ __('register') }}</a>
                                    </li>
                                @endif


                        @else
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}"> <i class="store-icon fa-regular fa-heart"></i> </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}"><i class="store-icon fa-solid fa-cart-shopping"></i></a>
                                </li>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
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
    </div>
</div>