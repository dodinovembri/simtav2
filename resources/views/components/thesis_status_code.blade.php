<?php 

    if ($value->thesis_status_code == 1) { 
        echo "KRS, KP & Transkrip Nilai diupload";
    } elseif ($value->thesis_status_code == 2) { 
        echo "KRS, KP & Transkrip Nilai ditolak";
    } elseif ($value->thesis_status_code == 3) { 
        echo "";
    } elseif ($value->thesis_status_code == 4) {
        echo "KRS, KP & Transkrip Nilai diterima";
    } elseif ($value->thesis_status_code == 5) {
        echo "Topik Tugas Akhir disubmit";
    } elseif ($value->thesis_status_code == 6) {
        echo "Topik Tugas Akhir diterima";
    } elseif ($value->thesis_status_code == 7) {
        echo "Topik Tugas Akhir ditolak";
    } elseif ($value->thesis_status_code == 8) {
        echo "Perpanjang Seminar diupload";
    } elseif ($value->thesis_status_code == 9) {
        echo "Perpanjang Seminar diterima";
    } elseif ($value->thesis_status_code == 10) {
        echo "Perpanjang Seminar ditolak";
    } elseif ($value->thesis_status_code == 11) {
        echo "Mendafar Seminar Proposal";
    } elseif ($value->thesis_status_code == 12) {
        echo "Persyaratan Seminar Proposal ditolak";
    } elseif ($value->thesis_status_code == 13) {
        echo "Persyaratan Seminar Proposal diterima";
    } elseif ($value->thesis_status_code == 14) {
        echo "Penguji Seminar Proposal diset";
    } elseif ($value->thesis_status_code == 15) {
        echo "Jadwal Seminar Proposal diset";
    } elseif ($value->thesis_status_code == 16) {
        echo "Jadwal Seminar disetujui oleh Dosen";
    } elseif ($value->thesis_status_code == 17) {
        echo "Seminar Proposal sudah selesai";
    } elseif ($value->thesis_status_code == 18) {
        echo "SK Seminar Proposal diupload";
    } elseif ($value->thesis_status_code == 19) {
        echo "Perpanjang Kompre diupload";
    } elseif ($value->thesis_status_code == 20) {
        echo "Perpanjang Kompre diterima";
    } elseif ($value->thesis_status_code == 21) {
        echo "Perpanjang Kompre ditolak";
    } elseif ($value->thesis_status_code == 22) {
        echo "Mendafar Komprehensive";
    } elseif ($value->thesis_status_code == 23) {
        echo "Persyaratan Komprehensive ditolak";
    } elseif ($value->thesis_status_code == 24) {
        echo "Persyaratan Komprehensive diterima";
    } elseif ($value->thesis_status_code == 25) {
        echo "Penguji Komprehensive diset";
    } elseif ($value->thesis_status_code == 26) {
        echo "Jadwal Komprehensive diset";
    } elseif ($value->thesis_status_code == 27) {
        echo "Jadwal Komprehensive disetujui oleh Dosen";
    } elseif ($value->thesis_status_code == 28) {
        echo "Komprehensive sudah selesai";
    } elseif ($value->thesis_status_code == 29) {
        echo "SK Komprehensive diupload";
    }

?>