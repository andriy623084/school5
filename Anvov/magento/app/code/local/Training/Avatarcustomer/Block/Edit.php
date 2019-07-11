<?php

/**
 * Block for avatarcustomer/form.layout
 *
 * @category    Training
 * @package     Training_Avatarcustomer
 * @copyright   Copyright (c) 2006-2019 Magento, Inc. (http://www.magento.com)
 * @license     Smile
 */


class Training_Avatarcustomer_Block_Edit extends Mage_Customer_Block_Form_Edit
{

    /**
     * Array from customer data
     *
     * return array
     */
    protected $skillsCustomer = null;
    /**
     * Array from customer data
     *
     * return array
     */
    protected $skillsCustomer = null;
    /**
     * Get data from db and return array
     *
     * @return array
     */

    public function getChosenOptions()
    {
        if ($this->skillsCustomer != null) {

            return $this->skillsCustomer;
        }
        $this->skillsCustomer = explode(",", $this->getCustomer()->getSkills());

        return $this->skillsCustomer;
    }

    /**
     * Image url for edit.phptml
     *
     * @return string
     */
    public function getImageUrl()
    {
        return Mage::helper('training_avatarcustomer')->getPartImageUrl() . $this->getCustomer()->getAvatar();
    }

    /**
     * Make associative array for multiselect
     *
     * @return array
     */
    public function adapterSourceModel()
    {
        $modelSource = Mage::getModel("training_avatarcustomer/skillssource");

        return array_column($modelSource->getAllOptions(), "label", "value");
    }
}
