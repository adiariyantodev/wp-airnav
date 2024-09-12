<?php

namespace Breakdance\Trial;

/**
 * @return bool 
 */
function isTrial() {
    if (validLicenseWasEnteredAtSomePoint()) return false;
    
    return true;
}

/**
 * @return int 
 */
function getTrialExpirationTime() {
    $trialExpirationTime = (int) get_option(BREAKDANCE_TRIAL_EXPIRATION_TIME_OPTION_NAME);

    if (!$trialExpirationTime) {
        $trialExpirationTime = time() + (60 * 60 * 24 * BREAKDANCE_TRIAL_LENGTH);
        update_option(BREAKDANCE_TRIAL_EXPIRATION_TIME_OPTION_NAME, $trialExpirationTime);
    }

    return (int) $trialExpirationTime;
}

/**
 * @return bool 
 */
function isTrialExpired() {
    if (!isTrial()) return false;

    return time() > getTrialExpirationTime();
}

/**
 * @return int 
 */
function daysLeftOnTrial() {
    $secondsLeftOnTrial = getTrialExpirationTime() - time();

    if ($secondsLeftOnTrial < 0) {
        $daysLeftOnTrial = 0;
    } else {
        $daysLeftOnTrial = floor($secondsLeftOnTrial / (60 * 60 * 24));
    }

    return (int) $daysLeftOnTrial;
}

/**
 * @return void 
 */
function setValidLicenseWasEnteredAtSomePoint() {
    if (isTrial()) {
        update_option(BREAKDANCE_TRIAL_VALID_LICENSE_ENTERED_OPTION_NAME, true);
    }
}

/**
 * @return mixed 
 */
function validLicenseWasEnteredAtSomePoint() {
    return get_option(BREAKDANCE_TRIAL_VALID_LICENSE_ENTERED_OPTION_NAME);
}