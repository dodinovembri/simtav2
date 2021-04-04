<?php if ($value->thesis_status_code == 15) { ?>
    <a href="{{url('manage_my_student_thesis/proposal_seminar_confirm', $value->id)}}"><b>{{ $value->person->nim }}</b></a>
<?php } elseif ($value->thesis_status_code == 26) { ?>
    <a href="{{url('manage_my_student_thesis/comprehensive_confirm', $value->id)}}"><b>{{ $value->person->nim }}</b></a>
<?php } elseif ($value->thesis_status_code == 5) { ?>
    <a href="{{url('manage_my_student_thesis/show', $value->id)}}"><b>{{ $value->person->nim }}</b></a>
<?php } ?>