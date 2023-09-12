<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">Mamat Blog</a>
        <div class="collapse navbar-collapse justify-content-center">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link {{ ( $title === 'Posts') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
            </ul>
            <div class="input-group mx-5">
                <input type="text" class="form-control" placeholder="Search">
                <button class="btn btn-primary" type="search">Search</button>
            </div>
        </div>
        <a href="" class="btn btn-warning text-decoration-none ms-2">Login</a>
    </div>
</nav>
