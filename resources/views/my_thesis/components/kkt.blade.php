<div id="paneProfile" class="tab-pane active show">
    <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">KRS, KP dan Transkrip Nilai</h6>

    <hr>
    <?php if (isset($person_assets)) { ?>
        <?php if (count($person_assets) == 0) { ?>
            <?php if (isset($my_thesis)) { ?>
                <?php if ($my_thesis->thesis_status_code == 2) { ?>
                    <div class="timeline-item">
                        <div class="row row-sm">
                            <div class="col-sm-3 col-lg-2"></div>
                            <div class="col-sm-9">
                                <div class="timeline-body">
                                    <div class="card card-timeline card-timeline-note">
                                        <div class="alert alert-danger alert-dismissible mg-b-0 fade show" role="alert">
                                            <i class="icon fa fa-close"></i> KRS, KP dan Transkrip ditolak, Alasan Penolakan: {{$my_thesis_history->description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- row -->
                    </div><!-- timeline-item -->
                <?php } else {
                    
                } ?>
            <?php } ?>
        <?php } ?>
        <div class="timeline-item">
            <div class="row row-sm">
                <div class="col-sm-3 col-lg-2"></div>
                <div class="col-sm-9">
                    <?php if (count($person_assets) == 0) { ?>
                        <?php
                        if (isset($my_thesis)) {
                            if ($my_thesis->thesis_status_code == 2) { ?>
                                <div class="timeline-body">
                                    <div class="card card-timeline card-timeline-note">
                                        <div class="alert alert-danger alert-dismissible mg-b-0 fade show" role="alert">
                                            <i class="icon fa fa-close"></i> KRS, KP dan Transkrip ditolak, Alasan Penolakan: {{$my_thesis_history->description}}
                                        </div>
                                    </div>
                                </div>
                            <?php   }
                        } else { ?>
                            <div class="timeline-body">
                                <div class="card card-timeline card-timeline-note">
                                    <h5>Input KRS, KP dan Transkrip Nilai</h5>
                                    <p class="mg-b-0">Silahkan untuk submit Kartu Rancangan Studi (KRS), Kerja Praktek (KP), dan Tanskrip Nilai. <a href="{{ url('my_thesis/create_kkt_file') }}"> Input Sekarang</a></p>
                                </div>
                            </div>
                    <?php }
                    } ?>
                    <?php if (count($person_assets) > 0) { ?>
                        <?php if ($my_thesis->thesis_status_code == 2) { ?>
                            <div class="timeline-body">
                                <div class="timeline-header">
                                    <div class="avatar avatar-xs avatar-offline"><span class="avatar-initial rounded-circle bg-danger">r</span></div>
                                    <h6>Dodi Novembri</h6>
                                    <span>input KRS, KP dan Transkrip Nilai</span>
                                </div><!-- timeline-header -->
                                <div class="card card-timeline card-timeline-photo">
                                    <div class="row row-xs">
                                        <?php foreach ($person_assets as $key => $value) { ?>
                                            <div class="col">
                                                <a href="{{ asset($value->url) }}/{{ $value->file_name }}" target="_blank"><img src="{{ asset($value->url) }}/{{ $value->file_name }}" class="img-fluid" alt=""></a>
                                            </div>
                                        <?php } ?>
                                    </div><!-- row -->
                                </div>
                            </div><!-- timeline-body -->
                        <?php } elseif ($my_thesis->thesis_status_code == 4) { ?>
                            <div class="timeline-body">
                                <div class="card card-timeline card-timeline-note">
                                    <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                        <i class="icon fa fa-close"></i>KRS, KP dan Transkrip sudah diterima. Silahkan lanjutkan ke langkah selanjutnya!
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div><!-- row -->
        </div><!-- timeline-item -->
    <?php } else { ?>
        <?php if ($my_thesis->thesis_status_code == 2) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <h5>Input KRS, KP dan Transkrip Nilai</h5>
                                <p class="mg-b-0">Silahkan untuk submit ulang Kartu Rancangan Studi (KRS), Kerja Praktek (KP), dan Tanskrip Nilai. <a href="{{ url('my_thesis/create_kkt_file') }}"> Input Ulang Sekarang</a></p>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- timeline-item -->
        <?php } elseif ($my_thesis->thesis_status_code == 4) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i> Tahap ini sudah selesai.
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- row -->
            </div><!-- timeline-item -->
        <?php } ?>
    <?php } ?>
</div><!-- tab-pane -->