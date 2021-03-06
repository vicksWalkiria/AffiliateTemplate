<?php include('includes/constants.php'); ?>
<?php include('includes/conexion.php'); ?>
<?php include('includes/homeInitializer.php'); ?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="【 <?php echo $homeMetaDescription ?> 】" />
        <meta name="author" content="<?php echo $domain?>" />
        <meta name="Keywords" content="<?php echo $homeSubtitle?>"/>
        <meta name="googlebot" content="all"/>
        <meta name="googlebot" content="index"/>
        <meta name="googlebot" content="follow"/>
        <meta name="robots" content="all"/>
        <meta name="robots" content="index"/>
        <meta name="robots" content="follow"/>
        <meta name="robots" content="index,follow">
        <meta http-equiv="Content-Language" content="es"/>
        <title><?php echo $homeMetaTitle ?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo $root?>assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo $root?>css/styles.css" rel="stylesheet" />
        <?php include('cookies.php'); ?>

    </head>
    <body>
        
        <?php
            include 'includes/nav.php';
        ?>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder"><?php echo $homeH1 ?></h1>
                    <p class="lead fw-normal text-white-50 mb-0"><?php echo $homeSubH1 ?></p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                        $sql = "SELECT distinct(category) from ".$dbTable." order by CAST(price AS Float) DESC";
                        $result = mysqli_query($conn, $sql);
                        while($row=mysqli_fetch_array($result)) {

                            $imageUrl = mysqli_fetch_array(mysqli_query($conn, "SELECT price, image_url FROM ".$dbTable." where category ='".$row['category']."' ORDER BY CAST(price AS Float) DESC LIMIT 1 "))[1];

                            $categoryTitle = ucwords(str_replace("-", " ", $row['category']));

                            echo '  <div class="col mb-5">
                        <div class="card h-100">
                           <!-- Product image-->
                            <img class="card-img-top" src="'.$imageUrl.'" alt="'.$productSing." ".$categoryTitle.'" />
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <p class="fw-bolder">'.$productPlural." ".$categoryTitle.'</p>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="'.$root.$row['category'].'/">'.$homeButton.' '.$categoryTitle.'</a></div>
                            </div>
                        </div>
                    </div>';
                      
                        }
                    ?>

                </div>
            </div>
        </section>
        <!-- Footer-->
         <?php
            include 'includes/footer.php';
        ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
