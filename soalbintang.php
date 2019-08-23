<!DOCTYPE html>
<html>
 <head><title>soal Bintang</title></head>
<body>
     <Form action="" Method="POST" name="input">
     <h4> Bintang Priamida</h4>
      Masukkan Bintang <input type="text" name="bintang"><input type="submit" name="submit" value="sunmit">
        </form>
  </body>
</html>

<?php                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                           
  if(isset($_POST['submit'])) {
   $bin = $_POST['bintang'];

  for($a = 1; $a <= $bin; $a++){
      for($b = $bin; $b >= $a; $b-=1) {
          print('&nbsp');
        }
    for($c= 1; $c <= $a; $c++) {
      echo "*";
    }
     echo "<br>";
    }
}
?>   