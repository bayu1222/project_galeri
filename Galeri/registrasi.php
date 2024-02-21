<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form registrasi</title>
</head>
    <title>FORM REGISTRASI</title>
<body>
<form action ="" method ="POST">
            <center><h2><i> FORM REGISTRASI </i></h2><b>
                UserID <input type="text" name="UserID" value=""><p>
                Username <input type="text" name="Username" value=""><p>
                Password <input type="text" name="Password" value=""><p>
                Email <input type="text" name="Email" value=""><p>
                NamaLengkap <input type="text" name="NamaLengkap" value=""><p>
                Alamat <input type="text" name="Alamat" value=""><p> 
                <input type="submit" value="save">
            </center>
</form>
</body>
</html>
<?php
$koneksi=mysqli_connect("localhost","root","","galeri");
if($_SERVER['REQUEST_METHOD']=="POST"){
    $UserID=$_POST['UserID'];
    $Username=$_POST['Username'];
    $Password=$_POST['Password'];
    $Email=$_POST['Email'];
    $NamaLengkap=$_POST['NamaLengkap'];
    $Alamat=$_POST['Alamat'];
    $sql= "INSERT INTO user(UserID,Username,Password,Email,NamaLengkap,Alamat)VALUE('$UserID','$Username','$Password','$Email','$NamaLengkap','$Alamat')";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        header('location:index.php?status=sukses');
    }
}
?>