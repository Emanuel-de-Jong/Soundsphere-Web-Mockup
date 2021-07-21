<div id="communities">
    <main class="container">
        <div class="main-box">
            <a href="?a=communities_create" class="page-icon page-icon-right" title="Create community">
                <i class="fas fa-plus"></i>
            </a>

            <h1>Communities</h1>


            <?php require('components/modals/delete.php'); ?>
            <section id="communities-section">
                <table class="data-table data-table-communities table">
                    <thead>
                        <tr>
                            <th title="Community name">Name</th>
                            <th title="3 to 5 characters that represent the community">Alias</th>
                            <th title="Input modes in community leaderboards">Input modes</th>
                            <th title="Member count">Members</th>
                            <th title="Short description">Description</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td>AAA</td>
                            <td>7key</td>
                            <td>10</td>
                            <td>The first community. Which automatically makes it the best one.</td>
                            <td class="table-icon-row">
                                <a href="#" class="table-icon red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-sign-out-alt"></i>
                                </a>
                                <a href="?a=communities_community1_edit" class="table-icon table-icon-s orange orange-h" title="Edit community">
                                    <i class="fas fa-pen"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td>AAA</td>
                            <td>7key</td>
                            <td>8</td>
                            <td>The first community. Which automatically makes it the best one.</td>
                            <td class="table-icon-row">
                                <a href="#" class="table-icon green green-h" title="Join community">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td>AAA</td>
                            <td>7key</td>
                            <td>12</td>
                            <td>The first community. Which automatically makes it the best one.</td>
                            <td class="table-icon-row">
                                <a href="#" class="table-icon green green-h" title="Join community">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td>AAA</td>
                            <td>7key</td>
                            <td>4</td>
                            <td>The first community. Which automatically makes it the best one.</td>
                            <td class="table-icon-row">
                                <a href="#" class="table-icon green green-h" title="Join community">
                                    <i class="fas fa-sign-in-alt"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Community name">Name</th>
                            <th title="3 to 5 characters that represent the community">Alias</th>
                            <th title="Input modes in community leaderboards">Input modes</th>
                            <th title="Member count">Members</th>
                            <th title="Short description">Description</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>