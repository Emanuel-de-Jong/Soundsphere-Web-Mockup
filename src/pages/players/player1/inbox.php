<div id="player-inbox">
    <main class="container">
        <div class="main-box">
            <a href="?a=players_player1_index" class="page-icon page-icon-left">
                <i class="fas fa-arrow-left"></i>
            </a>

            <h1>Player1 - Inbox</h1>

            <?php require('components/modals/delete.php'); ?>
            <section id="incoming-invites-section">
                <h2>Incoming invites</h2>

                <table class="data-table table">
                    <thead>
                        <tr>
                            <th title="Community name">Name</th>
                            <th title="Input modes in community leaderboards">Input modes</th>
                            <th title="Member count">Members</th>
                            <th title="The date that the community send the invite">Invite send</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td>7key</td>
                            <td>10</td>
                            <td>20-07-21</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#" class="table-icon table-icon-l table-icon-show red red-h" title="Discard the invite. The community won't be able to send new invites." data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-times"></i>
                                    </a>
                                    <a href="#" class="table-icon table-icon-l table-icon-show green green-h" title="Accept the invite. You will join the community.">
                                        <i class="fas fa-check"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <?php require('components/modals/create-request.php'); ?>
            <section id="outgoing-requests-section">
                <h2>
                    Outgoing requests
                    <a href="#" class="title-icon h2-icon green green-h" title="Send a request to a community" data-bs-toggle="modal" data-bs-target="#create-request-modal">
                        <i class="fas fa-plus"></i>
                    </a>
                </h2>

                <table class="data-table table">
                    <thead>
                        <tr>
                            <th title="Community name">Name</th>
                            <th title="Input modes in community leaderboards">Input modes</th>
                            <th title="Member count">Members</th>
                            <th title="The date that you send the request">Request send</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td>7key</td>
                            <td>10</td>
                            <td>20-07-21</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#" class="table-icon table-icon-l red red-h" title="Cancel the request">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
</div>