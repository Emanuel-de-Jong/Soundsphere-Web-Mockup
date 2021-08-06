<div class="modal" id="create-leaderboard-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create leaderboard</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="form-modal">
                    <select class="form-select" id="community" name="community" title="The community to create the leaderboard for">
                        <option selected hidden>Select a community</option>
                        <option value="Community1">Community1</option>
                        <option value="Community2">Community2</option>
                        <option value="Community3">Community3</option>
                    </select>
                </form>
            </div>
            <div class="modal-footer">
                <a href="?a=leaderboards_create" class="btn bg-green bg-green-h">Start creation</a>
                <button type="button" class="btn bg-dgray bg-dgray-h" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>