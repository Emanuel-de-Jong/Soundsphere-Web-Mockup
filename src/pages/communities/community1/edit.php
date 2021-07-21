<div id="community-edit">
    <main class="container">
        <div class="main-box">
            <a href="?a=communities_community1_index" class="page-icon page-icon-left">
                <i class="fas fa-arrow-left"></i>
            </a>

            <h1>Community1 - Settings</h1>

            <section id="form-section">
                <form class="form-settings" action="?a=communities_community1_index" method="post">
                    <div class="row">
                        <div class="col-9">
                            <div class="form-item">
                                <label for="name" class="form-label" title="Community name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="Community1">
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="form-item">
                                <label for="alias" class="form-label" title="3 to 5 characters that represent the community">Alias</label>
                                <input type="text" class="form-control" id="alias" name="alias" value="AAA">
                            </div>
                        </div>
                    </div>

                    <div class="form-item">
                        <label for="short-description" class="form-label" title="Description shown in tables">Short description</label>
                        <input type="text" id="short-description" class="form-control" name="short-description" value="The first community. Which automatically makes it the best one.">
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label" title="Page description">Description</label>
                        <textarea class="form-control" id="description" name="description">Maecenas at orci feugiat, pharetra est quis, vulputate neque. Vestibulum elementum, orci nec laoreet pretium, lectus velit viverra lacus, at blandit lorem purus sed ex. Cras erat elit, condimentum at dignissim ut, sodales sit amet lorem. Nullam sagittis felis enim, et congue mi facilisis a. Ut maximus hendrerit lectus. Aliquam sit amet lacus quis mi semper rhoncus. Quisque a orci tincidunt, posuere risus eget, vehicula purus. Mauris id leo a massa vulputate venenatis at ac nisl. Nullam non aliquet augue. Donec eu urna at magna feugiat tristique. Nunc non dui ut nisl faucibus rutrum. Aenean vulputate interdum vulputate. Curabitur auctor, dolor sit amet viverra laoreet, elit metus dictum massa, ut dapibus purus nibh ac eros. Duis eget finibus purus, vel efficitur mauris. Etiam id risus vitae nunc lobortis luctus non at mauris. Phasellus ut lorem massa. In non eleifend erat. Nam dapibus mauris et eros pretium, et malesuada ante varius. Quisque ac odio vel mauris pretium suscipit sit amet in quam. Phasellus id erat consectetur, sollicitudin velit quis, suscipit dui. Morbi sit amet faucibus felis. enim.</textarea>
                    </div>

                    <div class="form-item">
                        <label class="form-label" for="default-ranking-leaderboard" title="Leaderboard selected at the member table">Default member ranking leaderboard</label>
                        <select class="form-select" id="default-ranking-leaderboard" name="default-ranking-leaderboard">
                            <option value="Leaderboard1" selected>Leaderboard1</option>
                            <option value="Leaderboard2">Leaderboard2</option>
                            <option value="Leaderboard3">Leaderboard3</option>
                        </select>
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
                        <table class="data-table table">
                            <tr>
                                <td><a href="?a=players_player1_index">Player1</a></td>
                                <td class="table-icon-row">
                                    <a href="#" class="table-icon table-icon-l red red-h" title="Remove admin" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Save</button>
                </form>
            </section>
        </div>
    </main>
</div>