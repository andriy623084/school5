<?php

$installer = $this;
$installer->startSetup();
$installer->getConnection()
    ->addColumn($installer->getTable('sales/invoice'),'custom_discount', array(
        'type'      => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'length' => '12,4',
        'default'     => null, // column name to insert new column after
        'comment'   => 'Training Discounter Discount'
    ));
$installer->getConnection()
    ->addColumn($installer->getTable('sales/invoice'),'base_custom_discount', array(
        'type'      => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'length' => '12,4',
        'default'     => null, // column name to insert new column after
        'comment'   => 'Training Base Discounter Discount'
    ));
$installer->getConnection()
    ->addColumn($installer->getTable('sales/creditmemo'),'custom_discount', array(
        'type'      => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'length' => '12,4',
        'default'     => null, // column name to insert new column after
        'comment'   => 'Training Discounter Discount'
    ));
$installer->getConnection()
    ->addColumn($installer->getTable('sales/creditmemo'),'base_custom_discount', array(
        'type'      => Varien_Db_Ddl_Table::TYPE_DECIMAL,
        'length' => '12,4',
        'default'     => null, // column name to insert new column after
        'comment'   => 'Training Base Discounter Discount'
    ));
$installer->endSetup();
