<div id="community">
    <main class="container">
        <div class="main-box">
            <a href="?a=communities_community1_settings" class="page-icon page-icon-right">
                <i class="fas fa-cog"></i>
            </a>

            <h1>Community1</h1>


            <section>
                <h2>Info</h2>

                <table class="meta-table">
                    <tr>
                        <th>Input modes:</th>
                        <td>7 key</td>
                        <th>Players:</th>
                        <td>10</td>
                    </tr>
                </table>
            </section>


            <section>
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


            <?php require('components/delete-modal.php'); ?>
            <section>
                <h2>
                    Leaderboards
                    <a href="?a=leaderboards_leaderboard1_add" class="h2-icon green">
                        <i class="fas fa-plus"></i>
                    </a>
                </h2>

                <table class="data-table table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Input mode</th>
                            <th>Top player</th>
                            <th>Performance</th>
                            <th>Tables</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=leaderboards_leaderboard1_index">Leaderboard1</a></td>
                            <td>7key</td>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>1250</td>
                            <td>1</td>
                            <td class="table-icon-row">
                                <a href="?a=leaderboards_leaderboard1_edit" class="table-icon orange">
                                    <i class="fas fa-pen"></i>
                                </a>
                                <a href="#" class="table-icon red" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <section>
                <h2>Tables</h2>


                <table class="data-table table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Input modes</th>
                            <th>Charts</th>
                            <th>Plays</th>
                            <th>Leaderboards</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=tables_table1_index">Table1</a></td>
                            <td>7key</td>
                            <td>20</td>
                            <td>115</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <section>
                <h2>Players</h2>

                <table class="data-table data-table-all table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Favourite mode</th>
                            <th>Plays</th>
                            <th>Last played</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>7key</td>
                            <td>200</td>
                            <td>18-04-21</td>
                        </tr>
                        <tr>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>7key</td>
                            <td>200</td>
                            <td>18-04-21</td>
                        </tr>
                        <tr>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>7key</td>
                            <td>200</td>
                            <td>18-04-21</td>
                        </tr>
                        <tr>
                            <td><a href="?a=players_player1_index">Player1</a></td>
                            <td>7key</td>
                            <td>200</td>
                            <td>18-04-21</td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>Favourite mode</th>
                            <th>Plays</th>
                            <th>Last played</th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>