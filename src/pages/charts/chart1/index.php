<div class="banner" style="background-image: url(../resources/banner.jpg);"></div>


<div id="chart">
    <main class="container">
        <div class="main-box">
            <h1>Chart1 - Difficulty1</h1>


            <section id="info-section">
                <h2>Info</h2>

                <table class="meta-table">
                    <tr>
                        <th title="Creator name">Charter:</th>
                        <td>A charter</td>
                        <th title="Chart input mode">Input mode:</th>
                        <td>7K</td>
                    </tr>
                    <tr>
                        <th title="Artist name">Artist:</th>
                        <td>An artist</td>
                        <th title="The level stated in the chart's file. Only applies to some file formats.">Level:</th>
                        <td>12</td>
                    </tr>
                    <tr>
                        <th title="Play count">Plays:</th>
                        <td>15</td>
                    </tr>
                </table>
            </section>


            <section id="tables-section">
                <h2>Tables</h2>

                <table class="data-table data-table-slim table" data-c0="1" data-c1="0">
                    <thead>
                        <tr>
                            <th title="Table name">Name</th>
                            <th title="The level of the chart in the table">Chart level</th>
                            <th title="Input modes in the table charts">Input modes</th>
                            <th title="Chart count">Charts</th>
                            <th title="Plays over all charts">Plays</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=bms-tables_bms-table1_index">Table1</a></td>
                            <td>15</td>
                            <td>7K</td>
                            <td>20</td>
                            <td>115</td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <?php require('components/modals/delete.php'); ?>
            <section id="scores-section">
                <h2>Scores</h2>

                <form class="text-center" action="" method="post">
                    <select class="form-select data-table-select" id="leaderboard" name="leaderboard" onchange="//this.form.submit()" title="Only show scores from this leaderboard">
                        <option selected>All leaderboards</option>
                        <option value="Leaderboard1">Leaderboard1</option>
                        <option value="Leaderboard2">Leaderboard2</option>
                        <option value="Leaderboard3">Leaderboard3</option>
                    </select>
                </form>

                <table class="data-table data-table-all table table-icon-col-last">
                    <thead>
                        <tr>
                            <th class="table-col-minwidth" title="Players chart rank">Rank</th>
                            <th title="Player name">Player</th>
                            <th title="Players chart performance">Performance</th>
                            <th title="Player score">Score</th>
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
                            <td>#1</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>1000</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10K</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l table-icon-hide red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-times"></i>
                                </a>
                                <a href="#!" class="table-icon table-icon-hide blue blue-h" title="Download replay">
                                    <i class="fas fa-download"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="highlight-row">
                            <td>#2</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>1000</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10K</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l table-icon-hide red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-times"></i>
                                </a>
                                <a href="#!" class="table-icon table-icon-hide blue blue-h" title="Download replay">
                                    <i class="fas fa-download"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>1000</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10K</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l table-icon-hide red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-times"></i>
                                </a>
                                <a href="#!" class="table-icon table-icon-hide blue blue-h" title="Download replay">
                                    <i class="fas fa-download"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#4</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>1000</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10K</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l table-icon-hide red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-times"></i>
                                </a>
                                <a href="#!" class="table-icon table-icon-hide blue blue-h" title="Download replay">
                                    <i class="fas fa-download"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Players chart rank">Rank</th>
                            <th title="Player name">Player</th>
                            <th title="Players chart performance">Performance</th>
                            <th title="Player score">Score</th>
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
        </div>
    </main>
</div>