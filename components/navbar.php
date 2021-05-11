<nav id="primary-navbar" class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-4 me-4" href="/">
            <img src="resources/logo-trans.png" width="40" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mb-2 mb-md-0 me-2">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=communities">Communities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=users">Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=charts">Charts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=help">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/semyon422/soundsphere-updater/archive/master.zip" target="_blank">Download</a>
                </li>
            </ul>
            <form class="me-auto" action="?a=search" method="post">
                <div class="input-group">
                    <input class="form-control" type="search" placeholder="Search..." aria-label="Search" />
                    <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <ul class="navbar-nav mb-2 mb-md-0 me-4">
                <?php
                    if(isset($_COOKIE["logged-in"])) {
                        echo '
                            <li class="nav-item">
                                <a class="nav-link" href="?a=users_user1_summary">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout</a>
                            </li>';
                    } else {
                        echo '
                            <li class="nav-item">
                            <a class="nav-link" href="?a=login">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?a=register">Register</a>
                            </li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
<div id="primary-navbar-box"></div>