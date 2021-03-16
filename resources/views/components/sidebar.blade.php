<div class="sidebar">
	<div class="sidebar-header">
		<div>
			<a href="{{ url('/') }}" class="sidebar-logo"><span>SIMTA</span></a>
			<small class="sidebar-logo-headline">Thesis Management Information System</small>
		</div>
	</div>
	<div id="dpSidebarBody" class="sidebar-body">
		<ul class="nav nav-sidebar">
			<li class="nav-label"><label class="content-label">Transactions</label></li>
			<li class="nav-item"><a href="{{ url('user') }}" class="nav-link {{ (Request::is('home')) ? 'active' : '' }}"><i data-feather="bar-chart-2"></i> Dashboard </a></li>
			<li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="activity"></i> Kelola Skripsi Mahasiswa </a></li>

			<li class="nav-label"><label class="content-label">Data</label></li>
			<li class="nav-item"><a href="{{ url('lecturer') }}" class="nav-link  {{ (Request::is('lecturer')) || (Request::is('lecturer/*')) ? 'active' : '' }}"><i data-feather="user"></i> Dosen </a></li>
			<li class="nav-item"><a href="{{ url('college_student') }}" class="nav-link {{ (Request::is('college_student')) || (Request::is('college_student/*')) ? 'active' : '' }}"><i data-feather="user"></i> Mahasiswa </a></li>
			<li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="list"></i> Syarat Sempro </a></li>
			<li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="list"></i> Syarat Kompre </a></li>

			<li class="nav-label"><label class="content-label">Master Data</label></li>
			<li class="nav-item"><a href="{{ url('user') }}" class="nav-link {{ (Request::is('user')) || (Request::is('user/*')) ? 'active' : '' }}"><i data-feather="user"></i> User Pengguna </a></li>
			<li class="nav-item"><a href="{{ url('field_of_study') }}" class="nav-link {{ (Request::is('field_of_study')) || (Request::is('field_of_study/*')) ? 'active' : '' }}"><i data-feather="clipboard"></i> Bidang Studi </a></li>
			<li class="nav-item"><a href="{{ url('year_of_education') }}" class="nav-link"><i data-feather="calendar"></i> Angkatan </a></li>
			<li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="list"></i> Jurusan </a></li>
			<li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="award"></i> Topik TA </a></li>
		</ul>
	</div>
</div>