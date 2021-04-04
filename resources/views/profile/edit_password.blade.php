@extends('layouts.backend')

@section('content')

@include('components.sidebar')

<div class="content">
    @include('components.header')

    <div class="content-body content-body-profile">
        @include('profile.components.profile_side')
        <div class="profile-body">
            <div class="tab-content pd-15 pd-sm-20">
                <div class="content-body">
                    <div class="row row-xs">
                        <div class="col-md-12">
                            <div class="tab-content">
                                @include('components.flash')
                                <form action="{{ url('profile/update_password', Auth::user()->id) }}" method="POST" id="fieldForm">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div id="paneProfile" class="tab-pane active show">
                                        <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Edit Password</h6>
                                        <hr>
                                        <div class="form-group">
                                            <label class="form-label">Password</label>
                                            <input type="password" class="form-control" name="password" required>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Konfirmasi Password</label>
                                            <input type="password" class="form-control" name="password_confirm" required>
                                        </div>

                                        <hr class="op-0">

                                        <button class="btn btn-brand-01">Simpan</button>
                                        <a href="{{ url('/') }}"><button type="button" class="btn btn-white mg-l-2">Batal</button></a>
                                    </div><!-- tab-pane -->
                                </form>
                                <script>
                                    $("#fieldForm").validate();
                                </script>
                            </div><!-- tab-content -->
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- content-body -->
            </div><!-- tab-content -->
        </div><!-- profile-body -->
    </div><!-- content-body -->
    @include('components.footer')
</div><!-- content -->

@endsection