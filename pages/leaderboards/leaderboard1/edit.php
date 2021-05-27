<div id="leaderboard-edit">
    <main class="container">
        <div class="main-box">
            <a href="?a=communities_community1_index" class="page-icon page-icon-left">
                <i class="fas fa-arrow-left"></i>
            </a>

            <h1>Leaderboard1 - Edit</h1>


            <section>
                <form class="form-settings" action="?a=communities_community1_index" method="post">
                    <div class="form-item">
                        <label for="name" class="form-label" title="Leaderboard name">Name</label>
                        <input type="text" class="form-control" name="name" value="Leaderboard1">
                    </div>

                    <div class="form-item">
                        <label for="description" class="form-label" title="Description shown in popup">Description</label>
                        <textarea class="form-control" name="description">Maecenas at orci feugiat, pharetra est quis, vulputate neque. Vestibulum elementum, orci nec laoreet pretium, lectus velit viverra lacus, at blandit lorem purus sed ex. Cras erat elit, condimentum at dignissim ut, sodales sit amet lorem. Nullam sagittis felis enim, et congue mi facilisis a. Ut maximus hendrerit lectus. Aliquam sit amet lacus quis mi semper rhoncus. Quisque a orci tincidunt, posuere risus eget, vehicula purus. Mauris id leo a massa vulputate venenatis at ac nisl. Nullam non aliquet augue. Donec eu urna at magna feugiat tristique. Nunc non dui ut nisl faucibus rutrum. Aenean vulputate interdum vulputate. Curabitur auctor, dolor sit amet viverra laoreet, elit metus dictum massa, ut dapibus purus nibh ac eros. Duis eget finibus purus, vel efficitur mauris. Etiam id risus vitae nunc lobortis luctus non at mauris. Phasellus ut lorem massa. In non eleifend erat. Nam dapibus mauris et eros pretium, et malesuada ante varius. Quisque ac odio vel mauris pretium suscipit sit amet in quam. Phasellus id erat consectetur, sollicitudin velit quis, suscipit dui. Morbi sit amet faucibus felis. enim.</textarea>
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
                        <label for="admins" class="form-label w-100" title="Tables of which the charts will be used for ranking">
                            Tables
                            <a href="#" class="title-icon label-icon green green-h" title="Add table" data-bs-toggle="modal" data-bs-target="#add-table-modal">
                                <i class="fas fa-plus"></i>
                            </a>
                        </label>
                        <table class="data-table table">
                            <tr>
                                <td><a href="?a=tables_table1_index">Table1</a></td>
                                <td class="table-icon-row">
                                    <a href="#" class="table-icon red  red-h" title="Remove table" data-bs-toggle="modal" data-bs-target="#delete-modal">
                                        <i class="fas fa-trash"></i>
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