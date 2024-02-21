<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
  font-family: Arial, Helvetica, sans-serif;
}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

/* Style the top navigation bar */
.topnav {
  overflow: hidden;
  background-color: #333;
}

/* Style the topnav links */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
  background-color: #ddd;
  color: black;
}

/* Style the content */
.content {
  background-color: #ddd;
  padding: 10px;
  height: 200px; /* Should be removed. Only for demonstration */
}

/* Style the footer */
.footer {
  background-color: #f1f1f1;
  padding: 10px;
}
</style>
</head>
<style>
.fa {
  font-size: 50px;
  cursor: pointer;
  user-select: none;
}
.fa:hover {
  color: darkblue;
}
</style>
<body>

<div class="topnav">
  <a href="halaman_utama.php">HALAMAN UTAMA</a>
  <a href="data_foto.php">DATA FOTO</a>
  <a href="data_album.php">DATA ALBUM</a>
  <a href="logout.php">LOGOUT</a>
  
</div>
<?php
            $koneksi= mysqli_connect("localhost","root","","galeri");
            $sql = "SELECT * FROM foto";
            $query = mysqli_query ($koneksi,$sql);
            $no=1;
            while( $show = mysqli_fetch_array($query)){
                ?>
<table>
  <td>
  <tr><?=$show ['JudulFoto']; ?></tr><p>
  <tr><?="<img src='file/$show[LokasiFile]' width='70'/>";?></tr><p>
  <tr><?=$show ['DeskripsiFoto']; ?></tr>
<?php
  $FotoID=$show['FotoID'];
  $sql2=mysqli_query($koneksi,"SELECT*FROM likefoto WHERE FotoID='$FotoID'");
  echo mysqli_num_rows($sql2);
?>
<a href="likefoto.php?FotoID=<?=$show['FotoID'];?>">Like</a><p>
<a href="komentarfoto.php?FotoID=<?=$show['FotoID'];?>">Komentar</a><p>
  </td>
            </table>
            <?php
            }?>
<div class="footer">
 <center> <p>rida riskiiiii</p></center>
</div>
</body>
</html>

