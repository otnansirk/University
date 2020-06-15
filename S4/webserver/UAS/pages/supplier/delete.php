<?php
    $id = get("id");
    $result = $db->delete(
        "supplier", 
        "kode_supplier='$id'"
    );
    redirect("?p=supplier/index");
?>
