<div id="community-edit">
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

            <h1>Community settings</h1>


            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/add-user.php'); ?>
            <?php require('components/modals/confirm-delete.php'); ?>
            <?php require('components/modals/transfer-ownership.php'); ?>
            <section id="form-section">
                <form class="crud-form" action="?a=communities_community_index" method="post">
                    <div class="row">
                        <div class="col-sm-9">
                            <div class="form-item">
                                <label for="community-name" class="form-label form-required" title="Community name">Name</label>
                                <input type="text" class="form-control" id="community-name" name="community-name" minlength="5" maxlength="30" required value="Community1">
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="form-item">
                                <label for="alias" class="form-label form-required" title="3 to 5 characters that represent the community">Alias</label>
                                <input type="text" class="form-control" id="alias" name="alias" minlength="3" maxlength="5" required value="AAA">
                            </div>
                        </div>
                    </div>

                    <div class="form-item">
                        <label for="link" class="form-label" title="A link to the community outside of this site">External link</label>
                        <input type="url" class="form-control" id="link" name="link" maxlength="100" value="https://discord.gg/hDjSpVyhuZ">
                    </div>

                    <div class="form-item">
                        <label for="short-description" class="form-label form-required" title="Description shown in tables">Short description</label>
                        <input type="text" class="form-control" id="short-description" name="short-description" minlength="5" maxlength="75" required value="The first community. Which automatically makes it the best one.">
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label" title="Page description">Description</label>
                        <textarea class="form-control" id="description" name="description" minlength="5" maxlength="1000">Maecenas at orci feugiat, pharetra est quis, vulputate neque. Vestibulum elementum, orci nec laoreet pretium, lectus velit viverra lacus, at blandit lorem purus sed ex. Cras erat elit, condimentum at dignissim ut, sodales sit amet lorem. Nullam sagittis felis enim, et congue mi facilisis a. Ut maximus hendrerit lectus. Aliquam sit amet lacus quis mi semper rhoncus. Quisque a orci tincidunt, posuere risus eget, vehicula purus. Mauris id leo a massa vulputate venenatis at ac nisl. Nullam non aliquet augue. Donec eu urna at magna feugiat tristique. Nunc non dui ut nisl faucibus rutrum. Aenean vulputate interdum vulputate. Curabitur auctor, dolor sit amet viverra laoreet, elit metus dictum massa, ut dapibus purus nibh ac eros. Duis eget finibus purus, vel efficitur mauris. Etiam id risus vitae nunc lobortis luctus non at mauris. Phasellus ut lorem massa. In non eleifend erat. Nam dapibus mauris et eros pretium, et malesuada ante varius. Quisque ac odio vel mauris pretium suscipit sit amet in quam. Phasellus id erat consectetur, sollicitudin velit quis, suscipit dui. Morbi sit amet faucibus felis. enim.</textarea>
                    </div>

                    <div class="form-item">
                        <label for="default-ranking-leaderboard" class="form-label" title="Leaderboard selected at the member table">Default member ranking leaderboard</label>
                        <select class="form-select" id="default-ranking-leaderboard" name="default-ranking-leaderboard">
                            <option>Select default leaderboard</option>
                            <option value="Leaderboard1" selected>Leaderboard1</option>
                            <option value="Leaderboard2">Leaderboard2</option>
                            <option value="Leaderboard3">Leaderboard3</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="banner" class="form-label" title="The uploaded image will be blurred and shown behind your community page">Blurred banner image</label>
                        <input type="file" class="form-control input-image" id="banner" name="banner" accept=".png, .jpg, .jpeg">
                    </div>

                    <div class="form-item form-check">
                        <label for="is-public" class="form-check-label" title="Anyone can join public communities. Private communities have an invite system.">The community is public.</label>
                        <input type="checkbox" class="form-check-input" id="is-public" name="is-public" checked>
                    </div>

                    <div class="form-item">
                        <label for="admins" class="form-label w-100" title="Players that can manage leaderboards">
                            Admins
                            <a href="#!" class="title-icon label-icon teal teal-h" title="Add admin" data-bs-toggle="modal" data-bs-target="#add-admin-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table data-table-col data-table-nohead table table-icon-col-last">
                            <thead><tr> <th></th> <th></th> </tr></thead>
                            <tbody>
                                <tr>
                                    <td><a href="?a=users_user_index">Player1</a></td>
                                    <td class="table-icon-cell">
                                        <a href="#!" class="table-icon table-icon-l red red-h" title="Remove admin" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="form-item">
                        <label for="moderators" class="form-label w-100" title="Players that can kick members">
                            Moderators
                            <a href="#!" class="title-icon label-icon teal teal-h" title="Add moderator" data-bs-toggle="modal" data-bs-target="#add-admin-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table data-table-col data-table-nohead table table-icon-col-last">
                            <thead><tr> <th></th> <th></th> </tr></thead>
                            <tbody>
                                <tr>
                                    <td><a href="?a=users_user_index">Player1</a></td>
                                    <td class="table-icon-cell">
                                        <a href="#!" class="table-icon table-icon-l red red-h" title="Remove moderator" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Save</button>
                    <a href="#!" class="btn bg-red bg-red-h float-end" data-bs-toggle="modal" data-bs-target="#confirm-delete-modal">Delete</a>
                    <a href="#!" class="btn bg-orange bg-orange-h float-end me-2" data-bs-toggle="modal" data-bs-target="#transfer-ownership-modal">Change owner</a>
                </form>
            </section>
        </div>
    </main>
</div>
