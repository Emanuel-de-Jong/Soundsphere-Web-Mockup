<div id="leaderboards-create">
    <main class="container-lg">
        <div id="main-box">
            <nav class="navbar-expand page-icons page-icons-left page-icons-never-collapsed">
                <div class="navbar-nav">
                    <a href="?a=leaderboards_index" class="page-icon" title="Go back to the previous page">
                        <div class="page-icon-box">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                </div>
            </nav>

            <h1>Make a leaderboard</h1>


            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/add-modifier.php'); ?>
            <?php require('components/modals/add-difftable.php'); ?>
            <?php require('components/modals/confirm-delete.php'); ?>
            <?php require('components/modals/add-input-mode.php'); ?>
            <section id="form-section">
                <form class="crud-form" action="?a=leaderboards_leaderboard_index" method="post">
                    <div class="form-item">
                        <label for="leaderboard-name" class="form-label form-required" title="Leaderboard name">Name</label>
                        <input type="text" class="form-control" id="leaderboard-name" name="leaderboard-name" minlength="5" maxlength="30" required>
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label form-required" title="Description shown in popup">Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>

                    <div class="form-item">
                        <label for="notechart-diff-calc" class="form-label form-required" title="Decides the difficulty of the charts. The difficulty changes how much performance rating players get.">Chart difficulty calculator</label>
                        <select class="form-select" id="notechart-diff-calc" name="notechart-diff-calc" required>
                            <option value="table-level" selected>Table level</option>
                            <option value="soundsphere">soundsphere</option>
                            <option value="osu">osu!</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="score-pr-calc" class="form-label form-required" title="Decides how good a score is. The impressiveness changes how much performance rating a player gets.">Score PR calculator</label>
                        <select class="form-select" id="score-pr-calc" name="score-pr-calc" required>
                            <option value="soundsphere" selected>soundsphere</option>
                            <option value="osu">osu!</option>
                            <option value="sdvx">SOUND VOLTEX</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="score-combiner" class="form-label form-required" title="Decides how the performance rating of scores are combined to get the total performance rating of a player. It changes the order of the leaderboard.">Score combiner</label>
                        <select class="form-select" id="score-combiner" name="score-combiner" required>
                            <option value="logarithmic" selected>Logarithmic</option>
                            <option value="additive">Additive</option>
                            <option value="osu">osu!</option>
                            <option value="sdvx">SOUND VOLTEX</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="community-combiner" class="form-label form-required" title="Decides how the member prs are combined to get the total performance rating of a community">Community combiner</label>
                        <select class="form-select" id="community-combiner" name="community-combiner" required>
                            <option value="logarithmic" selected>Logarithmic</option>
                            <option value="additive">Additive</option>
                            <option value="osu">osu!</option>
                            <option value="sdvx">SOUND VOLTEX</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="banner" class="form-label" title="The uploaded image will be blurred and shown behind your leaderboard page">Blurred banner image</label>
                        <input type="file" class="form-control input-image" id="banner" name="banner" accept=".png, .jpg, .jpeg">
                    </div>

                    <div class="form-item">
                        <label class="form-label form-required w-100" title="Only scores with this input mode will be used">
                            Input modes
                            <a href="#!" class="title-icon label-icon teal teal-h" title="Add input mode" data-bs-toggle="modal" data-bs-target="#add-input-mode-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table data-table-col data-table-nohead table table-icon-col-last">
                            <thead><tr> <th></th> <th></th> </tr></thead>
                            <tbody></tbody>
                        </table>
                    </div>

                    <div class="form-item">
                        <label class="form-label w-100" title="The modifiers a score needs to/can't have to be counted">
                            Modifiers
                            <a href="#!" class="title-icon label-icon teal teal-h" title="Add modifier" data-bs-toggle="modal" data-bs-target="#add-modifier-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table data-table-col table table-icon-col-last" data-orders="2a 0a">
                            <thead>
                                <tr>
                                    <th title="Modifier name">Name</th>
                                    <th title="Modifier value">Value</th>
                                    <th title="No rule: modifier not allowed. Allowed: modifier doesn't matter. Required: modifier needed.">Rule</th>
                                    <th class="table-icon-th"></th>
                                </tr>
                            </thead>
                            <tbody></tbody>
                        </table>
                    </div>

                    <div class="form-item">
                        <label for="difftables" class="form-label form-required w-100" title="Tables of which the charts will be used for ranking">
                            Tables
                            <a href="#!" class="title-icon label-icon teal teal-h" title="Add table" data-bs-toggle="modal" data-bs-target="#add-difftable-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table data-table-col data-table-nohead table table-icon-col-last" id="difftables">
                            <thead><tr> <th></th> <th></th> </tr></thead>
                            <tbody></tbody>
                        </table>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Create</button>
                </form>
            </section>
        </div>
    </main>
</div>
