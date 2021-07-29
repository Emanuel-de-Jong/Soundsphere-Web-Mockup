<div id="leaderboards">
    <main class="container">
        <div class="main-box">
            <?php require('components/modals/create-leaderboard.php'); ?>
            <nav class="page-icons page-icons-right page-icons-never-collapsed">
                <div class="navbar-nav">
                    <a href="#!" class="page-icon" title="Create leaderboard" data-bs-toggle="modal" data-bs-target="#create-leaderboard-modal">
                        <div class="page-icon-box">
                            <i class="fas fa-plus"></i>
                        </div>
                    </a>
                </div>
            </nav>

            <h1>Leaderboards</h1>


            <?php require('components/modals/add-leaderboard.php'); ?>
            <section id="leaderboards-section">
                <table class="data-table data-table-all table table-icon-col-last">
                    <thead>
                        <tr>
                            <th title="Leaderboard name">Name</th>
                            <th title="Leaderboard input modes">Input modes</th>
                            <th title="Decides the difficulty of the charts. The difficulty changes how much performance players get.">Difficulty calc</th>
                            <th title="Decides how good a score is. The impressiveness changes how much performance a player gets.">Performance calc</th>
                            <th title="Community count">Communities</th>
                            <th title="Table count">Tables</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7K, 10K</td>
                            <td>Table level</td>
                            <td>soundsphere</td>
                            <td>1</td>
                            <td>1</td>
                            <td class="table-icon-cell">
                                <a href="?a=leaderboards_leaderboard1_edit" class="table-icon table-icon-s orange orange-h" title="Edit leaderboard">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#!" class="table-icon green green-h" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7K, 10K</td>
                            <td>Table level</td>
                            <td>soundsphere</td>
                            <td>1</td>
                            <td>1</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon green green-h" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7K, 10K</td>
                            <td>Table level</td>
                            <td>soundsphere</td>
                            <td>1</td>
                            <td>1</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon green green-h" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7K, 10K</td>
                            <td>Table level</td>
                            <td>soundsphere</td>
                            <td>1</td>
                            <td>1</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon green green-h" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Leaderboard name">Name</th>
                            <th title="Leaderboard input modes">Input modes</th>
                            <th title="Decides the difficulty of the charts. The difficulty changes how much performance players get.">Difficulty calc</th>
                            <th title="Decides how good a score is. The impressiveness changes how much performance a player gets.">Performance calc</th>
                            <th title="Community count">Communities</th>
                            <th title="Table count">Tables</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>