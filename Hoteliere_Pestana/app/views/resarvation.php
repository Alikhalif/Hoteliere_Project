
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
    <!-- <main> -->
    <?php include(VIEWS.'include/header.php') ?>
    <main class="reserve ">
        <section class="book">
            <form action="<?= BURL.'room/searchRoom' ?>" method="POST">
                <div class="container flex">
                    <div class="input grid">
                        <div class="box">
                            <label>Check-in</label>
                            <input type="date" name="dated" id="dated" placeholder="Check-in-Date" required>
                        </div>
                        <div class="box">
                            <label>Check-out</label>
                            <input type="date" name="datef" id="datef" placeholder="Check-out-Date" required>
                        </div>
                        <div class="box">
                            <label>Adults</label>
                            <select name="list1" id="myselect">
                                <option value="" selected>select type</option>
                                <option value="single">Lit single</option>
                                <option value="double">Lit double</option>
                                <option value="suite">Lit suite</option>
                            </select>
                        </div>
                        <div class="box">
                            <div class="suites">
                                
                            </div>
                        </div>
                        
                        <!-- <div class="box">
                            <label>Children</label>
                            <input type="number" placeholder="0">
                        </div> -->
                    </div>
                    <div class="search ">
                        <button class="srch" name="search" type="submit" value="SEARCH" >SEARCH</button> 
                    </div>
                </div>
            </form>
            
        </section>
        
        <section class="">
            <div class="row gap-2 justify-content-md-center">
                
                <?php if(isset($roomres) ){ 
                    if(!empty($roomres)){
                    ?>

                    <?php foreach($roomres as $res){ ?>
                
                    <?php if($res['typeR'] == 'suite'){ ?>
                        <div class="col-md-3">
                            <form class="d-flex align-items-center justify-content-center" action="http://pestana.com/room/getRoomR/<?php echo $res['idR'] ?>" method="POST">
                                <div class="card" style="width: 18rem;">
                                    <img src="/uploads/<?php echo $res['imageR'] ?>" class="card-img-top" alt="image">
                                    <div class="card-body">
                                        <p><span class="price mr-2">$<?php echo $res['priceR'] ?></span> <span class="per">per night</span></p>
                                        <ul class="list">
                                            <li><span>capacite:</span> <?php echo $res['capaciteR'] ?> Persons</li>
                                            <li><span>type:</span> <?php echo $res['typeR'] ?></li>
                                            <li><span>type_suits:</span> <?php echo $res['type_suitsR'] ?></li>
                                            <li><span>nomber:</span><?php echo $res['numberR'] ?></li>
                                        </ul>
                                        <input type="hidden" value="<?php echo $res["idR"]; ?>">
                                        <!-- <a href="<?php echo 'getRoomR/'.$res['idR'] ?>" class="btn btn-primary">book now</a> -->
                                        <button  class="btn btn-primary" type="submit" name="booking">book now</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    <?php }else if($res['typeR'] == 'single' || $res['typeR'] == 'double'){ ?>
                        <div class="col-md-3 ">
                            <form class="d-flex align-items-center justify-content-center" action="<?php echo 'bookRoom' ?>" method="POST">
                                
                                <div class="card" style="width: 18rem;">
                                    <img src="/uploads/<?php echo $res['imageR'] ?>" name="imgR" class="card-img-top" alt="image">
                                    <div class="card-body">
                                        <p><span class="price mr-2">$<?php echo $res['priceR'] ?></span> <span class="per">per night</span></p>
                                        <ul class="list">
                                            <li><span>capacite:</span> <?php echo $res['capaciteR'] ?> Persons</li>
                                            <li><span>type:</span> <?php echo $res['typeR'] ?></li>
                                            <li><span>type_suits:</span> <?php echo $res['type_suitsR'] ?></li>
                                            <li><span>nomber:</span><?php echo $res['numberR'] ?></li>
                                        </ul>
                                        <input type="text" name='idR' placeholder="id user" value="<?= $res['idR']  ?>" style="display:none;">
                                        <button type="submit" name="book" class="btn btn-primary">Book Now</button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    <?php } ?>
                <?php } ?>
                <?php }else{?>
                    <p class="text-center">Cette salle est actuellement pleine !</p>
                <?php } ?>
                    
                <?php } ?>
            </div>
        </section>
        <!--footer--->
        <?php include(VIEWS.'include/footer.php'); ?>
    </main>

        

        
    
        <script>
            var date = new Date();
            var tdate = date.getDate();
            console.log(tdate);

            var month = date.getMonth() + 1;

            if(tdate < 10){
                tdate = '0' + tdate;
            }
            if(month < 10){
                month = '0' + month;
            }
            var year = date.getUTCFullYear();
            var minDate = year + "-" + month + "-" +tdate;
            document.getElementById("dated").setAttribute('min',minDate);
            document.getElementById("datef").setAttribute('min',minDate);

            
            document.querySelector(".srch").addEventListener("click", function() {
                window.scroll({
                    top: 500, 
                    left: 0, 
                    behavior: 'smooth' 
                });
            });

            var menulist = document.getElementById('menulist');
            menulist.style.maxHeight = "0px";
    
            function menutoggle(){
                if(menulist.style.maxHeight == "0px"){
                    menulist.style.maxHeight = "100vh";
                }else{
                    menulist.style.maxHeight = "0px"
                }
            }


            

        </script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="/assets/js/scripts.js"></script>
        
    <!-- </main> -->

    
    
</body>
</html>