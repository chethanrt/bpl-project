<?php
/**
 * Output modal markup for gated download
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function bpl_resource_vault_modal() {
    ?>
    <div id="bpl-resource-modal" class="bpl-resource-modal" style="display:none;" role="dialog" aria-modal="true" aria-labelledby="bpl-modal-title">
        <div class="bpl-modal-content">
            <button class="bpl-modal-close" aria-label="Close">&times;</button>
            <h2 id="bpl-modal-title">Download Resource</h2>
            <form id="bpl-gated-download-form" autocomplete="off">
                <input type="hidden" name="resource_id" value="">
                <label>Name*<input type="text" name="name" required></label>
                <label>Email*<input type="email" name="email" required></label>
                <label>Company<input type="text" name="company"></label>
                <label>Phone<input type="text" name="phone"></label>
                <label>Country<input type="text" name="country"></label>
                <label>Job Title<input type="text" name="job_title"></label>
                <label><input type="checkbox" name="consent" required> I consent to data collection</label>
                <button type="submit">Download</button>
            </form>
            <div class="bpl-modal-message" style="display:none;"></div>
        </div>
    </div>
    <?php
}
