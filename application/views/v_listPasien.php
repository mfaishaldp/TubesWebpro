
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


    
    <div class="container p-50" style="padding-top:150px;">
        <div class="card text-center w-80 p-3 mx-auto" dispay:block >
            <div class="card-header">
                <h5 class="card-title">Edit Profile</h5>
            </div>
            <div class="card-body text-centered">
            <?php if($jmlOrder == 0) {?>
            <h6 class="card-title">Tidak ada order</h6>
            <?php }else{ ?>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID Order</th>
                        <th scope="col">Nama Pasien</th>
                        <th scope="col">Tanggal Sunat</th>
                        <th scope="col">Tipe Sunat</th>
                        <th scope="col">Biaya Sunat</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <?php 
                    foreach ($order as $o):
                ?>
                <tbody>
                    <tr>
                        <td><?= $o->idOrder?></td>
                        <td><?= $o->nama?></td>
                        <td><?= $o->tglSunat?></td>
                        <td><?= $o->tipeSunat?></td>
                        <td><?= $o->harga?></td>
                        <td><?= $o->status?></td>
                    </tr>
                </tbody>
            </table>
            <?php endforeach; }?>
            </div>
            <div class="card-footer">
            </div>
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
    