<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['cashfree_mode'] = getenv('CASHFREE_MODE') ?: 'production';
$config['cashfree_client_id'] = getenv('CASHFREE_CLIENT_ID') ?: '';
$config['cashfree_client_secret'] = getenv('CASHFREE_CLIENT_SECRET') ?: '';
$config['cashfree_api_version'] = '2023-08-01';
$config['cashfree_api_url'] = $config['cashfree_mode'] === 'production'
    ? 'https://api.cashfree.com/pg'
    : 'https://sandbox.cashfree.com/pg';