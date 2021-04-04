<select class="form-control select2" name="month" required="" onchange="window.location.href=this.value;" style="width: 250px">
    <?php if (isset($id)) { ?>
        <option value="{{ url('college_student_classification', 4) }}"><?php echo CheckFilter($id); ?></option>
        <option value="{{ url('college_student_classification', 4) }}">Memenuhi Syarat</option>
        <option value="{{ url('college_student_classification', 2) }}">Tidak Memenuhi Syarat</option>
        <option value="{{ url('college_student_classification', 9) }}">Perpanjang Seminar Diterima</option>
        <option value="{{ url('college_student_classification', 10) }}">Perpanjang Seminar Ditolak</option>
        <option value="{{ url('college_student_classification', 17) }}">Sudah Selesai Seminar</option>
    <?php } else { ?>
        <option value="">Pilih</option>
        <option value="{{ url('college_student_classification', 4) }}">Memenuhi Syarat</option>
        <option value="{{ url('college_student_classification', 2) }}">Tidak Memenuhi Syarat</option>
        <option value="{{ url('college_student_classification', 9) }}">Perpanjang Seminar Diterima</option>
        <option value="{{ url('college_student_classification', 10) }}">Perpanjang Seminar Ditolak</option>
        <option value="{{ url('college_student_classification', 17) }}">Sudah Selesai Seminar</option>
    <?php } ?>
</select>
<br><br>

<?php 
    function CheckFilter($id)
    {
        if ($id == 4) {
            return "Memenuhi Syarat";
        }elseif ($id == 2) {
            return "Tidak Memenuhi Syarat";
        }elseif ($id == 9) {
            return "Perpanjang Seminar Diterima";
        }elseif ($id == 10) {
            return "Perpanjang Seminar Ditolak";
        }elseif ($id == 17) {
            return "Sudah Selesai Seminar";
        }
    }

?>