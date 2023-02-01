<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/style.css">
    <title>Document</title>
</head>
<body>
    <?php include(VIEWS.'include/header.php') ?>
    <!-- //////////////// -->
    <div class="row grid justify-content-md-center" style="--bs-columns: 3;">
        <?php foreach($myrooms as $room){ ?>
            <div class="col-md-3">
                <!-- <form action="http://pestana.com/room/getRoomR2/<?php echo $room['idR'] ?>" method="POST"> -->
                    
                        <div class="card box-shadow">
                            <img src="/uploads/<?php echo $room['imageR'] ?>" class="card-img-top" alt="image">
                            <div class="card-body">
                                <p><span class="price mr-2">$<?php echo $room['priceR'] ?></span> <span class="per">per night</span></p>
                                <ul class="list">
                                    <li><span>capacite:</span> <?php echo $room['capaciteR'] ?> Persons</li>
                                    <li><span>type:</span> <?php echo $room['typeR'] ?></li>
                                    <li><span>type_suits:</span> <?php echo $room['type_suitsR'] ?></li>
                                    <li><span>nomber:</span><?php echo $room['numberR'] ?></li>
                                </ul>
                                <!-- <a href="<?php echo 'getRoomR2/'.$room['idR'] ?>" class="btn btn-primary">book now</a> -->
                                <a href="<?= BURL.'Room/reserv'?>" class="btn btn-primary">book now</a>

                            </div>
                        </div>
                    
                <!-- </form> -->
            </div>
        <?php } ?>
    </div>
    <!--footer--->
    <?php include(VIEWS.'include/footer.php'); ?>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>