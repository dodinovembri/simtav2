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
					<li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Mahasiswa</li>
				</ol>
			</nav>
			<h4 class="content-title content-title-xs">List Mahasiswa</h4>
		</div>
	</div>
	<div class="content-body">
		<div class="component no-code">
			<div class="card">
				<div class="card-body">
					<div class="component">
						<select class="form-control select2" name="month" required="" onchange="window.location.href=this.value;" style="width: 180px">
							<?php if (isset($id)) { ?>
								<option value="{{ url('college_student_classification', $id) }}">
									<?php if ($id == 4) {
										echo "Memenuhi Syarat";
									} elseif ($id == 2) {
										echo "Tidak Memenuhi Syarat";
									} ?>
								</option>
								<?php if ($id == 4) { ?>
									<option value="{{ url('college_student_classification', 2) }}">Tidak Memenuhi Syarat</option>
								<?php } elseif ($id == 2) { ?>
									<option value="{{ url('college_student_classification', 4) }}">Memenuhi Syarat</option>
								<?php } ?>
							<?php }else{ ?>
									<option value="">Pilih</option>
									<option value="{{ url('college_student_classification', 4) }}">Memenuhi Syarat</option>
									<option value="{{ url('college_student_classification', 2) }}">Tidak Memenuhi Syarat</option>
							<?php } ?>
						</select><br><br>
						<table id="example1" class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>NIM</th>
									<th>Nama</th>
									<th>Tipe</th>
									<th>Status</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 0;
								foreach ($college_student_classification as $key => $value) {
									$no++; ?>
									<tr>
										<td>{{ $no }}</td>
										<td>{{ $value->person->nim }}</td>
										<td>{{ $value->person->given_name." ".$value->person->middle_name." ".$value->person->surname }}</td>
										<td><?php echo CheckUserType($value->person->person_type_code); ?></td>
										<td><?php echo CheckStatus($value->status); ?></td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>


	@include('components.footer')

</div>

@endsection