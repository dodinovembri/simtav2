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
                    <li class="breadcrumb-item"><a href="{{ url('college_student') }}">Mahasiswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Edit Mahasiswa</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Edit Mahasiswa</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <form action="{{ url('college_student/update', $college_student->id) }}" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div id="paneProfile" class="tab-pane active show">
                                <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Information</h6>
                                <hr>
                                <div class="form-group">
                                    <label class="form-label">NIM</label>
                                    <input type="text" class="form-control col-sm-4" name="nim" value="{{ $college_student->nim }}" placeholder="Masukkan NIM">
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="form-label">Nama Lengkap</label>
                                    <table width="100%">
                                        <tr>
                                            <td><input type="text" name="given_name" value="{{ $college_student->given_name }}" class="form-control" placeholder="Enter your first name"></td>
                                            <td><input type="text" name="middle_name" value="{{ $college_student->middle_name }}" class="form-control" placeholder="Enter your middle name"></td>
                                            <td><input type="text" name="surname" value="{{ $college_student->surname }}" class="form-control" placeholder="Enter your last name"></td>
                                        </tr>
                                    </table>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <label class="form-label">Status</label>
                                    <select name="status" class="form-control col-sm-4">
                                        <option value="<?php echo $college_student->status; ?>">
                                            <?php if ($college_student->status == 0) {
                                                echo "Non Aktif";
                                                echo "<option value='1'>Aktif</option>";
                                            } elseif ($college_student->status == 1) {
                                                echo "Aktif";
                                                echo "<option value='0'>Non Aktif</option>";
                                            } ?>
                                        </option>
                                    </select>
                                </div><!-- form-group -->

                                <hr class="op-0">

                                <button class="btn btn-brand-01">Simpan</button>
                                <a href="{{ url('college_student') }}"><button type="button" class="btn btn-white mg-l-2">Batal</button></a>
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