<div id="user-inbox">
    <main class="container-lg">
        <div id="main-box">
            <nav class="navbar-expand page-icons page-icons-left page-icons-never-collapsed">
                <div class="navbar-nav">
                    <a href="?a=users_user_index" class="page-icon" title="Go back to the previous page">
                        <div class="page-icon-box">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                </div>
            </nav>

            <h1>Inbox</h1>


            <?php require('components/modals/delete.php'); ?>
            <section id="incoming-invites-section">
                <h2>Incoming invites</h2>

                <table class="data-table data-table-col table table-icon-col-last" data-orders="3d">
                    <thead>
                        <tr>
                            <th title="Community name">Community</th>
                            <th title="The community member that sent the invite">Sender</th>
                            <th title="A message that the community attached to the invite">Message</th>
                            <th title="The date that the community sent the invite">Date</th>
                            <th class="table-icon-th"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=communities_community_index">Community1</a></td>
                            <td><a href="?a=users_user_index">Player1</a></td>
                            <td>We are proud to invite you to the one and only first community!!</td>
                            <td>20-07-21 12:16</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l teal teal-h" title="Accept the invite. You will join the community.">
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

            <?php require('components/modals/create-user-request.php'); ?>
            <section id="outgoing-requests-section">
                <h2>
                    Outgoing requests
                    <a href="#!" class="title-icon h2-icon teal teal-h" title="Send a request to a community" data-bs-toggle="modal" data-bs-target="#create-user-request-modal">
                        <i class="fas fa-plus"></i>
                    </a>
                </h2>

                <table class="data-table data-table-col table table-icon-col-last" data-orders="2d">
                    <thead>
                        <tr>
                            <th title="Community name">Community</th>
                            <th title="The message that you attached to the request">Message</th>
                            <th title="The date that you sent the request">Date</th>
                            <th class="table-icon-th"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=communities_community_index">Community1</a></td>
                            <td>Hey it's Bob from Bob's Burgers.</td>
                            <td>20-07-21 12:16</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l table-icon-hide red red-h" title="Cancel the request">
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
