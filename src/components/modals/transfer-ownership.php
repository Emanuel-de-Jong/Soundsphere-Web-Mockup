<div class="modal" id="transfer-ownership-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Transfer community ownership</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="form-modal">
                    <div class="form-item">
                        <p>
                            The selected member will become the new owner of Community1 and you will become an admin.
                        </p>
                    </div>

                    <div class="form-item">
                        <label for="message" class="form-label" title="The member to make the new owner">Member</label>
                        <input class="form-control" list="player-options" id="player" name="player" placeholder="Search for a member...">
                        <datalist id="player-options">
                            <option value="Player1">
                            <option value="Player2">
                            <option value="Player3">
                        </datalist>
                    </div>

                    <div class="form-item">
                        <label for="community-name" class="form-label" title="Type in the name of the community to confirm the transfer">Community name</label>
                        <input type="text" class="form-control" id="community-name" name="community-name">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <a href="?a=communities_community1_index" class="btn bg-orange bg-orange-h">Transfer</a>
                <button type="button" class="btn bg-dgray bg-dgray-h" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>