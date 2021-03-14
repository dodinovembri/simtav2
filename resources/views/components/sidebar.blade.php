    <div class="sidebar">
      <div class="sidebar-header">
        <div>
          <a href="../index.html" class="sidebar-logo"><span>SIMTA</span></a>
          <small class="sidebar-logo-headline">Thesis Management Information System</small>
        </div>
      </div><!-- sidebar-header -->
      <div id="dpSidebarBody" class="sidebar-body">
        <ul class="nav nav-sidebar">
          <li class="nav-label"><label class="content-label">Transactions</label></li>
          <li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="user"></i> Kelola Skripsi Mahasiswa </a></li>

          <li class="nav-label"><label class="content-label">Data</label></li>
          <li class="nav-item"><a href="{{ url('lecturer') }}" class="nav-link  {{ (Request::is('lecturer')) || (Request::is('lecturer/*')) ? 'active' : '' }}"><i data-feather="user"></i> Dosen </a></li>
          <li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="user"></i> Mahasiswa </a></li>
          <li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="user"></i> Syarat Sempro </a></li>
          <li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="user"></i> Syarat Kompre </a></li>

          <li class="nav-label"><label class="content-label">Master Data</label></li>
          <li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="user"></i> User Pengguna </a></li>
          <li class="nav-item"><a href="{{ url('field_of_study') }}" class="nav-link {{ (Request::is('field_of_study')) || (Request::is('field_of_study/*')) ? 'active' : '' }}"><i data-feather="clipboard"></i> Bidang Studi </a></li>
          <li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="user"></i> Angkatan </a></li>
          <li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="user"></i> Jurusan </a></li>
          <li class="nav-item"><a href="{{ url('user') }}" class="nav-link"><i data-feather="user"></i> Topik TA </a></li>          
        </ul>

      </div><!-- sidebar-body -->
    </div><!-- sidebar -->