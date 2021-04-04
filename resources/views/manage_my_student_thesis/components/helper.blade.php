<?php 
    function CheckStatusCode($code)
    {
        if ($code == 5) {
            return "Topik TA di Submit";
        }elseif ($code == 8) {
            return "Perpanjang Seminar Proposal di Submit";
        }elseif ($code == 15) {
            return "Jadwal ujian seminar proposal sudah di set.";
        }
    }
?>