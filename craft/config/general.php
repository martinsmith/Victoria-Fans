<?php

/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the default settings in craft/app/etc/config/defaults/general.php
 */

// Detect if we're running in DDEV
$isDdev = getenv('IS_DDEV_PROJECT') === 'true';

return array(

    // Base site URL - use DDEV URL locally, otherwise use the production URL
    'siteUrl' => $isDdev ? 'https://victoria-fans.ddev.site/' : null,

    // Environment-specific variables (see https://craftcms.com/docs/multi-environment-configs#environment-specific-variables)
    'environmentVariables' => array(
        'baseUrl' => $isDdev ? 'https://victoria-fans.ddev.site/' : null,
    ),

    // Default Week Start Day (0 = Sunday, 1 = Monday...)
    'defaultWeekStartDay' => 0,

    // Enable CSRF Protection (recommended, will be enabled by default in Craft 3)
    'enableCsrfProtection' => true,

    // Whether "index.php" should be visible in URLs (true, false, "auto")
    'omitScriptNameInUrls' => true,

    // Control Panel trigger word
    'cpTrigger' => 'admin',

    // Dev Mode (see https://craftcms.com/support/dev-mode)
    'devMode' => $isDdev,

    'postCpLoginRedirect' => 'entries/productSpecifications',

);
