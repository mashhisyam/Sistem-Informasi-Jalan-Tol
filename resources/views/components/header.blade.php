<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="{{url('/')}}">
            <img class="logo-navbar" src="{{ asset('assets/images/app-logo.png') }}" alt="" srcset="">
        </a>

        <div class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{Request::is("beritatol") ? 'active' : 'non-active'}}">
                    <a class="nav-link" href="{{ url('beritatol') }}">Berita Tol</a>
                </li>
                <li class="nav-item {{Request::is("taksirtol") ? 'active' : 'non-active'}}">
                    <a class="nav-link" href="{{url('taksirtol')}}">Taksir Tol</a>
                </li>
                <li class="nav-item {{Request::is("contact") ? 'active' : 'non-active'}}">
                    <a class="nav-link" href="{{url('contact')}}">Contact</a>
                </li>
            </ul>

            <div class="form-inline my-2 my-lg-0">
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Jimmy
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="{{url('profile')}}">Profile</a>
                        <a class="dropdown-item" href="#">Log out</a>
                    </div>
                </div>
                <img class="user-profile-picture rounded-circle" src="{{ asset('assets/images/profile/jimmy.jpg') }}">
            </div>
        </div>
    </div>
</nav>