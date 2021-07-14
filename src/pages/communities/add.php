<div id="communities-add">
    <main class="container">
        <div class="main-box">
            <a href="?a=communities_index" class="page-icon page-icon-left">
                <i class="fas fa-arrow-left"></i>
            </a>

            <h1>Communities - Add</h1>


            <section id="form-section">
                <form class="form-settings" action="?a=communities_index" method="post">
                    <div class="row">
                        <div class="col-9">
                            <div class="form-item">
                                <label for="name" class="form-label" title="Community name">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-item">
                                <label for="alias" class="form-label" title="3 to 5 characters that represent the community">Alias</label>
                                <input type="text" class="form-control" id="alias" name="alias">
                            </div>
                        </div>
                    </div>

                    <div class="form-item">
                        <label for="short-description" class="form-label" title="Description shown in tables">Short description</label>
                        <input type="text" id="short-description" class="form-control" name="short-description">
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label" title="Page description">Description</label>
                        <textarea class="form-control" id="description" name="description"></textarea>
                    </div>

                    <div class="form-item">
                        <label for="banner" class="form-label" title="A blurred version of an image. Shown behind the community page.">Community banner</label>
                        <input type="file" class="form-control input-image" name="banner" id="banner" accept=".png, .jpg, .jpeg">
                    </div>

                    <div class="form-item form-check">
                        <label for="is-public" class="form-check-label" title="Anyone can join public communities. Private communities have an invite system.">The community is public to anyone.</label>
                        <input type="checkbox" id="is-public" class="form-check-input" name="is-public" checked>
                    </div>

                    <?php require('components/modals/add-admin.php'); ?>
                    <?php require('components/modals/delete.php'); ?>
                    <div class="form-item">
                        <label for="admins" class="form-label w-100" title="Players that can alter the community">
                            Admins
                            <a href="#" class="title-icon label-icon green green-h" title="Add admin" data-bs-toggle="modal" data-bs-target="#add-admin-modal">
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