<div class="modal" id="create-user-invite-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send invite</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="modal-form">
                    <div class="form-item">
                        <label for="create-user-invite-user" class="form-label form-required" title="The player to send an invite to">Player</label>
                        <input class="form-control" list="user-options" id="create-user-invite-user" name="user" placeholder="Search for a player..." required>
                        <datalist id="user-options">
                            <option value="Player1">
                            <option value="Player2">
                            <option value="Player3">
                        </datalist>
                    </div>

                    <div class="form-item">
                        <label for="create-user-invite-message" class="form-label" title="You can add the reason for the invite, or an identifier like a username from a different game etc.">Message</label>
                        <input type="text" class="form-control" id="create-user-invite-message" name="message" maxlength="100">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-teal bg-teal-h" data-bs-dismiss="modal">Send</button>
                <button type="button" class="btn bg-gray bg-gray-h" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>
