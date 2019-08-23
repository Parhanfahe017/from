<!DOCTYPE html>
<html>
 <head><title>Inpugt Soal 3 </title></head>
<body>
     <form action="prosessoal3.php" Method="POST">
        <h4>FROMULIR PRNDAFTARAN</h4>
        NO           : <br>
        <input type="number" name="nom"><br>

        NISN         :<br>
        <input type="number" name="nisn"><br>
        
        Nama lengkap :<br>
        <input type="text" name="nama"><br>
        
        Alamat       :<br>
        <textarea rows="3" name="alamat" cols="20"></textarea><br>
        
        Tempat Lahir :<br>
        <input type="text" name="tempat"><br>
        
        tanggal lahir : <br>
        <input type="date" name="lahir"><br>
        
        Asal Sekolah  :<br>
        <input type="text" name="asal"><br>
        
        Jenis Kelamin :<br>
                       <input type="radio" name ="jk" value="laki laki" checked>
                        Laki-Laki
                       <input type="radio" name="jk" values="prempuan">
                        Prempuan
                        <br>
        
        Agama  : <select name="gam">
                  <option>Pilihan</option>
                  <option value="islam">Islam</option>
                  <option value="hindu">Hindu</option>
                  <option value="nasrani">Nasrani</option>
                  </select><br>
        
        Jurusan :<select name="jurusan">
                  <option>Pilihan</option>
                  <option value="RPL">RPL</option>
                  <option value="TSM">TSM</option>
                  <option value="TKR">TKR</option>
                 </select><br>
        
        Hobi   :<br> 
             <input type="checkbox" name="hobi01" value="mancing"
            checked> Mancing<br>
             <input type="checkbox" name="hobi02" value="Berenang">
            Renang<br>
             <input type="checkbox" name="hobi03" value="Berlari">
            Berlari<br>
             <input type="checkbox" name="hobi04" value="putsal">
            putsal<br>
             <input type="checkbox" name="hobi05" value="nontontv">
            nontontv<br>
            <br>
        
        Nama ayah :<br>
         <input type="text" name="ayah"><br>
        
        Pekerjaan  :<br>
         <input type="text" name="perkerjaan"><br>
        
         Nama ibu :<br>
         <input type="text" name="ibu"><br>
        
        Pekerjaan  :<br>
        
         <input type="text" name="kerjaan"><br>

<input type="submit" name="Login" value="Login">
<input type="reset" name="reset" value="reset">
         </form>
 </body>
</html>