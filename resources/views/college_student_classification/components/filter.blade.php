<select class="form-control select2" name="month" required="" onchange="window.location.href=this.value;" style="width: 180px">
    <?php if (isset($id)) { ?>
        <option value="">Pilih</option>
        <option value="{{ url('college_student_classification', 4) }}">Memenuhi Syarat</option>
        <option value="{{ url('college_student_classification', 2) }}">Tidak Memenuhi Syarat</option>
        <option value="{{ url('college_student_classification', 9) }}">Perpanjang Seminar Diterima</option>
        <option value="{{ url('college_student_classification', 10) }}">Perpanjang Seminar Ditolak</option>
    <?php } else { ?>
        <option value="">Pilih</option>
        <option value="{{ url('college_student_classification', 4) }}">Memenuhi Syarat</option>
        <option value="{{ url('college_student_classification', 2) }}">Tidak Memenuhi Syarat</option>
        <option value="{{ url('college_student_classification', 9) }}">Perpanjang Seminar Diterima</option>
        <option value="{{ url('college_student_classification', 10) }}">Perpanjang Seminar Ditolak</option>
    <?php } ?>
</select>
<br><br>