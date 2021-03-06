<?php
/**
 * Helpers file.
 * This file creates global functions that are not default to PHP
 */

/**
 * Register the PHPSaaSWrapper function
 */
if(!function_exists('phpsaaswrapper')) {
    function phpsaaswrapper() {
        return app('phpsaaswrapper');
    }
}

/**
 * Encode a URL to Base64
 */
if(!function_exists('base64UrlEncode')) {
    function base64UrlEncode($inputStr) {
        return strtr(base64_encode($inputStr), '+/=', '-_,');
    }
}

/**
 * Decode a URL from Base64
 */
if(!function_exists('base64UrlDecode')) {
    function base64UrlDecode($inputStr) {
        return base64_decode(strtr($inputStr, '-_,', '+/='));
    }
}