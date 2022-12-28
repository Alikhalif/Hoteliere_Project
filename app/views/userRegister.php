<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .bg{
            background-image: url(img/a1.jpg);
            /* background-position:  center; */
            background-size: 400px;
            /* height: 400px; */
            background-repeat: no-repeat;
        }
        /* .container{
            margin-top: 5%;
            border: 2px solid gray;

        } */
    </style>
</head>
<body>
    <div class="container w-75 bg-white mt-5 rounded shadow">
        <div class="row ">
            <div class="col bg d-none d-lg-block">
                
            </div>
            <div class="col">
                <!-- <div class="text-end">
                    <img src="img/a1.jpg" width="48" alt="">
                </div> -->

                <h2 class="fw-bold text-center py-5">Register</h2>

                <form action="<?php echo "addUser" ?>" method="POST">
                    <div class="mb-4">
                        <label for="name" class="form-label">Name</label>
                        <input type="name" class="form-control" name="nom">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password">
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="register" class="btn btn-primary">Register</button>
                    </div>
                    <div class="my-3">
                        <span>You do not have an account ? <a href="#">Login</a></span><br>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>