<?php
$id       = get('id'); 
$data     = $db->find(
  "stok",
  "kode_stok='$id'"
)->fetch_array();
$barang   = $db->findAll('barang');
$supplier = $db->findAll('supplier');

if (post('submit')) {
    $kode_barang    = $_POST['kode_barang'];
    $kode_supplier  = $_POST['kode_supplier'];
    $jumlah         = $_POST['jumlah'];

    $result = $db->update(
      "stok",
      "kode_barang='$kode_barang', kode_supplier='$kode_supplier', jumlah='$jumlah'",
      "kode_stok='$id'"
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
        <option 
          value="<?= $value['kode_barang'] ?>"
          <?= ($data['kode_barang'] == $value['kode_barang'])? 'selected': '' ?> 
          ><?= $value['nama_barang'] ?></option>
        <?php        
      }
    ?>
  </select>

  <label>Supplier</label>
  <select name="kode_supplier" required>
  <?php
      foreach ($supplier as $value) {
        ?>
        <option 
          value="<?= $value['kode_supplier'] ?>" 
          <?= ($data['kode_supplier'] == $value['kode_supplier'])? 'selected': '' ?> 
        >
          <?= $value['nama_supplier'] ?>
        </option>
        <?php        
      }
    ?>
  </select>

  <label>Stok</label>
  <input type="number" name="jumlah" value="<?= $data['jumlah'] ?>">

  <input type="reset" name="reset" value="Reset">
  <input type="submit" name="submit" value="Kirim">
</form>
