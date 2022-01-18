<?php

$categoryTitle = ucwords(str_replace("-", " ", $_GET['category']));
$sql = 'SELECT asin, name, brand, category, image_url FROM `'.$dbTable.'` WHERE category ="'.$_GET['category'].'" ORDER BY CAST(price AS Float) DESC';
$result = mysqli_query($conn, $sql);

$content = $productPlural." ".$categoryTitle;
$name = $productPlural." ".$categoryTitle;
$headline = "Mejores ".$productPlural." ".$categoryTitle." del mercado";
$url = $root.$_GET['category']."/";
$meta = "【 Encuentra aquí los mejores ".$productPlural." ".$categoryTitle." 】";
$h1 ="Comprar ".$productPlural." ".$categoryTitle." Online";
$seeButton= "Ver ".$productSing;
$buyButton= "Comprar ".$productPlural;
$alternativesH2 = "H2 alternatives text <complete in initializer.php>";
?>
