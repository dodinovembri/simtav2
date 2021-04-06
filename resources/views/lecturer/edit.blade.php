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
                    <li class="breadcrumb-item"><a href="{{ url('lecturer') }}">Dosen</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Dosen</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Edit Dosen</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <form action="{{ url('lecturer/update', $lecturer->id) }}" method="POST" enctype="multipart/form-data" id="fieldForm">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="paneProfile" class="tab-pane active show">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Information</h6>
                                <hr>
                                <div class="form-group">
                                    <label class="form-label">NIP</label>
                                    <input type="text" class="form-control" name="nip" placeholder="Masukkan NIP Dosen" value="{{ $lecturer->nip }}" required>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="form-label">Nama Lengkap</label>
                                    <table width="100%">
                                        <tr>
                                            <td><input type="text" name="given_name" onkeyup="this.value = this.value.toUpperCase()" class="form-control" placeholder="Masukkan nama depan" value="{{ $lecturer->given_name }}" required></td>
                                            <td><input type="text" name="middle_name" onkeyup="this.value = this.value.toUpperCase()" class="form-control" placeholder="Masukkan nama tengah" value="{{ $lecturer->middle_name }}"></td>
                                            <td><input type="text" name="surname" onkeyup="this.value = this.value.toUpperCase()" class="form-control" placeholder="Masukkan nama belakang" value="{{ $lecturer->surname }}"></td>
                                        </tr>
                                    </table>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="form-label">Alamat</label>
                                    <textarea class="form-control" rows="3" name="address">{{ $lecturer->address }}</textarea>
                                </div><!-- form-group -->
                                <hr class="op-0">

                                <button class="btn btn-brand-01">Simpan</button>
                                <a href="{{ url('lecturer') }}"><button type="button" class="btn btn-white mg-l-2">Batal</button></a>
                            </div><!-- tab-pane -->
                        </form>
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