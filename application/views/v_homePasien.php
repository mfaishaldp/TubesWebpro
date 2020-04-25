    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="<?= site_url('/c_homePasien') ?>">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profile
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="<?= site_url('/c_profile/profilePasien')?>">Profile</a>
                <a class="dropdown-item" href="<?= site_url('/c_editProfilePasien') ?>">Edit Profile</a>
                <a class="dropdown-item" href="<?php echo base_url() ?>">Logout</a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav" style="padding-left:10px;">
                
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('/c_listbooksunat') ?>">List Book Sunat</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('/c_bookSunatP') ?>">Book Sunat</a>
                </li>
                
            </ul>
        </div>
    </nav>





    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="col-md-12" style="padding:40px;background:#808080;">
                    <img src="<?php echo base_url('assets/img/icip.png')?>" class="d-block w-100" alt="..." style="width:350px;height:480px;">
                </div>
            </div>
            <div class="carousel-item">
                <div class="col-md-12" style="padding:40px;background:#808080;">
                    <img src="<?php echo base_url('assets/img/slidehome.png')?>" class="d-block w-100" alt="..." style="width:300px;height:500px;">
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>


    <div class="card text-center fixed-bottom">
        <div class="card-header" style="padding:10px;background:#696969;">
            
        </div>
        <div class="card-body" style="padding:10px;">
            <h6 class="card-title">CONTACT US</h6>
            <p class="card-text">021-58293273</p>
        </div>
        <div class="card-footer" style="padding:10px;background:#696969;">
        </div>
    </div>
   

    