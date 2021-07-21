<div class="modal" id="create-request-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Send request</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <input class="form-control" list="community-options" id="community" name="community" title="The community to send the request to" placeholder="Search for a community...">
                <datalist id="community-options">
                    <option value="Community1">
                    <option value="Community2">
                    <option value="Community3">
                </datalist>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-dgreen bg-dgreen-h" data-bs-dismiss="modal">Send</button>
                <button type="button" class="btn bg-dgray bg-dgray-h" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>