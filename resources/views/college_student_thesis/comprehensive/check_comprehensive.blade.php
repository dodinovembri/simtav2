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
                    <li class="breadcrumb-item active" aria-current="page">Periksa Persayaratan Komprehensive</li>
                </ol>
            </nav>
            <h4 class="content-title content-title-xs">Periksa Persayaratan Komprehensive</h4>
        </div>
    </div>
    <div class="content-body">
        <div class="row row-xs">
            <div class="col-md-12">
                <div class="card card-body pd-sm-40 pd-md-30 pd-xl-y-35 pd-xl-x-40">
                    <div class="tab-content">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div id="paneProfile" class="tab-pane active show">
                            <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Persyaratan Komprehensive</h6>
                            <hr>
                            <div class="form-group">
                                <h6>{{ $college_student->nim }} - {{ $college_student->given_name." ".$college_student->middle_name." ".$college_student->surname }}</h6>
                            </div><!-- form-group -->
                            <div class="form-group">
                                <?php foreach ($comprehensive_requirements as $key => $value) { ?>
                                    <input type="checkbox" name=""> {{ $value->comprehensive_requirement_name }} <br>
                                <?php } ?>
                            </div><!-- form-group -->

                            <div class="form-group">
                                @include('college_student_thesis.components.comprehensive_action')
                            </div><!-- form-group -->

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