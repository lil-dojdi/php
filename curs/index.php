<?php

const SITE_NAME = 'silkroute';
$productName = 'banana sweets';
$productPrice = 20;
$currency = 'MDL';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo SITE_NAME; ?></title>
</head>
<body>
   <h1>
        <?php echo $productName; ?>
   </h1>
   <h4>
       price: <?php echo $productPrice." ".$currency; ?>
   </h4> 
</body>
</html>