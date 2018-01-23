<?php
/**
 * Make a request to MailChimp API v3
 *
 * @param string $endpoint The MailChimp API endpoint for this request WITHOUT starting slash
 * @param string $type Type of request, whether GET, POST, PATCH, PUT, or DELETE
 * @param array $body The request body parameters
 *
 * @return $response object The response object
 *
 */
function isa_mailchimp_api_request( $endpoint, $type = 'POST', $body = '' ) {

    // Configure --------------------------------------

    $api_key = 'b62e1e3bf25e3a9ab9b5b1a727ff2bef-us17';

    // STOP Configuring -------------------------------

    $core_api_endpoint = 'https://<dc>.api.mailchimp.com/3.0/';
    list(, $datacenter) = explode( '-', $api_key );
    $core_api_endpoint = str_replace( '<dc>', $datacenter, $core_api_endpoint );

    $url = $core_api_endpoint . $endpoint;

    $request_args = array(
        'method'      => $type,
        'timeout'     => 20,
        'headers'     => array(
            'Content-Type' => 'application/json',
            'Authorization' => 'apikey ' . $api_key
        )
    );

    if ( $body ) {
        $request_args['body'] = json_encode( $body );
    }

    $request = wp_remote_post( $url, $request_args );
    $response = is_wp_error( $request ) ? false : json_decode( wp_remote_retrieve_body( $request ) );

    return $response;
}

/**
 * Create a MailChimp campaign with MailChimp API v3
 *
 * @param $list_id string Your List ID for this campaign
 * @param $subject string The email subject line for this campaign
 * @return mixed The campaign ID if it was successfully created, otherwise false.
 */

function isa_create_mailchimp_campaign( $list_id, $subject ) {

    // Configure --------------------------------------
     $subject = 'reset password';
    $reply_to   = 'support@studihub.com.ng';
    $from_name  = 'StudiHUB';

    // STOP Configuring -------------------------------

    $campaign_id = '';

    $body = array(
        'recipients'    => array('list_id' => $list_id),
        'type'          => 'regular',
        'settings'      => array('subject_line' => $subject,
                                'reply_to'      => $reply_to,
                                'from_name'     => $from_name
                                )
    );

    $create_campaign = isa_mailchimp_api_request( 'campaigns', 'POST', $body );

    if ( $create_campaign ) {
        if ( ! empty( $create_campaign->id ) && isset( $create_campaign->status ) && 'save' == $create_campaign->status ) {
            // The campaign id:
            $campaign_id = $create_campaign->id;
        }
    }

    return $campaign_id ? $campaign_id : false;

}

/**
 * Set the HTML content for MailChimp campaign, given template sections, with MailChimp API v3
 *
 * @param $campaign_id string The Campaign ID
 * @param $template_content array Template Content including the Template ID and Sections
 *
 * @return bool True if the content was set, otherwise false.
 */

function isa_set_mail_campaign_content( $campaign_id, $template_content ) {
    $set_content = '';
    $set_campaign_content = isa_mailchimp_api_request( "campaigns/$campaign_id/content", 'PUT', $template_content );

    if ( $set_campaign_content ) {
        if ( ! empty( $set_campaign_content->html ) ) {
            $set_content = true;
        }
    }
    return $set_content ? true : false;
}

?>
