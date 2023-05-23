<nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
    <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo mr-5" href="{{route('dashboard')}}"><img
                src="{{ url('file/logo/logo.png') }}" class="mr-2"
                alt="logo.png" /></a>

        <a class="navbar-brand brand-logo-mini" href="{{route('dashboard')}}"><img
                src="{{ url('file/logo/logo.png') }}"
                alt="logo.png" /></a>
    </div>
    <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="icon-menu"></span>
        </button>
        <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
            </li>
        </ul>
        <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
                    @if (!empty(auth()->user()->image))
                        <img src="{{ url('file/admins/' . auth()->user()->image) }}" alt="{{ auth()->user()->image }}"
                            class="img-fluid">
                    @else
                        <img src="{{ url('file/dummy_image/person.webp') }}" alt="person.webp"
                            class="img-fluid">
                    @endif
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                    <a class="dropdown-item" href="{{ route('profile') }}">
                        <i class="ti-settings text-primary"></i>
                        Settings
                    </a>
                    {{-- <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="dropdown-item" >
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </button>
                    </form> --}}

                        <a class="dropdown-item" href="{{route('logout')}}">
                            <i class="ti-power-off text-primary"></i>
                            Logout
                        </a>
                </div>
            </li>
            <li class="nav-item custom">
                <ul>
                    <li>
                        <span>Mr. {{auth()->user()->name}}</span>
                    </li>
                </ul>
            </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
            data-toggle="offcanvas">
            <span class="icon-menu"></span>
        </button>
    </div>
</nav>
