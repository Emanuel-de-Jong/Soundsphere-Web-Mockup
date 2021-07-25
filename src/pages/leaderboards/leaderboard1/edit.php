<div id="leaderboard-edit">
    <main class="container">
        <div class="main-box">
            <div class="page-icons page-icons-left">
                <a href="?a=leaderboards_leaderboard1_index" class="page-icon">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>

            <h1>Leaderboard1 - Settings</h1>


            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/add-modifier.php'); ?>
            <?php require('components/modals/add-bms-table.php'); ?>
            <?php require('components/modals/confirm-delete.php'); ?>
            <?php require('components/modals/add-input-mode.php'); ?>
            <section id="form-section">
                <form class="form-settings" action="?a=leaderboards_leaderboard1_index" method="post">
                    <div class="form-item">
                        <label for="name" class="form-label" title="Leaderboard name">Name</label>
                        <input type="text" class="form-control" name="name" value="Leaderboard1">
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label" title="Description shown in popup">Description</label>
                        <textarea class="form-control" name="description">Maecenas at orci feugiat, pharetra est quis, vulputate neque. Vestibulum elementum, orci nec laoreet pretium, lectus velit viverra lacus, at blandit lorem purus sed ex. Cras erat elit, condimentum at dignissim ut, sodales sit amet lorem. Nullam sagittis felis enim, et congue mi facilisis a. Ut maximus hendrerit lectus. Aliquam sit amet lacus quis mi semper rhoncus. Quisque a orci tincidunt, posuere risus eget, vehicula purus. Mauris id leo a massa vulputate venenatis at ac nisl. Nullam non aliquet augue. Donec eu urna at magna feugiat tristique. Nunc non dui ut nisl faucibus rutrum. Aenean vulputate interdum vulputate. Curabitur auctor, dolor sit amet viverra laoreet, elit metus dictum massa, ut dapibus purus nibh ac eros. Duis eget finibus purus, vel efficitur mauris. Etiam id risus vitae nunc lobortis luctus non at mauris. Phasellus ut lorem massa. In non eleifend erat. Nam dapibus mauris et eros pretium, et malesuada ante varius. Quisque ac odio vel mauris pretium suscipit sit amet in quam. Phasellus id erat consectetur, sollicitudin velit quis, suscipit dui. Morbi sit amet faucibus felis. enim.</textarea>
                    </div>

                    <div class="form-item">
                        <label class="form-label" for="chart-diff-calc" title="Decides the difficulty of the charts. The difficulty changes how much performance players get.">Chart difficulty calculator</label>
                        <select class="form-select" id="chart-diff-calc" name="chart-diff-calc">
                            <option value="table-level" selected>Table level</option>
                            <option value="soundsphere">soundsphere</option>
                            <option value="osu">osu!</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label class="form-label" for="score-performance-calc" title="Decides how good a score is. The impressiveness changes how much performance a player gets.">Score performance calculator</label>
                        <select class="form-select" id="score-performance-calc" name="score-performance-calc">
                            <option value="soundsphere" selected>soundsphere</option>
                            <option value="osu">osu!</option>
                            <option value="sdvx">SOUND VOLTEX</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label class="form-label" for="score-combiner" title="Decides how the performance of scores are combined to get the total performance of a player. It changes the order of the leaderboard.">Score combiner</label>
                        <select class="form-select" id="score-combiner" name="score-combiner">
                            <option value="logarithmic" selected>Logarithmic</option>
                            <option value="additive">Additive</option>
                            <option value="osu">osu!</option>
                            <option value="sdvx">SOUND VOLTEX</option>
                        </select>
                    </div>
                    
                    <div class="form-item">
                        <label for="banner" class="form-label" title="A blurred version of an image. Shown behind the leaderboard page.">Leaderboard banner</label>
                        <input type="file" class="form-control input-image" name="banner" id="banner" accept=".png, .jpg, .jpeg">
                    </div>

                    <div class="form-item">
                        <label class="form-label w-100" title="Only scores with this input mode will be used">
                            Input modes
                            <a href="#!" class="title-icon label-icon green green-h" title="Add input mode" data-bs-toggle="modal" data-bs-target="#add-input-mode-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table table">
                            <tr>
                                <td>7K</td>
                                <td class="table-icon-cell">
                                    <div class="table-icon-box">
                                        <a href="#!" class="table-icon table-icon-l red red-h" title="Remove input mode" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <div class="form-item">
                        <label class="form-label w-100" title="The modifiers a score needs to/can't have to be counted">
                            Modifiers
                            <a href="#!" class="title-icon label-icon green green-h" title="Add modifier" data-bs-toggle="modal" data-bs-target="#add-modifier-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table table">
                            <thead>
                                <tr>
                                    <th title="Modifier name">Name</th>
                                    <th title="Modifier minumal value">Min value</th>
                                    <th title="Modifier maximal value">Max value</th>
                                    <th title="Whether it's required, allowed or prohibited">Rule</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>SpeedMode</td>
                                    <td>Avg</td>
                                    <td></td>
                                    <td>Required</td>
                                    <td class="table-icon-cell">
                                        <div class="table-icon-box">
                                            <a href="#!" class="table-icon table-icon-l red red-h" title="Remove modifier" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                                <i class="fas fa-times"></i>
                                            </a>
                                            <a href="#!" class="table-icon table-icon-s orange orange-h" title="Edit modifier" data-bs-toggle="modal" data-bs-target="#add-modifier-modal">
                                                <i class="fas fa-pen"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="form-item">
                        <label for="bms-tables" class="form-label w-100" title="Tables of which the charts will be used for ranking">
                            Tables
                            <a href="#!" class="title-icon label-icon green green-h" title="Add table" data-bs-toggle="modal" data-bs-target="#add-bms-table-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table table" id="bms-tables">
                            <tr>
                                <td><a href="?a=bms-tables_bms-table1_index">Table1</a></td>
                                <td class="table-icon-cell">
                                    <div class="table-icon-box">
                                        <a href="#!" class="table-icon table-icon-l red red-h" title="Remove table" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Save</button>
                    <a href="#!" class="btn bg-red bg-red-h float-end" data-bs-toggle="modal" data-bs-target="#confirm-delete-modal">Delete</a>
                </form>
            </section>
        </div>
    </main>
</div>