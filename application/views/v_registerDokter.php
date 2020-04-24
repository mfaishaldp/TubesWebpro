    
<div class="navigation">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="<?php echo base_url() ?>">
            <img src="<?php echo base_url('assets/img/home.png') ?>" class="rounded" alt="..." style="width:30px;">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                
                </li>
            </ul>
        </div>
    </nav>
</div>


    <div class="row" style="margin:0px;padding-bottom:50px;background:#808080;">
    
        <div class="col-4" style="background:#808080;">
        </div>

        <div class="col-4" style="background:#808080;padding-top:80px;">
            <center><h1>FORM REGISTRASI DOKTER</h1></center><br></br>
            <form action="<?= site_url('C_register/registerDokter')?>" method="post">
                
                <div class="form-group">
                    <center><label for="exampleInputEmail1">Nama Lengkap</label></center>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $nama?>" readonly>
                </div>
                <div class="form-group">
                    <center><label for="exampleInputEmail1">Alamat</label></center>
                    <input type="text" name="alamat"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $alamat?>" readonly>
                </div>
                <div class="form-group">
                    <center><label for="exampleInputEmail1">Username</label></center>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="<?= $username?>" readonly>
                </div>
                <div class="form-group">
                    <center><label for="exampleInputPassword1">Password</label></center>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" aria-describedby="emailHelp" value="<?= $password?>" readonly>
                </div>
                <div class="form-group">
                    <center><label for="exampleInputEmail1" >Daftar Sebagai</label></center>
                    <input type="text" name="regisAs" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="Dokter" readonly>
                </div>

                <div class="row">
                    <div class="col-9">
                    <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                        <div class="form-group dropdown">
                            <label for="tipeSunat">Tipe Sunat</label>
                                <select name="tipeSunat" id="tipeSunat">
                                <div class="dropdown-menu">
                                    <option class="dropdown-item" value="clamp">clamp</option>
                                    <option class="dropdown-item" value="Khusus Gendut">Khusus Gendut</option>
                                    <option class="dropdown-item" value="Reguler">Reguler</option>
                                </div>
                            </select>
                        </div>
                    </div>
                    </div>
                    
                    <div class="col-3">
                        <input class="btn btn-primary" type="submit" value="Register">
                    </div>
                </div>
            </div>
            </form>
        </div>

        <div class="col-4" style="background:#808080;">
        </div>
    </div>

    


    <div class="card text-center">
        <div class="card-header" style="padding:10px;background:#696969;">
            
        </div>
        <div class="card-body" style="padding:10px;">
            <h6 class="card-title">CONTACT US</h6>
            <p class="card-text">021-58293273</p>
        </div>
        <div class="card-footer" style="padding:10px;background:#696969;">
        </div>
    </div>