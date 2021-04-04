<div class="profile-sidebar">
    <div class="profile-sidebar-header">
        <div class="avatar"><img src="{{ asset('img/profile') }}/{{ $user->image }}" class="rounded-circle" alt=""></div>

        <h5>{{ $student_thesis->person->given_name." ".$student_thesis->person->middle_name." ".$student_thesis->person->surname }}</h5>
        <p>{{ $student_thesis->person->nim }}</p>
        <span>{{ $student_thesis->person->year_of_education->year_of_education_name }}</span>
    </div><!-- profile-sidebar-header -->
</div><!-- profile-sidebar -->