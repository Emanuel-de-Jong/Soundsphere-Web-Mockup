<div id="bms-table">
    <main class="container">
        <div class="main-box">
            <h1>Table1</h1>


            <section id="info-section">
                <h2>Info</h2>

                <table class="meta-table">
                    <tr>
                        <th title="Input modes in the table charts">Input modes:</th>
                        <td>7K</td>
                        <th title="Chart count">Charts:</th>
                        <td>20</td>
                    </tr>
                    <tr>
                        <th title="Plays over all charts">Plays:</th>
                        <td>115</td>
                        <th title="The link to the original table">URL:</th>
                        <td><a href="https://stellabms.xyz/st/table.html">stellabms.xyz/st/table.html</a></td>
                    </tr>
                </table>
            </section>


            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/add-leaderboard.php'); ?>
            <section id="communities-leaderboards-section" class="section-grid">
                <div class="row">
                    <div class="col">
                        <h2>Communities</h2>

                        <table class="data-table data-table-slim table table-icon-col-last">
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
                                <tr class="highlight-row">
                                    <td><a href="?a=communities_community1_index">Community1</a></td>
                                    <td>No</td>
                                    <td>7K, 10K</td>
                                    <td>25</td>
                                    <td class="table-icon-cell">
                                        <a href="#!" class="table-icon table-icon-hide red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col">
                        <h2>Leaderboards</h2>

                        <table class="data-table data-table-slim table table-icon-col-last">
                            <thead>
                                <tr>
                                    <th title="Leaderboard name">Name</th>
                                    <th title="Leaderboard input modes">Input modes</th>
                                    <th title="Player count">Players</th>
                                    <th title="Table count">Tables</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="highlight-row">
                                    <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                                    <td>7K, 10K</td>
                                    <td>10</td>
                                    <td>1</td>
                                    <td class="table-icon-cell">
                                        <a href="#!" class="table-icon teal teal-h" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                            <i class="fas fa-sign-in-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>


            <section id="charts-section">
                <h2>Charts</h2>

                <table class="data-table data-table-all table table-icon-col-first" data-c0="6" data-c1="3" data-c2="1">
                    <thead>
                        <tr>
                            <th></th>
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
                            <td></td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>15</td>
                            <td>A charter</td>
                            <td>An artist</td>
                            <td>7K</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>15</td>
                            <td>A charter</td>
                            <td>An artist</td>
                            <td>7K</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td class="table-icon-cell">
                                <span class="table-icon table-icon-s gray" title="You have a score on this chart">
                                    <i class="fas fa-check"></i>
                                </span>
                            </td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>15</td>
                            <td>A charter</td>
                            <td>An artist</td>
                            <td>7K</td>
                            <td>15</td>
                        </tr>
                        <tr>
                            <td class="table-icon-cell">
                                <span class="table-icon table-icon-s gray" title="You have a score on this chart">
                                    <i class="fas fa-check"></i>
                                </span>
                            </td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>15</td>
                            <td>A charter</td>
                            <td>An artist</td>
                            <td>7K</td>
                            <td>15</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th></th>
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