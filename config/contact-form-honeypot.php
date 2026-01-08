<?php
/**
 * Contact Form Honeypot plugin config file
 *
 * This file defines the honeypot field parameter name.
 * If a bot fills in this field, the submission will be flagged as spam.
 *
 * @see https://github.com/craftcms/contact-form-honeypot
 */

return [
    // The name of the honeypot field in your form
    // This should match the "name" attribute of your hidden honeypot input
    'honeypotParam' => 'vfWebsite',
];

