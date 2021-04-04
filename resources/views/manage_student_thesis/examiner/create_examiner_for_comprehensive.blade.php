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
                    <li class="breadcrumb-item"><a href="{{ url('college_student_thesis') }}">Skripsi Mahasiswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Set Penguji Komprehensive Mahasiswa</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Set Penguji Komprehensive Mahasiswa</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <div id="paneProfile" class="tab-pane active show">
                            <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Information</h6>
                            <hr>
                            <div class="form-group">
                                <label for=""><b>List Penguji Saat Seminar Proposal</b></label>
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP Penguji</th>
                                            <th>Nama Penguji</th>
                                            <th>Status Penguji</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0;
                                        foreach ($student_thesis_examiners as $key => $value) {
                                            $no++; ?>
                                            <tr>
                                                <td>{{ $no }}</td>
                                                <td>{{ $value->person->nip }}</td>
                                                <td>{{ $value->person->given_name." ".$value->person->middle_name." ".$value->person->surname }}</td>
                                                <td>
                                                    <?php if ($value->lecturer_type == 1) {
                                                        echo "Ketua Penguji";
                                                    } elseif ($value->lecturer_type == 2) {
                                                        echo "Penguji";
                                                    } elseif ($value->lecturer_type == 3) {
                                                        echo "Pembimbing Skripsi";
                                                    } ?>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div><!-- form-group -->
                            <hr>
                            <label for=""><b>Set Penguji untuk Komprehensive</b></label>
                            <div class="form-group">
                                <input type="checkbox" id="myCheck" onclick="myFunction()"> Sama dengan Penguji Seminar
                            </div>
                            <a href="{{ url('manage_student_thesis/store_examiner_comprehensive', $college_student_id) }}" id="text2" style="display:none"><button type="button" class="btn btn-brand-01">Simpan</button></a>
                            <form action="{{ url('manage_student_thesis/store_new_examiner_comprehensive', $college_student_id) }}" method="POST" enctype="multipart/form-data" id="text" style="display:block">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="form-label">Ketua Penguji</label>
                                    <select class="form-control select2" name="examiner_lead" required="">
                                        <option value="">Pilih</option>
                                        <?php foreach ($examiners as $key => $value) { ?>
                                            <option value="{{ $value->id }}">{{ $value->nip }} - {{ $value->given_name." ".$value->middle_name." ".$value->surname }}</option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Penguji I & II</label>
                                    <select class="form-control select2" name="examiner[]" required="" multiple="multiple">
                                        <option value="">Pilih</option>
                                        <?php foreach ($examiners as $key => $value) { ?>
                                            <option value="{{ $value->id }}">{{ $value->nip }} - {{ $value->given_name." ".$value->middle_name." ".$value->surname }}</option>
                                        <?php } ?>
                                    </select>
                                </div>

                                <hr class="op-0">

                                <button class="btn btn-brand-01">Simpan</button>
                                <a href="{{ url('manage_student_thesis') }}"><button type="button" class="btn btn-white mg-l-2">Batal</button></a>
                            </form>
                        </div>
                        <script>
                            $("#formValidation").validate();
                        </script>
                        <script>
                            function myFunction() {
                                var checkBox = document.getElementById("myCheck");
                                var text = document.getElementById("text");
                                var text2 = document.getElementById("text2");
                                if (checkBox.checked == true) {
                                    text.style.display = "none";
                                    text2.style.display = "block";
                                } else {
                                    text.style.display = "block";
                                    text2.style.display = "none";
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @include('components.footer')

</div>

@endsection