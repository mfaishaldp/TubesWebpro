
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <ul class="navbar-nav">
            <li class="nav-item ">
                <a class="nav-link" href="<?= site_url('/c_homeDokter') ?>">Home <span class="sr-only">(current)</span></a>
            </li>
        </ul>
        <div class="dropdown">
            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Profile
            </a>

            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                <a class="dropdown-item" href="<?= site_url('/c_profile/profileDokter') ?>">Profile</a>
                <a class="dropdown-item" href="<?= site_url('/c_editProfileDokter') ?>">Edit Profile</a>
                <a class="dropdown-item" href="<?php echo base_url() ?>">Logout</a>
            </div>
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav" >
            <ul class="navbar-nav" style="padding-left:10px;">
                <li class="nav-item">
                    <a class="nav-link" href="<?= site_url('/c_listPasien')?>">List Pasien</a>
                </li>
                
            </ul>
        </div>
    </nav>

    
    <div class="container p-50" style="padding-top:80px;">
        <div class="card text-center w-50 p-3 mx-auto" dispay:block >
            <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
            </div>
            <form action="<?= site_url("/c_editProfileDokter/editProfile")?>" method="post">
            <div class="card-body text-centered">
                <div class="row form-group">
                    <!-- <div class="col-3"> </div> -->
                    <div class="col-4 "><h6 class="card-title">Username : </h6></div>
                    <input name="username" type="text" class="form-control col-8" value="<?= $profile->username?>" disabled>
                    <!-- <div class="col-3"> <br></div> -->
                </div>
                <br>
                <div class="row form-group">
                    <!-- <div class="col-3"> </div> -->
                    <div class="col-4"><h6 class="card-title">Name : </h6></div>
                    <input name="nama" type="text" class="form-control col-8" value="<?= $profile->nama?>" required>
                    <!-- <div class="col-3"> <br></div> -->
                </div>
                <br>
                <div class="row form-group">
                    <!-- <div class="col-3"> </div> -->
                    <div class="col-4"><h6 class="card-title">Alamat</h6></div>
                    <input name="alamat" type="text" class="form-control col-8" value="<?= $profile->alamat?>" required>
                    <!-- <div class="col-3"><br> </div> -->
                </div>
                <br>
                <div class="row form-group">
                    <!-- <div class="col-3"> </div> -->
                    <div class="col-4"><h6 class="card-title">Spesialis Sunat</h6></div>
                    <input name="alamat" type="text" class="form-control col-8" value="<?= $profile->tipeSunat?>" disabled>
                    <!-- <div class="col-3"><br> </div> -->
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-success"value="Submit">
            </div>
            </form>
        </div>
    </div>


<!-- isi disini -->

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
    