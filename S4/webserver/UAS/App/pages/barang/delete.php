<?php
    $id = get("id");
    $result = $db->delete(
        "barang", 
        "kode_barang='$id'"
    );
    redirect("?p=barang/index");
?>
