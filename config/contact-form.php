<?php
/**
 * Contact Form plugin config file
 *
 * This file defines the configuration options for the Contact Form plugin.
 * You can set the recipient email address here or via the Control Panel.
 *
 * @see https://github.com/craftcms/contact-form
 */

return [
    // The email address(es) that the contact form will send to.
    // Separate multiple email addresses with commas.
    'toEmail' => 'sales@victoriafans.co.uk',

    // Text that will be prepended to the email's Subject
    'prependSubject' => '[Victoria Fans Enquiry] ',

    // Text that will be prepended to the email's From Name
    'prependSender' => 'On behalf of ',

    // Allow file attachments?
    'allowAttachments' => false,

    // The flash message displayed after successfully sending a message
    'successFlashMessage' => 'Thank you for your enquiry. We will get back to you soon.',
];

