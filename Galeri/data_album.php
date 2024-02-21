<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h1><B>DATA ALBUM</B></h1>
        <a href="tambah_data_album.php">tambah data</a>
        <table border=1>
            <tr>
                <th>AlbumID</th>
                <th>NamaAlbum</th>
                <th>Deskripsi</th>
                <th>TanggalDibuat</th>
                <th>UserID</th>
                <th colspan="2">aksi</th><center><h1><i>
            </tr><tr>
            <?php
            $koneksi= mysqli_connect("localhost","root","","galeri");
            session_start();
            if(!isset($_SESSION['UserID'])){
                header('location:data_album.php');
            }
            else{
                $UserID=$_SESSION['UserID'];
                $sql="SELECT*FROM album WHERE UserID='$UserID'";
                }
            $query = mysqli_query ($koneksi,$sql);
            $no=1;
            while( $show = mysqli_fetch_array($query)){
                echo "<tr>";
                echo "<td>".$show ['AlbumID']."</td>";
                echo "<td>".$show ['NamaAlbum']."</td>";
                echo "<td>".$show ['Deskripsi']."</td>";
                echo "<td>".$show ['TanggalDibuat']."</td>";
                echo "<td>".$show ['UserID']."</td>";
                echo "<td> <a href='edit_data_album.php?AlbumID= ".$show ['AlbumID']."'> edit </a></td>";
                echo "<td> <a href = 'hapus_data_album.php?AlbumID=".$show ['AlbumID']."'>hapus</a></td>";
                echo "</tr>";
            }
            ?>
            </tr>
        </table>
    </center>
</body>
</html>

