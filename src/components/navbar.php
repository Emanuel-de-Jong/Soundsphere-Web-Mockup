<nav id="primary-navbar" class="navbar navbar-expand-lg navbar-dark fixed-top bg-blue">
    <div class="container">
        <a class="navbar-icon" href="/">
            <img src="resources/logo-trans.png" />
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home<div class="underline"></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=communities_index">Communities<div class="underline"></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=leaderboards_index">Leaderboards<div class="underline"></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=tables_index">Tables<div class="underline"></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=players_index">Players<div class="underline"></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=charts_index">Charts<div class="underline"></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="?a=help">Help<div class="underline"></div></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://github.com/semyon422/soundsphere-updater/archive/master.zip" target="_blank">Download<div class="underline"></div></a>
                </li>
            </ul>

            <ul class="navbar-nav">
                <?php
                    if(isset($_COOKIE["logged-in"])) {
                        echo '
                            <li class="nav-item">
                                <a class="nav-link" href="?a=players_player1_index">Profile<div class="underline"></div></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="logout.php">Logout<div class="underline"></div></a>
                            </li>';
                    } else {
                        echo '
                            <li class="nav-item">
                            <a class="nav-link" href="?a=login">Login<div class="underline"></div></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="?a=register">Register<div class="underline"></div></a>
                            </li>';
                    }
                ?>
            </ul>
        </div>
    </div>
</nav>
<div id="primary-navbar-box"></div>