<?php 

require_once "inc/Koneksi.php";
require_once "app/Kategori.php";

$kat = new Kategori();
$rows = $kat->tampil();

?>

<a href="kat_input.php">Tambah Kategori</a>
<table>
    <tr>
        <td>NO</td>
        <td>NAMA</td>
        <td>KETERANGAN</td>
        <td>EDIT</td>
        <td>DELETE</td>
    </tr>
    <?php foreach ($rows as $row) { ?>
    <tr>
        <td><?php echo $row['kat_id']; ?></td>
        <td><?php echo $row['kat_nama']; ?></td>
        <td><?php echo $row['kat_keterangan']; ?></td>
        <td><a href="kat_edit.php?id=<?php echo $row['kat_id']; ?>">Edit</a></td>
        <td><a href="kat_delete.php?id=<?php echo $row['kat_id']; ?>">Delete</a></td>
    </tr>
    <?php } ?>
</table>
