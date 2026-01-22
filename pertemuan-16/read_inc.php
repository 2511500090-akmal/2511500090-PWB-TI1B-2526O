<?php
require 'koneksi.php';

$sql = "SELECT cid, cnama, cemail, cpesan FROM tbl_tamu ORDER BY cid DESC";
$q = mysqli_query($conn, $sql);

if (mysqli_num_rows($q) === 0) {
  echo "<p>Belum ada data tamu yang tersimpan</p>";
  return;
}
?>

<table border="1" cellpadding="8" cellspacing="0" width="100%">
  <tr>
    <th>No</th>
    <th>Nama</th>
    <th>Email</th>
    <th>Pesan</th>
    <th>Aksi</th>
  </tr>

  <?php $no = 1; ?>
  <?php while ($row = mysqli_fetch_assoc($q)): ?>
    <tr>
      <td><?= $no++; ?></td>
      <td><?= htmlspecialchars($row['cnama']); ?></td>
      <td><?= htmlspecialchars($row['cemail']); ?></td>
      <td><?= htmlspecialchars($row['cpesan']); ?></td>
      <td>
        <a href="delete.php?id=<?= $row['cid']; ?>"
           onclick="return confirm('Yakin ingin menghapus data ini?')">
           Hapus
        </a>
      </td>
    </tr>
  <?php endwhile; ?>
</table>
