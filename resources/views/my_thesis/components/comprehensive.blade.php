<div id="paneBilling" class="tab-pane">
    <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Komprehensive</h6>
    <hr>
    <?php if (isset($my_thesis)) { ?>
        <?php if ($my_thesis->thesis_status_code == 18) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <h5>Daftar Kompre</h5>
                                <p class="mg-b-0">Silahkan untuk melakukan pendaftaran kompre.<a href="#register_comprehensive" data-toggle="modal"> Daftar Sekarang!</a></p>
                                @include('my_thesis.components.register_comprehensive')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 22) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i>Anda sudah mendaftar untuk komprehensive.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 23) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-danger alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i> Pendaftaran kompre ditolak. Alasan penolakan: {{$comprehensive_register_rejected_reason->description}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <h5>Daftar Sempro</h5>
                                <p class="mg-b-0">Silahkan untuk ulang melakukan pendaftaran kompre, lengkapi berkas yang kurang!.<a href="#register_comprehensive" data-toggle="modal"> Daftar Sekarang!</a></p>
                                @include('my_thesis.components.register_comprehensive')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 24) { ?>            
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i>Persyaratan kompre sudah lengkap, silahkan tunggu set penguji.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        <?php } elseif ($my_thesis->thesis_status_code == 25) { ?>  
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i>Penguji kompre sudah diatur, silahkan tunggu jadwal ujian seminar proposal.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 26) { ?>    
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i>Penguji dan Jadwal seminar sudah diatur, silahkan tunggu konfirmasi penguji kompre.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 27) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i> Jadwal Komprehensif: {{ $my_thesis->comprehensive_schedule }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <h5>Penguji Kompre</h5>
                                <ul>
                                    <?php foreach ($comprehensive_examiners as $key => $value) { ?>
                                        <li>{{ $value->person->nip }} - {{ $value->person->given_name." ".$value->person->middle_name." ".$value->person->surname }}</li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        <?php } elseif ($my_thesis->thesis_status_code == 28) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i>Selamat, anda sudah melakukan kompre. Silahkan submit SK komprehensif <a href="{{ url('my_thesis/create_comprehensive_certificate') }}">Input Sekarang!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 29) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i>SK komprehensif sudah di submit. selamat yudisium!.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div><!-- tab-pane -->