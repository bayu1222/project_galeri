<?php
Session_start();
$koneksi= mysqli_connect("localhost","root","","galeri");
$username= $_POST ['Username'];
$password= $_POST ['Password'];
$query= mysqli_query($koneksi,"SELECT*FROM user where Username= '$username' and Password='$password'");
$cek=mysqli_num_rows($query);
if($cek>0){
    $data=mysqli_fetch_array($query);
    session_start();
    $_SESSION['Username']=$data['Username'];
    $_SESSION['Password']=$data['Password'];
    $_SESSION['UserID']=$data['UserID'];
        header('location:halaman_utama.php');}
else{
    echo "Username dan Password salah";
}
?> 