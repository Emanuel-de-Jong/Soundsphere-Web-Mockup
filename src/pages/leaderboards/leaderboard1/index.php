<nav id="secondary-navbar">
    <div class="container">
        <div class="nav">
            <a class="nav-link" href="#info-section">Info</a>
            <a class="nav-link" href="#modifiers-section">Modifiers</a>
            <a class="nav-link" href="#communities-bms-tables-section">Communities</a>
            <a class="nav-link" href="#communities-bms-tables-section">Tables</a>
            <a class="nav-link" href="#ranking-section">Ranking</a>
        </div>
    </div>
</nav>
<div id="secondary-navbar-box"></div>


<div id="leaderboard">
    <main class="container">
        <div class="main-box">
            <nav class="page-icons page-icons-left page-icons-never-collapsed">
                <div class="navbar-nav">
                    <form class="form-page">
                        <div class="input-group" title="The input mode that the values and order of the page is based on">
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

                        <a href="?a=leaderboards_leaderboard1_edit" class="page-icon" title="leaderboard settings">
                            <span class="page-icon-text">Settings</span>
                            <div class="page-icon-box">
                                <i class="fas fa-cog"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </nav>

            <h1>Leaderboard1</h1>


            <section id="info-section">
                <h2>Info</h2>

                <table class="meta-table">
                    <tr>
                        <th title="Leaderboard input modes">Input modes:</th>
                        <td>7K, 10K</td>
                        <th title="Player count">Players:</th>
                        <td>10</td>
                    </tr>
                    <tr>
                        <th title="Decides the difficulty of the charts. The difficulty changes how much performance players get.">Difficulty calc:</th>
                        <td>Table level</td>
                        <th title="Decides how good a score is. The impressiveness changes how much performance a player gets.">Performance calc:</th>
                        <td>soundsphere</td>
                    </tr>
                    <tr>
                        <th title="Decides how the performance of scores are combined to get the total performance of a player. It changes the order of the leaderboard.">Score combiner:</th>
                        <td>Logarithmic</td>
                    </tr>
                </table>
            </section>


            <section id="modifiers-section">
                <h2>Modifiers</h2>

                <table class="data-table table">
                    <thead>
                        <tr>
                            <th title="Modifier name">Name</th>
                            <th title="Modifier minumal value">Min value</th>
                            <th title="Modifier maximal value">Max value</th>
                            <th title="Whether it's required, allowed or prohibited">Rule</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>SpeedMode</td>
                            <td>Avg</td>
                            <td></td>
                            <td>Required</td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <?php require('components/modals/delete.php'); ?>
            <section id="communities-bms-tables-section" class="section-grid">
                <div class="row">
                    <div class="col">
                        <h2>Communities</h2>

                        <table class="data-table table table-icon-col-last table-icon-col-first">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th title="Community name">Name</th>
                                    <th title="Total performance in leaderboard">Performance</th>
                                    <th title="To join private communities, you have to send a request">Public</th>
                                    <th title="Input modes in community leaderboards">Input modes</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td></td>
                                    <td><a href="?a=communities_community1_index">Community1</a></td>
                                    <td>5000</td>
                                    <td>No</td>
                                    <td>7K, 10K</td>
                                    <td class="table-icon-cell">
                                        <a href="#!" class="table-icon red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="table-icon-cell">
                                        <span class="table-icon table-icon-s table-icon-show orange" title="The leaderboard owner. Can edit and delete the leaderboard.">
                                            <i class="fas fa-crown"></i>
                                        </span>
                                    </td>
                                    <td><a href="?a=communities_community1_index">Community1</a></td>
                                    <td>4000</td>
                                    <td>No</td>
                                    <td>7K, 10K</td>
                                    <td class="table-icon-cell">
                                        <a href="#!" class="table-icon red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td><a href="?a=communities_community1_index">Community1</a></td>
                                    <td>3000</td>
                                    <td>No</td>
                                    <td>7K, 10K</td>
                                    <td class="table-icon-cell">
                                        <a href="#!" class="table-icon red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col">
                        <h2>Tables</h2>

                        <table class="data-table table">
                            <thead>
                                <tr>
                                    <th title="Table name">Name</th>
                                    <th title="Input modes in the table charts">Input modes</th>
                                    <th title="Chart count">Charts</th>
                                    <th title="Plays over all charts">Plays</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="?a=bms-tables_bms-table1_index">Table1</a></td>
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
                <form class="text-center" action="" method="post">
                    <select class="form-select data-table-select" onchange="//this.form.submit()" title="Filter the players shown by community">
                        <option selected>All communities</option>
                        <option value="Community1">Community1</option>
                        <option value="Community2">Community2</option>
                        <option value="Community3">Community3</option>
                    </select>
                </form>

                <table class="data-table data-table-all table">
                    <thead>
                        <tr>
                            <th class="table-col-minwidth" title="Player rank in leaderboard">Rank</th>
                            <th title="Player name">Player</th>
                            <th title="Community abbreviation">Communities</th>
                            <th title="Players leaderboard performance">Performance</th>
                            <th title="Player plays on the leaderboard charts">Plays</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td><a href="?a=communities_community1_index">AAA</a></td>
                            <td>1000</td>
                            <td>55</td>
                        </tr>
                        <tr>
                            <td>#2</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td><a href="?a=communities_community1_index">AAA</a></td>
                            <td>1000</td>
                            <td>55</td>
                        </tr>
                        <tr>
                            <td>#3</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td><a href="?a=communities_community1_index">AAA</a></td>
                            <td>1000</td>
                            <td>55</td>
                        </tr>
                        <tr>
                            <td>#4</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td><a href="?a=communities_community1_index">AAA</a></td>
                            <td>1000</td>
                            <td>55</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Player rank in leaderboard">Rank</th>
                            <th title="Player name">Player</th>
                            <th title="Community abbreviation">Communities</th>
                            <th title="Players leaderboard performance">Performance</th>
                            <th title="Player plays on the leaderboard charts">Plays</th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>