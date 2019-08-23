<?php
if (isset($_POST['Login'])) {
$nama = $_POST['lengkap'];
$jeka = $_POST['jk'];
$almat = $_POST['alamat'];
$gama = $_POST['gam'];
$mail = $_POST['email'];
$pass  = $_POST['password'];

echo "nama lengkap : $nama<br>";
echo "jenis kelamin :$jeka<br>";
echo "alamat : $almat<br>";
echo "agama : $gama<br>";
echo "gmail : $mail<br>";

if ($mail == "parhan@gmail.com" && $pass == "123") {
echo "Status :<h2>Aktif</h2>";
} else {
echo "Status :<h2>Tidak Aktif</h2>";
}
}
?>