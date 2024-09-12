<?php

namespace Breakdance\Trial;

if (isTrial()) {

    add_action('admin_notices', function() {
        if (\Breakdance\Util\is_post_request()) {
            return;
        }
    
        if (isTrialExpired()) {
            ?>
            <div class="error notice breakdance-trial-expired-notice">
                <p>
                    <b>Your free Breakdance trial has expired, and you will no longer be able to save pages in Breakdance.</b><br />
                </p>
                <p>
                    <a href='<?php echo admin_url("admin.php?page=breakdance_settings&tab=license"); ?>'>Enter your license key to keep using Breakdance.</a>
                </p>
                <p>
                    You can get a license key at <a href='https://breakdance.com/'>https://breakdance.com/</a>
                </p>

            </div>
            <?php
        } else {
            ?>
            <div class="notice-success notice breakdance-trial-expiring">
                <p>
                    Breakdance - your free trial is valid for <?php echo daysLeftOnTrial(); ?> more days.
                    Already purchased Breakdance? <a href='<?php echo admin_url("admin.php?page=breakdance_settings&tab=license"); ?>'>Enter your license key.</a>
                </p>
            </div>
            <?php
        }
    });
        
}
