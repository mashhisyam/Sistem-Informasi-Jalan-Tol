<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand" href="#">
            <img class="logo-navbar" src="{{ asset('assets/images/app-logo.png') }}" alt="" srcset="">
        </a>

        <div class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </div>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item {{Request::is("beritatol") ? 'active' : 'non-active'}}">
                    <a class="nav-link" href="#">Berita Tol</a>
                </li>
                <li class="nav-item {{Request::is("taksirtol") ? 'active' : 'non-active'}}">
                    <a class="nav-link" href="#">Taksir Tol</a>
                </li>
                <li class="nav-item {{Request::is("contact") ? 'active' : 'non-active'}}">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>

            <div class="form-inline my-2 my-lg-0">
                <span class="mr-2">jimmy</span>
                <img class="user-profile-picture rounded-circle" src="{{ asset('assets/images/profile/jimmy.jpg') }}">
            </div>
        </div>
    </div>
</nav>