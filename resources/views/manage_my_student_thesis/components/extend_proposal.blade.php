<a href="#agree_to_extend_proposal" data-toggle="modal" class="btn btn-brand-01 btn-sm btn-uppercase flex-fill">Setujui</a>
<a href="#reject_to_extend_proposal" data-toggle="modal" class="btn btn-white btn-sm btn-uppercase flex-fill mg-l-5">Tolak</a>
<div class="modal fade" id="agree_to_extend_proposal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Verifikasi</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mg-b-0">Anda yakin ingin menyetujui perpanjangan seminar proposal? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="{{ url('manage_my_student_thesis/agree_to_extend_proposal', $extend_proposal_seminar->person_id) }}"><button type="button" class="btn btn-primary">Setujui</button></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="reject_to_extend_proposal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Form Alasan Penolakan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <form action="{{ url('manage_my_student_thesis/reject_to_extend_proposal', $extend_proposal_seminar->person_id) }}" method="POST">
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