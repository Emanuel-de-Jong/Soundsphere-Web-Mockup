<div id="communities">
    <main class="container">
        <div class="main-box">
            <nav class="navbar-expand page-icons page-icons-right page-icons-never-collapsed">
                <div class="navbar-nav">
                    <a href="?a=communities_create" class="page-icon" title="Create community">
                        <div class="page-icon-box">
                            <i class="fas fa-plus"></i>
                        </div>
                    </a>
                </div>
            </nav>

            <h1>Communities</h1>


            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/create-player-request-2.php'); ?>
            <section id="communities-section">
                <div id="communities-insert-top" hidden>
                    <div class="col">
                        <form class="table-form table-form-top">
                            <div class="form-check form-switch">
                                <label for="hide-joined-communities" class="form-check-label" title="Hide the rows of communities that you're in">
                                    <input type="checkbox" class="form-check-input" id="hide-joined-communities" name="hide-joined-communities">
                                    Hide joined communities
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <table class="data-table data-table-all table table-icon-col-last" data-insert-top="communities-insert-top">
                    <thead>
                        <tr>
                            <th title="Community name">Name</th>
                            <th title="3 to 5 characters that represent the community">Alias</th>
                            <th title="To join private communities, you have to send a request">Public</th>
                            <th title="Input modes in community leaderboards">Input modes</th>
                            <th title="Member count">Members</th>
                            <th title="Short description">Description</th>
                            <th class="table-icon-th"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="highlight-row">
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td>AAA</td>
                            <td>No</td>
                            <td>7K, 10K</td>
                            <td>10</td>
                            <td>The first community. Which automatically makes it the best one.</td>
                            <td class="table-icon-cell">
                                <a href="?a=communities_community1_edit" class="table-icon table-icon-s orange orange-h" title="Edit community">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#!" class="table-icon red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-sign-out-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td>AAA</td>
                            <td>No</td>
                            <td>7K, 10K</td>
                            <td>8</td>
                            <td>The first community. Which automatically makes it the best one.</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon green green-h" title="Join community" data-bs-toggle="modal" data-bs-target="#create-player-request-2-modal">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td>AAA</td>
                            <td>No</td>
                            <td>7K, 10K</td>
                            <td>12</td>
                            <td>The first community. Which automatically makes it the best one.</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon green green-h" title="Join community" data-bs-toggle="modal" data-bs-target="#create-player-request-2-modal">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td>AAA</td>
                            <td>No</td>
                            <td>7K, 10K</td>
                            <td>4</td>
                            <td>The first community. Which automatically makes it the best one.</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon green green-h" title="Join community" data-bs-toggle="modal" data-bs-target="#create-player-request-2-modal">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Community name">Name</th>
                            <th title="3 to 5 characters that represent the community">Alias</th>
                            <th title="To join private communities, you have to send a request">Public</th>
                            <th title="Input modes in community leaderboards">Input modes</th>
                            <th title="Member count">Members</th>
                            <th title="Short description">Description</th>
                            <th class="table-icon-th"></th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>