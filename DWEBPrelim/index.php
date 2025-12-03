<?php 
//Napukaw, John Brent C.
//WD-204
//December 03, 2025

$username = "Daniel";
$greeting = "Hello, ".$username . "!";
$offer = array( "Intertwined Fate", 10, 150, 75);
$usual_price = $offer[1] * $offer[2];
$offer_price = $offer[1] * $offer[3];
$saving = $usual_price - $offer_price;
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
<?php include "includes/header.php";?>
<h2><?= $greeting ?></h2>
    <div class="saving">
        <h1>Save P<?= $saving ?></h1>
    </div>

    <p>Exclusive Monthly Offers for Intertwined Fates!
        <i>Welkin Moon Discount Offers for <br>
            every 10 purchase!</i><br>
            <i>Note: Maximum of 50 purchase</i><br>
            <i>per customer only.</i>
    </p>

    <p><strong>Buy 10 Fates for only  P<?= $offer_price ?></strong></p>
    <p><strong>(Save <?= $offer_price?>!)</strong></p>
    <div class = grid>
        <img src = "img/Item_Intertwined_Fate.webp">
        <img src = "img/Item_Primogem.webp">
    </div>
</body>
<?php include "includes/footer.php";?>
</html>