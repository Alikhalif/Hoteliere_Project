<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GESTION DES DESTINATION</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
     integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" 
     crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css">
   

</head>
<body>
<section class="vh-100" style="background-color: rgb(133, 88, 88);">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem; border: none;">
          <div class="row g-0">
            
            <div class=" d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">
                <form action="<?= BURL.'admin/editroom/'.$room['idR'] ?>" method="POST" enctype="multipart/form-data">
                <!-- <?php include "./views/includes/alerts.php" ?> -->
                  <div class="form-outline mb-2">
                    <input  type="file" name="image" class="form-control" id="form2Example17" placeholder="image">
                  </div>

                  <div class="form-outline mb-2">
                    <input value="<?= $room['numberR'] ?>" type="number" name="number" class="form-control" id="form2Example27" aria-describedby="emailHelp" placeholder="number">
                  </div>

                  <div class="form-outline mb-2">
                    <input value="<?= $room['priceR'] ?>" type="number" name="price" class="form-control" id="form2Example27" placeholder="Price">
                  </div>

                  <div class="form-outlin mb-2">
                    <input value="<?= $room['capaciteR'] ?>" type="number" name="capacite" class="form-control" placeholder="Capacity" id="">
                  </div>

                  <div class="form-outline mb-2">
                    <select value="<?= $room['typeR'] ?>" class="form-select" name="list1" id="myselect" aria-label="Default select example">
                        <option value="" selected>Open this select menu</option>
                        <option value="single"> single</option>
                        <option value="double"> double</option>
                        <option value="suite"> suite</option>
                    </select>
                  </div>
                  <div class="box">
                    <div class="suites">
                        
                    </div>
                   </div>

                  
                   <input value="<?= $room['idR'] ?>" type="hidden" name="idRoom" class="form-control">
                  <div class="pt-1 mb-2">
                    <button type="submit" name="btnEdit" class="btn btn-dark  btn-block addd"  style="background-color: rgb(133, 88, 88)">Edit</button>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="/assets/js/suit_add.js"></script>
</section>