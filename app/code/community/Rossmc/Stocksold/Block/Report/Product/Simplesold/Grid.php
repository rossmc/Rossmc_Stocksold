<?php

class Rossmc_Stocksold_Block_Report_Product_Simplesold_Grid extends Mage_Adminhtml_Block_Report_Product_Sold_Grid
{
    /**
     * Setting up proper product collection name for a report
     *
     * @return Rossmc_Stocksold_Block_Report_Product_Simplesold_Grid
     */
    protected function _prepareCollection()
    {
        Mage_Adminhtml_Block_Report_Grid::_prepareCollection();
        $this->getCollection()
            ->initReport('rossmc_stocksold/simpleproduct_sold_collection');
        return $this;
    }

    /**
     * Prepare Grid columns
     *
     * @return Mage_Adminhtml_Block_Report_Product_Sold_Grid
     */
    protected function _prepareColumns()
    {
        $this->addColumn('sku', array(
            'header'    =>Mage::helper('reports')->__('SKU'),
            'width' => '140px',
            'index'     =>'sku',
        ));

        $this->addColumn('name', array(
            'header'    =>Mage::helper('reports')->__('Product Name'),
            'index'     =>'order_items_name'
        ));

        $this->addColumn('Manufacturer', array(
            'header' => Mage::helper('reports')->__('Manufacturer'),
            'type' => 'string',
            'renderer' => 'Rossmc_Stocksold_Block_Adminhtml_Renderer_brand'
        ));

        $attrSet = Mage::getResourceModel('eav/entity_attribute_set_collection')->setEntityTypeFilter(Mage::getModel('catalog/product')->getResource()->getTypeId())->toOptionHash();
        $this->addColumn('set_name', array(
            'header'=> Mage::helper('reports')->__('Attrib. Set Name'),
            'width' => '100px',
            'index' => 'attribute_set_id',
            'type'  => 'options',
            'options' => $attrSet,
        ));

        return parent::_prepareColumns();
    }
}