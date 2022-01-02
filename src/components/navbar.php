<nav id="primary-navbar" class="navbar navbar-expand-lg navbar-dark fixed-top bg-blue">
    <div class="container-lg">
        <a class="primary-navbar-icon" href="/">
            <img src="/resources/logo-trans.png" alt="Logo">
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav me-auto">
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="?a=communities_index">Communities</a>
                <a class="nav-link" href="?a=leaderboards_index">Leaderboards</a>
                <a class="nav-link" href="?a=difftables_index">Tables</a>
                <a class="nav-link" href="?a=users_index">Players</a>
                <a class="nav-link" href="?a=notecharts_index">Charts</a>
                <a class="nav-link" href="?a=help">Help</a>
                <a class="nav-link" href="https://dl.soundsphere.xyz/soundsphere.zip" target="_blank" rel="noopener">Download</a>
            </div>

            <?php if (!isset($_COOKIE["logged-in"])): ?>
                <div class="navbar-nav">
                    <a class="nav-link" href="?a=users_user_index">
                        Profile
                    </a>
                    <a class="nav-link" href="logout.php">
                        Logout
                    </a>
                </div>
            <?php else: ?>
                <div class="navbar-nav">
                    <a class="nav-link" href="?a=login">
                        Login
                    </a>
                    <a class="nav-link" href="?a=register">
                        Register
                    </a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</nav>
<div id="primary-navbar-box"></div>
