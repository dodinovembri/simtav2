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
                    <li class="breadcrumb-item"><a href="{{ url('thesis_topic') }}">Topik TA</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Tambah Topik TA</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Tambah Topik TA</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <form action="{{ url('thesis_topic/store') }}" method="POST" id="thesisTopic">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="paneProfile" class="tab-pane active show">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Information</h6>
                                <hr>
                                <div class="form-group">
                                    <label class="form-label">Kode Topik TA</label>
                                    <input type="text" class="form-control" name="thesis_topic_code" id="thesis_topic_code" placeholder="Masukkan kode topik TA" required>
                                    <div class="tx-11 tx-sans tx-color-04 mg-t-5">Merupakan kode untuk topik ta, seperti: spk, crm dll.</div>
                                </div>

                                <div class="form-group">
                                    <label class="form-label">Nama Topik TA</label>
                                    <input type="text" class="form-control" name="thesis_topic_name" id="thesis_topic_name" placeholder="Masukkan nama topik TA" required>
                                </div>

                                <hr class="op-0">

                                <button class="btn btn-brand-02">Save Changes</button>
                                <a href="{{ url('thesis_topic') }}"><button type="button" class="btn btn-white mg-l-2">Cancel Changes</button></a>
                            </div>
                        </form>
                        <script>
                            $("#thesisTopic").validate();
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('components.footer')

</div>

@endsection