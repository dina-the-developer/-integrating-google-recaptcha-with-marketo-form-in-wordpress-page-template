<?php
/**
 *	Template Name: Landing Page with Marketo Form
 *
 * @package AppviewX
 * @subpackage AppviewX
 * @since AppviewX 1.0
**/

get_header(); 

?>
<script src="https://www.google.com/recaptcha/api.js?render=reCAPTCHA_site_key"></script>

<div class="page-wrapper">
  <div class="container">
    <script src="//app-ab00.marketo.com/js/forms2/js/forms2.min.js"></script>
    <form id="mktoForm_1234"></form>
  </div>
</div>

<?php get_footer(); ?>

<script type="text/javascript">
  jQuery(function($) {
    // Loading Marketo form
    MktoForms2.loadForm("//app-ab00.marketo.com", "123-ABC-456", 1234, function(form) { // Replace your munchkinId(123-ABC-456) with yours; replace formId(1234) with your form.
      form.onSubmit(function(){

        grecaptcha.ready(function() {
          grecaptcha.execute("reCAPTCHA_site_key").then(function(token) { // Replace with your reCAPTCHA_site_key.

            $.ajax({
              url: '<?php echo get_template_directory_uri(); ?>/recaptcha-submission.php',
              type: 'POST',
              dataType: 'json',
              data: {
                response: token
              },
              success: function(response) {

                // Storing the Site Verify Response
                var recaptchaStatus = response['success'];

                if (typeof MktoForms2 != "undefined") {
                  MktoForms2.whenReady(function(form) {
                    // Updating the captcha status on the 'lastRecaptchaResponse' form field.
                    form.vals({
                      "lastRecaptchaResponse": recaptchaStatus
                    });

                    form.submittable(false);
                    //console.log("Submitted values: " + JSON.stringify(vals));

                  });
                }
              }

            });

      });

    });
  }
</script>