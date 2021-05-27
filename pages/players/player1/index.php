<div id="player">
    <main class="container">
        <div class="main-box">
            <a href="?a=players_player1_settings" class="page-icon page-icon-right">
                <i class="fas fa-cog"></i>
            </a>

            <h1>Player1</h1>


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


            <section>
                <h2>Communities</h2>

                <table class="data-table table">
                <thead>
                        <tr>
                            <th>Name</th>
                            <th>Input modes</th>
                            <th>Members</th>
                            <th>Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="?a=communities_community1_index">Community1</a></td>
                            <td>7key</td>
                            <td>10</td>
                            <td>The first community. Which automatically makes it the best one.</td>
                        </tr>
                    </tbody>
                </table>
            </section>


            <?php require('components/delete-modal.php'); ?>
            <section>
                <h2>Scores</h2>

                <table class="data-table data-table-all table">
                    <thead>
                        <tr>
                            <th title="Rank compared to other player scores">Rank</th>
                            <th title="Chart title">Title</th>
                            <th title="Chart difficulty">Difficulty</th>
                            <th title="Players chart performance">Performance</th>
                            <th title="Player score">Score</th>
                            <th title="Player accuracy">Accuracy</th>
                            <th title="Player miss count">Misses</th>
                            <th title="Input mode the score was set with">Input mode</th>
                            <th title="All mods the score was set with">Modifiers</th>
                            <th title="Score date and time">Date</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>1000</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-row">
                                <a href="#" class="table-icon red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>1000</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-row">
                                <a href="#" class="table-icon red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>1000</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-row">
                                <a href="#" class="table-icon red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>Chart1</td>
                            <td><a href="?a=charts_chart1_index">Difficulty1</a></td>
                            <td>1000</td>
                            <td>1000</td>
                            <td>20</td>
                            <td>8</td>
                            <td>10key</td>
                            <td>CMod, 1.4X</td>
                            <td>10-10-21 15:28</td>
                            <td class="table-icon-row">
                                <a href="#" class="table-icon red red-h" title="Delete score" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th title="Rank compared to other player scores">Rank</th>
                            <th title="Chart title">Title</th>
                            <th title="Chart difficulty">Difficulty</th>
                            <th title="Players chart performance">Performance</th>
                            <th title="Player score">Score</th>
                            <th title="Player accuracy">Accuracy</th>
                            <th title="Player miss count">Misses</th>
                            <th title="Input mode the score was set with">Input mode</th>
                            <th title="All mods the score was set with">Modifiers</th>
                            <th title="Score date and time">Date</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </section>
        </div>
    </main>
</div>