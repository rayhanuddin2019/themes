<?php
/**
 * Title: Subscription form
 * Slug: pendant/subscribe
 * Categories: text
 */
?>

<!-- wp:group {"backgroundColor":"primary","layout":{"inherit":true}} -->
<div class="wp-block-group has-primary-background-color has-background"><!-- wp:heading {"textAlign":"left","level":4} -->
<h4 class="has-text-align-left">Get Updates</h4>
<!-- /wp:heading -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph -->
<p>Subscribe to our mailing list to get access to the latest articles, reviews and curated selections.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column">
  <!-- wp:jetpack/subscriptions {"buttonBackgroundColor":"primary","textColor":"background","borderRadius":6,"borderColor":"primary","className":"is-style-split","style":{"spacing":{"margin":{"top":"1.45em"}}}} -->
  <div class="wp-block-jetpack-subscriptions wp-block-jetpack-subscriptions__supports-newline is-style-split" style="margin-top:1.45em">[jetpack_subscription_form show_subscribers_total="false" button_on_newline="false" custom_font_size="16px" custom_border_radius="6" custom_border_weight="1" custom_padding="15" custom_spacing="10" submit_button_classes="has-primary-border-color has-text-color has-background-color has-background has-primary-background-color" email_field_classes="has-primary-border-color" show_only_email_and_button="true" success_message="<?php echo esc_html__( 'Success! An email was just sent to confirm your subscription. Please find the email now and click \'Confirm Follow\' to start subscribing.', 'pendant' ); ?>"]</div>
  <!-- /wp:jetpack/subscriptions -->
</div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->



