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
                    <li class="breadcrumb-item active" aria-current="page">Set Jadwal Seminar Proposal</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Set Jadwal Seminar Proposal</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div id="paneProfile" class="tab-pane active show">
                            <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Penguji Seminar Proposal</h6><br>
                            <h6>{{ $college_student->nim }} - {{ $college_student->given_name." ".$college_student->middle_name." ".$college_student->surname }}</h6>
                            <hr>
                            <div class="form-group">
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
                            <form action="{{ url('college_student_thesis/store_proposal_seminar_schedule', $college_student->id) }}" method="POST" id="fieldForm">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <div class="form-group">
                                    <label class="form-label">Jadwal Seminar Proposal</label>
                                    <input type="datetime-local" class="form-control col-sm-4" name="proposal_seminar_schedule" required>
                                </div><!-- form-group -->

                                <div class="form-group">
                                    <button class="btn btn-brand-01">Simpan</button>
                                    <a href="{{ url('lecturer') }}"><button type="button" class="btn btn-white mg-l-2">Batal</button></a>
                                </div><!-- form-group -->
                            </form>
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