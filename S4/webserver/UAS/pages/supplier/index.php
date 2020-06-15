<?php
  $nama_supplier = get("nama_supplier");
  if ($nama_supplier) {
    $data = $db->find(
      "supplier",
      "nama_supplier LIKE '%$nama_supplier%'"
    );
  } else {
    $data = $db->findAll("supplier");
  }
?>

<div class="main-header">
  <h2>Tabel Supplier</h2>
  <a href="?p=supplier/create"><b>Tambah Supplier</b></a>

  <form action="?p=supplier/index" class="mt-20">
    <label>Filter by </label>
    <input type="hidden" name="p" value="supplier/index">
    <input type="text" name="nama_supplier" class="input-search" placeholder="Cari supplier" value="<?= $nama_supplier ?>">
    <input type="submit" name="search" value="Filter">
  </form>
</div>

<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Supplier</th>
      <th>Alamat</th>
      <th>No Telepon</th>
      <th>Pilihan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($data as $key => $value) {
      ?>
        <tr>
          <td><?= ++$key ?></td>
          <td><?= $value['nama_supplier']?></td>
          <td><?= $value['alamat'] ?></td>
          <td><?= $value['no_telepon'] ?></td>
          <td>
              <a href="?p=supplier/delete&id=<?= $value['kode_supplier'] ?>"><b>Delete</b></a> | 
              <a href="?p=supplier/edit&id=<?= $value['kode_supplier'] ?>"><b>Update</b></a>
          </td>
        </tr>
      <?php
    }
    ?>
  </tbody>
</table>
