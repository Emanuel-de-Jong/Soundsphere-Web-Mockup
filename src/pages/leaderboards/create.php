<div id="leaderboards-create">
    <main class="container">
        <div class="main-box">
            <nav class="page-icons page-icons-left page-icons-never-collapsed">
                <div class="navbar-nav">
                    <a href="?a=leaderboards_index" class="page-icon" title="Go back to the previous page">
                        <div class="page-icon-box">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                </div>
            </nav>

            <h1>Leaderboards - Create</h1>


            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/add-modifier.php'); ?>
            <?php require('components/modals/add-bms-table.php'); ?>
            <?php require('components/modals/confirm-delete.php'); ?>
            <?php require('components/modals/add-input-mode.php'); ?>
            <section id="form-section">
                <form class="form-settings" action="?a=leaderboards_leaderboard1_index" method="post">
                    <div class="form-item">
                        <label for="leaderboard-name" class="form-label" title="Leaderboard name">Name</label>
                        <input type="text" class="form-control" id="leaderboard-name" name="leaderboard-name">
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label" title="Description shown in popup">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
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
                        <label for="banner" class="form-label" title="The uploaded image will be blurred and shown behind your leaderboard page">Blurred banner image</label>
                        <input type="file" class="form-control input-image" name="banner" id="banner" accept=".png, .jpg, .jpeg">
                    </div>

                    <div class="form-item">
                        <label class="form-label w-100" title="Only scores with this input mode will be used">
                            Input modes
                            <a href="#!" class="title-icon label-icon green green-h" title="Add input mode" data-bs-toggle="modal" data-bs-target="#add-input-mode-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table table"></table>
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
                            <tbody></tbody>
                        </table>
                    </div>

                    <div class="form-item">
                        <label for="bms-tables" class="form-label w-100" title="Tables of which the charts will be used for ranking">
                            Tables
                            <a href="#!" class="title-icon label-icon green green-h" title="Add table" data-bs-toggle="modal" data-bs-target="#add-bms-table-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table table" id="bms-tables"></table>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Create</button>
                </form>
            </section>
        </div>
    </main>
</div>