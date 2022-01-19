<?php


$categoryTitle = ucwords(str_replace("-", " ", $_GET['category']));
$sql = 'SELECT * FROM `'.$dbTable.'` WHERE asin ="'.$_GET['asin'].'"';
$product = mysqli_fetch_array(mysqli_query($conn, $sql));

$brand = $product['brand'];
$category = $_GET['category'];

$content = $productSing." ".$product['name'];
$name = $productSing." ".$product['name'];
$headline = "Un ".$productSing." excepcional de la marca ".$product['brand'];
$url = $root.$_GET['category']."/";
$meta = "【 Reseña del fantástico ".$productSing." ".$product['name']." 】";
$h1 =$product['name']." - Opiniones y descripción";
$alternativesH2 = "H2 alternatives <complete in InitializerDetail.php>";
$alternativesBrand = "Otros ".$productPlural." de la marca ".$product['brand'];
?>
