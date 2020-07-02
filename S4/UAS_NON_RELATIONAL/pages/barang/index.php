<?php
  $nama_barang  = get('nama_barang');
  $urutan_harga = get('harga');
  $data = $db->command([
    'aggregate' => 'barang',
    'pipeline' => [
      ['$lookup' => [
        'from'=> 'supplier',
        'localField' => 'kode_supplier',
        'foreignField' => 'kode_supplier',
        'as' => 'supplier'
      ]],
      ['$sort' => ['nama_barang' => 1]]
    ],
    'cursor' => new stdClass
  ]);

  if ($nama_barang || $urutan_harga) {
    $urutan_harga = ($urutan_harga == 'asc')? 1: -1;
    $data = $db->command([
      'aggregate' => 'barang',
      'pipeline' => [
        ['$lookup' => [
          'from'=> 'supplier',
          'localField' => 'kode_supplier',
          'foreignField' => 'kode_supplier',
          'as' => 'supplier'
        ]],
        ['$match' => ['nama_barang' => cRegex($nama_barang)]],
        ['$sort' => ['harga' => $urutan_harga]]
      ],
      'cursor' => new stdClass
    ]);
    
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
          <td><?= $value->nama_barang?></td>
          <td>Rp. <?= number_format($value->harga) ?></td>
          <td>
            <a href="?p=supplier/edit&id=<?= $value->supplier[0]->kode_supplier ?>"><?= $value->supplier[0]->nama_supplier ?></a>
          </td>
          <td>
              <a href="?p=barang/delete&id=<?= $value->_id ?>"><b>Delete</b></a> | 
              <a href="?p=barang/edit&id=<?= $value->_id ?>"><b>Update</b></a>
          </td>
        </tr>
      <?php
    }
    ?>
  </tbody>
</table>
