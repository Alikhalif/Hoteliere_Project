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

    <!-- //////////////// -->
    <!-- <?php var_dump($myrooms) ?> -->
    <div class="row">
        <?php foreach($myrooms as $room){ ?>
            <!-- <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                <div class="room">
                    <a href="rooms-single.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(/uploads/<?php echo $room['imageR'] ?>); background-size: cover;">
                        <img src="/uploads/<?php echo $room['imageR'] ?>" alt="" class="img_room">
                        <div class="icon d-flex justify-content-center align-items-center">
                            <span class="icon-search2"></span>
                        </div>
                    </a>
                    <div class="text p-3 text-center">
                        <h3 class="mb-3"><a href="rooms-single.html">Luxury Room</a></h3>
                        <p><span class="price mr-2">$<?php echo $room['priceR'] ?></span> <span class="per">per night</span></p>
                        <ul class="list">
                            <li><span>capacite:</span> <?php echo $room['capaciteR'] ?> Persons</li>
                            <li><span>type:</span> <?php echo $room['typeR'] ?></li>
                            <li><span>type_suits:</span> <?php echo $room['type_suitsR'] ?></li>
                            <li><span>nomber:</span><?php echo $room['numberR'] ?></li>
                        </ul>
                        <hr>
                        <p class="pt-1"><a href="room-single.html" class="btn-custom">Book Now <span class="icon-long-arrow-right"></span></a></p>
                    </div>
                </div>
            </div> -->

            <div class="col-md-3">
                <div class="card" style="width: 18rem;">
                    <img src="/uploads/<?php echo $room['imageR'] ?>" class="card-img-top" alt="image">
                    <div class="card-body">
                        <p><span class="price mr-2">$<?php echo $room['priceR'] ?></span> <span class="per">per night</span></p>
                        <ul class="list">
                            <li><span>capacite:</span> <?php echo $room['capaciteR'] ?> Persons</li>
                            <li><span>type:</span> <?php echo $room['typeR'] ?></li>
                            <li><span>type_suits:</span> <?php echo $room['type_suitsR'] ?></li>
                            <li><span>nomber:</span><?php echo $room['numberR'] ?></li>
                        </ul>
                        <a href="" class="btn btn-primary">book now</a>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>