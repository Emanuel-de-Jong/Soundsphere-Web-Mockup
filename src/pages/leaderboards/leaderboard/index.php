<div id="leaderboard">
    <?php require('components/modals/properties.php'); ?>


    <nav id="secondary-navbar">
        <div class="container-lg">
            <div class="nav">
                <a class="nav-link" href="#info-community-ranking-section">Info</a>
                <a class="nav-link" href="#modifiers-section">Modifiers</a>
                <a class="nav-link" href="#communities-difftables-section">Communities</a>
                <a class="nav-link" href="#communities-difftables-section">Tables</a>
                <a class="nav-link" href="#ranking-section">Ranking</a>
            </div>
        </div>
    </nav>
    <div id="secondary-navbar-box"></div>


    <div class="banner" style="background-image: url(../static/resources/banner.jpg);"></div>


    <main class="container-lg">
        <div id="main-box">
            <nav class="navbar-expand page-icons page-icons-left page-icons-never-collapsed">
                <div class="navbar-nav">
                    <form class="page-form">
                        <div class="input-group input-group-sm" title="The input mode that the values and order of the page is based on">
                            <span class="input-group-text">Mode:</span>
                            <select class="form-select" id="input-mode" name="input-mode">
                                <option selected>All</option>
                                <option value="7key">7K</option>
                                <option value="10key">10K</option>
                            </select>
                        </div>
                    </form>
                </div>
            </nav>

            <?php require('components/modals/add-leaderboard.php'); ?>
            <?php require('components/modals/leaderboard-description.php'); ?>
            <nav class="navbar-expand-xl page-icons page-icons-right">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#page-icons-right">
                    <i class="fas fa-ellipsis-v"></i>
                </button>

                <div class="collapse navbar-collapse" id="page-icons-right">
                    <div class="navbar-nav">
                        <a href="#!" class="page-icon" title="Leaderboard description" data-bs-toggle="modal" data-bs-target="#leaderboard-description-modal">
                            <span class="page-icon-text">Description</span>
                            <div class="page-icon-box">
                                <i class="fas fa-info-circle"></i>
                            </div>
                        </a>

                        <a href="#!" class="page-icon" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                            <span class="page-icon-text">Add leaderboard</span>
                            <div class="page-icon-box">
                                <i class="fas fa-sign-in-alt"></i>
                            </div>
                        </a>

                        <a href="?a=leaderboards_leaderboard_edit" class="page-icon" title="leaderboard settings">
                            <span class="page-icon-text">Settings</span>
                            <div class="page-icon-box">
                                <i class="fas fa-cog"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </nav>

            <h1>Leaderboard1</h1>


            <section id="info-community-ranking-section" class="section-grid">
                <div class="row">
                    <div class="col-sm-7">
                        <h2>Info</h2>

                        <table class="meta-table">
                            <tr>
                                <th title="Leaderboard input modes">Modes:</th>
                                <td>7K, 10K</td>
                                <th title="Player count">Players:</th>
                                <td>10</td>
                            </tr>
                            <tr>
                                <th title="Decides how the member prs are combined to get the total performance rating of a community">Community comb:</th>
                                <td>Logarithmic</td>
                                <th title="Decides how good a score is. The impressiveness changes how much performance rating a player gets.">PR calc:</th>
                                <td>soundsphere</td>
                            </tr>
                            <tr>
                                <th title="Decides how the performance rating of scores are combined to get the total performance rating of a player. It changes the order of the leaderboard.">Score comb:</th>
                                <td>Logarithmic</td>
                                <th title="Decides the difficulty of the charts. The difficulty changes how much performance rating players get.">Diff calc:</th>
                                <td>Table level</td>
                            </tr>
                        </table>
                    </div>


                    <div class="col-sm-5" id="community-ranking">
                        <div class="multi-col-list">
                            <div class="list-item" title="Community1"><span class="circle circle-s bg-red"></span> AAA</div>
                            <div class="list-item" title="Community2"><span class="circle circle-s bg-teal"></span> BBB</div>
                            <div class="list-item" title="Community3"><span class="circle circle-s bg-blue"></span> CCC</div>
                        </div>

                        <div class="progress">
                            <div class="bg-red bg-red-h" style="width: 40%" title="Community1"></div>
                            <div class="bg-teal bg-teal-h" style="width: 35%" title="Community2"></div>
                            <div class="bg-blue bg-blue-h" style="width: 25%" title="Community3"></div>
                        </div>
                    </div>
                </div>
            </section>


            <section id="modifiers-section">
                <h2>Modifiers</h2>

                <table class="data-table data-table-col table" data-orders="2a 0a">
                    <thead>
                        <tr>
                            <th title="Modifier name">Name</th>
                            <th title="Modifier value">Value</th>
                            <th title="No rule: modifier not allowed. Allowed: modifier doesn't matter. Required: modifier needed.">Rule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SpeedMode</td>
                            <td>Avg</td>
                            <td>Required</td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <?php require('components/modals/delete.php'); ?>
            <section id="communities-difftables-section" class="section-grid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Communities</h2>

                        <table id="leaderboard-communities-table" class="data-table data-table-col table table-icon-col-first table-icon-col-last">
                            <thead>
                                <tr>
                                    <th title="Rank on leaderboard by performance rating">Rank</th>
                                    <th class="table-icon-th"></th>
                                    <th title="Community name">Name</th>
                                    <th title="Total performance rating in leaderboard">PR</th>
                                    <th title="To join private communities, you have to send a request">Public</th>
                                    <th class="table-icon-th"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#1</td>
                                    <td></td>
                                    <td><a href="?a=communities_community_index">Community1</a></td>
                                    <td>5000</td>
                                    <td>No</td>
                                    <td class="table-icon-cell">
                                        <a href="#!" class="table-icon table-icon-hide red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#2</td>
                                    <td></td>
                                    <td><a href="?a=communities_community_index">Community1</a></td>
                                    <td>4000</td>
                                    <td>No</td>
                                    <td class="table-icon-cell">
                                        <a href="#!" class="table-icon table-icon-hide red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr class="highlight-row">
                                    <td>#3</td>
                                    <td class="table-icon-cell">
                                        <span class="table-icon table-icon-s orange" title="The leaderboard owner. Can edit and delete the leaderboard.">
                                            <i class="fas fa-crown"></i>
                                        </span>
                                    </td>
                                    <td><a href="?a=communities_community_index">Community1</a></td>
                                    <td>3000</td>
                                    <td>No</td>
                                    <td class="table-icon-cell">
                                        <a href="#!" class="table-icon table-icon-hide red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col-sm-6">
                        <h2>Tables</h2>

                        <table id="leaderboard-difftables-table" class="data-table data-table-col table" data-orders="1a 0a">
                            <thead>
                                <tr>
                                    <th title="Table name">Name</th>
                                    <th title="Input modes in the table charts">Modes</th>
                                    <th title="Chart count">Charts</th>
                                    <th title="Plays over all charts">Plays</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="?a=difftables_difftable_index">Table1</a></td>
                                    <td>7K</td>
                                    <td>20</td>
                                    <td>115</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>


            <section id="ranking-section">
                <div id="ranking-insert-top" hidden>
                    <div class="col">
                        <form class="table-form table-form-top">
                            <select class="form-select form-select-sm" id="ranking-community" name="community" title="Filter the players shown by community">
                                <option selected>All communities</option>
                                <option value="Community1">Community1</option>
                                <option value="Community2">Community2</option>
                                <option value="Community3">Community3</option>
                            </select>
                        </form>
                    </div>
                </div>

                <div id="ranking-insert-bottom" hidden>
                    <div class="col">
                        <form class="table-form table-form-bottom" action="javascript:void(0);">
                            <button type="submit" class="btn bg-blue bg-blue-h">Your row</button>
                        </form>
                    </div>
                </div>

                <table id="leaderboard-users-table" class="data-table data-table-all table" data-insert-top="ranking-insert-top" data-insert-bottom="ranking-insert-bottom">
                    <thead>
                        <tr>
                            <th class="table-col-minwidth" title="Player rank in leaderboard">Rank</th>
                            <th title="Player name">Player</th>
                            <th title="Community abbreviation">Communities</th>
                            <th title="The player's leaderboard performance rating">PR</th>
                            <th title="The last time the player submitted a score to the leaderboard">Last played</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td><a href="?a=users_user_index">Player1</a></td>
                            <td><a href="?a=communities_community_index">AAA</a></td>
                            <td>1000</td>
                            <td>10-10-21 15:28</td>
                        </tr>
                        <tr class="highlight-row">
                            <td>#2</td>
                            <td><a href="?a=users_user_index">Player1</a></td>
                            <td><a href="?a=communities_community_index">AAA</a></td>
                            <td>1000</td>
                            <td>10-10-21 15:28</td>
                        </tr>
                        <tr>
                            <td>#3</td>
                            <td><a href="?a=users_user_index">Player1</a></td>
                            <td><a href="?a=communities_community_index">AAA</a></td>
                            <td>1000</td>
                            <td>10-10-21 15:28</td>
                        </tr>
                        <tr>
                            <td>#4</td>
                            <td><a href="?a=users_user_index">Player1</a></td>
                            <td><a href="?a=communities_community_index">AAA</a></td>
                            <td>1000</td>
                            <td>10-10-21 15:28</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Player rank in leaderboard">Rank</th>
                            <th title="Player name">Player</th>
                            <th title="Community abbreviation">Communities</th>
                            <th title="The player's leaderboard performance rating">PR</th>
                            <th title="The last time the player submitted a score to the leaderboard">Last played</th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>
