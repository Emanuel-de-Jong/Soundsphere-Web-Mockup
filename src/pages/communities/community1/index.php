<nav id="secondary-navbar">
    <div class="container">
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" href="#community">Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#info-section">Description</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#description-section">Leaderboards</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#leaderboards-section">Members</a>
            </li>
        </ul>
    </div>
</nav>
<div id="secondary-navbar-box"></div>


<div id="community">
    <main class="container">
        <div class="main-box">
            <a href="?a=communities_community1_settings" class="page-icon page-icon-right" title="Community settings">
                <i class="fas fa-cog"></i>
            </a>

            <h1>AAA - Community1</h1>


            <section id="info-section">
                <h2>Info</h2>

                <table class="meta-table">
                    <tr>
                        <th title="Input modes in community leaderboards">Input modes:</th>
                        <td>7 key</td>
                        <th title="Member count">Members:</th>
                        <td>10</td>
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
                    faucibus rutrum. Aenean vulputate interdum vulputate. Curabitur auctor, dolor sit amet viverra laoreet, elit metus
                    dictum massa, ut dapibus purus nibh ac eros. Duis eget finibus purus, vel efficitur mauris. Etiam id risus vitae nunc
                    lobortis luctus non at mauris. Phasellus ut lorem massa. In non eleifend erat. Nam dapibus mauris et eros pretium, et
                    malesuada ante varius. Quisque ac odio vel mauris pretium suscipit sit amet in quam. Phasellus id erat consectetur,
                    sollicitudin velit quis, suscipit dui. Morbi sit amet faucibus felis.
                    enim.
                </p>
            </section>


            <?php require('components/modals/delete.php'); ?>
            <section id="leaderboards-section">
                <h2>
                    Leaderboards
                    <a href="?a=leaderboards_add" class="title-icon h2-icon green green-h" title="Create leaderboard">
                        <i class="fas fa-plus"></i>
                    </a>
                </h2>

                <table class="data-table table">
                    <thead>
                        <tr>
                            <th title="Leaderboard name">Name</th>
                            <th title="Leaderboard input mode">Input mode</th>
                            <th title="Player on rank 1">Top player</th>
                            <th title="Player count">Players</th>
                            <th title="Table count">Tables</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7key</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>12</td>
                            <td>1</td>
                            <td class="table-icon-row">
                                <a href="?a=leaderboards_leaderboard1_edit" class="table-icon orange orange-h" title="Edit leaderboard">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="table-icon red red-h" title="Delete leaderboard" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-trash"></i>
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

                <table class="data-table data-table-all table">
                    <thead>
                        <tr>
                            <th title="Rank of the selected leaderboard">Rank</th>
                            <th title="Player name">Name</th>
                            <th title="Plays on the selected leaderboard">Plays</th>
                            <th title="Favourite mode">Fav mode</th>
                            <th title="Last submitted score">Last played</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>#1</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>200</td>
                            <td>7key</td>
                            <td>18-04-21</td>
                        </tr>
                        <tr>
                            <td>#2</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>200</td>
                            <td>7key</td>
                            <td>18-04-21</td>
                        </tr>
                        <tr>
                            <td>#3</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>200</td>
                            <td>7key</td>
                            <td>18-04-21</td>
                        </tr>
                        <tr>
                            <td>#4</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>200</td>
                            <td>7key</td>
                            <td>18-04-21</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Rank of the selected leaderboard">Rank</th>
                            <th title="Player name">Name</th>
                            <th title="Plays on the selected leaderboard">Plays</th>
                            <th title="Most played input mode">Favourite mode</th>
                            <th title="Last submitted score">Last played</th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>