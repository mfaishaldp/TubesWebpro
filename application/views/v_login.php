    
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
    
        <div class="col-6" style="background:#808080;">
            <div class="text-center">
                <img src="<?php echo base_url('assets/img/icip.png') ?>" class="rounded" alt="..." style="width:600px;padding-top:100px;">
            </div>
        </div>

        <div class="col-6" style="background:#808080;padding-top:130px;padding-right:250px;">
        <form action="<?= site_url('c_login/login')?>" method="post">
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1" >Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" required>
                <small id="emailHelp" class="form-text">We'll never share your password with anyone else.</small>
            </div>
            <?php 
                if (isset($error_message)){
                    echo "Incorrect username/password";
                    echo "<br>";
                }
                //  elseif (isset($logout_status)){
                //     echo "You've successfuly loged out.";
                //     echo "<br>";
                // }
            ?>
            <div class="form-group dropdown">
                <label for="loginAs">Login Sebagai</label>
                <select name="loginAs" id="loginAs">
                    <div class="dropdown-menu">
                        <option class="dropdown-item" value="pasien">pasien</option>
                        <option class="dropdown-item" value="dokter">dokter</option>
                    </div>
                </select>
            </div>

            <input class="btn btn-primary" type="submit" value="Log in">
        </form>

        
    </div>
</div>

<div class="card text-center fixed-bottom">
    <div class="card-header" style="padding:15px;background:#696969;">
            
    </div>
    <div class="card-body" style="padding:20px;">
        <h6 class="card-title">CONTACT US</h6>
        <p class="card-text">021-58293273</p>
    </div>
    <div class="card-footer" style="padding:15px;background:#696969;">
    </div>
</div>


