<div class="modal" id="add-admin-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add admin</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="form-modal">
                    <input class="form-control" list="player-options" id="player" name="player" title="The member to make an admin" placeholder="Search for a member...">
                    <datalist id="player-options">
                        <option value="Player1">
                        <option value="Player2">
                        <option value="Player3">
                    </datalist>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-green bg-green-h" data-bs-dismiss="modal">Add</button>
                <button type="button" class="btn bg-dgray bg-dgray-h" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>