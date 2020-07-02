<?php
    $id = get("id");
    $result = $db->delete(
        "supplier", 
        [ "_id"=> toOid($id)]
    );
    redirect("?p=supplier/index");
?>
