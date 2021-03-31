<div id="paneNotification" class="tab-pane">
    <h6 class="tx-uppercase tx-semibold tx-color-01 mg-b-0">Notification Settings</h6>
    <hr>
    <?php if ($my_thesis->thesis_status_code == 7) { ?>
        <div class="timeline-item">
            <div class="row row-sm">
                <div class="col-sm-3 col-lg-2"></div>
                <div class="col-sm-9">
                    <div class="timeline-body">
                        <div class="card card-timeline card-timeline-note">
                            <h5>Input Perpanjangan Seminar Proposal</h5>
                            <p class="mg-b-0">Silahkan untuk input perpanjangan seminar proposal.<a href="{{ url('my_thesis/create_extension_proposal_seminar') }}"> Input Sekarang!</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
</div><!-- tab-pane -->