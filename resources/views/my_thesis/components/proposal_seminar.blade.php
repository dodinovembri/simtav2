<div id="paneNotification" class="tab-pane">
    <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Seminar Proposal</h6>
    <hr>
    <?php if (isset($my_thesis)) { ?>
        <?php if ($my_thesis->thesis_status_code == 6) { ?>
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
                                    <h5>Tidak bisa lanjut</h5>
                                    <p class="mg-b-0">Silahkan untuk melengkapi langkah sebelumnya.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } else { ?>
                <div class="timeline-item">
                    <div class="row row-sm">
                        <div class="col-sm-3 col-lg-2"></div>
                        <div class="col-sm-9">
                            <div class="timeline-body">
                                <div class="card card-timeline card-timeline-note">
                                    <h5>Daftar Sempro</h5>
                                    <p class="mg-b-0">Silahkan untuk melakukan pendaftaran seminar proposal.<a href="#register_proposal_seminar" data-toggle="modal"> Daftar Sekarang!</a></p>
                                    @include('my_thesis.components.register_proposal_seminar')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } elseif ($my_thesis->thesis_status_code == 8) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    File perpanjang seminar proposal sudah di submit.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 9) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-info alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i> Perpanjang seminar proposal diterima.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } elseif ($my_thesis->thesis_status_code == 10) { ?>
            <div class="timeline-item">
                <div class="row row-sm">
                    <div class="col-sm-3 col-lg-2"></div>
                    <div class="col-sm-9">
                        <div class="timeline-body">
                            <div class="card card-timeline card-timeline-note">
                                <div class="alert alert-danger alert-dismissible mg-b-0 fade show" role="alert">
                                    <i class="icon fa fa-close"></i> Perpanjang seminar proposal ditolak. Alasan penolakan: {{$extend_proposal_rejected_reason->description}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    <?php } ?>
</div><!-- tab-pane -->