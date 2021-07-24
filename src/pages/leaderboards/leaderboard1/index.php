<div id="leaderboard">
    <main class="container">
        <div class="main-box">
            <?php require('components/modals/add-leaderboard.php'); ?>
            <?php require('components/modals/leaderboard-description.php'); ?>
            <div class="page-icons page-icons-right">
                <a href="#!" class="page-icon" title="Leaderboard description" data-bs-toggle="modal" data-bs-target="#leaderboard-description-modal">
                    <i class="fas fa-info-circle"></i>
                </a>

                <a href="#!" class="page-icon" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                    <i class="fas fa-sign-in-alt"></i>
                </a>

                <a href="?a=leaderboards_leaderboard1_edit" class="page-icon" title="leaderboard settings">
                    <i class="fas fa-cog"></i>
                </a>
            </div>

            <h1>Leaderboard1</h1>


            <section id="info-section">
                <h2>Info</h2>

                <table class="meta-table">
                    <tr>
                        <th title="Leaderboard input mode">Input mode:</th>
                        <td>7K</td>
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


            <?php require('components/modals/delete.php'); ?>
            <section id="communities-bms-tables-section">
                <div class="row">
                    <div class="col-6">
                        <h2>Communities</h2>

                        <table class="data-table table">
                            <thead>
                                <tr>
                                    <th title="Community name">Name</th>
                                    <th title="Total performance in leaderboard">Performance</th>
                                    <th title="To join private communities, you have to send a request">Public</th>
                                    <th title="Input modes in community leaderboards">Input modes</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="?a=communities_community1_index">Community1</a></td>
                                    <td>5000</td>
                                    <td>No</td>
                                    <td>7K</td>
                                    <td class="table-icon-cell">
                                        <div class="table-icon-box">
                                            <a href="#!" class="table-icon red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                                <i class="fas fa-sign-out-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fas fa-crown orange" id="leaderboard-owner" title="The leaderboard owner. Can edit and delete the leaderboard."></i> 
                                        <a href="?a=communities_community1_index">Community1</a>
                                    </td>
                                    <td>4000</td>
                                    <td>No</td>
                                    <td>7K</td>
                                    <td class="table-icon-cell">
                                        <div class="table-icon-box">
                                            <a href="#!" class="table-icon red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                                <i class="fas fa-sign-out-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td><a href="?a=communities_community1_index">Community1</a></td>
                                    <td>3000</td>
                                    <td>No</td>
                                    <td>7K</td>
                                    <td class="table-icon-cell">
                                        <div class="table-icon-box">
                                            <a href="#!" class="table-icon red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                                <i class="fas fa-sign-out-alt"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col-6">
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


            <section id="leaderboard-section">
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
                            <th title="Player rank in leaderboard">Rank</th>
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