<a href="#verified" data-toggle="modal" class="btn btn-brand-01 btn-sm btn-uppercase flex-fill">Verifikasi</a>
<a href="#rejected" data-toggle="modal" class="btn btn-white btn-sm btn-uppercase flex-fill mg-l-5">Ditolak</a>
<div class="modal fade" id="verified" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Verifikasi</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mg-b-0">Anda yakin data ini sudah valid? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="{{ url('college_student_thesis/verified_kkt_file', $college_student_thesis->id) }}"><button type="button" class="btn btn-primary">Verifikasi</button></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="rejected" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Form Alasan Penolakan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <form action="{{ url('college_student_thesis/store_kkt_file_rejected', $college_student_thesis->id) }}" method="POST">
                <div class="modal-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label class="form-label">Masukkan Alasan Penolakan</label>
                    <textarea name="rejected_reason" id="" cols="30" rows="3" class="form-control"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Tolak</button>
                </div>
            </form>
        </div>
    </div>
</div>