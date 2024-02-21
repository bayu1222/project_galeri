<?php $koneksi=mysqli_connect("localhost","root","","galeri");
    $AlbumID=$_GET['AlbumID'];
    $sql="SELECT * FROM album WHERE AlbumID=$AlbumID";
    $query=mysqli_query($koneksi,$sql);
   
    while( $album=mysqli_fetch_array($query)){
?>

<html>
    <head><center>
        <title> Edit Data Album</title>
        <style>
    body {
    background-color:pink
}
    </style>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <div>

            <input type="hidden" name="AlbumID" value="<?php echo $album['AlbumID']?>"/>
           </div>
           <center>
          <div>
            <label for="AlbumID">AlbumID</label><br>
            <input type="text" name="AlbumID" value="<?php if(isset($_GET['AlbumID'])){echo $album['AlbumID'];}?>"/>
          </div>
          <div>
            <label for="NamaAlbum">NamaAlbum</label><br>
            <input type="text" name="NamaAlbum" value="<?php if(isset($_GET['AlbumID'])){echo $album['NamaAlbum'];}?>"/>
          </div>
           <div>
            <label for="Deskripsi">Deskripsi</label><br>
            <input type="text" name="Deskripsi" value="<?php if(isset($_GET['AlbumID'])){echo $album['Deskripsi'];}?>"/>
          </div>
          <div>
            <label for="TanggalDibuat">TanggalDibuat</label><br>
            <input type="date" name="TanggalDibuat" value="<?php if(isset($_GET['AlbumID'])){echo $album['TanggalDibuat'];}?>"/>
          </div>
           <div>
            <label for="UserID">UserID</label><br>
            <input type="text" name="UserID" value="<?php if(isset($_GET['AlbumID'])){echo $album['UserID'];}?>"/>
          </div>

          <br>
          <div>
            <button type="submit" name="save">Save</button>
</div>
</fieldset>
</form>
<?php
}
?>
</body>
</html></center>
</center>

<?php
$koneksi=mysqli_connect("localhost","root","","galeri");

if($_SERVER['REQUEST_METHOD']=="POST"){
    $AlbumID=$_POST['AlbumID'];
    $NamaAlbum=$_POST['NamaAlbum'];
    $Deskripsi=$_POST['Deskripsi'];
    $TanggalDibuat=$_POST['TanggalDibuat'];
    $UserID=$_POST['UserID'];

    $sql="UPDATE  album SET AlbumID='$AlbumID',NamaAlbum='$NamaAlbum',Deskripsi='$Deskripsi',TanggalDibuat='$TanggalDibuat' WHERE AlbumID=$AlbumID";
    $query=mysqli_query($koneksi,$sql);

    if($query){

        header('location:data_album.php?status=sukses');

    }
}
?>