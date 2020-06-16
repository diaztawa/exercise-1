<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tagihan</title>
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url();?>assets/vendor/bootstrap/css/style.css" rel="stylesheet">
    <link href="<?php echo base_url();?>assets/vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">
</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0;  background-color:black;">
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
                    <h1 class="page-header" style="color:white;">Tagihan</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading" style="background-color:black; color:white;">
                            Daftar tagihan yang belum lunas
                        </div>
                        <div class="panel-body" style="background-color:black; color:white;">
                            <table width="100%" class="table table-bordered" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>No Meteran</th>
                                        <th>Alamat</th>
                                        <th>Bulan</th>
                                        <th>Tahun</th>
                                        <th>Jumlah Meteran</th>
                                        <th>Total Harga</th>
                                        <th>Opsi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no=1;
                                    foreach ($customer_list->result() as $cl) {
                                        $total_harga= ($cl->jumlah_meter*$cl->tarifperkwh);
                                        echo 
                                        "<tr>
                                            <td>$no</td>
                                            <td>$cl->nama</td>
                                            <td>$cl->no_meter</td>
                                            <td>$cl->alamat</td>
                                            <td>$cl->bulan</td>
                                            <td>$cl->tahun</td>
                                            <td>$cl->jumlah_meter</td>
                                            <td>Rp. $total_harga</td>
                                            <td>
                                            ".anchor('admin/pembayaran/bayar/'.$cl->id_pelanggan, 'Bayar', array('class'=> 'btn btn-primary'))."
                                            </td>
                                        </tr>";
                                        $no++;
                                        } 
                                    ?>
                                </tbody>
                            </table>
        </div>

    </div>

    <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>

</body>

</html>    });
    </script>

</body>

</html>
