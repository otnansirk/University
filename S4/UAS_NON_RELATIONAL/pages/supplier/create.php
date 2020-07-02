<?php

if (post('submit')) {
    $kode_supplier = post('kode_supplier');
    $nama_supplier = post('nama_supplier');
    $no_telepon    = post('no_telepon');
    $alamat        = post('alamat');

    $check = $db->findOne(
      "supplier", 
      [
        "ping" => 1
      ]
    );
    // $val = [];
    // foreach ($check as $key => $value) {
    //   $val[] = $value;
    // }
    var_dump($check->toArray());
    if($check->toArray()) {
      $message = 'Duplicate supplier dengan kode ' .$kode_supplier;
      include 'message/danger.php';
      exit();
    }

    $result = $db->create(
      "supplier",
      [
        "kode_supplier" => $kode_supplier,
        "nama_supplier" => $nama_supplier, 
        "no_telepon" => $no_telepon, 
        "alamat" => $alamat
      ]
    );
    
    if ($result) {
      redirect("?p=supplier/index");
    } else {
      $message = 'Gagal tambah data supplier. Cek kembali form anda !';
      include 'message/danger.php';
    }

}
?>

<h2>Form Tambah Supplier</h2>
<form method="POST">
  <label>Kode</label>
  <input type="text" name="kode_supplier" required>
  
  <label>Nama</label>
  <input type="text" name="nama_supplier" required>

  <label>No. Telepon</label>
  <input type="number" name="no_telepon" required>

  <label>Alamat</label>
  <textarea name="alamat" cols="30" rows="10" required></textarea>

  <input type="reset" name="reset" value="Reset">
  <input type="submit" name="submit" value="Kirim">
</form>
