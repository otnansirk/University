<?php
    $id = get("id");
    $result = $db->delete(
        "stok", 
        "kode_stok='$id'"
    );
    redirect("?p=stok/index");
?>
