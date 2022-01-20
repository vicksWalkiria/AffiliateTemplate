<?php


$categoryTitle = ucwords(str_replace("-", " ", $_GET['category']));
$sql = 'SELECT * FROM `'.$dbTable.'` WHERE asin = ?';

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['asin']);
$stmt->execute();
$result = $stmt->get_result();
$product = mysqli_fetch_array($result);

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
