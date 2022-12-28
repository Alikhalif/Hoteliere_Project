<?php
    // require_once(CONTROLLERS.'/ResponsableController.php');
    // session_start();
    // die(print_r($_SESSION['admin']));
    // if(isset($_SESSION['admin'])){ ?>
        

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

  </head>
  <body>
    

    <!-- <?php include(VIEWS.'include'.DS.'header.php'); ?> -->

    <h1 class="text-center my-5 py-3">View All Rooms</h1>
    <div class="container text-center">
        <div class="row">
            <div class="col">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">number</th>
                    <th scope="col">type</th>
                    <th scope="col">capacite</th>
                    <th scope="col">price</th>
                    <th scope="col">Edit</th>
                    <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        // $objT = new ProductController();
                        // $data = $objT->getAll();

                        foreach($myrooms as $room){
                    ?>
                    <tr>
                        <th scope="row"><?= $room['idR'] ?></th>
                        <td><?= $room['numberR'] ?></td>
                        <td><?= $room['typeR'] ?></td>
                        <td><?= $room['capaciteR'] ?></td>
                        <td><?= $room['priceR'] ?>$</td>
                        <td><a href="" name="edit" class="btn btn-primary" tabindex="-1" role="button" aria-disabled="true">Edit</a></td>
                        <td>
                            <a href="<?php echo 'deleteR/'.$room['idR'] ?>" name="delet" class="btn btn-danger" tabindex="-1" role="button" aria-disabled="true">Delete</a>
                        </td>
                        <!-- <?php echo 'getProductC/'.$room['idR'] ?> -->
                    </tr>

                    <?php } ?>
                    
                </tbody>
                </table>
            </div>
        </div>
    </div>

    


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>

<?php
    // }else{
    //     header('Location: '.BURL.'Responsable/Login');
    // }
?>