<div id="player-edit">
    <main class="container">
        <div class="main-box">
            <div class="page-icons page-icons-left">
                <a href="?a=players_player1_index" class="page-icon">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>

            <h1>Player1 - Settings</h1>


            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/add-input-mode.php'); ?>
            <?php require('components/modals/confirm-delete.php'); ?>
            <section id="form-section">
                <form class="form-settings" action="?a=players_player1_index" method="post">
                    <div class="form-item">
                        <label for="name" class="form-label" title="Your username">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="Player1">
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label" title="Page description">Description</label>
                        <textarea class="form-control" id="description" name="description">Maecenas at orci feugiat, pharetra est quis, vulputate neque. Vestibulum elementum, orci nec laoreet pretium, lectus velit viverra lacus, at blandit lorem purus sed ex. Cras erat elit, condimentum at dignissim ut, sodales sit amet lorem. Nullam sagittis felis enim, et congue mi facilisis a. Ut maximus hendrerit lectus. Aliquam sit amet lacus quis mi semper rhoncus. Quisque a orci tincidunt, posuere risus eget, vehicula purus. Mauris id leo a massa vulputate venenatis at ac nisl. Nullam non aliquet augue. Donec eu urna at magna feugiat tristique. Nunc non dui ut nisl faucibus rutrum. Aenean vulputate interdum vulputate. Curabitur auctor, dolor sit amet viverra laoreet, elit metus dictum massa, ut dapibus purus nibh ac eros. Duis eget finibus purus, vel efficitur mauris. Etiam id risus vitae nunc lobortis luctus non at mauris. Phasellus ut lorem massa. In non eleifend erat. Nam dapibus mauris et eros pretium, et malesuada ante varius. Quisque ac odio vel mauris pretium suscipit sit amet in quam. Phasellus id erat consectetur, sollicitudin velit quis, suscipit dui. Morbi sit amet faucibus felis. enim.</textarea>
                    </div>

                    <div class="form-item">
                        <label for="banner" class="form-label" title="A blurred version of an image. Shown behind your profile page.">Profile banner</label>
                        <input type="file" class="form-control input-image" name="banner" id="banner" accept=".png, .jpg, .jpeg">
                    </div>

                    <div class="form-item">
                        <label class="form-label w-100" title="The input modes on your profile and next to you in tables">
                            Favourite input modes
                            <a href="#!" class="title-icon label-icon green green-h" title="Add input mode" data-bs-toggle="modal" data-bs-target="#add-input-mode-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table table">
                            <tr>
                                <td>7K</td>
                                <td class="table-icon-cell">
                                    <div class="table-icon-box">
                                        <a href="#!" class="table-icon table-icon-l red red-h" title="Remove input mode" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Save</button>
                    <a href="#!" class="btn bg-red bg-red-h float-end" data-bs-toggle="modal" data-bs-target="#confirm-delete-modal">Delete</a>
                </form>
            </section>
        </div>
    </main>
</div>