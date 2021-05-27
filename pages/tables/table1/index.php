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
                            <th title="Leaderboard name">Name</th>
                            <th title="Leaderboard input mode">Input mode</th>
                            <th title="Player on rank 1">Top player</th>
                            <th title="Player count">Players</th>
                            <th title="Table count">Tables</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7key</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>10</td>
                            <td>1</td>
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
                            <th title="Chart set name">Song</th>
                            <th title="Chart name">Difficulty</th>
                            <th title="Artist name">Artist</th>
                            <th title="Creator name">Mapper</th>
                            <th title="Chart input mode">Input mode</th>
                            <th title="Play count">Plays</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>A song</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>An artist</td>
                            <td>A mapper</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>A song</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>An artist</td>
                            <td>A mapper</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>A song</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>An artist</td>
                            <td>A mapper</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>A song</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>An artist</td>
                            <td>A mapper</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Chart set name">Song</th>
                            <th title="Chart name">Difficulty</th>
                            <th title="Artist name">Artist</th>
                            <th title="Creator name">Mapper</th>
                            <th title="Chart input mode">Input mode</th>
                            <th title="Play count">Plays</th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>