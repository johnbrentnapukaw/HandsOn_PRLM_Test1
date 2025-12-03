<?php 
//Napukaw, John Brent C.
//WD-204
//December 03, 2025

$name = "Daniel";
$greeting = "Hello!";

if($name){
    $greeting = "Welcome back, ".$name. "!";
}

$product = "Intertwined Fates";
$cost = "10";

for($i = 1;$i<=15;$i++){
    $subtotal = $cost * $i;
    $discount = ($cost/100) * 4;

    if ($i % 2 == 0){
        $discount = ($cost/100) *$i;
    }else {
        $discount = ($cost/100) *4;
    }

    $totals[$i] = $subtotal - $discount;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prelim Exam</title>
    <link rel="stylesheet" href = "css/styles.css">
</head>
<body>
<?php require "includes/header.php";?>
<h2><?= $greeting ?></h2>
<h3><?= $product ?></h3>

<table>
    <tr>
        <th>PACKS</th>
        <th>PRICE</th>
    </tr>
    <?php foreach ($totals as $quantity => $price): ?>
        <tr>
            <td>
                <?= $quantity ?>
                <?php 
                ($quantity == 1) ?
                $display = "pack":
                $display = "packs";
                echo $display;
                ?>
            </td>
            <td>
                <?= $price ?>
                <?php 
                ($quantity == 1) ?
                $display = "fate":
                $display = "fates";
                echo $display;
                ?>
            </td>
        </tr>
    <?php endforeach ?>
</table>

</body>
<?php include "includes/footer.php";?>
</html>