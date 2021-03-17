<div class="sidebar">
	<div class="sidebar-header">
		<div>
			<a href="{{ url('/') }}" class="sidebar-logo"><span>SIMTA</span></a>
			<small class="sidebar-logo-headline">Thesis Management Information System</small>
		</div>
	</div>
	<div id="dpSidebarBody" class="sidebar-body">
		<ul class="nav nav-sidebar">
			<?php if (Auth::user()->user_type_code == 1) { ?>
				<li class="nav-label"><label class="content-label">Transactions</label></li>
				<li class="nav-item"><a href="{{ url('home') }}" class="nav-link {{ (Request::is('home')) ? 'active' : '' }}"><i data-feather="bar-chart-2"></i> Dashboard </a></li>
				<li class="nav-item"><a href="{{ url('college_student_thesis') }}" class="nav-link {{ (Request::is('college_student_thesis')) || (Request::is('college_student_thesis/*')) ? 'active' : '' }}"><i data-feather="activity"></i> Kelola Skripsi Mahasiswa </a></li>

				<li class="nav-label"><label class="content-label">Data</label></li>
				<li class="nav-item"><a href="{{ url('lecturer') }}" class="nav-link  {{ (Request::is('lecturer')) || (Request::is('lecturer/*')) ? 'active' : '' }}"><i data-feather="user"></i> Dosen </a></li>
				<li class="nav-item"><a href="{{ url('college_student') }}" class="nav-link {{ (Request::is('college_student')) || (Request::is('college_student/*')) ? 'active' : '' }}"><i data-feather="user"></i> Mahasiswa </a></li>
				<li class="nav-item"><a href="{{ url('proposal_seminar_requirement') }}" class="nav-link {{ (Request::is('proposal_seminar_requirement')) || (Request::is('proposal_seminar_requirement/*')) ? 'active' : '' }}"><i data-feather="list"></i> Syarat Sempro </a></li>
				<li class="nav-item"><a href="{{ url('comprehensive_requirement') }}" class="nav-link {{ (Request::is('comprehensive_requirement')) || (Request::is('comprehensive_requirement/*')) ? 'active' : '' }}"><i data-feather="list"></i> Syarat Kompre </a></li>

				<li class="nav-label"><label class="content-label">Master Data</label></li>
				<li class="nav-item"><a href="{{ url('user') }}" class="nav-link {{ (Request::is('user')) || (Request::is('user/*')) ? 'active' : '' }}"><i data-feather="user"></i> User </a></li>
				<li class="nav-item"><a href="{{ url('field_of_study') }}" class="nav-link {{ (Request::is('field_of_study')) || (Request::is('field_of_study/*')) ? 'active' : '' }}"><i data-feather="clipboard"></i> Bidang Studi </a></li>
				<li class="nav-item"><a href="{{ url('year_of_education') }}" class="nav-link {{ (Request::is('year_of_education')) || (Request::is('year_of_education/*')) ? 'active' : '' }}"><i data-feather="calendar"></i> Angkatan </a></li>
				<li class="nav-item"><a href="{{ url('majors') }}" class="nav-link {{ (Request::is('majors')) || (Request::is('majors/*')) ? 'active' : '' }}"><i data-feather="list"></i> Jurusan </a></li>
				<li class="nav-item"><a href="{{ url('thesis_topic') }}" class="nav-link {{ (Request::is('thesis_topic')) || (Request::is('thesis_topic/*')) ? 'active' : '' }}"><i data-feather="award"></i> Topik TA </a></li>
			<?php }elseif (Auth::user()->user_type_code == 2){ ?>
				<li class="nav-label"><label class="content-label">Transactions</label></li>
				<li class="nav-item"><a href="{{ url('home') }}" class="nav-link {{ (Request::is('home')) ? 'active' : '' }}"><i data-feather="bar-chart-2"></i> Dashboard </a></li>
				<li class="nav-item"><a href="{{ url('college_student_thesis') }}" class="nav-link {{ (Request::is('college_student_thesis')) || (Request::is('college_student_thesis/*')) ? 'active' : '' }}"><i data-feather="activity"></i> Kelola Skripsi Mahasiswa </a></li>
			<?php }elseif (Auth::user()->user_type_code == 3){ ?>
				<li class="nav-label"><label class="content-label">Transactions</label></li>
				<li class="nav-item"><a href="{{ url('home') }}" class="nav-link {{ (Request::is('home')) ? 'active' : '' }}"><i data-feather="bar-chart-2"></i> Dashboard </a></li>
				<li class="nav-item"><a href="{{ url('manage_student_thesis') }}" class="nav-link {{ (Request::is('manage_student_thesis')) || (Request::is('manage_student_thesis/*')) ? 'active' : '' }}"><i data-feather="activity"></i> Kelola Skripsi Mahasiswa </a></li>
			<?php }elseif (Auth::user()->user_type_code == 4){ ?>
				<li class="nav-label"><label class="content-label">Transactions</label></li>
				<li class="nav-item"><a href="{{ url('home') }}" class="nav-link {{ (Request::is('home')) ? 'active' : '' }}"><i data-feather="bar-chart-2"></i> Dashboard </a></li>
				<li class="nav-item"><a href="{{ url('my_thesis') }}" class="nav-link {{ (Request::is('my_thesis')) || (Request::is('my_thesis/*')) ? 'active' : '' }}"><i data-feather="activity"></i> Skripsi Saya </a></li>
			<?php } ?>
		</ul>
	</div>
</div>