<nav id="primary-navbar" class="navbar navbar-expand-md navbar-dark fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand ms-4 me-4" href="/">
            <img src="resources/logo-trans.png" width="40" />
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mb-2 mb-md-0 me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=communities_index">Communities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=leaderboards_index">Leaderboards</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=tables_index">Tables</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=players_index">Players</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=charts_index">Charts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=help">Help</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/semyon422/soundsphere-updater/archive/master.zip" target="_blank">Download</a>
                </li>
            </ul>

            <ul class="navbar-nav mb-2 mb-md-0 me-4">
                <?php
                    if(isset($_COOKIE["logged-in"])) {
                        echo '
                            <li class="nav-item">
                                <a class="nav-link" href="?a=players_player1_index">Profile</a>
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