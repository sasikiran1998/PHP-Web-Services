<?php
class Fruit{
public function getFruitPrice($fruit) {
/* This data would usually be pulled            
from a database */            
$fruitArray = array("apples" => 1.99,
"bananas" => 0.69,
"cherries" => 2.99);
return $fruitArray[$fruit];        
}    
}
?>