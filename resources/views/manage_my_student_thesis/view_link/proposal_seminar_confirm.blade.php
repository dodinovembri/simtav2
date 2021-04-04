@extends('layouts.backend')

@section('content')

@include('components.sidebar')

<div class="content">

    @include('components.header')

    <div class="content-header">
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('manage_my_student_thesis') }}">Kelola Skripsi Mahasiswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Konfirmasi Kesediaan Menguji</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Konfirmasi Kesediaan Menguji</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div id="paneProfile" class="tab-pane active show">
                            <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Konfirmasi kesediaan menguji seminar proposal</h6>
                            <hr>
                            <div class="form-group">
                                <h6>{{ $college_student->person->nim }} - {{ $college_student->person->given_name." ".$college_student->person->middle_name." ".$college_student->person->surname }}</h6>
                            </div><!-- form-group -->
                            <hr class="op-0">
                            <div class="form-group">
                                <label class="form-label">Jadwal menguji</label>
                                <p>{{ $college_student->proposal_seminar_schedule }}</p>
                            </div><!-- form-group -->

                            <hr class="op-0">

                            @include('manage_my_student_thesis.view_link.components.action')
                        </div><!-- tab-pane -->
                    </div>
                </div><!-- tab-content -->
            </div><!-- card -->
        </div><!-- col -->
    </div><!-- row -->
</div><!-- content-body -->


@include('components.footer')

</div>

@endsection