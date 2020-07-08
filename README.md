McWebby WooCommerce Disable Shop Ordering
--

Removes the "add to cart" buttons from your online store to prevent purchases.

In some cases, custom code may place the buttons in other places. In this case, you can use the "MCW_WC_Disable_Ordering::orders_disabled" boolean function to test whether to add those buttons. 

Situation
--
This is an annual sale; online ordering is open for a limited window of time. At the end of the ordering period we need to be disable ordering but still keep products, inventory, and online product information available.  

Solution
--
When activated, this tiny plugin unhooks some WooCommerce actions so that the Add to Cart buttons are not printed. To resume ordering, just deactivate the plugin. 

Warning
--
This plugin was designed for BentonSWCD.org and may need tweaking to work with a different shop. 
