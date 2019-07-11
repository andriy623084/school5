<?php

/**
 * Helper for extended functionality of customer page
 *
 * @category    Training
 * @package     Training_Avatarcustomer
 * @copyright   Copyright (c) 2006-2019 Magento, Inc. (http://www.magento.com)
 * @license     Smile
 */


class Training_Avatarcustomer_Helper_Data extends Mage_Core_Helper_Abstract
{
    const IMAGE_HOLDER = "/media/catalog/category/person-placeholder.jpg";
    const IMAGE_FOLDERS =  "/media/customer";

    /**
     * Get placeholder url for template
     *
     * @return string
     */
    public function getPlaceholder()
    {
        return self::IMAGE_HOLDER;
    }

    /**
     * Get part for forming Url in block Edit.php
     *
     * @return string
     */
    public function getPartImageUrl()
    {
        return self::IMAGE_FOLDERS;
    }

    /**
     * Form server url to show image
     *
     * @param $url
     * @return string
     */
    public function getUrl($url)
    {
        return strstr($url, 'custo', true) . self::IMAGE_FOLDERS;
    }

    /**
     * Change array from multi select into string
     *
     * @param $array
     * @return string
     */
    public function getMultiSelect($array)
    {
        return implode( ',' ,$array);
    }
}
