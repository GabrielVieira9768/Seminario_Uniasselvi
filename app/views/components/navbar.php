<nav class="navbar bg-body-tertiary">
    <div class="container-fluid d-flex justify-content-between align-items-center mx-4">
        <a class="navbar-brand" href="">
            <img src="" alt="Logo" width="30" height="24" class="d-inline-block align-text-top">
            Página
        </a>
        <div class="" id="navbarNav">
            <ul class="navbar-nav d-flex flex-row">
                <li class="nav-item mx-4">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item mx-4">
                    <a class="nav-link" href="/lista-posts">Posts</a>
                </li>
                <?php if(empty($_SESSION['email']) && empty($_SESSION['password'])) { ?>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="/login">Login</a>
                    </li>
                <?php } else {?>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="/area-administrativa">Área Administrativa</a>
                    </li>
                    <li class="nav-item mx-4">
                        <a class="nav-link" href="/logout">Logout</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
