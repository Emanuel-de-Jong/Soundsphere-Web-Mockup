<div id="bms-table">
    <main class="container">
        <div class="main-box">
            <h1>Table1</h1>


            <?php require('components/add-leaderboard-modal.php'); ?>
            <section>
                <h2>Leaderboards</h2>

                <table class="data-table table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Input mode</th>
                            <th>Top player</th>
                            <th>Players</th>
                            <th>Charts</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7key</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>10</td>
                            <td>15</td>
                            <td class="table-icon-row">
                                <a href="#" class="table-icon blue blue-h" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                    <i class="fas fa-sign-in-alt" title="Add to community"></i>
                                </a>
                                <a href="#" class="table-icon blue blue-h" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                    <i class="fas fa-copy" title="Copy to community"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <section>
                <h2>Charts</h2>

                <table class="data-table data-table-all table">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Artist</th>
                            <th>Creator</th>
                            <th>Input mode</th>
                            <th>Plays</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Diff1</a></td>
                            <td>An artist</td>
                            <td>A creator</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Diff1</a></td>
                            <td>An artist</td>
                            <td>A creator</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Diff1</a></td>
                            <td>An artist</td>
                            <td>A creator</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Diff1</a></td>
                            <td>An artist</td>
                            <td>A creator</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Title</th>
                            <th>Name</th>
                            <th>Artist</th>
                            <th>Creator</th>
                            <th>Input mode</th>
                            <th>Plays</th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>