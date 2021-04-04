<?php if ($value->thesis_status_code == 1) { ?>
    <a href="{{ url('college_student_thesis/show', $value->id) }}"><b>{{ $value->person->nim }}</b></a>
<?php } elseif ($value->thesis_status_code == 11) { ?>
    <a href="{{ url('college_student_thesis/check_seminar_register', $value->id) }}"><b>{{ $value->person->nim }}</b></a>
<?php } elseif ($value->thesis_status_code == 14) { ?>
    <a href="{{ url('college_student_thesis/set_examiner_schedule', $value->id) }}"><b>{{ $value->person->nim }}</b></a>
<?php } elseif ($value->thesis_status_code == 16) { ?>
    <a href="{{ url('college_student_thesis/edit_examiner_status', $value->id) }}"><b>{{ $value->person->nim }}</b></a>
<?php } elseif ($value->thesis_status_code == 22) { ?>
    <a href="{{ url('college_student_thesis/check_comprehensive', $value->id) }}"><b>{{ $value->person->nim }}</b></a>
<?php } elseif ($value->thesis_status_code == 25) { ?>
    <a href="{{ url('college_student_thesis/set_examiner_comprehensive_schedule', $value->id) }}"><b>{{ $value->person->nim }}</b></a>
<?php } elseif ($value->thesis_status_code == 27) { ?>
    <a href="{{ url('college_student_thesis/edit_comprehensive_status', $value->id) }}"><b>{{ $value->person->nim }}</b></a>
<?php } ?>