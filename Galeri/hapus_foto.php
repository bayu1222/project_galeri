<?php
$koneksi= mysqli_connect("localhost","root","","galeri");
if(isset($_GET['FotoID'])){
    $FotoID=$_GET['FotoID'];
    $sql="DELETE FROM foto WHERE FotoID=$FotoID";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        header('location:data_foto.php?status=sukses');
    }
    else{
        header('location:data_foto.php?status=gagal');
    }
}
?>