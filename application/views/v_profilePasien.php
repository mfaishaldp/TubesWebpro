    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
                <a class="dropdown-item" href="<?= site_url('/c_profile/profilePasien') ?>">Profile</a>
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

    <div class="container p-50" style="padding-top:80px;">
        <div class="card text-center w-50 p-3 mx-auto" dispay:block >
            <div class="card-header">
                <h5 class="card-title">Profile</h5>
            </div>
            <div class="card-body text-centered">
                <div class="row">
                    <div class="col-3"> </div>
                    <div class="col-3 "><h6 class="card-title">Username : </h6></div>
                    <div class="col-3"><p class="card-text"><?= $profile->username?></p></p></div>
                    <div class="col-3"> </div>
                </div>
                <div class="row">
                    <div class="col-3"> </div>
                    <div class="col-3 "><h6 class="card-title">Nama : </h6></div>
                    <div class="col-3"><p class="card-text"><?= $profile->nama?></p></p></div>
                    <div class="col-3"> </div>
                </div>
                <div class="row">
                    <div class="col-3"> </div>
                    <div class="col-3 "><h6 class="card-title">Alamat : </h6></div>
                    <div class="col-3"><p class="card-text"><?= $profile->alamat?></p></p></div>
                    <div class="col-3"> </div>
                </div>
                <div class="row">
                    <div class="col-3"> </div>
                    <div class="col-3 "><h6 class="card-title">Saldo Anda :</h6></div>
                    <div class="col-3"><p class="card-text"><?= $profile->saldo?></p></p></div>
                    <div class="col-3"> </div>
                </div>
            </div>
            <div class="card-footer">
                <!-- <a href="//site_url('/c_profile/topUp') " class="btn btn-primary stretched-link">Top Up</a> -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#topUpModal">
                Top up
                </button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tarikSaldoModal">
                Tarik saldo
                </button>
                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapusAkunModal">
                Delete Account
                </button>
                <?php 
                    if (isset($error_message)){
                        echo "<br>";
                        echo $error_message;
                        echo "<br>";
                    }
                ?>
                <!-- <a href=" //site_url('/c_profile/tarikSaldo') " class="btn btn-primary stretched-link">Tarik Saldo</a> -->
            </div>
        </div>
    </div>

    <!-- Modal Top Up -->
    <div class="modal fade" id="topUpModal" tabindex="-1" role="dialog" aria-labelledby="topUpModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Top Up Saldo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url('/c_profile/topUp')?>" method="post">
                <div class="modal-body">
                    <!-- <form> -->
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Saldo anda:</label>
                            <input name="saldo" type="text" class="form-control" id="recipient-name" value="<?=$profile->saldo?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Jumlah Top Up:</label>
                            <input name="jumlah" type="number" class="form-control" id="message-text"></input>
                        </div>
                    <!-- </form> -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Top Up">
                    
                </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal Tarik Saldo -->
    <div class="modal fade" id="tarikSaldoModal" tabindex="-1" role="dialog" aria-labelledby="tarikSaldoModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Tarik Saldo</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url('/c_profile/tarikSaldo')?>" method="post">
                <div class="modal-body">
                    <!--  -->
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Saldo anda:</label>
                            <input name="saldo" type="number" class="form-control" id="recipient-name" value="<?=$profile->saldo?>" readonly>
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Jumlah Penarikan:</label>
                            <input name="jumlah" type="number" class="form-control" id="message-text"></input>
                        </div>
                    <!--  -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" value="Tarik Saldo">
                </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="hapusAkunModal" tabindex="-1" role="dialog" aria-labelledby="hapusAkunModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Delete Account</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= site_url('/c_profile/DeleteAkun')?>" method="post">
                <div class="modal-body text-centered">
                    <!--  -->
                        <h6 class="card-tittle">Are you sure want to delete your account?</h6>
                    <!--  -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-danger" value="Delete">
                </div>
                </form>
            </div>
        </div>
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
   

    