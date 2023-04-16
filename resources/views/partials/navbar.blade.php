<nav class="navbar navbar-expand-sm bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><i class="bi bi-medium"></i></a>

        {{-- fitur search --}}
        <form action="/" class="d-flex">
            <input type="text" class="form-control me-2 d-flex" name="search" value="{{ request('search') }}"
                autocomplete="off" placeholder="Search...">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <div class="navbar-collapse justify-content-end">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-pencil-square">
                            Write</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="bi bi-bell"></i></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false"><i class="bi bi-person-circle"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-end">
                        <li><a class="dropdown-item" href="#">Profile</a></li>
                        <li><a class="dropdown-item" href="#">Sign Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
