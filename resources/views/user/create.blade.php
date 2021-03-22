@extends('layouts.backend')

@section('content')

@include('components.sidebar')

<div class="content">

    @include('components.header')

    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('user') }}">User</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah User</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Tambah User</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <form action="{{ url('user/store') }}" method="POST">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="paneProfile" class="tab-pane active show">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Information</h6>
                                <hr>
                                <div class="form-group">
                                    <label class="form-label">Dosen/ Mahasiswa</label>
                                    <select class="form-control select2" name="new_user[]" required="" multiple="multiple">
										<option value="">Pilih</option>
										<?php foreach ($person as $key => $value) { ?>
											<option value="{{ $value->id }}">{{ $value->nip }}{{ $value->nim }}</option>	
										<?php } ?>																
									</select>
                                </div>

                                <hr class="op-0">

                                <button class="btn btn-brand-02">Save User</button>
                                <button type="button" class="btn btn-white mg-l-2">Reset Changes</button>
                            </div><!-- tab-pane -->
                        </form>
                    </div><!-- tab-content -->
                </div><!-- card -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- content-body -->


    @include('components.footer')

</div>

@endsection