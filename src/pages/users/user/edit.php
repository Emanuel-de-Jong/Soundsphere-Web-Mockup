<div id="user-edit">
    <main class="container-lg">
        <div id="main-box">
            <nav class="navbar-expand page-icons page-icons-left page-icons-never-collapsed">
                <div class="navbar-nav">
                    <a href="?a=users_user_index" class="page-icon" title="Go back to the previous page">
                        <div class="page-icon-box">
                            <i class="fas fa-arrow-left"></i>
                        </div>
                    </a>
                </div>
            </nav>

            <h1>Settings</h1>


            <?php require('components/modals/delete.php'); ?>
            <?php require('components/modals/add-input-mode.php'); ?>
            <?php require('components/modals/confirm-delete.php'); ?>
            <section id="form-section">
                <form class="crud-form" action="?a=users_user_index" method="post">
                    <label for="username" id="username-preview" title="A preview that shows how your username will look">Player1</label>
                    <div class="form-item input-group">
                        <input type="color" class="form-control form-control-color" id="username-color-l" name="username-color-l" required value="#000000" title="The lefter color of your username">
                        <input type="text" class="form-control" id="username" name="username" title="Your username" minlength="5" maxlength="30" required value="Player1">
                        <input type="color" class="form-control form-control-color" id="username-color-r" name="username-color-r" required value="#000000" title="The righter color of your username">
                        <div class="form-invalid-message"></div>
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label" title="Page description">Description</label>
                        <textarea class="form-control" id="description" name="description">Maecenas at orci feugiat, pharetra est quis, vulputate neque. Vestibulum elementum, orci nec laoreet pretium, lectus velit viverra lacus, at blandit lorem purus sed ex. Cras erat elit, condimentum at dignissim ut, sodales sit amet lorem. Nullam sagittis felis enim, et congue mi facilisis a. Ut maximus hendrerit lectus. Aliquam sit amet lacus quis mi semper rhoncus. Quisque a orci tincidunt, posuere risus eget, vehicula purus. Mauris id leo a massa vulputate venenatis at ac nisl. Nullam non aliquet augue. Donec eu urna at magna feugiat tristique. Nunc non dui ut nisl faucibus rutrum. Aenean vulputate interdum vulputate. Curabitur auctor, dolor sit amet viverra laoreet, elit metus dictum massa, ut dapibus purus nibh ac eros. Duis eget finibus purus, vel efficitur mauris. Etiam id risus vitae nunc lobortis luctus non at mauris. Phasellus ut lorem massa. In non eleifend erat. Nam dapibus mauris et eros pretium, et malesuada ante varius. Quisque ac odio vel mauris pretium suscipit sit amet in quam. Phasellus id erat consectetur, sollicitudin velit quis, suscipit dui. Morbi sit amet faucibus felis. enim.</textarea>
                    </div>

                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-item">
                                <label for="discord-name" class="form-label" title="Your Discord username and tag">Discord</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" id="discord-name" name="discord-name" minlength="3" maxlength="100" value="Player">
                                    <span class="input-group-text" id="inputGroupPrepend2">#</span>
                                    <input type="text" class="form-control" id="discord-tag" name="discord-tag" minlength="4" maxlength="4" value="1234">
                                    <div class="form-invalid-message"></div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-item">
                                <label for="twitter" class="form-label" title="Link to your Twitter">Twitter</label>
                                <input type="text" class="form-control" id="twitter" name="twitter" minlength="5" maxlength="100" value="https://www.twitter.com/1234">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-item">
                                <label for="facebook" class="form-label" title="Link to your Facebook">Facebook</label>
                                <input type="text" class="form-control" id="facebook" name="facebook" minlength="3" maxlength="100" value="">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-item">
                                <label for="custom-link" class="form-label" title="Any link to something that is related to you">Custom link</label>
                                <input type="text" class="form-control" id="custom-link" name="custom-link" minlength="3" maxlength="100" value="https://www.vk.ru/1234">
                            </div>
                        </div>
                    </div>

                    <div class="form-item">
                        <label for="banner" class="form-label" title="The uploaded image will be blurred and shown behind your profile page">Blurred banner image</label>
                        <input type="file" class="form-control input-image" id="banner" name="banner" accept=".png, .jpg, .jpeg">
                    </div>

                    <div class="form-item">
                        <label class="form-label w-100" title="The input modes on your profile and next to you in tables">
                            Favourite input modes
                            <a href="#!" class="title-icon label-icon teal teal-h" title="Add input mode" data-bs-toggle="modal" data-bs-target="#add-input-mode-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table data-table-col data-table-nohead table table-icon-col-last">
                            <thead><tr> <th></th> <th></th> </tr></thead>
                            <tbody>
                                <tr>
                                    <td>7K</td>
                                    <td class="table-icon-cell">
                                        <a href="#!" class="table-icon table-icon-l red red-h" title="Remove input mode" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                            <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <button type="submit" class="btn bg-blue bg-blue-h">Save</button>
                    <a href="#!" class="btn bg-red bg-red-h float-end" data-bs-toggle="modal" data-bs-target="#confirm-delete-modal">Delete</a>
                </form>
            </section>
        </div>
    </main>
</div>
