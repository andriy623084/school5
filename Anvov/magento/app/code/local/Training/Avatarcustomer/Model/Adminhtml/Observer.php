<?php
/**
 * AccountController for backend
 *
 * @category    Training
 * @package     Training_Avatarcustomer
 * @copyright   Copyright (c) 2006-2019 Magento, Inc. (http://www.magento.com)
 * @license     Smile
 */

class Training_Avatarcustomer_Model_Adminhtml_Observer extends Varien_Event_Observer
{
    /**
     * set Image url to db
     */
    public function changeShippingAddress($observer)
    {
        $customer = $observer['customer'];
        $customer->setData('avatar', $customer->getData('avatar'));

        $customer->save();
    }
}
