<div id="difftables-create">
    <main class="container-lg">
        <div id="main-box">
            <nav class="navbar-expand page-icons page-icons-left page-icons-never-collapsed">
                <div class="navbar-nav">
                    <a href="?a=communities_community_index" class="page-icon" title="Go back to the previous page">
                        <div class="page-icon-box">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                </div>
            </nav>

            <h1>Make a difficulty table</h1>

            <section id="form-section">
                <form class="crud-form">
                    <div class="form-item">
                        <label for="difftable-name" class="form-label form-required" title="difftable name">Name</label>
                        <input type="text" class="form-control" id="difftable-name" name="difftable-name" minlength="5" maxlength="30" required>
                    </div>

                    <div class="form-item">
                        <label for="link" class="form-label" title="A link to the table outside of this site">External link</label>
                        <input type="url" class="form-control" id="link" name="link" maxlength="100">
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label form-required" title="Description shown in popup">Description</label>
                        <textarea class="form-control" id="description" name="description" required></textarea>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Create</button>
                </form>
            </section>
        </div>
    </main>
</div>
