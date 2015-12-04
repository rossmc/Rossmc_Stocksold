<?php

require_once(Mage::getModuleDir('controllers','Mage_Adminhtml') . DS . 'Report' . DS . 'ProductController.php');

class Rossmc_Stocksold_Adminhtml_StocksoldController extends Mage_Adminhtml_Report_ProductController
{
    public function indexAction()
    {
        $this->_title($this->__('Stock Items Ordered'));

        $this->_initAction()
            ->_setActiveMenu('report/product/simple_sold')
            ->_addBreadcrumb(Mage::helper('rossmc_stocksold')->__('Stock Items Ordered'), Mage::helper('rossmc_stocksold')->__('Stock Items Ordered'))
            ->_addContent($this->getLayout()->createBlock('rossmc_stocksold/report_product_simplesold'))
            ->renderLayout();
    }

    /**
     * Export Sold Simple Products report to CSV format action
     *
     */
    public function exportSoldCsvAction()
    {
        $fileName   = 'stock_ordered.csv';
        $content    = $this->getLayout()
            ->createBlock('rossmc_stocksold/report_product_simplesold_grid')
            ->getCsv();

        $this->_prepareDownloadResponse($fileName, $content);
    }

    /**
     * Export Sold Simple Products report to XML format action
     *
     */
    public function exportSoldExcelAction()
    {
        $fileName   = 'stock_ordered.xml';
        $content    = $this->getLayout()
            ->createBlock('rossmc_stocksold/report_product_simplesold_grid')
            ->getExcel($fileName);

        $this->_prepareDownloadResponse($fileName, $content);
    }
}