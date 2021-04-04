		<div class="header">
			<div class="header-left">
				<a href="" class="burger-menu"><i data-feather="menu"></i></a>

				<div class="header-search">
					<i data-feather="search"></i>
					<input type="search" class="form-control" placeholder="What are you looking for?">
				</div><!-- header-search -->
			</div><!-- header-left -->

			<div class="header-right">
				<div class="dropdown dropdown-loggeduser">
					<a href="" class="dropdown-link" data-toggle="dropdown">
						<div class="avatar avatar-sm">
							<img src="{{ asset('img/profile') }}/{{ Auth::user()->image }}" class="rounded-circle" alt="">
						</div><!-- avatar -->
					</a>
					<div class="dropdown-menu dropdown-menu-right">
						<div class="dropdown-menu-header">
							<div class="media align-items-center">
								<div class="avatar">
									<img src="{{ asset('img/profile') }}/{{ Auth::user()->image }}" class="rounded-circle" alt="">
								</div><!-- avatar -->
								<div class="media-body mg-l-10">
									<h6>{{ Auth::user()->username }}</h6>
									<span><?php
									$user_type = Auth::user()->user_type_code;
									if ($user_type == 1) {
										echo "Administrator";
									} elseif ($user_type == 2) {
										echo "Pengelola";
									} elseif ($user_type == 3) {
										echo "Dosen";
									} elseif ($user_type == 4) {
										echo  "Mahasiswa";
									} ?></span>
								</div>
							</div><!-- media -->
						</div>
						<div class="dropdown-menu-body">
							<a href="{{ url('profile') }}" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
							<a href="{{ url('profile/edit_password', Auth::user()->id) }}" class="dropdown-item"><i data-feather="edit"></i> Edit Password</a>
							<a href="{{ url('auth/logout') }}" class="dropdown-item"><i data-feather="log-out"></i> Sign Out</a>
						</div>
					</div><!-- dropdown-menu -->
				</div>
			</div><!-- header-right -->
		</div><!-- header -->