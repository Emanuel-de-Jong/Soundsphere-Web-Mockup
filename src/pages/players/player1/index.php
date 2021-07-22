<nav id="secondary-navbar">
    <div class="container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#info-section">Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#description-section">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#leaderboards-communities-section">Communities</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#leaderboards-communities-section">Leaderboards</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#top-scores-section">Top scores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#recent-scores-section">Recent scores</a>
            </li>
        </ul>
    </div>
</nav>
<div id="secondary-navbar-box"></div>


<div id="player">
    <main class="container">
        <div class="main-box">
            <div class="page-icons page-icons-right">
                <a href="?a=players_player1_inbox" class="page-icon" title="Accept requests and send invites">
                    <i class="fas fa-inbox"></i>
                    <div class="new-message-circle">3</div>
                </a>

                <a href="?a=players_player1_edit" class="page-icon" title="Your settings">
                    <i class="fas fa-cog"></i>
                </a>
            </div>

            <h1>Player1</h1>


            <section id="info-section">
                <h2>Info</h2>

                <table class="meta-table">
                    <tr>
                        <th title="Favourite mode">Fav modes:</th>
                        <td>7key</td>
                        <th title="Total time of gameplay">Playtime:</th>
                        <td>3d 18h</td>
                    </tr>
                    <tr>
                        <th title="Total play count">Plays:</th>
                        <td>200</td>
                        <th title="Total unique maps played">Maps played:</th>
                        <td>120</td>
                    </tr>
                </table>
            </section>


            <section id="description-section">
                <h2>Description</h2>

                <p>
                    Maecenas at orci feugiat, pharetra est quis, vulputate neque. Vestibulum elementum, orci nec laoreet pretium, lectus
                    velit viverra lacus, at blandit lorem purus sed ex. Cras erat elit, condimentum at dignissim ut, sodales sit amet
                    lorem. Nullam sagittis felis enim, et congue mi facilisis a. Ut maximus hendrerit lectus. Aliquam sit amet lacus quis
                    mi semper rhoncus. Quisque a orci tincidunt, posuere risus eget, vehicula purus. Mauris id leo a massa vulputate
                    venenatis at ac nisl. Nullam non aliquet augue. Donec eu urna at magna feugiat tristique. Nunc non dui ut nisl
                    faucibus rutrum. Aenean vulputate interdum vulputate.
                    enim.
                </p>
            </section>


            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/add-leaderboard.php'); ?>
            <?php require('components/modals/create-leaderboard.php'); ?>
            <section id="leaderboards-communities-section">
                <div class="row">
                    <div class="col-6">
                        <h2>
                            Communities
                            <a href="?a=communities_create" class="title-icon h2-icon green green-h" title="Create community">
                                <i class="fas fa-plus"></i>
                            </a>
                        </h2>

                        <table class="data-table table">
                            <thead>
                                <tr>
                                    <th title="Community name">Name</th>
                                    <th title="To join private communities, you have to send a request">Public</th>
                                    <th title="Input modes in community leaderboards">Input modes</th>
                                    <th title="Member count">Members</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="?a=communities_community1_index">Community1</a></td>
                                    <td>No</td>
                                    <td>7key</td>
                                    <td>10</td>
                                    <td class="table-icon-cell">
                                        <div class="table-icon-box">
                                            <a href="#!" class="table-icon red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                                <i class="fas fa-sign-out-alt"></i>
                                            </a>
                                            <a href="?a=communities_community1_edit" class="table-icon table-icon-s orange orange-h" title="Edit community">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    
                    <div class="col-6">
                        <h2>
                            Leaderboards
                            <a href="#!" class="title-icon h2-icon green green-h" title="Create leaderboard" data-bs-toggle="modal" data-bs-target="#create-leaderboard-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </h2>

                        <table class="data-table table">
                            <thead>
                                <tr>
                                    <th title="Leaderboard name">Name</th>
                                    <th title="Leaderboard input mode">Input mode</th>
                                    <th title="Rank of this player in the leaderboard">Rank</th>
                                    <th title="Player count">Players</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                                    <td>7key</td>
                                    <td>#3</td>
                                    <td>12</td>
                                    <td class="table-icon-cell">
                                        <div class="table-icon-box">
                                            <a href="#!" class="table-icon green green-h" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                                <i class="fas fa-sign-in-alt"></i>
                                            </a>
                                            <a href="?a=leaderboards_leaderboard1_edit" class="table-icon table-icon-s orange orange-h" title="Edit leaderboard">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>


            <section id="top-scores-section">
                <h2>Top scores</h2>

                <form class="text-center" action="" method="post">
                    <select class="form-select data-table-select" onchange="//this.form.submit()" title="Leaderboard metric used to rate the scores">
                        <option selected>No leaderboard</option>
                        <option value="Leaderboard1">Leaderboard1</option>
                    </select>
                </form>

                <table class="data-table data-table-all table">
                    <thead>
                        <tr>
                            <th title="Rank compared to other scores of the player">Top</th>
                            <th title="Chart title">Title</th>
                            <th title="Chart difficulty">Difficulty</th>
                            <th title="Chart level">Level</th>
                            <th title="Players chart performance">Performance</th>
                            <th title="Player accuracy">Acc</th>
                            <th title="Player miss count">Misses</th>
                            <th title="Input mode the score was set with">Input mode</th>
                            <th title="All mods the score was set with">Modifiers</th>
                            <th title="Score date and time">Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>12</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon table-icon-l red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>12</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon table-icon-l red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>12</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon table-icon-l red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>12</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon table-icon-l red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Rank compared to other scores of the player">Top</th>
                            <th title="Chart title">Title</th>
                            <th title="Chart difficulty">Difficulty</th>
                            <th title="Chart level">Level</th>
                            <th title="Players chart performance">Performance</th>
                            <th title="Player accuracy">Acc</th>
                            <th title="Player miss count">Misses</th>
                            <th title="Input mode the score was set with">Input mode</th>
                            <th title="All mods the score was set with">Modifiers</th>
                            <th title="Score date and time">Date</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </section>


            <section id="recent-scores-section">
                <h2>Recent scores</h2>

                <table class="data-table table">
                    <thead>
                        <tr>
                            <th title="Chart title">Title</th>
                            <th title="Chart difficulty">Difficulty</th>
                            <th title="Chart level">Level</th>
                            <th title="Players chart performance">Performance</th>
                            <th title="Player accuracy">Acc</th>
                            <th title="Player miss count">Misses</th>
                            <th title="Input mode the score was set with">Input mode</th>
                            <th title="All mods the score was set with">Modifiers</th>
                            <th title="Score date and time">Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>12</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon table-icon-l red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>12</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:27</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon table-icon-l red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>12</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:25</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon table-icon-l red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>12</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 14:12</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon table-icon-l red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
</div>