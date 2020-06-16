<?php
  $nama_barang  = get('nama_barang');
  $urutan_harga = get('harga');
  $data = $db->query("SELECT * FROM barang 
                      INNER JOIN supplier ON barang.kode_supplier=supplier.kode_supplier 
                      ORDER BY barang.nama_barang");

  if ($nama_barang || $urutan_harga) {
    $data = $db->query("SELECT * FROM barang 
                        INNER JOIN supplier ON barang.kode_supplier=supplier.kode_supplier 
                        WHERE barang.nama_barang LIKE '%$nama_barang%' 
                        ORDER BY barang.harga $urutan_harga");
  }

?>

<div class="main-header">
  <h2>Tabel Barang</h2>
  <a href="?p=barang/create"><b>Tambah Barang</b></a>

  <form action="?p=barang/index" class="mt-20">
    <label>Filter by </label>
    <input type="hidden" name="p" value="barang/index">
    <input type="text" name="nama_barang" class="input-search" placeholder="Cari barang" value="<?= $nama_barang ?>">

    <select name="harga" class="input-search">
      <option value="">Urutkan Harga</option>
      <option 
        value="asc" 
        <?= ($urutan_harga == 'asc')? 'selected': '' ?>
        >Terendah ke Tertinggi</option>
      <option 
        value="desc" 
        <?= ($urutan_harga == 'desc')? 'selected': '' ?>
        >Tertinggi ke Terendah</option>
    </select>
    <input type="submit" name="search" value="Filter">
  </form>
</div>

<table>
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Barang</th>
      <th>Harga</th>
      <th>Nama Supplier</th>
      <th>Pilihan</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach ($data as $key => $value) {
      ?>
        <tr>
          <td><?= ++$key ?></td>
          <td><?= $value['nama_barang']?></td>
          <td>Rp. <?= number_format($value['harga']) ?></td>
          <td>
            <a href="?p=supplier/edit&id=<?= $value['kode_supplier'] ?>"><?= $value['nama_supplier'] ?></a>
          </td>
          <td>
              <a href="?p=barang/delete&id=<?= $value['kode_barang'] ?>"><b>Delete</b></a> | 
              <a href="?p=barang/edit&id=<?= $value['kode_barang'] ?>"><b>Update</b></a>
          </td>
        </tr>
      <?php
    }
    ?>
  </tbody>
</table>
