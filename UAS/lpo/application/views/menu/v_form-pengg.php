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
                                    <?php echo form_open('admin/penggunaan/form'); ?>
                                        <input name="id_pelanggan" value="<?php echo $customer_list['id_pelanggan']?>" type="hidden">
                                        <input name="status" value="Belum Lunas" type="hidden">
                                        <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" value="<?php echo $customer_list['nama'] ?>" name="nama" readonly>
                                            <p class="help-block"></p>
                                        </div>
                                        <div class="form-group">
                                            <label>Daya</label>
                                            <input class="form-control" value="<?php echo $customer_list['daya'] ?>" name="daya" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Meteran Awal</label>
                                            <input class="form-control" placeholder="Masukkan Meteran Awal" name="meterawal">
                                        </div>
                                        <div class="form-group">
                                            <label>Meteran Akhir</label>
                                            <input class="form-control" placeholder="Masukkan Meteran Akhir" name="meterakhir">
                                        </div>
                                        <div>
                                            <div class="form-group col-lg-6" style="padding-left: 0;">
                                                <select class="form-control" name="bulan">
                                                    <option value="0">Pilih Bulan</option>
                                                    <option value="Januari">January</option>
                                                    <option value="Februari">Februari</option>
                                                    <option value="Maret">Maret</option>
                                                    <option value="April">April</option>
                                                    <option value="Mei">Mei</option>
                                                    <option value="Juni">Juni</option>
                                                    <option value="Juli">Juli</option>
                                                    <option value="Agustus">Agustus</option>
                                                    <option value="September">September</option>
                                                    <option value="Oktober">Oktober</option>
                                                    <option value="November">November</option>
                                                    <option value="Desember">Desember</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-6" style="padding-right: 0;">
                                                <input class="form-control" placeholder="Masukkan Tahun" name="tahun">
                                            </div>
                                        </div>
                                    <button type="submit" class="btn btn-primary btn-block col-lg-6" name="submit">Masukkan data</button>
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
