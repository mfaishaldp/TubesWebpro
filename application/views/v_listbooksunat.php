
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
    
    <div class="container p-50" style="padding-top:80px; padding-bottom:58px;">
        <div class="card text-center w-100 p-3 mx-auto" dispay:block >
            <div class="card-header">
                <h5 class="card-title">List Book Sunat</h5>
            </div>
            <div class="card-body text-centered">
                <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">ID Order</th>
                        <th scope="col">Nama Dokter</th>
                        <th scope="col">Tanggal Sunat</th>
                        <th scope="col">Tipe Sunat</th>
                        <th scope="col">Biaya Sunat</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($order as $usd): ?> 
		            <tr>
                        <td><?php echo $usd->idOrder?></td>
                        <td><?php echo $usd->nama ?></td> 
                        <td><?php echo $usd->tglSunat ?></td>
                        <td><?php echo $usd->tipeSunat ?></td>
                        <td><?php echo $usd->harga ?></td>
                        <td><?php echo $usd->status ?></td>
                        <td>
                        <?php if($usd->status == 'belum selesai') {?>
                        <form action="<?= site_url('/c_listbooksunat/selesaiPesanan') ?>" method="post">
                            <button type="submit" class="btn btn-success " name="idOrder" value="<?= $usd->idOrder?>">Selesai</button>
                            
                        </form>
                        <?php }?>
                        <form action="<?= site_url('/c_listbooksunat/deletePesanan') ?>" method="post">
                            <button type="submit" class="btn btn-danger" name="idOrder" value="<?= $usd->idOrder?>">Delete</button>
                        </form>
                        </td>
                    </tr>
                    <?php endforeach ?>
                    </tbody>
            </table>
            </div>
        </div>
    </div>


    <div class="card text-center ">
        <div class="card-header" style="padding:10px;background:#696969;">
            
        </div>
        <div class="card-body" style="padding:10px;">
            <h6 class="card-title">CONTACT US</h6>
            <p class="card-text">021-58293273</p>
        </div>
        <div class="card-footer" style="padding:10px;background:#696969;">
        </div>
    </div>
   

    