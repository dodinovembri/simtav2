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
                    <li class="breadcrumb-item"><a href="{{ url('manage_student_thesis') }}">Kelola Skripsi Mahasiswa</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Status seminar mahasiswa</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Status seminar mahasiswa</h4>
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
                                @include('components.flash')
                                <table id="example1" class="table">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP Penguji</th>
                                            <th>Nama Penguji</th>
                                            <th>Status Penguji</th>
                                            <th>Waktu Assign</th>
                                            <th>Ketersediaan</th>
                                            <th>Alasan</th>
                                            <th>Aksi</th>
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
                                                <td>{{ $value->created_at }}</td>
                                                <td>
                                                    <?php if ($value->is_ready == 2) {
                                                        echo "Menolak";
                                                    } elseif ($value->is_ready == 1) {
                                                        echo "Bersedia";
                                                    }elseif(is_null($value->is_ready)){
                                                        echo "Belum dikonfirmasi";
                                                    } ?>
                                                </td>
                                                <td>{{ $value->description }}</td>
                                                <td>
                                                <a href="{{ url('manage_student_thesis/edit_proposal_examiner', $value->id) }}"><i class="fa fa-edit" style="margin-left: 8px"></i></a>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div><!-- form-group -->
                            <hr>
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
    @include('components.footer')
</div><!-- content-body -->




@endsection