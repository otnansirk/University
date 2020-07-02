<?php
$supplier = $db->findAll("supplier");

if (post('submit')) {
  $kode_barang   = post('kode_barang');
  $nama_barang   = post('nama_barang');
  $harga         = post('harga');
  $kode_supplier = post('kode_supplier');

  $check = $db->find(
    "barang", 
    ["kode_barang"=> $kode_barang]
  );

  if($check->toArray()) {
    $message = 'Duplicate barang dengan kode ' .$kode_barang;
    include 'message/danger.php';
    exit();
  }

  $result = $db->create(
    "barang",[
      "kode_barang" => $kode_barang, 
      "nama_barang" => $nama_barang, 
      "harga" => $harga, 
      "kode_supplier" => $kode_supplier
    ]
  );
  
  if ($result) {
    redirect("?p=barang/index");
  } else {
    $message = 'Gagal tambah barang. Cek kembali form anda !';
    include 'message/danger.php';
  }

}
?>

<h2>Form Tambah Barang</h2>
<form method="POST">
  <label>Kode</label>
  <input type="text" name="kode_barang" required>
  
  <label>Supplier</label>
  <select name="kode_supplier">
    <?php
      foreach ($supplier as $value) {
        ?>
        <option value="<?= $value->kode_supplier ?>"><?= $value->nama_supplier ?></option>
        <?php        
      }
    ?>
  </select>
  
  <label>Nama</label>
  <input type="text" name="nama_barang" required>

  <label>Harga</label>
  <input type="number" name="harga" required>

  <input type="reset" name="reset" value="Reset">
  <input type="submit" name="submit" value="Kirim">
</form>
