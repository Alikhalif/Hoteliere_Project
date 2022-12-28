
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
    <main>
        <header>
            <div class="content flex_space">
                <!-- <video autoplay loop muted class="back-video">
                    <source src="img/VDHotel.mp4" type="video/mp4">
                </video> -->
                <!-- <div class="content flex_space">
                    <img src="img/imageHotel.jpg" alt="">
                </div> -->
    
                <div class="logo">
                    logo
                </div>
                <div class="navlinks">
                    <ul id="menulist">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">about</a></li>
                        <li><a href="#">rooms</a></li>
                        <li><a href="#">contact</a></li>
                    </ul>
                    <i class="ri-menu-line" onclick="menutoggle()"></i>
                </div>
            </div>
            
        </header>
    
        <section class="book">
            <div class="container flex">
                <div class="input grid">
                    <div class="box">
                        <label>Check-in</label>
                        <input type="date" id="dated" placeholder="Check-in-Date">
                    </div>
                    <div class="box">
                        <label>Check-out</label>
                        <input type="date" id="datef" placeholder="Check-out-Date">
                    </div>
                    <div class="box">
                        <label>Adults</label>
                        <select name="" id="myselect">
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
                <div class="search">
                    <button class="srch" type="submit" value="SEARCH" >SEARCH</button> 
                </div>
            </div>
        </section>

        <section class="about top" id="about">
            <div class="container flex">
                <div class="left">
                    <div class="img">
                        <img src="/assets/img/a1.jpg" alt="" class="image1">
                    </div>
                </div>
                <div class="right">
                    <div class="heading">
                        <h2>Welcome to Pestana Hotel</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis tenetur molestiae aut veniam saepe maxime, cumque numquam quo! Quam optio nisi laboriosam ratione maiores dolores laudantium tempora officiis alias voluptates.
                            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorum porro animi quibusdam nesciunt nisi culpa rerum facere sit, incidunt eveniet? Aliquid quas repellat eum magnam atque unde eaque enim nihil.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores, tempora neque iste illum inventore ut explicabo sint dolor voluptate repudiandae quasi cum animi molestiae quo commodi. Molestiae fugiat modi amet.
                        </p>

                    </div>
                </div>
            </div>
        </section>

        <section class="rooms">
            <div class="container top">
                <div class="heading">
                    <h1>EXPOLRE</h1>
                    <h2>Our Rooms</h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolore a eos laboriosam odit neque velit soluta, facere aspernatur cum, deserunt magni quis, veniam veritatis ipsa. Ducimus dignissimos aperiam amet modi.</p>

                </div>

                <!-- <div class="content mtop">
                    <div class="items">
                        <div class="image">
                            <img src="img/r2.jpg" alt="">
                        </div>
                        <div class="text">
                            <h2>Suporior Rooms</h2>
                            <div class="button flex">
                                <button class="primary-btn">BOOK NOW</button>
                                <h3>$250 <span><br> Per Night</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="items">
                        <div class="image">
                            <img src="img/r2.jpg" alt="">
                        </div>
                        <div class="text">
                            <h2>Suporior Rooms</h2>
                            <div class="button flex">
                                <button class="primary-btn">BOOK NOW</button>
                                <h3>$250 <span><br> Per Night</span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="items">
                        <div class="image">
                            <img src="img/r2.jpg" alt="">
                        </div>
                        <div class="text">
                            <h2>Suporior Rooms</h2>
                            <div class="button flex">
                                <button class="primary-btn">BOOK NOW</button>
                                <h3>$250 <span><br> Per Night</span></h3>
                            </div>
                        </div>
                    </div>

                </div> -->

                <!-- //////////////// -->
                <?php var_dump($myrooms) ?>
                <div class="row">
                    <?php foreach($myrooms as $room){ ?>

                        <div class="col-sm col-md-6 col-lg-4 ftco-animate">
                            <div class="room">
                                <a href="rooms-single.html" class="img d-flex justify-content-center align-items-center" style="background-image: url(/uploads/<?php echo $room['imageR'] ?>); background-size: cover;">
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
                        </div>
                    <?php } ?>
                </div>

                <!-- /////////////////// -->
            </div>
            <div class="col-lg-12 text-center mt-5">
                <a href="" class="btn btn-sm btn-outline-dark rounded-0">More Rooms >></a>
            </div>
        </section>

        <!--footer--->
    <section id="contact">
        <div class="footer">
          <div class="mainf">
            <div class="listf">
              <h4>Quick Links</h4>
              <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Tours</a></li>
              </ul>
            </div>
  
            <div class="listf">
              <h4>Support</h4>
              <ul>
                <li><a href="#">About us</a></li>
                <li><a href="#">Terms & Conditions</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Rooms</a></li>
              </ul>
            </div>
  
            <div class="listf">
              <h4>Contact Info</h4>
              <ul>
                <li><a href="#">98 West 21th Street</a></li>
                <li><a href="#">New York NY 10016</a></li>
                <li><a href="#">+(123)-123-1234</a></li>
                <li><a href="#">info@pestana.com</a></li>
                <li><a href="#">+(123)-123-1234</a></li>
              </ul>
            </div>
  
            <div class="listf">
              <h4>Connect</h4>
              <div class="social">
                  <a href="https://www.facebook.com/YouCodeSchool/"><i class="ri-facebook-fill"></i></a>
                  <a href="https://www.instagram.com/youcodeschool/"><i class="ri-instagram-fill"></i></a>
                  <a href="https://twitter.com/YouCode18"><i class="ri-twitter-fill"></i></a>
                  <a href="https://www.linkedin.com/company/youcode-maroc/"><i class="ri-linkedin-fill"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="end-text">
          <p>Copyright ©2022 All rights reserved | Pestana</p>
        </div>
      </section>

        
    
        <script>
            var menulist = document.getElementById('menulist');
            menulist.style.maxHeight = "0px";
    
            function menutoggle(){
                if(menulist.style.maxHeight == "0px"){
                    menulist.style.maxHeight = "100vh";
                }else{
                    menulist.style.maxHeight = "0px"
                }
            }


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

        </script>
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="/assets/js/scripts.js"></script>
        
    </main>

    
    
</body>
</html>