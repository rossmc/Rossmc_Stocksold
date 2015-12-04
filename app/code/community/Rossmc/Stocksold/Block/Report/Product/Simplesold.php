<?php

class Rossmc_Stocksold_Block_Report_Product_Simplesold extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function __construct()
    {
        $this->_controller = 'report_product_simplesold';
        $this->_blockGroup = 'rossmc_stocksold';
        $this->_headerText = Mage::helper('rossmc_stocksold')->__('Stock Items Ordered');
        parent::__construct();
        $this->_removeButton('add');
    }
}