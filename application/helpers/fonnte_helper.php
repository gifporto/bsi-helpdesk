<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('send_message')) {
    function send_message($target, $message, $token, $countryCode = '62')
    {
        $data = http_build_query(array(
            'target' => $target,
            'message' => $message,
            'countryCode' => $countryCode
        ));

        $options = array(
            'http' => array(
                'header'  => "Authorization: $token\r\n" .
                    "Content-Type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => $data,
            ),
        );

        $context  = stream_context_create($options);
        $result = file_get_contents('https://api.fonnte.com/send', false, $context);

        if ($result === FALSE) {
            return array('status' => 'error', 'message' => 'Error occurred');
        }

        return array('status' => 'success', 'response' => $result);
    }
}

