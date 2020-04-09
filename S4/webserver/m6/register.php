<html>
<h1>Form Register</h1>

<form action="prosesRegister.php" method="post" enctype="multipart/form-data">
    Nama <input type="text" name="nama" ><br>
    Foto <input type="file" name="foto" ><br>
    Alamat <input type="text" name="alamat" ><br>
    Kelamin <input type="radio" name="kelamin" value="pria">Pria
            <input type="radio" name="kelamin" value="wanita">Wanita <br>
    Umur <input type="text" name="umur" ><br>
    Email <input type="text" name="email" ><br>
    Website <input type="text" name="website" ><br>
    Username <input type="text" name="username" ><br>
    Password <input type="text" name="password" ><br>
    Retype Password <input type="text" name="repassword" ><br>

    <input type="submit" value="Registrasi">
</form>
</html>
