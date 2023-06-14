# Integrating Google reCAPTCHA with Marketo Form in WordPress Page Template
This guide explains how to integrate Google reCAPTCHA with a Marketo form in a WordPress page template using the Google reCAPTCHA PHP SDK.

## Prerequisites
Before proceeding with the integration, make sure you have the following:

- A WordPress website with administrative access.
- A Marketo form set up on your website.
- A registered reCAPTCHA account and the site and secret keys.

## Usage
- Create a new WordPress page and assign the "Landing Page with Marketo Form" template to it.
- Replace the `reCAPTCHA_site_key` placeholder in the code with your actual reCAPTCHA site key. You can obtain the site key from your Google reCAPTCHA account.
- Replace the munchkinId placeholder with your Marketo Munchkin ID.
- Replace the formId placeholder with the ID of your Marketo form.
- If required, update the URL in the AJAX request (recaptcha-submission.php) to point to the correct location of the PHP file handling the reCAPTCHA verification.
- Save the changes and publish the page.

## Functionality
- The code loads the Marketo Forms 2.0 JavaScript library.
- A Marketo form is rendered within the <form> element with the ID mktoForm_1234. Replace 1234 with the actual form ID from your Marketo account.
- When the Marketo form is submitted, the code performs the following actions:
- Executes the reCAPTCHA challenge using the reCAPTCHA site key.
- Sends an AJAX request to recaptcha-submission.php with the reCAPTCHA response token.
- Receives a JSON response containing the reCAPTCHA verification status.
- Updates the lastRecaptchaResponse field of the Marketo form with the reCAPTCHA verification status.
- Disables form submission if the reCAPTCHA verification fails.
  
 ## Additional Notes
- Make sure you have registered your website with Google reCAPTCHA and obtained the necessary site key.
- The Marketo form should be configured with the appropriate fields and settings in your Marketo account.
- Customize the AJAX request URL (recaptcha-submission.php) and the handling code to fit your specific server-side implementation.
- This README assumes that you have the required permissions and familiarity with WordPress development.
- For further assistance, refer to the relevant documentation of the Marketo Forms 2.0 JavaScript library and Google reCAPTCHA.
  
 
