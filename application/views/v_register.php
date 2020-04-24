    
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


    <div class="row" style="margin:0px;padding-bottom:100px;background:#808080;">
    
        <div class="col-4" style="background:#808080;">
        </div>

        <div class="col-4" style="background:#808080;padding-top:50px;">
            <center><h1>FORM REGISTRASI</h1></center><br></br>
            <form action="<?= site_url('C_register/register')?>" method="post">
                
                <div class="form-group">
                    <center><h6 for="exampleInputEmail1">Nama Lengkap</h6></center>
                    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <center><h6 for="exampleInputEmail1">Alamat</h6></center>
                    <input type="text" name="alamat"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <center><h6 for="exampleInputEmail1">Username</h6></center>
                    <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                </div>
                <div class="form-group">
                    <center><h6 for="exampleInputEmail1">Password</h6></center>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    <small id="emailHelp" class="form-text">We'll never share your password with anyone else.</small>
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
                            <div class="form-group dropdown">
                                <label for="regisAs">Daftar Sebagai</label>
                                <select name="regisAs" id="regisAs">
                                    <div class="dropdown-menu">
                                        <option class="dropdown-item" value="pasien">pasien</option>
                                        <option class="dropdown-item" value="dokter">dokter</option>
                                    </div>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-3">
                        <input class="btn btn-primary" type="submit" value="Register">
                    </div>
                </div>
            </form>
        </div>

        <div class="col-4" style="background:#808080;">
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