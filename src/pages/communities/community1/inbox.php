<nav id="secondary-navbar">
    <div class="container">
        <div class="nav">
            <a class="nav-link" href="#incoming-player-requests-section">Player incoming</a>
            <a class="nav-link" href="#outgoing-player-invites-section">Player outgoing</a>
            <a class="nav-link" href="#incoming-leaderboard-invites-section">Leaderboard incoming</a>
            <a class="nav-link" href="#outgoing-leaderboard-invites-section">Leaderboard outgoing</a>
        </div>
    </div>
</nav>
<div id="secondary-navbar-box"></div>


<div id="community-inbox">
    <main class="container">
        <div class="main-box">
            <nav class="page-icons page-icons-left page-icons-never-collapsed">
                <div class="navbar-nav">
                    <a href="?a=communities_community1_index" class="page-icon" title="Go back to the previous page">
                        <div class="page-icon-box">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                </div>
            </nav>

            <h1>Community1 - Inbox</h1>


            <h2>Players</h2>

            <?php require('components/modals/delete.php'); ?>
            <section id="incoming-player-requests-section">
                <h3>Incoming requests</h3>

                <table class="data-table data-table-slim table table-icon-col-last" data-c0="2" data-d0="desc">
                    <thead>
                        <tr>
                            <th title="Player name">Player</th>
                            <th title="A message that the player attached to the request">Message</th>
                            <th title="The date that the player sent the request">Request sent</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>Hey it's Bob from Bob's Burgers.</td>
                            <td>20-07-21 12:16</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l teal teal-h" title="Accept the request. The player will join the community.">
                                    <i class="fas fa-check"></i>
                                </a>
                                <a href="#!" class="table-icon table-icon-l red red-h" title="Deny the request. The player won't be able to send new requests." data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <?php require('components/modals/create-player-invite.php'); ?>
            <section id="outgoing-player-invites-section">
                <h3>
                    Outgoing invites
                    <a href="#!" class="title-icon h3-icon teal teal-h" title="Send an invite to a player" data-bs-toggle="modal" data-bs-target="#create-player-invite-modal">
                        <i class="fas fa-plus"></i>
                    </a>
                </h3>

                <table class="data-table data-table-slim table table-icon-col-last" data-c0="3" data-d0="desc">
                    <thead>
                        <tr>
                            <th title="Community member that sent the invite">Sender</th>
                            <th title="Player the invite is for">Receiver</th>
                            <th title="A message that the sender attached to the invite">Message</th>
                            <th title="The date that the sender sent the invite">Invite sent</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="highlight-row">
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>We are proud to invite you to the one and only first community!!</td>
                            <td>20-07-21 12:16</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l table-icon-hide red red-h" title="Cancel the invite">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>

            
            <h2>Leaderboards</h2>

            <section id="incoming-leaderboard-invites-section">
                <h3>Incoming invites</h3>

                <table class="data-table data-table-slim table table-icon-col-last" data-c0="3" data-d0="desc">
                    <thead>
                        <tr>
                            <th title="Community name">Community</th>
                            <th title="Community member that sent the INVITE">Sender</th>
                            <th title="The leaderboard in question">Leaderboard</th>
                            <th title="A message that the community attached to the invite">Message</th>
                            <th title="The date that the community sent the invite">Invite sent</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td></td>
                            <td>20-07-21 12:16</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l teal teal-h" title="Accept the invite. Your community will join the leaderboard.">
                                    <i class="fas fa-check"></i>
                                </a>
                                <a href="#!" class="table-icon table-icon-l red red-h" title="Deny the invite. The community won't be able to send new invites." data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <?php require('components/modals/create-leaderboard-invite.php'); ?>
            <section id="outgoing-leaderboard-invites-section">
                <h3>
                    Outgoing invites
                    <a href="#!" class="title-icon h3-icon teal teal-h" title="Send a leaderboard invite to a community" data-bs-toggle="modal" data-bs-target="#create-leaderboard-invite-modal">
                        <i class="fas fa-plus"></i>
                    </a>
                </h3>

                <table class="data-table data-table-slim table table-icon-col-last" data-c0="3" data-d0="desc">
                    <thead>
                        <tr>
                            <th title="Community member that sent the invite">Sender</th>
                            <th title="community the invite is for">Receiver</th>
                            <th title="The leaderboard to send the invite for">Leaderboard</th>
                            <th title="A message that the sender attached to the invite">Message</th>
                            <th title="The date that the sender sent the invite">Invite sent</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="highlight-row">
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td></td>
                            <td>20-07-21 12:16</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l table-icon-hide red red-h" title="Cancel the invite">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </div>
    </main>
</div>