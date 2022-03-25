<?php

include_once "./students-data.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Data</title>
    <!--  Bootstrap CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row  my-5">


    <?php foreach ($students_data as $students): ?>
        <div class="col-md-3 my-1">

            <div class="card">
                <img style="height: 250px;" src="<?php echo $students['photo'] ?> " alt="" class="card-img">
                <div class="card-body" style="height: 250px">
                    <h4 style="font-size:16px;">Name:<?php echo $students['name']?> </h4>
                    <h6 style="font-size:16px;">Roll: <?php echo $students['Roll']?></h6>
                    <h6 style="font-size:16px;">Reg: <?php echo $students['Reg']?></h6>
                    <h6 style="font-size:16px;">Email: <?php echo $students['email']?></h6>
                    <h6>Address: <?php echo $students['address']?></h6>
                </div>
            </div>
        </div>


        <?php endforeach; ?>
    </div>
</div>























<!-- Bootstrap JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>