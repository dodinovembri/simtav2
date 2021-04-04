<?php if ($value->thesis_status_code == 13) { ?>
    <a href="{{ url('manage_student_thesis/create_examiner', $value->college_student_id) }}"><b>{{ $value->person->nim }}</b></a>
<?php } elseif ($value->thesis_status_code == 15) { ?>
    <a href="{{ url('manage_student_thesis/proposal_confirm_status', $value->college_student_id) }}"><b>{{ $value->person->nim }}</b></a>
<?php } elseif ($value->thesis_status_code == 24) { ?>
    <a href="{{ url('manage_student_thesis/create_examiner_for_comprehensive', $value->college_student_id) }}"><b>{{ $value->person->nim }}</b></a>
<?php } elseif ($value->thesis_status_code == 26) { ?>
    <a href="{{ url('manage_student_thesis/comprehensive_confirm_status', $value->college_student_id) }}"><b>{{ $value->person->nim }}</b></a>
<?php } ?>