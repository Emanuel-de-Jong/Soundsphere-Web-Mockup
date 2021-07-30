<nav id="secondary-navbar">
    <div class="container">
        <div class="nav">
            <a class="nav-link" href="#info-section">Info</a>
            <a class="nav-link" href="#description-section">Description</a>
            <a class="nav-link" href="#leaderboards-section">Leaderboards</a>
            <a class="nav-link" href="#members-section">Members</a>
        </div>
    </div>
</nav>
<div id="secondary-navbar-box"></div>


<div id="community">
    <main class="container">
        <div class="main-box">
            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/add-leaderboard.php'); ?>
            <nav class="page-icons page-icons-right page-icons-always-collapsed">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#page-icons-right">
                    <i class="fas fa-ellipsis-v"></i>
                </button>
                
                <div class="collapse navbar-collapse" id="page-icons-right">
                    <div class="navbar-nav">
                        <a href="#!" class="page-icon" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                            <span class="page-icon-text">Leave</span>
                            <div class="page-icon-box">
                                <i class="fas fa-sign-out-alt"></i>
                            </div>
                        </a>

                        <a href="?a=communities_community1_inbox" class="page-icon" title="Accept requests and send invites">
                            <span class="page-icon-text">Inbox</span>
                            <div class="page-icon-box">
                                <i class="fas fa-inbox"></i>
                                <div class="new-message-circle">3</div>
                            </div>
                        </a>

                        <a href="?a=communities_community1_changes" class="page-icon" title="All community changes and who made them">
                            <span class="page-icon-text">Changes</span>
                            <div class="page-icon-box">
                                <i class="fas fa-list-alt"></i>
                            </div>
                        </a>

                        <a href="?a=communities_community1_edit" class="page-icon" title="Community settings">
                            <span class="page-icon-text">Settings</span>
                            <div class="page-icon-box">
                                <i class="fas fa-cog"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </nav>

            <h1>AAA - Community1</h1>


            <section id="info-section">
                <h2>Info</h2>

                <table class="meta-table">
                    <tr>
                        <th title="Member count">Members:</th>
                        <td>10</td>
                        <th title="Input modes in community leaderboards">Input modes:</th>
                        <td>7K, 10K</td>
                    </tr>
                    <tr>
                        <th title="To join private communities, you have to send a request">Public:</th>
                        <td>No</td>
                        <th title="To join private communities, you have to send a request">Community link:</th>
                        <td><a href="https://discord.gg/hDjSpVyhuZ">https://discord.gg/hDjSpVyhuZ</a></td>
                    </tr>
                </table>
            </section>


            <section id="description-section">
                <h2>Description</h2>

                <p>
                    Maecenas at orci feugiat, pharetra est quis, vulputate neque. Vestibulum elementum, orci nec laoreet pretium, lectus
                    velit viverra lacus, at blandit lorem purus sed ex. Cras erat elit, condimentum at dignissim ut, sodales sit amet
                    lorem. Nullam sagittis felis enim, et congue mi facilisis a. Ut maximus hendrerit lectus. Aliquam sit amet lacus quis
                    mi semper rhoncus. Quisque a orci tincidunt, posuere risus eget, vehicula purus. Mauris id leo a massa vulputate
                    venenatis at ac nisl. Nullam non aliquet augue. Donec eu urna at magna feugiat tristique. Nunc non dui ut nisl
                    faucibus rutrum. Aenean vulputate interdum vulputate.
                    enim.
                </p>
            </section>


            <section id="leaderboards-section">
                <h2>
                    Leaderboards
                    <a href="?a=leaderboards_create" class="title-icon h2-icon green green-h" title="Create leaderboard">
                        <i class="fas fa-plus"></i>
                    </a>
                </h2>

                <table class="data-table table table-icon-col-first table-icon-col-last">
                    <thead>
                        <tr>
                            <th></th>
                            <th title="Leaderboard name">Name</th>
                            <th title="Leaderboard input modes">Input modes</th>
                            <th title="Player on rank 1">Top player</th>
                            <th title="Player count">Players</th>
                            <th title="Table count">Tables</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="table-icon-cell">
                                <span class="table-icon table-icon-s orange" title="This community owns this leaderboard">
                                    <i class="fas fa-crown"></i>
                                </span>
                            </td>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7K, 10K</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>12</td>
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
                    </tbody>
                </table>
            </section>


            <section id="members-section">
                <h2>Members</h2>

                <form class="text-center" action="" method="post">
                    <select class="form-select data-table-select" onchange="//this.form.submit()" title="Leaderboard used for member ranks and plays">
                        <option value="Leaderboard1" selected>Leaderboard1</option>
                    </select>
                </form>

                <table class="data-table data-table-all table table-icon-col-last">
                    <thead>
                        <tr>
                            <th class="table-col-minwidth" title="Rank of the selected leaderboard">Rank</th>
                            <th></th>
                            <th title="Player name">Name</th>
                            <th title="The player's leaderboard performance">Performance</th>
                            <th title="Favourite modes">Fav modes</th>
                            <th title="Plays on the selected leaderboard">Plays</th>
                            <th title="Last submitted score">Last played</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td></td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>1000</td>
                            <td>7K</td>
                            <td>200</td>
                            <td>18-04-21</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l table-icon-hide red red-h" title="Kick member" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        <tr class="highlight-row">
                            <td>#2</td>
                            <td class="table-icon-cell">
                                <span class="table-icon table-icon-s lred" title="Community owner">
                                    <i class="fas fa-crown"></i>
                                </span>
                            </td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>1000</td>
                            <td>7K</td>
                            <td>200</td>
                            <td>18-04-21</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l table-icon-hide red red-h" title="Kick member" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#3</td>
                            <td class="table-icon-cell">
                                <span class="table-icon table-icon-s orange" title="Community admin">
                                    <i class="fas fa-crown"></i>
                                </span>
                            </td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>1000</td>
                            <td>7K</td>
                            <td>200</td>
                            <td>18-04-21</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l table-icon-hide red red-h" title="Kick member" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>#4</td>
                            <td class="table-icon-cell">
                                <span class="table-icon table-icon-s yellow" title="Community moderator">
                                    <i class="fas fa-crown"></i>
                                </span>
                            </td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>1000</td>
                            <td>7K</td>
                            <td>200</td>
                            <td>18-04-21</td>
                            <td class="table-icon-cell">
                                <a href="#!" class="table-icon table-icon-l table-icon-hide red red-h" title="Kick member" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-times"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Rank of the selected leaderboard">Rank</th>
                            <th></th>
                            <th title="Player name">Name</th>
                            <th title="The player's leaderboard performance">Performance</th>
                            <th title="Favourite modes">Fav modes</th>
                            <th title="Plays on the selected leaderboard">Plays</th>
                            <th title="Last submitted score">Last played</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>