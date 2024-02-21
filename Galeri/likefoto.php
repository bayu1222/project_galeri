<?php
$koneksi=mysqli_connect("localhost","root","","galeri");
session_start();
if(!isset($_SESSION['UserID'])){
    header('location:halaman_utama.php');
}
else{
    $FotoID=$_GET['FotoID'];
    $UserID=$_SESSION['UserID'];
    $sql=mysqli_query($koneksi,"SELECT*FROM likefoto WHERE FotoID='$FotoID' and UserID='$UserID'");
    if(mysqli_num_rows($sql)==1){
        header('location:halaman_utama.php');
    }
    else{
        $tanggal=date("Y-m-d");
        $sql="INSERT INTO likefoto SET FotoID='$FotoID',UserID='$UserID',TanggalLike='$tanggal'";
        mysqli_query($koneksi,$sql);
        header('location:halaman_utama.php');
    }
}
?>