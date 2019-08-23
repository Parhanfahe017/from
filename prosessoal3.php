<?php

if (isset($_POST['Login'])) {
     $no = $_POST['nom'];
     $nisn = $_POST['nis'];
     $nama = $_POST['nam'];
     $alamat = $_POST['alamat'];
     $ttl = $_POST['tempat'];
     $tl  = $_POST['lahir'];
     $asal = $_POST['asal'];
     $jeniskelamin = $_POST['jk'];
     $agama = $_POST['gam'];
     $jurusan = $_POST['jurus'];
     $ayah = $_POST['ayah'];
     $kerja = $_POST['perkerjaan'];
     $ibu = $_POST['ibu'];
     $kerj = $_POST['kerjaan'];

echo "No anda : $no<br>";
echo "NISN anda : $nisn<br>";
echo "nama lengkap : $nama<br>";
echo "alamat :$alamat<br>";
echo "TTL : $ttl<br>";
echo "TL : $tl<br>";
echo "asal sekolah : $asal<br>";
echo "Jenis Kelamin : $jeniskelamin<br>";
echo "agama : $agama<br>";
echo "Jurusan Anda : $jurusan<br>";

echo "hobi :";
if (isset($_POST['honi01'])) {
echo "+ " . $_POST['hobi01'] . "<br>";
}
if (isset($_POST['hobi02'])) {
echo "+ " . $_POST['hobi02'] . "<br>";
}
if (isset($_POST['hobi03'])) {
echo "+ " . $_POST['hobi03'] . "<br>";
}
if (isset($_POST['hobi04'])) {
echo "+ " . $_POST['hobi04'] . "<br>";
 }

echo "Nama Ayah : $ayah<br>";
echo "Perkerjaan Ayah : $kerja<br>";
echo "Nama Ibu : $ibu<br>";
echo "Perkerjaan ibu : $kerj<br>";
}
?>