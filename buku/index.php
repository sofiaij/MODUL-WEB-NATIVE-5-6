<?php
include '../koneksi.php';

$sql = "SELECT * FROM buku ORDER BY judul";
$res = mysqli_query($kon, $sql);

$buku = array();

while ($data = mysqli_fetch_assoc($res)) {
    $buku[] = $data;
}
include '../aset/header.php';

?>

<div class="container">
    
    <div class="row-mt-2">
        <div class="col-md">
            <div class="card mt-4">
                <div class="card-header">
                    <h2><i class="fas fa-book mr-2"></i>Data Buku</h2>
                </div>
                <div class="card-body">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Pengarang</th>
                            <th scope="col">Stok</th>                        
                            <th scope="col">Aksi</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($buku as $b ) { ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $b['judul'] ?></td>
                            <td><?= $b['pengarang'] ?></td>
                            <td><?= $b['stok'] ?></td>
                            <td>
                                <a href="#" class="badge badge-success">Detail</a>
                                <a href="#" class="badge badge-warning">Ubah</a>
                                <a href="#" class="badge badge-danger">Hapus</a>
                            </td>
                        </tr>    
                        <?php 
                        $no++;
                        }
                        ?>
                    </tbody>
                    
                    </table>
                    
                </div>
            </div>
        </div>
    </div>

</div>

<?php
include '../aset/footer.php';
?>