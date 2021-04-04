<?php
function CheckStatusCode($code)
{
    if ($code == 13) {
        return "Set Penguji dibutuhkan";
    }elseif ($code == 15) {
        return "Sedang menunggu konfirmasi penguji";
    }else{
        return "Belum mengkonfirmasi";
    }
}
?>