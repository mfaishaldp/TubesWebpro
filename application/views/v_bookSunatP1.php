    
<div class="navigation">
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
                    <a class="nav-link" href="#">List Book Sunat</a>
                </li>
                
                
            </ul>
        </div>
    </nav>
</div>

    <form action="<?php echo site_url('c_bookSunatP/pilihDokter'); ?>" method="post">
        <div class="container p-50" style="padding-top:130px;padding-bottom:100px;">
            <div class="card text-center w-50 p-3 mx-auto" dispay:block >
                <div class="card-header">
                    <h5 class="card-title">BOOK SUNAT</h5>
                </div>
                <div class="card-body text-centered">
                    <div class="row">
                        <div class="col-3"> </div>
                        <div class="col-6">
                        <h6 class="card-title">Jenis Sunat</h6>
                            <div class="form-group dropdown">
                                <select name="pilSunat" id="pilSunat">
                                    <div class="dropdown-menu">
                                        <?php foreach ($tipeSunat as $ts):  ?>
                                        <option class="dropdown-item" value="<?php echo $ts->tipeSunat; ?>" name="tipeSunat"><?php echo $ts->tipeSunat; ?></option>
                                        <?php endforeach ?>
                                    </div>
                                </select>
                            </div>
                        </div>
                        <div class="col-3"> </div>
                    </div>
                </div>
                <div class="card-footer">
                    <!-- <a href="//site_url('/c_profile/topUp') " class="btn btn-primary stretched-link">Top Up</a> -->
                    
                    <input class="btn btn-primary" type="submit" value="Next">
                    <!-- <a href=" //site_url('/c_profile/tarikSaldo') " class="btn btn-primary stretched-link">Tarik Saldo</a> -->
                </div>
            </div>
        </div>
    </form>

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