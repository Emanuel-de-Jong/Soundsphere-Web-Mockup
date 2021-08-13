<div class="modal" id="create-player-request-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="modal-form">
                    <div class="form-item">
                        <label for="modal-form-community" class="form-label form-required" title="The community to send the request to">Community</label>
                        <input class="form-control" list="community-options" id="modal-form-community" name="community" placeholder="Search for a community..." required>
                        <datalist id="community-options">
                            <option value="Community1">
                            <option value="Community2">
                            <option value="Community3">
                        </datalist>
                    </div>

                    <div class="form-item">
                        <label for="modal-form-message" class="form-label" title="You can add the reason that you want to join, or an identifier like a username from a different game etc.">Message</label>
                        <input type="text" class="form-control" id="modal-form-message" name="message" maxlength="100">
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