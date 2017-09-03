<?php

/*
 * @category LCB
 * @package LCB_BodyClass
 * @copyright Copyright (c) 2017 LeftCurlyBracket (http://www.leftcurlybracket.com/)
 * @author tom@leftcurlybracket.com
 */

class LCB_BodyClass_Model_Observer {

    /**
     * Append custom classes to body
     * 
     * @param Varien_Event_Observer $observer
     * @return void
     */
    public function addBodyClass(Varien_Event_Observer $observer)
    {

        $layout = $observer->getEvent()->getLayout();

        if ($layout) {

            $page = $layout->getBlock('root');

            if ($page && method_exists($page, 'addBodyClass')) {

                $append = array();

                if (Mage::helper('customer')->isLoggedIn()) {
                    $append[] = 'logged-in ';
                }

                $append[] = 'lang-' . substr(Mage::app()->getLocale()->getLocaleCode(), 0, 2);
                $append[] = 'currency-' . Mage::app()->getStore()->getCurrentCurrencyCode();
                $append[] = Mage::helper('bodyclass')->getBrowser();

                $body = new Varien_Object();
                $body->setPage($page);
                $body->setClass($append);

                $observer = Mage::dispatchEvent('add_body_class', array('body' => $body));
                
                foreach ($body->getClass() as $class) {
                    $page->addBodyClass($class);
                }
            }
        }
    }

}
