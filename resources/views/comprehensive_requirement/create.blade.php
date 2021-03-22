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
                    <li class="breadcrumb-item"><a href="{{ url('comprehensive_requirement') }}">Syarat Kompre</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Syarat Kompre</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Tambah Syarat Kompre</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <form action="{{ url('comprehensive_requirement/store') }}" method="POST" id="compreForm">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="paneProfile" class="tab-pane active show">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Information</h6>
                                <hr>
                                <div class="form-group">
                                    <label class="form-label">Kode Syarat Kompre</label>
                                    <input type="text" class="form-control" name="comprehensive_requirement_code" id="comprehensive_requirement_code" placeholder="Masukkan kode syarat kompre" required>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Nama Syarat Kompre</label>
                                    <input type="text" class="form-control" name="comprehensive_requirement_name" id="comprehensive_requirement_name" placeholder="Masukkan nama syarat kompre" required>
                                </div>

                                <hr class="op-0">

                                <button class="btn btn-brand-02">Save Changes</button>
                                <a href="{{ url('comprehensive_requirement') }}"><button type="button" class="btn btn-white mg-l-2">Cancel Changes</button></a>
                            </div>
                        </form>
                        <script>
                            $("#compreForm").validate();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('components.footer')

</div>

@endsection