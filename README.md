# Integrating Google reCAPTCHA with Marketo Form in WordPress Page Template
This guide explains how to integrate Google reCAPTCHA with a Marketo form in a WordPress page template using the Google reCAPTCHA PHP SDK.

## Prerequisites
Before proceeding with the integration, make sure you have the following:

- A WordPress website with administrative access.
- A Marketo form set up on your website.
- A registered reCAPTCHA account and the site and secret keys.

## Usage
- Download the 'template-form.php' file and add it to your theme directory.
- Create a new WordPress page and assign the '"Landing Page with Marketo Form"' template to it.
- Replace the `reCAPTCHA_site_key` placeholder in the code with your actual reCAPTCHA site key. You can obtain the site key from your Google reCAPTCHA account.
- Replace the munchkinId placeholder with your Marketo Munchkin ID.
- Replace the formId placeholder with the ID of your Marketo form.
- Download the `recaptcha` folder and `recaptcha-submission.php` and add it to your theme directory. 
- If required, update the URL in the AJAX request `(recaptcha-submission.php)` to point to the correct location of the PHP file handling the reCAPTCHA verification.
- Save the changes and publish the page.

## Functionality
- The code loads the Marketo Forms 2.0 JavaScript library.
- A Marketo form is rendered within the <form> element with the ID `mktoForm_1234`. Replace 1234 with the actual form ID from your Marketo account.
- When the Marketo form is submitted, the code performs the following actions:
- Executes the reCAPTCHA challenge using the reCAPTCHA site key.
- Sends an AJAX request to `recaptcha-submission.php` with the reCAPTCHA response token.
- Receives a JSON response containing the reCAPTCHA verification status.
- Updates the lastRecaptchaResponse field of the Marketo form with the reCAPTCHA verification status.
- Disables form submission if the reCAPTCHA verification fails.
  
 ## Additional Notes
- Make sure you have registered your website with Google reCAPTCHA and obtained the necessary site key.
- The Marketo form should be configured with the appropriate fields and settings in your Marketo account.
- Customize the AJAX request URL (recaptcha-submission.php) and the handling code to fit your specific server-side implementation.
- This README assumes that you have the required permissions and familiarity with WordPress development.
- For further assistance, refer to the relevant documentation of the Marketo Forms 2.0 JavaScript library and Google reCAPTCHA.
  
## Customize and Extend
Feel free to customize and extend the code to fit your specific requirements. You can modify the labels, add additional fields to the custom post type, or style the page template according to your design preferences.

## Contributing
Contributions are welcome! If you have any improvements or suggestions, please feel free to submit a pull request.

## License
This project is licensed under the MIT License. Feel free to use, modify, and distribute the code as per the terms of the license.

## Disclaimer
Please note that this script is provided as-is without any warranty. Use it at your own risk.

