<?php
    $id = get("id");
    $result = $db->delete(
        "barang", 
        [ "_id"=> toOid($id)]
    );
    redirect("?p=barang/index");
?>
