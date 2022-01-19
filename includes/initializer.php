<?php

$categoryTitle = ucwords(str_replace("-", " ", $_GET['category']));
$sql = 'SELECT * FROM `'.$dbTable.'` WHERE category = ? ORDER BY CAST(price AS Double) DESC';
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['category']);
$stmt->execute();
$result = $stmt->get_result();
$results = mysqli_num_rows($result)/2;
$totalComparedProducts = 0;
$i = 0;
$maxProductosInComparisson= 3;
$comparisson = array();
$totalResults = array();
while($row=mysqli_fetch_array($result) ) {
	if(($i > $results) && ($totalComparedProducts < $maxProductosInComparisson) && ($row['price'] < 500)){
		$comparisson[] = $row;		
		$totalComparedProducts++;
	}
	$i++;
	$totalResults[] = $row;
}

$content = $productPlural." ".$categoryTitle;
$name = $productPlural." ".$categoryTitle;
$headline = "Mejores ".$productPlural." ".$categoryTitle." del mercado";
$url = $root.$_GET['category']."/";
$meta = "【 Encuentra aquí los mejores ".$productPlural." ".$categoryTitle." 】";
$h1 ="Comprar ".$productPlural." ".$categoryTitle." Online";
$seeButton= "Ver ".$productSing;
$buyButton= "Comprar ".$productPlural;
$alternativesH2 = "H2 alternatives text <complete in initializer.php>";
$comparissonH2Title = "Los ".$maxProductosInComparisson." mejores ".$productPlural." ".$categoryTitle;
$comparsissonDesc = "Hemos seleccionado estos ".$maxProductosInComparisson." ".$productPlural." ".$categoryTitle." porque consideramos que son los mejores en relación calidad-precio. Puedes visitarlos haciendo click en \"Ver ".$productSing."\", así accederás a ver opiniones, valoraciones y comparativas con otros productos similares."
?>
