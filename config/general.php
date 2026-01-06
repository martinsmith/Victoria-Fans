<?php
/**
 * General Configuration
 *
 * All of your system's general configuration settings go in here.
 * You can see a list of the available settings in vendor/craftcms/cms/src/config/GeneralConfig.php.
 *
 * @see \craft\config\GeneralConfig
 */

use craft\helpers\App;

return [
    // Global settings
    '*' => [
        // Default Week Start Day (0 = Sunday, 1 = Monday...)
        'defaultWeekStartDay' => 1,

        // Whether generated URLs should omit "index.php"
        'omitScriptNameInUrls' => true,

        // Control Panel trigger word
        'cpTrigger' => 'admin',

        // The secure key Craft will use for hashing and encrypting data
        'securityKey' => App::env('SECURITY_KEY'),

        // Max upload file size
        'maxUploadFileSize' => 33554432,

        // Use email as username
        'useEmailAsUsername' => false,
    ],

    // Dev environment settings
    'dev' => [
        // Dev Mode (see https://craftcms.com/guides/what-dev-mode-does)
        'devMode' => true,

        // Allow admin changes
        'allowAdminChanges' => true,

        // Disallow robots
        'disallowRobots' => true,
    ],

    // Staging environment settings
    'staging' => [
        'devMode' => false,
        'allowAdminChanges' => true,
        'disallowRobots' => true,
    ],

    // Production environment settings
    'production' => [
        'devMode' => false,
        'allowAdminChanges' => false,
        'disallowRobots' => false,
    ],
];

