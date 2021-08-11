<div class="modal" id="add-modifier-modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add modifier</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form class="form-modal">
                    <div class="form-item">
                        <label for="form-modal-modifier" class="form-label form-required" title="Modifier name">Modifier</label>
                        <select class="form-select" id="form-modal-modifier" name="modifier" required>
                            <option selected hidden>Select a modifier</option>
                            <option value="SMod">SpeedMode</option>
                            <option value="Q">TimeRateQ</option>
                            <option value="WindUp">WindUp</option>
                        </select>
                    </div>

                    <div class="form-item">
                        <label for="form-modal-min-value" class="form-label" title="Modifier minumal value">Min value</label>
                        <input type="text" class="form-control" id="form-modal-min-value" name="min-value">
                    </div>

                    <div class="form-item">
                        <label for="form-modal-max-value" class="form-label" title="Modifier maximal value">Max value</label>
                        <input type="text" class="form-control" id="form-modal-max-value" name="max-value">
                    </div>

                    <div class="form-item">
                        <label for="form-modal-rule" class="form-label form-required" title="No rule: modifier not allowed. Allowed: modifier doesn't matter. Required: modifier needed.">Rule</label>
                        <select class="form-select" id="form-modal-rule" name="rule" required>
                            <option selected hidden>Select a rule</option>
                            <option value="required">Required</option>
                            <option value="allowed">Allowed</option>
                        </select>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn bg-green bg-green-h" data-bs-dismiss="modal">Add</button>
                <button type="button" class="btn bg-dgray bg-dgray-h" data-bs-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>