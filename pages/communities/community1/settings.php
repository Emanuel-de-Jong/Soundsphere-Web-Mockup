<div id="communities-settings">
    <?php require('pages/communities/community1/subnavbar.php'); ?>

    <main class="container">
        <div class="main-box">
            <h1>Community1 - Settings</h1>

            <form class="form-settings" action="?a=communities_community1_summary" method="post">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" value="Community1">
                </div>
                <button type="submit" class="btn btn-primary">Save</button>
            </form>
        </div>
    </main>
</div>