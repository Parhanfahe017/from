<!DOCTYPE html>
<html>
 <head><title>Pengolahan Form  </title></head>
<body>
     <form action="proses001.php" Method="POST">
<table align="center">
<tr>
    <td><h3>From Kuantansi</h3></td>
    </tr>
<tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama"></td>
    </tr><br>
<tr>    
    <td><b>Alamat</b></td>
    <br>
</tr>
<tr>
    <td>Jalan</td>
    <td>:</td>
    <td><textarea rows="1" name="jalan" cols="20"></textarea></td>
</tr>
<tr>
    <td>Kecamatan</td>
    <td>:</td>
    <td><textarea rows="1" name="kecamatan" cols="20"></textarea></td>
</tr>
<tr>
    <td>Provensi</td>
    <td>:</td>
    <td><textarea rows="1" name="provensi" cols="20"></textarea></td>
</tr>
<tr>
    <td>Kode Pos</td>
    <td>:</td>
    <td><textarea rows="1" name="pos" cols="20"></textarea></td>
</tr>

<tr>
    <td>Nama Barang</td>
    <td>:</td>
    <td><input type="text" name="namabarang"></td>
</tr>

<tr>
    <td>Harga Barang</td>
    <td>:</td>
    <td><input type="number" name="harga"></td>
</tr>

<tr>
    <td>Jumplah Barang</td>
    <td>:</td>
    <td><textarea rows="1" name="jumlah" cols="20"></textarea></td>
</tr>

<tr>
    <td>Dekrepsi</td>
    <td>:</td>
    <td><textarea rows="3" name="dek" cols="20"></textarea></td>
</tr>

<tr>
<td>Quantity</td>
<td>:</td>
<td><input type=”text” name=”bil3″ /></td>
</tr>

<tr>
    <td>Tanggal Beli</td> 
    <td>:</td>
    <td><input type="date" name="beli">
</table>
<input type="submit" name="simpan" value="Login ">
<input type="reset" name="reset" value="reset">