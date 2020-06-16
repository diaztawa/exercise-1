<!DOCTYPE html>
<html lang="en">

<head>
    <title>Data Penggunaan</title>
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading" style="background-color:white;">
                        <div class="avatar">
                            <img src="<?php echo base_url();?>assets/img/25437.png" width="100%">
                        </div>
                        <h3 class="panel-title text-center" style="margin:30px 0 -15px; font-size:26px;">Silakan Login</h3>
                    </div>
                    <div class="panel-body">
                         <?php echo form_open('login/aksi_login', 'role="form"'); ?>
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Masukkan Username" name="username" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Masukkan Password" name="password" type="password" value="">
                                </div>
                                <div class="checkbox">
                                </div>
                                <input type="submit" class="btn btn-lg btn-primary btn-block" value="Login"></input>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
