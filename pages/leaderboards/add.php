<div id="leaderboards-add">
    <main class="container">
        <div class="main-box">
            <a href="?a=communities_community1_index" class="page-icon page-icon-left">
                <i class="fas fa-arrow-left"></i>
            </a>

            <h1>Leaderboards - Add</h1>


            <section>
                <form class="form-settings" action="?a=communities_community1_index" method="post">
                    <div class="form-item">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" name="name" value="">
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>

                    <div class="modal" id="add-table-modal">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Add table</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <div class="modal-body">
                                    <input class="form-control" list="tableOptions" placeholder="Search for a table...">
                                    <datalist id="tableOptions">
                                        <option value="Table1">
                                        <option value="Table2">
                                        <option value="Table3">
                                    </datalist>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-dgreen bg-dgreen-h" data-bs-dismiss="modal">Add</button>
                                    <button type="button" class="btn bg-dgray bg-dgray-h" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php require('components/delete-modal.php'); ?>
                    <div class="form-item">
                        <label for="admins" class="form-label w-100">
                            Tables
                            <a href="#" class="title-icon label-icon green green-h" data-bs-toggle="modal" data-bs-target="#add-table-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table table"></table>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Save</button>
                </form>
            </section>
        </div>
    </main>
</div>