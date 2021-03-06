<div id="user">
    <?php require('components/modals/properties.php'); ?>


    <nav id="secondary-navbar">
        <div class="container-lg">
            <div class="nav">
                <a class="nav-link" href="#info-section">Info</a>
                <a class="nav-link" href="#description-section">Description</a>
                <a class="nav-link" href="#communities-leaderboards-section">Communities</a>
                <a class="nav-link" href="#communities-leaderboards-section">Leaderboards</a>
                <a class="nav-link" href="#best-scores-section">Best scores</a>
                <a class="nav-link" href="#all-scores-section">All scores</a>
            </div>
        </div>
    </nav>
    <div id="secondary-navbar-box"></div>


    <div class="banner" style="background-image: url(../static/resources/banner.jpg);"></div>


    <main class="container-lg">
        <div id="main-box">
            <nav class="navbar-expand-xl page-icons page-icons-right">
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#page-icons-right">
                    <i class="fas fa-ellipsis-v"></i>
                </button>

                <div class="collapse navbar-collapse" id="page-icons-right">
                    <div class="navbar-nav">
                        <a href="?a=users_user_inbox" class="page-icon" title="Accept requests and send invites">
                            <span class="page-icon-text">Inbox</span>
                            <div class="page-icon-box">
                                <i class="fas fa-inbox"></i>
                                <div class="new-message-circle">3</div>
                            </div>
                        </a>

                        <a href="?a=users_user_inbox" class="page-icon" title="Your settings">
                            <span class="page-icon-text">Settings</span>
                            <div class="page-icon-box">
                                <i class="fas fa-cog"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </nav>

            <h1>Player1</h1>


            <section id="info-section">
                <h2>Info</h2>

                <table class="meta-table">
                    <tr>
                        <th title="Favourite mode">Fav modes:</th>
                        <td>7K</td>
                        <th title="Total time of gameplay">Playtime:</th>
                        <td>42h</td>
                    </tr>
                    <tr>
                        <th title="Total unique charts played">Charts played:</th>
                        <td>120</td>
                        <th title="Total play count">Plays:</th>
                        <td>200</td>
                    </tr>
                    <tr>
                        <th title="The player's Discord tag">Discord:</th>
                        <td>Player#1234</td>
                        <th title="A link to the player's Twitter">Twitter:</th>
                        <td><a href="https://www.twitter.com/1234">twitter.com/1234</a></td>
                    </tr>
                    <tr>
                        <th title="A link to something related to the player">Custom link:</th>
                        <td><a href="https://www.vk.ru/1234">vk.ru/1234</a></td>
                        <th title="Player roles">Roles:</th>
                        <td>
                            <span class="badge role-badge bg-teal" title="Donator">DNR</span>
                            <span class="badge role-badge bg-blue" title="Contributor">CTR</span>
                        </td>
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


            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/add-leaderboard.php'); ?>
            <?php require('components/modals/create-leaderboard.php'); ?>
            <section id="communities-leaderboards-section" class="section-grid">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>
                            Communities
                            <a href="?a=communities_create" class="title-icon h2-icon teal teal-h" title="Create community">
                                <i class="fas fa-plus"></i>
                            </a>
                        </h2>

                        <table id="user-communities-table" class="data-table data-table-col table table-icon-col-first table-icon-col-last" data-orders="0a 1a">
                            <thead>
                                <tr>
                                    <th class="table-icon-th"></th>
                                    <th title="Community name">Name</th>
                                    <th title="To join private communities, you have to send a request">Public</th>
                                    <th title="Input modes in community leaderboards">Modes</th>
                                    <th class="table-icon-th"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-icon-cell">
                                        <span class="table-icon table-icon-s orange" title="The owner of the community">
                                            <i class="fas fa-crown"></i>
                                        </span>
                                    </td>
                                    <td><a href="?a=communities_community_index">Community1</a></td>
                                    <td>No</td>
                                    <td>7K, 10K</td>
                                    <td class="table-icon-cell">
                                        <a href="?a=communities_community_edit" class="table-icon table-icon-s orange orange-h" title="Edit community">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#!" class="table-icon red red-h" title="Leave community" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-sign-out-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>


                    <div class="col-sm-6">
                        <h2>
                            Leaderboards
                            <a href="#!" class="title-icon h2-icon teal teal-h" title="Create leaderboard" data-bs-toggle="modal" data-bs-target="#create-leaderboard-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </h2>

                        <table id="user-leaderboards-table" class="data-table data-table-col table table-icon-col-first table-icon-col-last" data-orders="3a">
                            <thead>
                                <tr>
                                    <th class="table-icon-th"></th>
                                    <th title="Leaderboard name">Name</th>
                                    <th title="Leaderboard input modes">Modes</th>
                                    <th title="Rank of this player in the leaderboard">Rank</th>
                                    <th class="table-icon-th"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="table-icon-cell">
                                        <span class="table-icon table-icon-s orange" title="The owner, an admin or a mod of the community that owns this leaderboard">
                                            <i class="fas fa-user-shield"></i>
                                        </span>
                                    </td>
                                    <td><a href="?a=leaderboards_leaderboard_index">Leaderboard1</a></td>
                                    <td>7K, 10K</td>
                                    <td>#3</td>
                                    <td class="table-icon-cell">
                                        <a href="?a=leaderboards_leaderboard_edit" class="table-icon table-icon-s orange orange-h" title="Edit leaderboard">
                                            <i class="fas fa-pen"></i>
                                        </a>
                                        <a href="#!" class="table-icon teal teal-h" title="Add to community" data-bs-toggle="modal" data-bs-target="#add-leaderboard-modal">
                                            <i class="fas fa-sign-in-alt"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>


            <section id="best-scores-section">
                <h2>Best scores</h2>

                <div id="best-scores-insert-top" hidden>
                    <div class="col">
                        <form class="table-form table-form-top">
                            <select class="form-select form-select-sm" id="best-scores-leaderboard" name="leaderboard" title="Filter by leaderboard and use leaderboard calculators">
                                <option selected>All leaderboards</option>
                                <option value="Leaderboard1">Leaderboard1</option>
                            </select>
                        </form>
                    </div>

                    <div class="col">
                        <form class="table-form table-form-top">
                            <select class="form-select form-select-sm" id="best-scores-difftable" name="table" title="Filter by table">
                                <option selected>All tables</option>
                                <option value="Table1">Table1</option>
                            </select>
                        </form>
                    </div>

                    <div class="col">
                        <form class="table-form table-form-top">
                            <div class="form-check form-switch">
                                <label for="show-all-columns" class="form-check-label" title="Show more info about the scores">
                                    <input type="checkbox" class="form-check-input data-table-col-toggle" id="best-scores-show-all-columns" name="show-all-columns" data-table="best-scores-table">
                                    All values
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <table id="user-best-scores-table" class="data-table data-table-all table table-icon-col-last" id="best-scores-table" data-insert-top="best-scores-insert-top" data-toggle-cols="">
                    <thead>
                        <tr>
                            <th class="table-col-minwidth" title="Rank compared to other scores of the player">Rank</th>
                            <th title="Chart title">Title</th>
                            <th title="Chart difficulty">Diff</th>
                            <th title="Chart level">Level</th>
                            <th title="Players chart performance rating">PR</th>
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
                            <td>Chart1</td>
                            <td><a href="?a=notecharts_notechart_index">Difficulty1</a></td>
                            <td>12</td>
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
                            <td>#2</td>
                            <td>Chart1</td>
                            <td><a href="?a=notecharts_notechart_index">Difficulty1</a></td>
                            <td>12</td>
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
                            <td>Chart1</td>
                            <td><a href="?a=notecharts_notechart_index">Difficulty1</a></td>
                            <td>12</td>
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
                            <td>Chart1</td>
                            <td><a href="?a=notecharts_notechart_index">Difficulty1</a></td>
                            <td>12</td>
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
                            <th title="Rank compared to other scores of the player">Rank</th>
                            <th title="Chart title">Title</th>
                            <th title="Chart difficulty">Diff</th>
                            <th title="Chart level">Level</th>
                            <th title="Players chart performance rating">PR</th>
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


            <section id="all-scores-section">
                <h2>All scores</h2>

                <div id="all-scores-insert-top" hidden>
                    <div class="col">
                        <form class="table-form table-form-top">
                            <select class="form-select form-select-sm" id="all-scores-leaderboard" name="leaderboard" title="Filter by leaderboard and use leaderboard calculators">
                                <option selected>All leaderboards</option>
                                <option value="Leaderboard1">Leaderboard1</option>
                            </select>
                        </form>
                    </div>

                    <div class="col">
                        <form class="table-form table-form-top">
                            <select class="form-select form-select-sm" id="all-scores-difftable" name="table" title="Filter by table">
                                <option selected>All tables</option>
                                <option value="Table1">Table1</option>
                            </select>
                        </form>
                    </div>

                    <div class="col">
                        <form class="table-form table-form-top">
                            <div class="form-check form-switch">
                                <label for="show-all-columns" class="form-check-label" title="Show more info about the scores">
                                    <input type="checkbox" class="form-check-input data-table-col-toggle" id="all-scores-show-all-columns" name="show-all-columns" data-table="all-scores-table">
                                    All values
                                </label>
                            </div>
                        </form>
                    </div>
                </div>

                <table id="user-all-scores-table" class="data-table data-table-all table table-icon-col-last" id="all-scores-table" data-orders="8d" data-insert-top="all-scores-insert-top" data-toggle-cols="">
                    <thead>
                        <tr>
                            <th title="Chart title">Title</th>
                            <th title="Chart difficulty">Diff</th>
                            <th title="Chart level">Level</th>
                            <th title="Players chart performance rating">PR</th>
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
                            <td>Chart1</td>
                            <td><a href="?a=notecharts_notechart_index">Difficulty1</a></td>
                            <td>12</td>
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
                            <td>Chart1</td>
                            <td><a href="?a=notecharts_notechart_index">Difficulty1</a></td>
                            <td>12</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10K</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:27</td>
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
                            <td>Chart1</td>
                            <td><a href="?a=notecharts_notechart_index">Difficulty1</a></td>
                            <td>12</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10K</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:25</td>
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
                            <td>Chart1</td>
                            <td><a href="?a=notecharts_notechart_index">Difficulty1</a></td>
                            <td>12</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10K</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 14:12</td>
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
                            <th title="Chart title">Title</th>
                            <th title="Chart difficulty">Diff</th>
                            <th title="Chart level">Level</th>
                            <th title="Players chart performance rating">PR</th>
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
