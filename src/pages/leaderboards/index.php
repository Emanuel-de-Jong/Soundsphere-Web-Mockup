<div id="leaderboards">
    <main class="container">
        <div class="main-box">
            <?php require('components/modals/create-leaderboard.php'); ?>
            <div class="page-icons page-icons-right">
                <a href="#!" class="page-icon" title="Create leaderboard" data-bs-toggle="modal" data-bs-target="#create-leaderboard-modal">
                    <i class="fas fa-plus"></i>
                </a>
            </div>

            <h1>Leaderboards</h1>


            <?php require('components/modals/add-leaderboard.php'); ?>
            <section id="leaderboards-section">
                <table class="data-table data-table-all table">
                    <thead>
                        <tr>
                            <th title="Leaderboard name">Name</th>
                            <th title="Leaderboard input modes">Input modes</th>
                            <th title="Player on rank 1">Top player</th>
                            <th title="Player count">Players</th>
                            <th title="Table count">Tables</th>
                            <th title="Community count">Communities</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7K, 10K</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>10</td>
                            <td>1</td>
                            <td>1</td>
                            <td class="table-icon-cell table-icon-cell-end">
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
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7K, 10K</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>10</td>
                            <td>1</td>
                            <td>1</td>
                            <td class="table-icon-cell table-icon-cell-end">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon green green-h" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                        <i class="fas fa-sign-in-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7K, 10K</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>10</td>
                            <td>1</td>
                            <td>1</td>
                            <td class="table-icon-cell table-icon-cell-end">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon green green-h" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                        <i class="fas fa-sign-in-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7K, 10K</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>10</td>
                            <td>1</td>
                            <td>1</td>
                            <td class="table-icon-cell table-icon-cell-end">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon green green-h" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                        <i class="fas fa-sign-in-alt"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Leaderboard name">Name</th>
                            <th title="Leaderboard input modes">Input modes</th>
                            <th title="Player on rank 1">Top player</th>
                            <th title="Player count">Players</th>
                            <th title="Table count">Tables</th>
                            <th title="Community count">Communities</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>