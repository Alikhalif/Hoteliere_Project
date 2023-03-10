<?php if(isset($_SESSION['user'])){ ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <div class="logo">
                <a href="#" id="logo"><img src="/assets/img/pestan_logo.svg.png" alt="logo" width="70px" height="40"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                   
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BURL.'Home/index' ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BURL.'Room/list' ?>">Rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BURL.'Room/reserv' ?>">Reservation</a>
                    </li>
                    <!-- <li class="nav-item" style="background-color: rgb(133, 88, 88)">
                        
                    </li> -->
                </ul>
                <a class="btn btn-primary" href="<?= BURL.'Room/profile' ?>">Your profile</a>
                <a class="btn btn-primary" style="background-color: rgb(133, 88, 88);" href="<?= BURL.'Login/logout' ?>">Logout</a>
            </div>
        </div>
    </nav>

    <!-- <header>
        <div class="content flex_space">
            <div class="logo">
                <a href="#" id="logo"><img src="/assets/img/logo_pestana2.png" alt="logo" width="120px" height="120"></a>
            </div>
            <div class="navlinks">
                <ul id="menulist">
                    <li><a href="<?= BURL.'Home/index' ?>">Home</a></li>
                    <li><a href="">about</a></li>
                    <li><a href="<?= BURL.'Room/list' ?>">rooms</a></li>
                    <li><a href="<?= BURL.'Room/reserv' ?>">reservation</a></li>
                    <li><a href="<?= BURL.'Login/logout' ?>">Logout</a></li>
                </ul>
                <i class="ri-menu-line" onclick="menutoggle()"></i>
            </div>
        </div>
    </header> -->

<?php }else{ ?>
    <nav class="navbar navbar-expand-lg bg-body-tertiary sticky-top">
        <div class="container">
            <!-- <a class="navbar-brand" href="#">Navbar</a> -->
            <div class="logo">
                <a href="#" id="logo"><img src="/assets/img/pestan_logo.svg.png" alt="logo" width="70px" height="40"></a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    
                    
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BURL.'Home/index' ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BURL.'Room/list' ?>">rooms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= BURL.'Room/reserv' ?>">reservation</a>
                    </li>
                </ul>
                <a class="btn btn-primary ms-3" href="<?= BURL.'Login/register' ?>">Sign Up</a>
                <a class="btn btn-primary ms-3" href="<?= BURL.'Login/user' ?>">Sign In</a>
            </div>
        </div>
    </nav>

    <!-- <header>
        <div class="content flex_space">
            <div class="logo">
                <a href="#" class="logo"><img src="/assets/img/logo_pestana2.png" alt="logo" width="120px" height="120"></a>
            </div>
            <div class="navlinks">
                <ul id="menulist">
                    <li><a href="<?= BURL.'Home/index' ?>">Home</a></li>
                    <li><a href="">about</a></li>
                    <li><a href="<?= BURL.'Room/list' ?>">rooms</a></li>
                    <li><a href="<?= BURL.'Room/reserv' ?>">reservation</a></li>
                    <li><a href="<?= BURL.'Login/register' ?>">Sign Up</a></li>
                    <li><a href="<?= BURL.'Login/user' ?>">Sign In</a></li>
                </ul>
                <i class="ri-menu-line" onclick="menutoggle()"></i>
            </div>
        </div>
    </header> -->
<?php } ?>