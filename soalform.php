
<!DOCTYPE html>
<html>
 <head><title>Pengolahan Form</title></head>
<body>
     <Form action="" Method="POST" name="input">
        Nama anda : <input type="text" name="nama"><br>
        Nilai ke-1: <input type="text" name ="nilai1"><br>
        Nilai ke-1: <input type="text" name="nilai2"><br>
     <input type="submit" name="input" value="simpan">

         </form>
  </body>
</html>

<?php
if(isset($_POST['input'])) {
    $nama = $_POST['nama'];
    $nama1 =$_POST['nilai1'];
    $nama2 =$_POST['nilai2'];
    $rataa  =$nilai1 + $nilai2 / 2;
    
    echo "Nama anda adalah : $nama <br>";
    echo "NIlai ke-1 : $nama1 <br>";
    echo "Nilai ke-2 : $nama2 <br>";
    echo "Rata rata nilai : $rataa <br>";
}
?>