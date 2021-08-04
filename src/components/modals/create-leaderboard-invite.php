<div class="modal" id="create-leaderboard-invite-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send invite</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="form-modal">
                    <div class="form-item">
                        <label for="community" class="form-label form-required" title="The community to send the invite to">Community</label>
                        <input class="form-control" list="community-options" id="community" name="community" placeholder="Search for a community..." required>
                        <datalist id="community-options">
                            <option value="Community1">
                            <option value="Community2">
                            <option value="Community3">
                        </datalist>
                    </div>

                    <div class="form-item">
                        <label for="leaderboard" class="form-label form-required" title="The leaderboard to send the invite for">Leaderboard</label>
                        <select class="form-select" id="leaderboard" name="leaderboard" required>
                            <option selected hidden>Select a leaderboard</option>
                            <option value="Leaderboard1">Leaderboard1</option>
                            <option value="Leaderboard2">Leaderboard3</option>
                            <option value="Leaderboard3">Leaderboard2</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="message" class="form-label" title="You can add the reason for the invite, or an identifier like a username from a different game etc.">Message</label>
                        <input type="text" class="form-control" id="message" name="message" maxlength="100">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-green bg-green-h" data-bs-dismiss="modal">Send</button>
                <button type="button" class="btn bg-dgray bg-dgray-h" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>