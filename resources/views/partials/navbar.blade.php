<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Mamat Blog</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="container navbar-nav mb-2 mb-lg-0 d-flex">
                <li class="nav-item">
                    <a class="nav-link {{ $title === 'Posts' ? 'active' : '' }}" aria-current="page"
                        href="/">Home</a>
                </li>
                <li class="container nav-item d-flex justify-content-end">
                    <form class="d-flex" action="/">
                        @if (request('category'))
                            <input type="hidden" name="category" value="{{ request('category') }}">
                        @endif

                        @if (request('author'))
                            <input type="hidden" name="author" value="{{ request('author') }}">
                        @endif
                        <input class="form-control mx-2" type="search" placeholder="Search..." name="search"
                            style="width: 500px" value="{{ request('search') }}">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                </li>
                <li class="nav-item ms-auto">
                    @auth
                        <div class="dropdown">
                            <a class="btn btn-warning dropdown-toggle text-nowrap" href="#" type="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Welcome {{ decrypt(auth()->user()->name) }}
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-window-reverse"></i>
                                        My
                                        Dashboard</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-left"></i>
                                            Sign
                                            out</button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="/login" class="btn btn-warning text-decoration-none text-nowrap"><i
                                class="bi bi-box-arrow-in-right"></i>
                            Login
                        </a>
                    @endauth
                </li>
            </ul>
        </div>
    </div>
</nav>
