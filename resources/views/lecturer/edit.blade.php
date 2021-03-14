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
                    <li class="breadcrumb-item active" aria-current="page">Dosen</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">List Dosen</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <form action="{{ url('lecturer/update', $lecturer->id) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="paneProfile" class="tab-pane active show">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Information</h6>
                                <hr>
                                <div class="form-group">
                                    <label class="form-label">NIP</label>
                                    <input type="text" class="form-control" name="nip" placeholder="Enter dosen NIP">
                                    <div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="form-label">Nama Lengkap</label>
                                    <table width="100%">
                                        <tr>
                                            <td><input type="text" name="given_name" class="form-control" placeholder="Enter your first name"></td>
                                            <td><input type="text" name="middle_name" class="form-control" placeholder="Enter your middle name"></td>
                                            <td><input type="text" name="surname" class="form-control" placeholder="Enter your last name"></td>
                                        </tr>
                                    </table>
                                    <div class="tx-11 tx-sans tx-color-04 mg-t-5">Your name may appear around here where you are mentioned. You can change or remove it at any time.</div>
                                </div><!-- form-group -->

                                <hr class="op-0">

                                <button class="btn btn-brand-02">Save Product</button>
                                <a href="{{ url('lecturer') }}"><button type="button" class="btn btn-white mg-l-2">Cancel Changes</button></a>
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