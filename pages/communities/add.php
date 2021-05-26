<div id="communities-add">
    <main class="container">
        <div class="main-box">
            <a href="?a=communities_index" class="page-icon page-icon-left">
                <i class="fas fa-arrow-left"></i>
            </a>

            <h1>Communities - Add</h1>

            
            <section>
                <form class="form-settings" action="?a=communities_index" method="post">
                    <div class="form-item">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                    <div class="modal" id="add-admin-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add admin</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <select class="form-select">
                                        <option selected>Select a player</option>
                                        <option value="Leaderboard1">Player1</option>
                                        <option value="Leaderboard2">Player2</option>
                                        <option value="Leaderboard3">Player3</option>
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-dgreen bg-dgreen-h" data-bs-dismiss="modal">Add</button>
                                    <button type="button" class="btn bg-dark-dray" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php require('components/delete-modal.php'); ?>
                    <div class="form-item">
                        <label for="admins" class="form-label w-100">
                            Admins
                            <a href="#" class="title-icon label-icon green green-h" data-bs-toggle="modal" data-bs-target="#add-admin-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table table">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                    
                    <button type="submit" class="btn bg-blue bg-blue-h">Save</button>
                </form>
            </section>
        </div>
    </main>
</div>