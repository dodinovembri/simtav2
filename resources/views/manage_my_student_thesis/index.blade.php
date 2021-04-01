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
						@include('components.flash')
						{{--@include('manage_my_student_thesis.components.filter')--}}
						<table id="example1" class="table">
							<thead>
								<tr>
									<th>No</th>
									<th>NIM</th>
									<th>Nama</th>
									<th>Keterangan</th>
								</tr>
							</thead>
							<tbody>
								<?php $no = 0;
								foreach ($manage_my_student_thesis as $key => $value) {
									$no++; ?>
									@include('manage_my_student_thesis.components.helper')
									<tr>
										<td>{{ $no }}</td>
										<td><a href="{{url('manage_my_student_thesis/show', $value->id)}}"><b>{{ $value->person->nim }}</b></a></td>
										<td>{{ $value->person->given_name." ".$value->person->middle_name." ".$value->person->surname }}</td>
										<td><?php echo CheckStatusCode($value->thesis_status_code); ?></td>
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