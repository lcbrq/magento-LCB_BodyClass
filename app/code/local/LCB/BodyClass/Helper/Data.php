<?php

/*
 * @category LCB
 * @package LCB_BodyClass
 * @copyright Copyright (c) 2017 LeftCurlyBracket (http://www.leftcurlybracket.com/)
 * @author tom@leftcurlybracket.com
 */

class LCB_BodyClass_Helper_Data extends Mage_Core_Helper_Abstract {

    /**
     * Get browser code
     * 
     * @return string
     */
    public function getBrowser()
    {
        $agent = $_SERVER['HTTP_USER_AGENT'];
        if (preg_match('/MSIE/i', $agent) || preg_match('/Trident/i', $agent)) {
            $browser = "msie";
        } elseif (preg_match('/Edge/i', $agent)) {
            $browser = "edge";
        } elseif (preg_match('/Firefox/i', $agent)) {
            $browser = "mozilla";
        } elseif (preg_match('/Chrome/i', $agent)) {
            $browser = "chrome";
        } elseif (preg_match('/Safari/i', $agent)) {
            $browser = "safari";
        } elseif (preg_match('/Opera/i', $agent)) {
            $browser = "opera";
        } else {
            $browser = "unknown";
        }

        return $browser;
    }

}
