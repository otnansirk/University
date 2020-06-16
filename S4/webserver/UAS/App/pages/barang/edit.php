<?php
  $supplier = $db->findAll("supplier");
  $id = get('id');
  $data = $db->find(
    "barang",
    "kode_barang='$id'"
  )->fetch_array();
  
  if (post('submit')) {
    $nama_barang   = post('nama_barang');
    $harga         = post('harga');
    $kode_supplier = post('kode_supplier');  

    $result = $db->update(
      "barang",
      "nama_barang='$nama_barang', harga='$harga', kode_supplier='$kode_supplier'",
      "kode_barang='$id'"
    );
    
    if ($result) {
      redirect("?p=barang/index");
    } else {
      $message = 'Gagal edit barang dengan kode ' .$id;
      include 'message/danger.php';
    }
  }

?>

<h2>Form Edit Barang</h2>
<form method="POST">
  <label>Kode</label>
  <input type="text" name="kode_barang" value="<?= $data['kode_barang'] ?>" disabled required>
  
  <label>Supplier</label>
  <select name="kode_supplier">
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
  
  <label>Nama</label>
  <input type="text" name="nama_barang" value="<?= $data['nama_barang'] ?>" required>

  <label>Harga</label>
  <input type="number" name="harga" value="<?= $data['harga'] ?>" required>

  <input type="reset" name="reset" value="Reset">
  <input type="submit" name="submit" value="Kirim">
</form>
