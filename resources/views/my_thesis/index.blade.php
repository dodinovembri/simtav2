@extends('layouts.backend')

@section('content')

@include('components.sidebar')


<div class="content">
	@include('components.header')
	@include('components.helper')
	<div class="content-header">
		<div>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Skripsi Saya</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-sm">Skripsi Saya</h4>
		</div>
	</div><!-- content-header -->
	<div class="content-body">
		<div class="row row-xs">
			<div class="col-md-4">
				<ul class="list-group list-group-settings">
					<li class="list-group-item list-group-item-action">
						<a href="#paneProfile" data-toggle="tab" class="media active">
							<i data-feather="user"></i>
							<div class="media-body">
								<h6>KRS, KP & Transkrip Nilai</h6>
								<span>About your personal information</span>
							</div>
						</a>
					</li>
					<li class="list-group-item list-group-item-action">
						<a href="#paneAccount" data-toggle="tab" class="media">
							<i data-feather="settings"></i>
							<div class="media-body">
								<h6>Topik TA</h6>
								<span>Manage your account setting options</span>
							</div>
						</a>
					</li>
					<li class="list-group-item list-group-item-action">
						<a href="#paneSecurity" data-toggle="tab" class="media">
							<i data-feather="shield"></i>
							<div class="media-body">
								<h6>Perpanjangan TA</h6>
								<span>Manage your security information</span>
							</div>
						</a>
					</li>
					<li class="list-group-item list-group-item-action">
						<a href="#paneNotification" data-toggle="tab" class="media">
							<i data-feather="bell"></i>
							<div class="media-body">
								<h6>Seminar Proposal</h6>
								<span>Choose how you receive notifications</span>
							</div>
						</a>
					</li>
					<li class="list-group-item list-group-item-action">
						<a href="#paneBilling" data-toggle="tab" class="media">
							<i data-feather="credit-card"></i>
							<div class="media-body">
								<h6>Kompre</h6>
								<span>Your billing and payment information</span>
							</div>
						</a>
					</li>
				</ul>
			</div><!-- col -->
			<div class="col-md-8">
				<div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
					<div class="tab-content">
						<div id="paneProfile" class="tab-pane active show">
							<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Your Profile Information</h6>
							<hr>
							<div class="form-settings">
								<div class="form-group">
									<label class="form-label">Full Name</label>
									<input type="text" class="form-control" placeholder="Enter your fullname" value="Dwayne Johnson">
									<div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
								</div><!-- form-group -->

								<div class="form-group">
									<label class="form-label">Your Bio</label>
									<textarea class="form-control" rows="3" placeholder="Write something about you">A front-end developer that focus more on user interface design, a web interface wizard, a connector of awesomeness and a long lost twin of Vin Diesel.</textarea>
								</div><!-- form-group -->

								<div class="form-group">
									<label class="form-label">URL</label>
									<input type="text" class="form-control" placeholder="Enter your website address" value="http://themepixels.me">
								</div><!-- form-group -->

								<div class="form-group">
									<label class="form-label">Location</label>
									<input type="text" class="form-control" placeholder="Enter your location" value="San Francisco, CA">
								</div><!-- form-group -->

								<div class="form-group tx-13 tx-color-04">
									All of the fields on this page are optional and can be deleted at any time, and by filling them out, you're giving us consent to share this data wherever your user profile appears.
								</div>

								<hr class="op-0">

								<button class="btn btn-brand-02">Update Profile</button>
								<button class="btn btn-white mg-l-2">Reset Changes</button>
							</div>
						</div><!-- tab-pane -->
						<div id="paneAccount" class="tab-pane">
							<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Account Settings</h6>

							<hr>
							<div class="form-settings">
								<div class="form-group">
									<label class="form-label">Username</label>
									<input type="text" class="form-control" placeholder="Enter your username" value="dwayne.johnson">
									<div class="tx-11 tx-sans tx-color-04 mg-t-5">After changing your username, your old username becomes available for anyone else to claim.</div>
								</div><!-- form-group -->

								<hr>

								<div class="form-group">
									<label class="form-label text-danger">Delete Account</label>
									<p class="tx-sm tx-color-04">Once you delete your account, there is no going back. Please be certain.</p>
									<button class="btn btn-sm btn-danger">Delete Account</button>
								</div><!-- form-group -->
							</div><!-- form-settings -->
						</div><!-- tab-pane -->
						<div id="paneSecurity" class="tab-pane">
							<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Security Settings</h6>
							<hr>
							<div class="form-settings">
								<div class="form-group">
									<label class="form-label">Change Old Password</label>
									<input type="text" class="form-control" placeholder="Enter your old password">
									<input type="text" class="form-control mg-t-5" placeholder="New password">
									<input type="text" class="form-control mg-t-5" placeholder="Confirm new password">
								</div><!-- form-group -->

								<hr>

								<div class="form-group">
									<label class="form-label">Two Factor Authentication</label>
									<button class="btn btn-brand-02 tx-sm">Enable two-factor authentication</button>
									<div class="tx-11 tx-sans tx-color-04 mg-t-7">Two-factor authentication adds an additional layer of security to your account by requiring more than just a password to log in.</div>
								</div><!-- form-group -->

								<hr>

								<div class="form-group">
									<label class="form-label">Sessions</label>
									<p class="tx-sm tx-color-03">This is a list of devices that have logged into your account. Revoke any sessions that you do not recognize.</p>

									<ul class="list-group list-group-session">
										<li class="list-group-item">
											<div>
												<h6>San Francisco City 190.24.335.55</h6>
												<span>Your current session seen in United States</span>
											</div>
											<a href="" class="btn btn-xs btn-white">More Info</a>
										</li>
									</ul>
								</div><!-- form-group -->
							</div><!-- form-settings -->
						</div><!-- tab-pane -->
						<div id="paneNotification" class="tab-pane">
							<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Notification Settings</h6>
							<hr>
							<div class="form-settings mx-wd-100p">
								<div class="form-group">
									<label class="form-label mg-b-2">Security Alerts</label>
									<p class="tx-sm tx-color-04">Receive security alert notifications via email</p>

									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck1">
										<label class="custom-control-label" for="customCheck1">Email each time a vulnerability is found</label>
									</div>
									<div class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input" id="customCheck2">
										<label class="custom-control-label" for="customCheck2">Email a digest summary of vulnerabilities</label>
									</div>
								</div><!-- form-group -->

								<div class="form-group">
									<label class="form-label">SMS Notifications</label>
									<ul class="list-group list-group-notification">
										<li class="list-group-item">
											<p class="mg-b-0">Comments</p>
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch1">
												<label class="custom-control-label" for="customSwitch1">&nbsp;</label>
											</div>
										</li>
										<li class="list-group-item">
											<p class="mg-b-0">Updates From People</p>
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch2">
												<label class="custom-control-label" for="customSwitch2">&nbsp;</label>
											</div>
										</li>
										<li class="list-group-item">
											<p class="mg-b-0">Reminders</p>
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch3">
												<label class="custom-control-label" for="customSwitch3">&nbsp;</label>
											</div>
										</li>
										<li class="list-group-item">
											<p class="mg-b-0">Events</p>
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch4">
												<label class="custom-control-label" for="customSwitch4">&nbsp;</label>
											</div>
										</li>
										<li class="list-group-item">
											<p class="mg-b-0">Pages You Follow</p>
											<div class="custom-control custom-switch">
												<input type="checkbox" class="custom-control-input" id="customSwitch5">
												<label class="custom-control-label" for="customSwitch5">&nbsp;</label>
											</div>
										</li>
									</ul>
								</div><!-- form-group -->
							</div><!-- form-setting -->
						</div><!-- tab-pane -->
						<div id="paneBilling" class="tab-pane">
							<h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Billing Settings</h6>
							<hr>
							<div class="form-settings mx-wd-100p">
								<div class="form-group">
									<label class="form-label mg-b-2">Payment Method</label>
									<p class="tx-color-04 tx-13">You have not added a payment method</p>
									<button class="btn btn-brand-02 btn-sm">Add Payment Method</button>
								</div><!-- form-group -->

								<div class="form-group">
									<label class="form-label">Payment History</label>
									<div class="bd bg-gray-100 pd-20 tx-center">
										<p class="tx-13 mg-b-0">You have not made any payment.</p>
									</div>
								</div><!-- form-group -->
							</div><!-- form-settings -->
						</div><!-- tab-pane -->
					</div><!-- tab-content -->
				</div><!-- card -->
			</div><!-- col -->
		</div><!-- row -->
	</div><!-- content-body -->
	@include('components.footer')
</div><!-- content -->

@endsection