<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Percobaan PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <form action="proses.php" method="post" class="align-items-center row">
            <h3 class="text-center col-12">
                Formulir Pengisian Data
            </h3>
            <div class="form-group col-6">
                <label for="nama">Nama</label>
                <input type="text" name="nama" id="nama" class="form-control" placeholder="Masukkan nama anda...">
            </div>
            <div class="form-group col-6">
                <label for="NIM">NIM</label>
                <input type="number" name="NIM" id="NIM" class="form-control" placeholder="Masukkan NIM anda...">
            </div>
            <div class="form-group col-6">
                <label for="tgl">Tanggal Lahir</label>
                <input type="date" name="tgl" id="tgl" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="tmptlahir">Tempat Lahir</label>
                <input type="text" name="tmptlahir" id="tmptlahir" class="form-control" placeholder="Masukkan tempat lahir anda...">
            </div>
            <div class="form-group col-6">
                <label for="umur">Umur</label>
                <input type="number" name="umur" id="umur" class="form-control" placeholder="Masukkan umur anda...">
            </div>
            <div class="form-group col-6">
                <label for="hobi">Hobi</label>
                <input type="text" name="hobi" id="hobi" class="form-control" placeholder="Masukkan hobi anda...">
            </div>
            <div class="form-group col-12">
                <label for="ket">Keterangan</label>
                <input type="text" name="ket" id="ket" class="form-control" placeholder="Masukkan keterangan...">
            </div>
            <div class="form-group col-12">
                <input type="submit" id="submit" class="btn btn-primary form-control">
            </div>
            
        </form>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>