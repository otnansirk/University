<?php
$barang   = $db->findAll('barang');
$supplier = $db->findAll('supplier');

if (post('submit')) {
    $kode_barang    = $_POST['kode_barang'];
    $kode_supplier  = $_POST['kode_supplier'];
    $jumlah         = $_POST['jumlah'];

    $result = $db->create(
      "stok",
      "kode_barang, kode_supplier, jumlah",
      "'$kode_barang', '$kode_supplier', '$jumlah'"
    );

  if ($result) {
    redirect("?p=stok/index");
  } else {
    $message = 'Gagal tambah stok. Cek kembali form anda !';
    include 'message/danger.php';
  }

}
?>

<h2>Form Tambah Stok</h2>
<form method="POST">
  <label>Barang</label>
  <select name="kode_barang" required>
    <?php
      foreach ($barang as $value) {
        ?>
        <option value="<?= $value['kode_barang'] ?>"><?= $value['nama_barang'] ?></option>
        <?php        
      }
    ?>
  </select>

  <label>Supplier</label>
  <select name="kode_supplier" required>
    <?php
      foreach ($supplier as $value) {
        ?>
        <option value="<?= $value['kode_supplier'] ?>"><?= $value['nama_supplier'] ?></option>
        <?php        
      }
    ?>
  </select>

  <label>Stok</label>
  <input type="number" name="jumlah" required>

  <input type="reset" name="reset" value="Reset">
  <input type="submit" name="submit" value="Kirim">
</form>
