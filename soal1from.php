<!DOCTYPE html>
<html>
 <head><title>Pengolahan Form -text </title></head>
<body>
     <form action="prosessoalfrom.php" Method="POST">
        <h3>Login Register</h3>
        <br>
        Nama lengkap : <input type="text" name="lengkap"><br>
        Jenis Kelamin :<br>
                       <input type="radio" name ="jk" value="laki laki" checked>
                        Laki-Laki
                       <input type="radio" name="jk" values="prempuan">
                        Prempuan<br>
        Alamat :<textarea rows="3" name="alamat" cols="20"></textarea><br>
        Agama  : <select name="gam">
                  <option>Pilihan</option>
                  <option value="islam">Islam</option>
                  <option value="hindu">Hindu</option>
                  <option value="nasrani">Nasrani</option>
                 </select><br>
        G-mail : <input type="text" name="email"><br>
        Password : <input type="password" name="password"><br>
<input type="submit" name="Login" value="Login">
<input type="reset" name="reset" value="reset">
         </form>
 </body>
</html>