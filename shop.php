<htm>
<title>Shop</title>
<body>

<?php

include 'include.php';

?>
<p> Shop movies </p>







<form action="insertdb.php"  method="post">
Movie Name: <input type="text" name="firstname" value="Avenger"><br>
<input type="submit" onclick="ga('require', 'ecommerce');ga('send', 'event', 'Shop', 'Submit', 'Movie');ga('ecommerce:addTransaction', {
  'id': '1234',                     // Transaction ID. Required.
  'affiliation': 'ACME Movies',   // Affiliation or store name.
  'revenue': '11.99',               // Grand Total.
  'shipping': '5',                  // Shipping.
  'tax': '1.29'                     // Tax.
});ga('ecommerce:addItem', {
  'id': '1234',                     // Transaction ID. Required.
  'name': 'Fluffy Pink Bunnies',    // Product name. Required.
  'sku': 'DD23444',                 // SKU/code.
  'category': 'Party Toys',         // Category or variation.
  'price': '11.99',                 // Unit price.
  'quantity': '1'                   // Quantity.
});ga('ecommerce:send');">
</form>
    
<a href=insertactor.php> Insert Record </a>
    </htm>
