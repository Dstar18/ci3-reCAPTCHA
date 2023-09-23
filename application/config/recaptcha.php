<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// To use reCAPTCHA, you need to sign up for an API key pair for your site.
// link: http://www.google.com/recaptcha/admin
// Label : MyreCAPTCHA
// V2 Invisible
$config['recaptcha_site_key']   = '6LeynUUoAAAAALPxrJSdgzNrH4FNeTvqOxgZo0ac';
$config['recaptcha_secret_key'] = '6LeynUUoAAAAAJ1n3HiiaVP5nivuWWl0ZId-q_fz';

// reCAPTCHA supported 40+ languages listed here:
// https://developers.google.com/recaptcha/docs/language
$config['recaptcha_lang'] = 'en';

/* End of file recaptcha.php */
/* Location: ./application/config/recaptcha.php */
