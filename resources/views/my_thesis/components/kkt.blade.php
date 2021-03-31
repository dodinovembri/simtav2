<div id="paneProfile" class="tab-pane active show">
    <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">KRS, KP dan Transkrip Nilai</h6>

    <hr>
    <?php if (isset($my_thesis)) { ?>
        <?php if ($my_thesis->thesis_status_code == 1) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i>KRS, KP dan Transkrip Nilai sudah di submit!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 2) { ?>
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
                </div>
            </div>
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
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 4) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i>KRS, KP dan Transkrip sudah diterima. Silahkan lanjutkan ke langkah selanjutnya!
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code > 4) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i>Tahap ini sudah selesai.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } else { ?>
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
            </div>
        </div>
    <?php } ?>
</div>