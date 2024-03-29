<?php
/**
 * PayPal Setting & API Credentials
 * Created by Raza Mehdi <srmk@outlook.com>.
 */

return [
    'mode'    => env('PAYPAL_MODE', 'sandbox'), // Can only be 'sandbox' Or 'live'. If empty or invalid, 'live' will be used.
    'sandbox' => [
        'username'    => env('PAYPAL_SANDBOX_API_USERNAME', 'sb-unsm4328343326_api1.business.example.com'),
        'password'    => env('PAYPAL_SANDBOX_API_PASSWORD', '85MTLPPA6SE4S4XC'),
        'secret'      => env('PAYPAL_SANDBOX_API_SECRET', 'ED5d_-tcKFJMM4zl2CqEj6bR6nk_KwWrNypEr8Mu6PmSMC69g7D7oFY45VSIhMatuAW5wIZzAwCVDCvM'),
        'certificate' => env('PAYPAL_SANDBOX_API_CERTIFICATE', ''),
        'app_id'      => 'AR5DZyEFgzLbh_qShQuHhuZEZ-ru2FoSNeqSjhYM6aCMcEueBDyHoVoNcH3kMHGMA2QA8E-ZIuqJJCfL', // Used for testing Adaptive Payments API in sandbox mode
    ],
    'live' => [
        'username'    => env('PAYPAL_LIVE_API_USERNAME', 'sb-unsm4328343326_api1.business.example.com'),
        'password'    => env('PAYPAL_LIVE_API_PASSWORD', '85MTLPPA6SE4S4XC'),
        'secret'      => env('PAYPAL_LIVE_API_SECRET', 'ED5d_-tcKFJMM4zl2CqEj6bR6nk_KwWrNypEr8Mu6PmSMC69g7D7oFY45VSIhMatuAW5wIZzAwCVDCvM'),
        'certificate' => env('PAYPAL_LIVE_API_CERTIFICATE', ''),
        'app_id'      => 'AR5DZyEFgzLbh_qShQuHhuZEZ-ru2FoSNeqSjhYM6aCMcEueBDyHoVoNcH3kMHGMA2QA8E-ZIuqJJCfL', // Used for Adaptive Payments API
    ],

    'payment_action' => 'Sale', // Can only be 'Sale', 'Authorization' or 'Order'
    'currency'       => env('PAYPAL_CURRENCY', 'USD'),
    'billing_type'   => 'MerchantInitiatedBilling',
    'notify_url'     => 'https://sandbox.paypal.com', // Change this accordingly for your application.
    'locale'         => 'US', // force gateway language  i.e. it_IT, es_ES, en_US ... (for express checkout only)
    'validate_ssl'   => true, // Validate SSL when creating api client.
];