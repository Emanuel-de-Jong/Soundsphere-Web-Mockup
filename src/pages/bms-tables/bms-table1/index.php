<div id="bms-table">
    <main class="container">
        <div class="main-box">
            <h1>Table1</h1>


            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/add-leaderboard.php'); ?>
            <section id="communities-bms-tables-section">
                <div class="row">
                    <div class="col-6">
                        <h2>Communities</h2>

                        <table class="data-table table">
                            <thead>
                                <tr>
                                    <th title="Community name">Name</th>
                                    <th title="To join private communities, you have to send a request">Public</th>
                                    <th title="Input modes in community leaderboards">Input modes</th>
                                    <th title="Player count">Members</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="?a=communities_community1_index">Community1</a></td>
                                    <td>No</td>
                                    <td>7key</td>
                                    <td>25</td>
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
                        <h2>Leaderboards</h2>

                        <table class="data-table table">
                            <thead>
                                <tr>
                                    <th title="Leaderboard name">Name</th>
                                    <th title="Leaderboard input mode">Input mode</th>
                                    <th title="Player count">Players</th>
                                    <th title="Table count">Tables</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                                    <td>7key</td>
                                    <td>10</td>
                                    <td>1</td>
                                    <td class="table-icon-cell">
                                        <div class="table-icon-box">
                                            <a href="#!" class="table-icon green green-h" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                                <i class="fas fa-sign-in-alt" title="Add to community"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>


            <section id="charts-section">
                <h2>Charts</h2>

                <table class="data-table data-table-all table">
                    <thead>
                        <tr>
                            <th title="Chart set name">Title</th>
                            <th title="Chart name">Difficulty</th>
                            <th title="Difficulty level">Level</th>
                            <th title="Creator name">Charter</th>
                            <th title="Artist name">Artist</th>
                            <th title="Chart input mode">Input mode</th>
                            <th title="Play count">Plays</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>15</td>
                            <td>A charter</td>
                            <td>An artist</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>15</td>
                            <td>A charter</td>
                            <td>An artist</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>15</td>
                            <td>A charter</td>
                            <td>An artist</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>15</td>
                            <td>A charter</td>
                            <td>An artist</td>
                            <td>7key</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Chart set name">Title</th>
                            <th title="Chart name">Difficulty</th>
                            <th title="Difficulty level">Level</th>
                            <th title="Creator name">Charter</th>
                            <th title="Artist name">Artist</th>
                            <th title="Chart input mode">Input mode</th>
                            <th title="Play count">Plays</th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>