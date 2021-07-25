<div class="modal" id="add-modifier-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add modifier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="form-spacing-s">
                    <div class="form-item">
                        <label for="modifier" class="form-label" title="ASDASDASD">Modifier</label>
                        <select class="form-select" id="modifier" name="modifier">
                            <option selected disabled hidden>Select a modifier</option>
                            <option value="SMod">SpeedMode</option>
                            <option value="Q">TimeRateQ</option>
                            <option value="WindUp">WindUp</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="min-value" class="form-label" title="ASDASDASD">Min value</label>
                        <input type="text" class="form-control" id="min-value" name="min-value">
                    </div>

                    <div class="form-item">
                        <label for="max-value" class="form-label" title="ASDASDASD">Max value (if applicable)</label>
                        <input type="text" class="form-control" id="max-value" name="max-value">
                    </div>

                    <div class="form-item">
                        <label for="rule" class="form-label" title="ASDASDASD">Rule</label>
                        <select class="form-select" id="rule" name="rule">
                            <option selected disabled hidden>Select a rule</option>
                            <option value="required">Required</option>
                            <option value="allowed">Allowed</option>
                            <option value="prohibited">Prohibited</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-dgreen bg-dgreen-h" data-bs-dismiss="modal">Add</button>
                <button type="button" class="btn bg-dgray bg-dgray-h" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>