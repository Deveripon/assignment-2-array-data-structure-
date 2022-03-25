 <?php

 include_once "./product-data.php"
 ?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ecommerce-product data</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- bootstrap icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

</head>
<body>
    
<div class="container">
    <div class="row my-5">

<?php foreach($products_data as $products): ?>

        <div class="col-md-3 my-2">
            <div class="card shadow">
                <img style="height: 200px;object-fit:cover;" src=" <?php echo $products['p_photo'] ?>" alt="" class="card-img">
             <div class="card-body py-2 my-3">
                      <h4 style="font-size:16px;font-weight:600;" class="card-title"><?php echo $products['p_name'] ?></h4>
                      <h6 style="font-size:12px;font-weight:300;" class="product-desc"><?php echo $products['p_desc'] ?></h6>
                      <h5 style="font-size:16px;font-weight:400;color:#c33;" class="price">Reguler Price <i class="bi bi-currency-dollar"></i> <?php echo $products['p_price'] ?></h5>
                      <h5 style="font-size:16px;font-weight:400;color:#c33;" class="sale-price"> Sale Price <i class="bi bi-currency-dollar"></i><?php echo $products['p_offer_price'] ?></h5>

                     <div class="grid">
                     <button class="btn btn-danger  ">Buy Now</button>
                     <button class="btn btn-warning ">Add To Cart</button>
                     </div>
             </div>
            </div>
            </div>




            <?php endforeach; ?>      
        </div>
    </div>
</div>













<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>