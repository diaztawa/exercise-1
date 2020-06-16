<!DOCTYPE html>
<html lang="en">

<head>
    <title>Form Pelanggan</title>
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0; background-color:black;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html" style="color:white;">Listrik Payment Online</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a href="<?php echo base_url('index.php/login/logout')?>">
                        <i class="fa fa-sign-out fa-fw"></i>Logout
                    </a>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu" style="background-color:black;">
                        <li>
                            <a href="<?php echo base_url('index.php/admin'); ?>"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-bars fa-fw"></i> Menu<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/penggunaan'); ?>">Penggunaan</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('index.php/admin/pembayaran'); ?>">Pembayaran</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="color:white;">Masukkan Data</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-body" style="background-color:black; color:white;">
                            <div class="row">
                                <div class="col-lg-12">
                                    <?php echo form_open('admin/penggunaan/tambah'); ?>
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" name="nama">
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>No Meteran</label>
                                            <input class="form-control" name="no_meter">
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input class="form-control" name="alamat">
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control" name="kd_tarif" id="kd_tarif">
                                                <option value="0">Daya Listrik</option>
                                                <?php foreach ($customer_list->result() as $cl) {
                                                    echo "<option value='$cl->kd_tarif'>Tipe $cl->tipe_tarif: $cl->daya = Rp. $cl->tarifperkwh/kwh</option>";
                                                } ?>
                                            </select>
                                        </div>
                                    <button type="submit" class="btn btn-primary btn-block" name="submit">Masukkan data</button>
                                    <a href="<?php echo base_url('index.php/admin/penggunaan'); ?>"class="btn btn-danger btn-block col-lg-6">Batal</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>

</body>

</html>
