<?php
  $id = get('id');
  $data = $db->find(
    "supplier",
    [ "_id" => toOid($id) ]
  );
  foreach ($data as $key => $value) {
    $data = $value;
  }

  if (isset($_POST['submit'])) {
    $nama_supplier = $_POST['nama_supplier'];
    $no_telepon = $_POST['no_telepon'];
    $alamat = $_POST['alamat'];

    $result = $db->update(
      "supplier",
      [
        "nama_supplier" => $nama_supplier, 
        "no_telepon" => $no_telepon, 
        "alamat" => $alamat
      ],
      [ "_id" => toOid($id) ]
    );
    
    if ($result) {
      redirect("?p=supplier/index");
    } else {
      $message = 'Gagal edit supplier dengan kode ' .$id;
      include 'message/danger.php';
    }
  }

?>

<h2>Form Edit Supplier</h2>
<form method="POST">
  <label>Kode</label>
  <input type="text" name="kode_supplier" value="<?= $data->kode_supplier ?>" disabled >
  
  <label>Nama</label>
  <input type="text" name="nama_supplier" value="<?= $data->nama_supplier ?>" required>

  <label>No. Telepon</label>
  <input type="number" name="no_telepon" value="<?= $data->no_telepon ?>" required>

  <label>Alamat</label>
  <textarea name="alamat" cols="30" rows="10" required><?= $data->alamat ?></textarea>

  <input type="reset" name="reset" value="Reset">
  <input type="submit" name="submit" value="Kirim">
</form>