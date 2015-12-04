# Stock Items Ordered
#### Overview
This Magento module adds a new report to the *Reports > Products* section called *Stock Items Ordered*.  The Report is based on Magento's Products Ordered Report but lists out simple products ordered rather than their parent/super product (if they are part of a configurable product).  This is more helpful if the reports are being run for stock keeping.  A few extra columns are also added, such as SKU, Attribute set & Manufacture.

![Stock Items Ordered Report](http://rossmchugh.com/wp-content/uploads/2015/12/stock-items-ordered.jpg)

The Module is built using the methods outlined this [Atwix blog post](http://www.atwix.com/magento/simple-products-report/) by building from Magento's native functionality without the use for rewrites.

#### Installation
* Download latest version [here](https://github.com/rossmc/Rossmc_Stocksold/archive/master.zip). 
* Unzip to Magento root folder.
* Clear cache.
* Logout from admin then login again to access the Report.

#### Usage

* Go to *Reports > Products > Stock Items Ordered*.
* As you would with any Magento Report, select the date range & period and click Refresh.
* View the report or export to CSV or Excel XML.