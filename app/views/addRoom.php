<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <form action="<?php echo "addR" ?>" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="file" name="image" class="form-control" id="exampleInputPassword1">
        </div>
        <select class="form-select" name="list1" id="myselect" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="single"> single</option>
            <option value="double"> double</option>
            <option value="suite"> suite</option>
        </select>
        <div class="box">
            <div class="suites">
                
            </div>
        </div>
        <div class="mb-3">
          <label  class="form-label">Number</label>
          <input type="number" name="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
          <label  class="form-label">Capacite</label>
          <input type="capacite" name="capacite" class="form-control" id="">
        </div>

        <div class="mb-3">
          <label  class="form-label">Price</label>
          <input type="number" name="price" class="form-control" id="">
        </div>
        
        <button type="submit" name="btnAdd" class="btn btn-primary">Submit</button>
    </form>

    <script src="/assets/js/scripts.js"></script>

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

</body>
</html>