<?php
    $id = get("id");
    $result = $db->delete(
        "stok", 
        [ "_id" => toOid($id) ]
    );
    redirect("?p=stok/index");
?>
