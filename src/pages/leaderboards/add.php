<div id="leaderboards-add">
    <main class="container">
        <div class="main-box">
            <a href="?a=communities_community1_index" class="page-icon page-icon-left">
                <i class="fas fa-arrow-left"></i>
            </a>

            <h1>Leaderboards - Add</h1>


            <section id="form-section">
                <form class="form-settings" action="?a=communities_community1_index" method="post">
                    <div class="form-item">
                        <label for="name" class="form-label" title="Leaderboard name">Name</label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label" title="Description shown in popup">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                    <?php require('components/modals/add-table.php'); ?>
                    <?php require('components/modals/delete.php'); ?>
                    <div class="form-item">
                        <label for="admins" class="form-label w-100" title="Tables of which the charts will be used for ranking">
                            Tables
                            <a href="#" class="title-icon label-icon green green-h" title="Add table" data-bs-toggle="modal" data-bs-target="#add-table-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table table"></table>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Create</button>
                </form>
            </section>
        </div>
    </main>
</div>