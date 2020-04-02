<?php
session_start();

if(isset($_SESSION['id_petugas']))
{
    echo "Berhasil login";
}
else {
    echo "Gagal";
}
?>