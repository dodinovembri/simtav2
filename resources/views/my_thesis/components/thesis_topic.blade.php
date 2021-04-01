<div id="paneAccount" class="tab-pane">
    <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Topik Tugas Akhir</h6>

    <hr>
    <?php if (isset($my_thesis)) { ?>
        <?php if ($my_thesis->thesis_status_code == 4) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <h5>Input Topik TA</h5>
                                <p class="mg-b-0">Silahkan untuk submit topik Tugas Akhir.<a href="{{ url('my_thesis/create_thesis_topic') }}"> Input Sekarang!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 5) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    Topik TA sudah di submit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 6) { ?>
            <?php
            $date1 = date_create($my_thesis->date_agree);
            $date_n = date("Y-m-d");
            $date2 = date_create($date_n);
            $diff = date_diff($date1, $date2);
            $rangex = $diff->format("%a");
            $range = (int)$rangex;       
            if ($range > 30) { ?>
                <div class="timeline-item">
                    <div class="row row-sm">
                        <div class="col-sm-3 col-lg-2"></div>
                        <div class="col-sm-9">
                            <div class="timeline-body">
                                <div class="card card-timeline card-timeline-note">
                                    <h5>Input Perubahan Topik TA</h5>
                                    <p class="mg-b-0">Sudah melewati 30 hari, silahkan input perubahan Topik Tugas Akhir.<a href="{{ url('my_thesis/create_thesis_topic') }}"> Input Sekarang!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else{ ?>
                <div class="timeline-item">
                    <div class="row row-sm">
                        <div class="col-sm-3 col-lg-2"></div>
                        <div class="col-sm-9">
                            <div class="timeline-body">
                                <div class="card card-timeline card-timeline-note">
                                    <h5>Input Topik TA</h5>
                                    <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                        Topik TA sudah di setujui oleh dosen pembimbing akademik. Silahkan lanjut ke tahap selanjutnya!
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } elseif ($my_thesis->thesis_status_code == 7) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-danger alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i> Topik TA ditolak, Alasan Penolakan: {{$topic_ta_history->description}}
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
                                <h5>Input Topik TA</h5>
                                <p class="mg-b-0">Silahkan untuk submit ulang topik Tugas Akhir.<a href="{{ url('my_thesis/create_thesis_topic') }}"> Input ulang Sekarang!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code > 7) { ?>
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
    <?php } ?>
</div><!-- tab-pane -->