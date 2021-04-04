@extends('layouts.backend')

@section('content')

@include('components.sidebar')

<div class="content">

    @include('components.header')

    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('home') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('college_student_thesis') }}">Kelola Skripsi Mahasiswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Ubah Dosen Penguji Kompre Mahasiswa</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Ubah Dosen Penguji Kompre Mahasiswa</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <form action="{{ url('manage_student_thesis/store_change_comprehensive_examiner', $student_thesis_examiner_id) }}" method="POST" enctype="multipart/form-data" id="formValidation">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="paneProfile" class="tab-pane active show">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Information</h6>
                                <hr>
                                <div class="form-group">
                                    <label class="form-label">Pilih Dosen Pengganti</label>
                                    <select class="form-control select2" name="examiner" required="">
										<option value="">Pilih</option>
										<?php foreach ($examiners as $key => $value) { ?>
											<option value="{{ $value->id }}">{{ $value->nip }} - {{ $value->given_name." ".$value->middle_name." ".$value->surname }}</option>	
										<?php } ?>																
									</select>
                                </div>

                                <hr class="op-0">

                                <button class="btn btn-brand-01">Simpan</button>
                                <a href="{{ url('manage_student_thesis') }}"><button type="button" class="btn btn-white mg-l-2">Batal</button></a>
                            </div>
                        </form>
                        <script>
                            $("#formValidation").validate();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('components.footer')

</div>

@endsection