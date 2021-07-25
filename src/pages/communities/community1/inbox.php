<div id="community-inbox">
    <main class="container">
        <div class="main-box">
            <div class="page-icons page-icons-left">
                <a href="?a=communities_community1_index" class="page-icon">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>

            <h1>Community1 - Inbox</h1>

            <?php require('components/modals/delete.php'); ?>
            <section id="incoming-requests-section">
                <h2>Incoming requests</h2>

                <table class="data-table table">
                    <thead>
                        <tr>
                            <th title="Player name">Name</th>
                            <th title="A message that the player attached to the request">Message</th>
                            <th title="The date that the player send the request">Request send</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>Hey it's Bob from Bob's Burgers.</td>
                            <td>20-07-21</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon table-icon-l table-icon-show red red-h" title="Discard the request. The player won't be able to send new requests." data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-times"></i>
                                    </a>
                                    <a href="#!" class="table-icon table-icon-l table-icon-show green green-h" title="Accept the request. The player will join the community.">
                                        <i class="fas fa-check"></i>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            <?php require('components/modals/create-invite.php'); ?>
            <section id="outgoing-invites-section">
                <h2>
                    Outgoing invites
                    <a href="#!" class="title-icon h2-icon green green-h" title="Send an invite to a player" data-bs-toggle="modal" data-bs-target="#create-invite-modal">
                        <i class="fas fa-plus"></i>
                    </a>
                </h2>

                <table class="data-table table">
                    <thead>
                        <tr>
                            <th title="Player name">Name</th>
                            <th title="A message that an admin attached to the invite">Message</th>
                            <th title="The date that an admin in the community send the invite">Invite send</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>We are proud to invite you to the one and only first community!!</td>
                            <td>20-07-21</td>
                            <td class="table-icon-cell">
                                <div class="table-icon-box">
                                    <a href="#!" class="table-icon table-icon-l red red-h" title="Cancel the invite">
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