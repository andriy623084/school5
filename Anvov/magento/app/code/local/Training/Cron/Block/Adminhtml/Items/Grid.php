<?php
/**
 * Block for GRID
 *
 * @category    Training
 * @package     training_cron
 * @copyright   Copyright (c) 2006-2019 Magento, Inc. (http://www.magento.com)
 * @license     Smile
 */

class Training_Cron_Block_Adminhtml_Items_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

    public function __construct()
    {
        parent::__construct();

        /** Set a unique id for our grid */
        $this->setId('blogpost_id');

        /** Default sort by column */
        $this->setDefaultSort('blogpost_id');
        $this->setSaveParametersInSession(true);
    }


    protected function _prepareCollection()
    {
        // Instantiate the collection of data to be display on the grid
        $collection = Mage::getModel('weblog/blogpost')->getCollection();
        $this->setCollection($collection);
        parent::_prepareCollection();
        return $this;
    }


    // Set every column to be displayed on the grid
    protected function _prepareColumns()
    {
        $this->addColumn('blogpost_id', array(
            'header' => Mage::helper('training_cron')->__('ID'),
            'sortable' => true,
            'width' => '60',
            'index' => 'blogpost_id'
        ));

        // In this particular case, we create a custom renderer in order to show
        // html data on this column
        $this->addColumn('title', array(
            'header' => Mage::helper('training_cron')->__('Title'),
            'index' => 'title',
//            'renderer' => 'training_cron_Block_Adminhtml_Order_Items_Grid_Renderer_Order',
        ));

        $this->addColumn('post', array(
            'header' => Mage::helper('training_cron')->__('Post'),
            'index' => 'post',
        ));

        $this->addColumn('date', array(
            'header' => Mage::helper('training_cron')->__('Date'),
            'type' => 'datetime',
            'index' => 'date',
        ));

        $this->addColumn('custom_value', array(
            'header' => Mage::helper('training_cron')->__('Custom Value'),
            'index' => 'custom_value',
        ));

        return parent::_prepareColumns();
    }

    /**
     * @param $row
     * @return string
     */
    public function getRowUrl($row)
    {
        // This is where our row data will link to
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}