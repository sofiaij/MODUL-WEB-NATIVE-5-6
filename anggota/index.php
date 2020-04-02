<?php
include '../koneksi.php';

$sql = "SELECT * FROM anggota ORDER BY nama";
$res = mysqli_query($kon, $sql);

$anggota = array();

while ($data = mysqli_fetch_assoc($res)) {
    $anggota[] = $data;
}
include '../aset/header.php';

?>

<div class="container">
    
    <div class="row-mt-2">
        <div class="col-md">
            <div class="card mt-4">
                <div class="card-header">
                    <h2><i class="fas fa-user"></i> Data Anggota</h2>
                </div>
                <div class="card-body">
                <a class="btn btn-primary mb-2" href="tambah.php">
                    <i class="fas fa-plus"></i> Tambah Anggota
                </a>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>                       
                            <th scope="col">Aksi</th>                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        foreach ($anggota as $a ) { ?>
                        <tr>
                            <th scope="row"><?= $no ?></th>
                            <td><?= $a['nama'] ?></td>
                            <td><?= $a['kelas'] ?></td>
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