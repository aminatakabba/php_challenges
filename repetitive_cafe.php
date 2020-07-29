<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<?php
$drinks = [
  "Latte" => 3.99,
  "Coffee" => 2.00,
  "Tea" => 2.50,
  "Mocha" => 4.50
];
?>
<ul>

</ul>
<?php foreach($drinks as $drink=>$price):?>
<li><?="$drink: $$price"?></li>
<?php endforeach;?>
<h3>Pastries! ($2 each)</h3>
<?php
$pastries = [
  "Croissant",
  "Muffin",
  "Slice of Pie",
  "Slice of Cake",
  "Cupcake",
  "Brownie"
];
?>
<ul>
<?php for($i=0; $i<count($pastries); $i++):?>
<li><?=$pastries[$i]?></li>
<?php endfor;?>
</ul>
