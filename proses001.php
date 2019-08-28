<?php
if(isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat =$_POST['jalan'];
    $alamat2 =$_POST['kecamatan'];
    $alamat3  =$_POST['provensi'];
    $kode     =$_POST['pos'];
    $barang   =$_POST['namabarang'];
    $harga1    =$_POST['harga'];
    $jumbar   =$_POST['jumlah'];
    $dekrep   =$_POST['dek'];
    $kol  =$_POST["bil3"];


    echo "Nama anda         : $nama     <br>";
    echo "Alamat Jalan      : $alamat   <br>";
    echo "Alamat Kecamatan  : $alamat2  <br>";
    echo "Alamat Provensi   : $alamat3  <br>";
    echo "Kode Pos Anda         : $kode     <br>";
    echo "Nama Barang Anda      : $barang   <br>";
    echo "Harga Barang          : $harga1    <br>";
    echo "Jumlah Barang         : $jumbar   <br>";
    echo "Dekrepsi              : $dekrep   <br>";

     $mulai=($harga1 * $jumbar); {
        echo "Harga Barang: Rp. $mulai";
    }
    if($mulai >= 500000){
        $diskon=(($mulai*5)/100);
        $total=($mulai-$diskon);
        echo "$harga1";
        echo"<p>";
        echo "Total bayar dengan Diskon:Rp.$total";
    }
    elseif($mulai <= 500000){echo "Anda tidak mendapatkan diskon";}

}
?>