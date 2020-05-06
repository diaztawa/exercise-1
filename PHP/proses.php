<?php

    $nama = $_POST['nama'];
    $NIM = $_POST['NIM'];
    $tgl = $_POST['tgl'];
    $tmpt = $_POST['tmptlahir'];
    $umur = $_POST['umur'];
    $hobi = $_POST['hobi'];
    $ket = $_POST['ket'];

    function usia(){
        $umur = $_POST['umur'];

        if($umur <= 10){
            echo "Umur anda adalah ". $umur ." berarti anda seorang: <b>Anak-anak</b>";
        }elseif($umur <= 20){
            echo "Umur anda adalah ". $umur ." berarti anda seorang: <b>Remaja</b>";
        }elseif($umur <= 25){
            echo "Umur anda adalah ". $umur ." berarti anda seorang: <b>Dewasa</b>";
        }else{
            echo "Umur anda adalah ". $umur ." berarti anda seorang: <b>Orang Tua</b>";
        }
    }

    echo "Nama anda adalah <b>". $nama . "</b>";
    echo "<br>";
    echo "NIM anda adalah <b>". $NIM . "</b>";
    echo "<br>";
    echo "Tanggal lahir anda adalah <b>". date($tgl). "</b>";
    echo "<br>";
    echo "Tempat lahir anda adalah <b>". $tmpt. "</b>";
    echo "<br>";
    echo usia();
    echo "<br>";
    echo "Hobi anda adalah <b>". $hobi. "</b>";
    echo "<br>";
    echo "Keterangan anda adalah <b>". $ket. "</b>";
    echo "<br>";
    
?>