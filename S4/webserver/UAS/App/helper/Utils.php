<?php

    function get(string $param)
    {
        return isset($_GET[$param])?$_GET[$param]: false;
    }

    function post(string $param)
    {
        return isset($_POST[$param])?$_POST[$param]: false;
    }

    function redirect(string $direction)
    {
        echo "<script>location.href='$direction'</script>";
    }