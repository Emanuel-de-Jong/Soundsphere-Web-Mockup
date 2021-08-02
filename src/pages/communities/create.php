<div id="communities-create">
    <main class="container">
        <div class="main-box">
            <nav class="page-icons page-icons-left page-icons-never-collapsed">
                <div class="navbar-nav">
                    <a href="?a=communities_index" class="page-icon" title="Go back to the previous page">
                        <div class="page-icon-box">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                </div>
            </nav>

            <h1>Communities - Create</h1>


            <section id="form-section">
                <form class="form-settings" action="?a=communities_community1_index" method="post">
                    <div class="row">
                        <div class="col-9">
                            <div class="form-item">
                                <label for="community-name" class="form-label form-required" title="Community name">Name</label>
                                <input type="text" class="form-control" id="community-name" name="community-name" minlength="5" maxlength="50" required>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-item">
                                <label for="alias" class="form-label form-required" title="3 to 5 characters that represent the community">Alias</label>
                                <input type="text" class="form-control" id="alias" name="alias" minlength="3" maxlength="5" required>
                            </div>
                        </div>
                    </div>

                    <div class="form-item">
                        <label for="link" class="form-label" title="A link to the community outside of this site">Community link</label>
                        <input type="url" class="form-control" id="link" name="link" maxlength="100">
                    </div>

                    <div class="form-item">
                        <label for="short-description" class="form-label form-required" title="Description shown in tables">Short description</label>
                        <input type="text" class="form-control" id="short-description" name="short-description" minlength="5" maxlength="75" required>
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label" title="Page description">Description</label>
                        <textarea class="form-control" id="description" name="description" minlength="5" maxlength="1000"></textarea>
                    </div>

                    <div class="form-item">
                        <label for="banner" class="form-label" title="The uploaded image will be blurred and shown behind your community page">Blurred banner image</label>
                        <input type="file" class="form-control input-image" id="banner" name="banner" accept=".png, .jpg, .jpeg">
                    </div>

                    <div class="form-item form-check">
                        <label for="is-public" class="form-check-label form-required" title="Anyone can join public communities. Private communities have an invite system.">The community is public.</label>
                        <input type="checkbox" class="form-check-input" id="is-public" name="is-public" checked required>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Create</button>
                </form>
            </section>
        </div>
    </main>
</div>