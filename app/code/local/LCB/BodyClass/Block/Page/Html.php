<?php

/*
* @category LCB
* @package LCB_BodyClass
* @copyright Copyright (c) 2015 LeftCurlyBracket (http://www.leftcurlybracket.com/)
* @author tom@leftcurlybracket.com
*/

class LCB_BodyClass_Block_Page_Html extends Mage_Page_Block_Html
{

    public $classFlag;

    public function getBodyClass()
    {
        if (!$this->classFlag) {
            $this->classFlag = true;
            return $this->_getData('body_class') . ' ' . $this->getCustomClasses() . ' lang-' . $this->getLang() . ' currency-' . Mage::app()->getStore()->getCurrentCurrencyCode();
        } else {
            return parent::getBodyClass();
        }
    }

    /**
     * Method for custom logic implementation
     * @return string css classes
     */
    public function getCustomClasses()
    {

    }

}
