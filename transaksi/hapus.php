<?php

include '../koneksi.php';

if(isset($_GET['id_pinjam']))
{
    $id_pinjam = $_GET['id_pinjam'];

    $sql = "DELETE FROM peminjaman WHERE id_pinjam = $id_pinjam";
    $res = mysqli_query($kon, $sql);
    $count = mysqli_affected_rows($kon);

    if($count == 1)
    {
        header("Location: index.php");
    }
}

?>