<nav id="primary-navbar" class="navbar navbar-expand-lg navbar-dark fixed-top bg-blue">
    <div class="container">
        <a class="navbar-icon" href="/">
            <img src="resources/logo-trans.png" />
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="?a=communities_index">Communities</a>
                <a class="nav-link" href="?a=leaderboards_index">Leaderboards</a>
                <a class="nav-link" href="?a=bms-tables_index">Tables</a>
                <a class="nav-link" href="?a=players_index">Players</a>
                <a class="nav-link" href="?a=charts_index">Charts</a>
                <a class="nav-link" href="?a=help">Help</a>
                <a class="nav-link" href="https://github.com/semyon422/soundsphere-updater/archive/master.zip" target="_blank">Download</a>
            </div>

            <div class="navbar-nav">
                <a class="nav-link" href="?a=players_player1_index" <?php if(!isset($_COOKIE["logged-in"])) echo 'hidden'?>>
                    Profile
                </a>
                <a class="nav-link" href="logout.php" <?php if(!isset($_COOKIE["logged-in"])) echo 'hidden'?>>
                    Logout
                </a>
                <a class="nav-link" href="?a=login" <?php if(isset($_COOKIE["logged-in"])) echo 'hidden'?>>
                    Login
                </a>
                <a class="nav-link" href="?a=register" <?php if(isset($_COOKIE["logged-in"])) echo 'hidden'?>>
                    Register
                </a>
            </div>
        </div>
    </div>
</nav>
<div id="primary-navbar-box"></div>