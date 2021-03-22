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
                    <li class="breadcrumb-item"><a href="{{ url('college_student_thesis') }}">Skripsi Saya</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Input Topik TA</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Input Topik TA</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <form action="{{ url('my_thesis/store_thesis_topic') }}" method="POST" enctype="multipart/form-data" id="formValidation">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="paneProfile" class="tab-pane active show">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Information</h6>
                                <hr>
                                <div class="form-group">
                                    <label class="form-label">Dosen Pembimbing</label>
                                    <select class="form-control select2" name="supervisor[]" required="" multiple="multiple">
										<option value="">Pilih</option>
										<?php foreach ($supervisor as $key => $value) { ?>
											<option value="{{ $value->id }}">{{ $value->nip }}{{ $value->nim }}</option>	
										<?php } ?>																
									</select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Topik TA</label>
                                    <select class="form-control select2" name="thesis_topic" required="">
										<option value="">Pilih</option>
										<?php foreach ($thesis_topics as $key => $value) { ?>
											<option value="{{ $value->id }}">{{ $value->thesis_topic_name }}</option>	
										<?php } ?>																
									</select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">File Konsultasi</label>
                                    <input type="file" class="form-control" name="consultation_file" id="consultation_file" required>
                                    <small class="text-infor">*File yang diterima hanya berekstensi .jpeg, .jpg, .png, .pdf dan ukuran maks. 5 MB</small>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Judul TA</label>
                                    <input type="text" class="form-control" name="title_of_thesis" id="title_of_thesis" required>
                                </div>

                                <hr class="op-0">

                                <button class="btn btn-brand-02">Save</button>
                                <a href="{{ url('my_thesis') }}"><button type="button" class="btn btn-white mg-l-2">Cancel</button></a>
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