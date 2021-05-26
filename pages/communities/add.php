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
                        <label for="short-description" class="form-label">Short description</label>
                        <input type="text" id="short-description" class="form-control" name="short-description">
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
                                    <input class="form-control" list="playerOptions" placeholder="Search for a player...">
                                    <datalist id="playerOptions">
                                        <option value="Player1">
                                        <option value="Player2">
                                        <option value="Player3">
                                    </datalist>
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
                        <table class="data-table table"></table>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Create</button>
                </form>
            </section>
        </div>
    </main>
</div>