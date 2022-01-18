<?php include('includes/constants.php'); 
      include('includes/conexion.php'); 
      include('includes/initializerDetail.php');?>


<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="【 Reseña del <?php echo $productSing." ".$product['name']?> 】" />
        <meta name="author" content="<?php echo $domain?>" />
        <meta name="Keywords" content="<?php echo $productSing." ".$product['name']?>"/>
        <meta name="googlebot" content="all"/>
        <meta name="googlebot" content="index"/>
        <meta name="googlebot" content="follow"/>
        <meta name="robots" content="all"/>
        <meta name="robots" content="index"/>
        <meta name="robots" content="follow"/>
        <meta name="robots" content="index,follow">
        <meta http-equiv="Content-Language" content="es"/>
        <title><?php echo $productSing." "?> <?php echo $product['name']?></title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="<?php echo $root?>assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="<?php echo $root?>css/styles.css" rel="stylesheet" />
        <?php include('cookies.php'); ?>


        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
        <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

<style>
    .quote {
    color: rgba(0,0,0,.1);
    text-align: center;
    margin-bottom: 30px;
}

/*-------------------------------*/
/*    Carousel Fade Transition   */
/*-------------------------------*/

#fade-quote-carousel.carousel {
  padding-bottom: 60px;
}
#fade-quote-carousel.carousel .carousel-inner .item {
  opacity: 0;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
}
#fade-quote-carousel.carousel .carousel-inner .active {
  opacity: 1;
  -webkit-transition-property: opacity;
      -ms-transition-property: opacity;
          transition-property: opacity;
}
#fade-quote-carousel.carousel .carousel-indicators {
  bottom: 10px;
}
#fade-quote-carousel.carousel .carousel-indicators > li {
  background-color: #e84a64;
  border: none;
}
#fade-quote-carousel blockquote {
    text-align: center;
    border: none;
}
#fade-quote-carousel .profile-circle {
    width: 100px;
    height: 100px;
    margin: 0 auto;
    border-radius: 100px;
}


.pricing-card {
    flex-direction: column;
    min-width: 0;
    color: #000;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 1px solid #fff;
    border-radius: 6px;
    -webkit-box-shadow: 0px 0px 5px 0px rgb(249, 249, 250);
    -moz-box-shadow: 0px 0px 5px 0px rgba(212, 182, 212, 1);
    box-shadow: 0px 0px 5px 0px rgb(161, 163, 164)
}
        </style>
    </head>
    <body>

  
        
        <?php
            include 'includes/nav.php';
        ?>

        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder"><?php echo $product['name']?></h1>
                    <p class="lead fw-normal text-white-50 mb-0"><?php echo $headline ?></p>
                </div>
            </div>
        </header>
        <!-- Section-->
           <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                
                
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">Estás en: <a href="<?php echo $root?>"><?php echo $productPlural?></a></li>
                     <li class="breadcrumb-item"> <a href="<?php echo $root.$_GET['category'] ?>/"><?php echo $productPlural." ".$categoryTitle; ?></a></li>
                      <li class="breadcrumb-item"><?php echo $product['name'];?> </li>
        
                  </ol>
                    </nav>
                    
                    
                        
                 <script type="application/ld+json">
                {
                    "@context": "https://schema.org",
                    "@type": "BreadcrumbList",
                    "itemListElement": [{
                    "@type": "ListItem",
                    "position": 1,
                    "name": "<?php echo $productPlural?>",
                    "item": "<?php echo $root?>"
                      },{
                    "@type": "ListItem",
                    "position": 2,
                    "name": "<?php echo $productPlural." ".$categoryTitle; ?>",
                    "item": "<?php echo $root.$_GET['category']?>/"
                      },
                      {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "<?php echo $h1 ?>",
                         "item": "<?php echo $root.$_GET['category']."/".$_GET['asin']?>/"
                     }
                      
                  ]
                }
            </script>
                
                
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="<?php echo $product['image_url']?>" alt="<?php echo $product['name']?>" /></div>
                    <div class="col-md-6">
                        <?php   $title =  strlen($product['name']) > 70 ? substr($product['name'],0,70)."..." : $product['name'];?>
                        <div class="small mb-1">ASIN: <?php echo $product['asin']?></div>
                        <p class="display-5 fw-bolder"><?php echo $title ?></p>
                        <div class="fs-5 mb-5">
                            <span><?php echo $product['brand']?></span>
                        </div>
                        <p class="lead"><?php echo printProperties($product)?></p>
                        <div class="d-flex">
                            <a href="<?php echo $product['link'] ?>" rel="nofollow sponsored">
                                <button  class="btn btn-outline-dark btn btn-success" type="button" style="padding-left: 55px; padding-top:55px; padding-right:55px; padding-bottom:55px; font-size: 30px;">
                                    <i class="bi-cart-fill me-1"></i>
                                    Ver en Amazon
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

   <section class="py-5 bg-light" id="carousel">

    <?php

    $textSamples = array();
    $textSamples[] = "Compré este ".$productSing." de la marca ".$product['brand']." por solo ".$product['price']."€";
    $textSamples[] = "Compré este ".$productSing." de la marca ".$product['brand']." por solo ".$product['price']."€";
    $textSamples[] = "Compré este ".$productSing." de la marca ".$product['brand']." por solo ".$product['price']."€";
    $textSamples[] = "Compré este ".$productSing." de la marca ".$product['brand']." por solo ".$product['price']."€";
    $textSamples[] = "Compré este ".$productSing." de la marca ".$product['brand']." por solo ".$product['price']."€";
    $textSamples[] = "Compré este ".$productSing." de la marca ".$product['brand']." por solo ".$product['price']."€";
    $textSamples[] = "Compré este ".$productSing." de la marca ".$product['brand']." por solo ".$product['price']."€";
    $textSamples[] = "Compré este ".$productSing." de la marca ".$product['brand']." por solo ".$product['price']."€";
    $textSamples[] = "Compré este ".$productSing." de la marca ".$product['brand']." por solo ".$product['price']."€";
    $textSamples[] = "Compré este ".$productSing." de la marca ".$product['brand']." por solo ".$product['price']."€";


    $names = array();
    $names[0] = "Nombre1";
    $names[1] = "Nombre2";
    $names[2] = "Nombre3";
    $names[3] = "Nombre4";
    $names[4] = "Nombre5";
    $names[5] = "Nombre6";
    $names[6] = "Nombre7";
    $names[7] = "Nombre8";
    $names[8] = "Nombre9";
    $names[9] = "Nombre10";

    $surnames = array();
    $surnames[0] = "Apellido1";
    $surnames[1] = "Apellido2";
    $surnames[2] = "Apellido3";
    $surnames[3] = "Apellido4";
    $surnames[4] = "Apellido5";
    $surnames[5] = "Apellido6";
    $surnames[6] = "Apellido7";
    $surnames[7] = "Apellido8";
    $surnames[8] = "Apellido9";
    $surnames[9] = "Apellido10";

    $reviews = array();




    $texts = array();
    $numReviews = rand(3,5);
    $persons = array();
    $i=0;
    while($i < $numReviews)
    {
        $randomPerson = rand(1,10);
        if(!in_array($randomPerson, $persons))
        {
            $texts[] = $textSamples[$randomPerson];
            $persons[] = $randomPerson;
            $i++;
        }

    }



    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
                    <?php
                        $i = 0;
                        for($i; $i<$numReviews; $i++)
                        {
                            if($i===0)
                            {
                                echo '<li data-target="#fade-quote-carousel" data-slide-to="0" class="active"></li>';
                            }
                            else{
                                 echo '<li data-target="#fade-quote-carousel" data-slide-to="'.$i.'"></li>';
                            }
                           
                        }
                    ?>
                  </ol>
                  <!-- Carousel items -->
                  <div class="carousel-inner">
                    <?php
                        $i = 0;
                        for($i; $i<$numReviews; $i++)
                        {

                            $surname = $surnames[rand(0,9)];
                            $reviews[$i]['person'] = $names[$persons[$i]-1].' '.$surname;

                            if($i===0)
                            {

                                echo '<div class="active item">
                                    <img src="'.$root.'images/persona-'.$persons[$i].'.jpg" class="profile-circle" style="background-color: rgba(145,169,216,.2);"></img>
                                    <br/>
                                    <p style="text-align: center; vertical-align: middle;"><b>'.$names[$persons[$i]-1].' '.$surname.'</b> </p>
                                     <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <blockquote>
                                        <p>'.$texts[$i].'</p>
                                    </blockquote>
                                   
                                </div>';
                            }
                            else{
                                 echo '<div class="item">
                                    <img src="'.$root.'images/persona-'.$persons[$i].'.jpg" class="profile-circle" style="background-color: rgba(145,169,216,.2);"></img>
                                      <br/>
                                      <p style="text-align: center; vertical-align: middle;"><b>'.$names[$persons[$i]-1].' '.$surname.'</b> </p>
                                    <div class="d-flex justify-content-center small text-warning mb-2">
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                        <div class="bi-star-fill"></div>
                                    </div>
                                    <blockquote>
                                        <p>'.$texts[$i].'</p>
                                    </blockquote>

                                    
                                </div>';
                            }
                           
                        }
                    ?>
                  </div>
                </div>


                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"> <a  href="<?php echo $product['link'] ?>" rel="nofollow sponsored"><button style="padding-left: 55px; padding-top:55px; padding-right:55px; padding-bottom:55px; font-size: 30px;" type="button" class="btn btn-success">Ver más opiniones en Amazon</button></a></div>
                            </div>
            </div>                          
        </div>

    </div>  



</section>


<section class="py-5 bg-light">
    
 <div class="container px-4 px-lg-5 my-5">
<h2>Comparativa de <?php echo $productPlural?> </h2>
</div>

<div class="container mt-5">
    <div class="row">
         <?php
                $products = array();
                $products[] = $product;

                $sql= "SELECT * FROM ".$dbTable." WHERE category ='".$product['category']."' AND asin != '".$product['asin']."' ORDER by rand() limit 2";
                $result = mysqli_query($conn, $sql);
                 while($row=mysqli_fetch_array($result)) {
                    $products[] = $row;
                 }

                 foreach($products as $product){



                        echo '<div class="col-md-4">
                         <div class="pricing-card p-3 text-center py-5 mt-2">
                    <div class="images"><img src="'.$product['image_url'].'" width="150"></div>
                    <p class="mt-3"><b>'.substr($product['name'],0,40).'...</p></b><span class="d-block">'
                    .$product['brand'].'</span><a href="'.$root.$_GET['category'].'/'.strtolower($product['asin']).'/"><button class="btn btn-info shadow mt-4 px-5 rounded-pill" type="button">Ver '.$productSing.'</button></a>
                    <div class="mt-3">';
                    if(strlen($product['size'])>0){
                        echo '<span class="d-block"><i class="fa fa-check"></i>&nbsp;Talla: <b>'.$product['size'].'</b></span>';
                    }

                    if(strlen($product['height'])>0){
                        echo '<span class="d-block"><i class="fa fa-check"></i>&nbsp;Alto: <b>'.$product['height'].'</b></span>';
                    }

                     if(strlen($product['width'])>0){
                        echo '<span class="d-block"><i class="fa fa-check"></i>&nbsp;Ancho: <b>'.$product['width'].'</b></span>';
                     }

                     if(strlen($product['length'])>0){
                        echo '<span class="d-block"><i class="fa fa-check"></i>&nbsp;Largo: <b>'.$product['length'].'</b></span>';
                     }
                     if(strlen($product['color'])>0){
                        echo '<span class="d-block"><i class="fa fa-check"></i>&nbsp;Color: <b>'.$product['color'].'</b></span>';
                     }

                     echo ' <span class="d-block"><i class="fa fa-check"></i>&nbsp;Marca: <b>'.$product['brand'].'</b></span>
                     <span class="d-block"><i class="fa fa-check"></i>&nbsp;Precio aproximado: <b>'.$product['price'].'€</b></span>

                        <span class="text-left">&nbsp;Valoración final   <div class="d-flex justify-content-center small ">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div></span></div>
                                            </div>
                    </div>';

                }

        ?>

    </div>
</div>






</section>


        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Otros <?php echo $productPlural." ".$brand?></h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                

                <?php 
                    $sql = "SELECT asin, name, brand, image_url from ".$dbTable." where brand ='".$brand."'order by rand() LIMIT 4";
                    $result = mysqli_query($conn, $sql);

                    while($row=mysqli_fetch_array($result)) {

                        $title =  strlen($product['name']) > 70 ? substr($product['name'],0,70)."..." : $product['name'];

                        echo '
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="'.$row['image_url'].'" alt="'.$row['name'].'" />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <p class="fw-bolder">'.$title.'</p>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        '.$row['brand'].'
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-dark btn-success mt-auto" href="'.$root.$_GET['category'].'/'.strtolower($row['asin']).'/">Ver '.$productSing
                                    .'</a></div>
                                </div>
                            </div>
                        </div>';

                    }
                ?>
                   
                </div>
            </div>
        </section>




        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">Más <?php echo $productPlural." ".$categoryTitle?></h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                

                <?php 
                    $sql = "SELECT asin, name, brand, image_url from ".$dbTable." where category ='".$_GET['category']."'order by rand() LIMIT 4";
                    $result = mysqli_query($conn, $sql);

                    while($row=mysqli_fetch_array($result)) {

                        $title =  strlen($product['name']) > 70 ? substr($product['name'],0,70)."..." : $product['name'];

                        echo '
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="'.$row['image_url'].'" alt="'.$row['name'].'" />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <p class="fw-bolder">'.$title.'</p>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        '.$row['brand'].'
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-success btn-outline-dark mt-auto" href="'.$root.$_GET['category'].'/'.strtolower($row['asin']).'/">Ver '.$productSing.'</a></div>
                                </div>
                            </div>
                        </div>';

                    }
                ?>

                 <script type="application/ld+json">
                    {
                      "@context": "https://schema.org/",
                      "@type": "Product",
                      "name": "<?php echo $product['name']?>",
                      "image": [
                        "<?php echo $product['image_url']?>"
                       ],
                      "description": "<?php echo $productSing." ".$product['name']?>",
                      "sku": "<?php echo $product['asin']?>",
                      "gtin": "<?php echo $product['asin']?>",
                      "brand": {
                        "@type": "Brand",
                        "name": "<?php echo $product['brand']?>"
                      },
                      "review": [{
                        "@type": "Review",
                        "reviewRating": {
                          "@type": "Rating",
                          "ratingValue": "5",
                          "bestRating": "5"
                        },
                        "author": {
                          "@type": "Person",
                          "name": "Víctor Alonso"
                        }
                        }
                      <?php 
                      $i =0;
                      foreach($reviews as $review){
                        

                          echo ',
                          {
                            "@type": "Review",
                            "datePublished": "'.date('Y-m-d',strtotime("-1 days")).'",
                            "reviewBody": "'.$texts[$i].'",
                            "reviewRating": {
                              "@type": "Rating",
                              "ratingValue": "5",
                              "bestRating": "5",
                               "worstRating": "1"
                            },
                            "author": {
                              "@type": "Person",
                              "name": "'.$reviews[$i]['person'].'"
                            }
                          }';
                          $i++;
                      }
                      echo '],
                       "aggregateRating": {
                        "@type": "AggregateRating",
                        "ratingValue": "5",
                        "reviewCount": "'.($numReviews+1).'"
                      },'
                      ?>
                      "offers": {
                        "@type": "Offer",
                        "url": "<?php echo $product['link']?>",
                        "priceCurrency": "EUR",
                        "price": "<?php echo $product['price']?>",
                        "priceValidUntil": "2052-11-20",
                        "itemCondition": "https://schema.org/UsedCondition",
                        "availability": "https://schema.org/InStock"
                      }
                      
                    }
    </script>
                  
                   
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
        <script src="<?php echo $root?>js/scripts.js"></script>
    </body>
</html>

<?php

function printProperties($product)
{
    $properties = "<div>";
    if(strlen($product['size']) >0)
    {
        $properties = $properties."<p><b>Talla: </b>".$product['size']."</p>";
    }
    if(strlen($product['width']) >0)
    {
        $properties = $properties."<p><b>Ancho: </b>".$product['width']*2.54." cm.</p>";
    }
    if(strlen($product['length']) >0)
    {
        $properties = $properties."<p><b>Largo: </b>".$product['length']*2.54." cm.</p>";
    }
    if(strlen($product['height']) >0)
    {
        $properties = $properties."<p><b>Alto: </b>".$product['height']*2.54." cm.</p>";
    }
    if(strlen($product['color']) >0)
    {
        $properties = $properties."<p><b>Color: </b>".$product['color']."</p>";
    }

     $properties = $properties."</div>";
    return $properties;
}
