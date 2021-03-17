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
                    <li class="breadcrumb-item active" aria-current="page">Input KRS, KP dan Transkrip Nilai</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Input KRS, KP dan Transkrip Nilai</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <form action="{{ url('my_thesis/store_kkt_file') }}" method="POST" enctype="multipart/form-data" id="kktForm">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="paneProfile" class="tab-pane active show">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Information</h6>
                                <hr>
                                <div class="form-group">
                                    <label class="form-label">Berkas KRS</label>
                                    <input type="file" class="form-control" name="kkt_file[0]" id="krs_file" required>
                                    <input type="hidden" name="information_type_code[]" value="1">
                                    <small class="text-infor">*File yang diterima hanya berekstensi .jpeg, .jpg, .png, .pdf dan ukuran maks. 5 MB</small>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Berkas KP</label>
                                    <input type="file" class="form-control" name="kkt_file[1]" id="kp_file" required>
                                    <input type="hidden" name="information_type_code[]" value="2">
                                    <small class="text-infor">*File yang diterima hanya berekstensi .jpeg, .jpg, .png, .pdf dan ukuran maks. 5 MB</small>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Transkrip Nilai</label>
                                    <input type="file" class="form-control" name="kkt_file[2]" id="transkrip_file" required>
                                    <input type="hidden" name="information_type_code[]" value="3">
                                    <small class="text-infor">*File yang diterima hanya berekstensi .jpeg, .jpg, .png, .pdf dan ukuran maks. 5 MB</small>
                                </div>

                                <div class="form-group">
                                    <table width="100%">
                                        <tr>
                                            <td>Jumlah SKS tempuh<input type="text" name="total_sks_now" class="form-control" placeholder="Jumlah SKS tempuh" id="total_sks_now" required></td>
                                            <td>Jumlah SKS Transkrip<input type="text" name="total_sks_transkrip" class="form-control" placeholder="Jumlah SKS Transkrip" id="total_sks_transkrip" required></td>
                                        </tr>
                                    </table>
                                    <div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                </div><!-- form-group -->

                                <hr class="op-0">

                                <button class="btn btn-brand-02">Save</button>
                                <a href="{{ url('my_thesis') }}"><button type="button" class="btn btn-white mg-l-2">Cancel</button></a>
                            </div><!-- tab-pane -->
                        </form>
                        <script>
                            $("#kktForm").validate();
                        </script>
                    </div><!-- tab-content -->
                </div><!-- card -->
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- content-body -->


    @include('components.footer')

</div>

@endsection