<?php

class Rossmc_Stocksold_Block_Adminhtml_Renderer_Brand extends  Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
    public function render(Varien_Object $row){
        return Mage::getSingleton('catalog/product')->load($row['entity_id'])->getAttributeText('manufacturer');
    }
}