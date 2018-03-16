<?php
for ($i = 0; $i < 5; $i++) {
   $sku = str_shuffle("hello");
    $inventory_quantity = rand(111, 999);
     
	for ($j = 0; $j < 15; $j++) {
       	$arr[] = ['sku' => $sku, 
				  'inventory_quantity' => $inventory_quantity, 
				  'product_title' => str_shuffle(5), 
				  'price' => rand(111, 999)];
   }
	

}

echo "<pre>";
print_r($arr);