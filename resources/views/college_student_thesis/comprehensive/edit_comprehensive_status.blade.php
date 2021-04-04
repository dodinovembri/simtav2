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
                    <li class="breadcrumb-item"><a href="{{ url('college_student_thesis') }}">Kelola Skripsi Mahasiswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Perbaharui Status Komprehensif</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Perbaharui Status Komprehensif</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div id="paneProfile" class="tab-pane active show">
                            <h6>{{ $college_student->person->nim }} - {{ $college_student->person->given_name." ".$college_student->person->middle_name." ".$college_student->person->surname }}</h6>
                            <hr>
                            <hr class="op-0">
                            <a href="#completed_comprehensive" data-toggle="modal" class="btn btn-brand-01 btn-sm btn-uppercase flex-fill">Selesai Komprehensif</a>
                            <div class="modal fade" id="completed_comprehensive" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h6 class="modal-title" id="exampleModalLabel">Verifikasi</h6>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true"><i data-feather="x"></i></span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p class="mg-b-0">Anda yakin mahasiswa ini sudah selesai kompre? </p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                            <a href="{{ url('college_student_thesis/update_comprehensive_status', $college_student->id) }}"><button type="button" class="btn btn-primary">Selesai</button></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr class="op-0">
                        </div><!-- tab-pane -->
                        <script>
                            $("#fieldForm").validate();
                        </script>
                    </div>
                </div><!-- tab-content -->
            </div><!-- card -->
        </div><!-- col -->
    </div><!-- row -->
</div><!-- content-body -->


@include('components.footer')

</div>

@endsection