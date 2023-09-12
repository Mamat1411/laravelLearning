<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Mamat Blog</a>
        <div class="collapse navbar-collapse">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ( $title === 'Posts') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
            </ul>
            <form class="d-flex" action="/">
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif

                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
                <input class="form-control mx-2" type="search" placeholder="Search..." name="search" style="width: 750px" value="{{ request('search') }}">
                <button class="btn btn-primary" type="submit">Search</button>
            </form>
        </div>
        <a href="" class="btn btn-warning text-decoration-none ms-2">Login</a>
    </div>
</nav>
