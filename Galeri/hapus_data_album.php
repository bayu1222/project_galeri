<?php
$koneksi= mysqli_connect("localhost","root","","galeri");
if(isset($_GET['AlbumID'])){
    $AlbumID=$_GET['AlbumID'];
    $sql="DELETE FROM album WHERE AlbumID=$AlbumID";
    $query=mysqli_query($koneksi,$sql);
    if($query){
        header('location:data_album.php?status=sukses');
    }
    else{
        header('location:data_album.php?status=gagal');
    }
}
?>