<nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/dashboard') }}?username={{ request()->get('username') }}">Task Manager</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}?username={{ request()->get('username') }}">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/pengelolaan') }}?username={{ request()->get('username') }}">Daftar Tugas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/profile') }}?username={{ request()->get('username') }}">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>