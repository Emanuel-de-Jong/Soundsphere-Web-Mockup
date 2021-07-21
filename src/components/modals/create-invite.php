<div class="modal" id="create-invite-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send invite</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input class="form-control" list="player-options" id="player" name="player" title="The player to send an invite to" placeholder="Search for a player...">
                <datalist id="player-options">
                    <option value="Player1">
                    <option value="Player2">
                    <option value="Player3">
                </datalist>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-dgreen bg-dgreen-h" data-bs-dismiss="modal">Send</button>
                <button type="button" class="btn bg-dgray bg-dgray-h" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>