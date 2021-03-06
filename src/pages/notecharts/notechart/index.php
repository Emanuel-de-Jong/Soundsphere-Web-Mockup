<div id="notechart">
    <?php require('components/modals/properties.php'); ?>


    <div class="banner" style="background-image: url(../static/resources/banner.jpg);"></div>


    <main class="container-lg">
        <div id="main-box">
            <h1>Chart1 - Difficulty1</h1>


            <section id="info-section">
                <h2>Info</h2>

                <table class="meta-table">
                    <tr>
                        <th title="Creator name">Charter:</th>
                        <td>A charter</td>
                        <th title="Chart input mode">Mode:</th>
                        <td>7K</td>
                    </tr>
                    <tr>
                        <th title="Artist name">Artist:</th>
                        <td>An artist</td>
                        <th title="The level stated in the chart's file. Only applies to some file formats.">Level:</th>
                        <td>12</td>
                    </tr>
                    <tr>
                        <th title="File format">Format:</th>
                        <td>BME</td>
                        <th title="The duration of the chart">Length:</th>
                        <td>2:21</td>
                    </tr>
                    <tr>
                        <th title="Play count">Plays:</th>
                        <td>15</td>
                    </tr>
                </table>
            </section>


            <section id="tables-section">
                <h2>Tables</h2>

                <table id="notechart-difftables-table" class="data-table data-table-col table" data-orders="1a 0a">
                    <thead>
                        <tr>
                            <th title="Table name">Name</th>
                            <th title="The level of the chart in the table">Chart level</th>
                            <th title="Input modes in the table charts">Modes</th>
                            <th title="Chart count">Charts</th>
                            <th title="Plays over all charts">Plays</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=difftables_difftable_index">Table1</a></td>
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

                <div id="scores-insert-top" hidden>
                    <div class="col">
                        <form class="table-form table-form-top">
                            <select class="form-select form-select-sm" id="scores-leaderboard" name="leaderboard" title="Only show scores from this leaderboard">
                                <option selected>All leaderboards</option>
                                <option value="Leaderboard1">Leaderboard1</option>
                                <option value="Leaderboard2">Leaderboard2</option>
                                <option value="Leaderboard3">Leaderboard3</option>
                            </select>
                        </form>
                    </div>

                    <div class="col">
                        <form class="table-form table-form-top">
                            <div class="form-check form-switch">
                                <label for="show-all-columns" class="form-check-label" title="Show more info about the scores">
                                    <input type="checkbox" class="form-check-input data-table-col-toggle" id="scores-show-all-columns" name="show-all-columns" data-table="scores-table">
                                    All values
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <div id="scores-insert-bottom" hidden>
                    <div class="col">
                        <form class="table-form table-form-bottom" action="javascript:void(0);">
                            <button type="submit" class="btn bg-blue bg-blue-h">Your row</button>
                        </form>
                    </div>
                </div>

                <table id="notechart-scores-table" class="data-table data-table-all table table-icon-col-last" id="scores-table" data-insert-top="scores-insert-top" data-insert-bottom="scores-insert-bottom" data-toggle-cols="">
                    <thead>
                        <tr>
                            <th class="table-col-minwidth" title="Players chart rank">Rank</th>
                            <th title="Player name">Player</th>
                            <th title="Players chart performance rating">PR</th>
                            <th title="Player score">Score</th>
                            <th title="Player accuracy">Acc</th>
                            <th title="Player miss count">Misses</th>
                            <th title="Input mode the score was set with">Mode</th>
                            <th title="All modifiers the score was set with">Mods</th>
                            <th title="Score date and time">Date</th>
                            <th class="table-icon-th"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td><a href="?a=users_user_index">Player1</a></td>
                            <td>1000</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10K</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-hide blue blue-h" title="Download replay">
                                    <i class="fas fa-download"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="highlight-row">
                            <td>#2</td>
                            <td><a href="?a=users_user_index">Player1</a></td>
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
                            <td><a href="?a=users_user_index">Player1</a></td>
                            <td>1000</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10K</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-hide blue blue-h" title="Download replay">
                                    <i class="fas fa-download"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#4</td>
                            <td><a href="?a=users_user_index">Player1</a></td>
                            <td>1000</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10K</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-cell">
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
                            <th title="Players chart performance rating">PR</th>
                            <th title="Player score">Score</th>
                            <th title="Player accuracy">Acc</th>
                            <th title="Player miss count">Misses</th>
                            <th title="Input mode the score was set with">Mode</th>
                            <th title="All modifiers the score was set with">Mods</th>
                            <th title="Score date and time">Date</th>
                            <th class="table-icon-th"></th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>
