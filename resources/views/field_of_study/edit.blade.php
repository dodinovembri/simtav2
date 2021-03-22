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
                    <li class="breadcrumb-item"><a href="{{ url('field_of_study') }}">Bidang Studi</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Bidang Studi</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Edit Bidang Studi</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <form action="{{ url('field_of_study/update', $field_of_study->id ) }}" method="POST" id="fieldForm">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="paneProfile" class="tab-pane active show">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Information</h6>
                                <hr>
                                <div class="form-group">
                                    <label class="form-label">Kode Bidang Studi</label>
                                    <input type="text" class="form-control" name="field_of_study_code" id="field_of_study_code" value="{{ $field_of_study->field_of_study_code }}" placeholder="Masukkan kode bidang studi" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Nama Angkatan</label>
                                    <input type="text" class="form-control" name="field_of_study_name" id="field_of_study_name" value="{{ $field_of_study->field_of_study_name }}" placeholder="Masukkan nama bidang studi" required>
                                </div>

                                <hr class="op-0">

                                <button class="btn btn-brand-02">Save Changes</button>
                                <a href="{{ url('field_of_study') }}"><button type="button" class="btn btn-white mg-l-2">Cancel Changes</button></a>
                            </div>
                        </form>
                        <script>
                            $("#fieldForm").validate();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('components.footer')

</div>

@endsection