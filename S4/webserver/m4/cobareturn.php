<?php

function laporan($bulan)
{
    if ($bulan < 3) {
        $status = 'Report belum tersedia';
    } else {
        $status = 'Report belum tersedia';
    }
    return $status;
}

echo laporan(2);