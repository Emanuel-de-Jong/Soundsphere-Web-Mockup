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
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="canCopy" name="canCopy" checked>
                            <label for="canCopy">Communities can copy this leaderboard</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="canJoin" name="canJoin" checked>
                            <label for="canJoin">Communities can join this leaderboard</label>
                        </div>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Save</button>
                </form>
            </section>
        </div>
    </main>
</div>