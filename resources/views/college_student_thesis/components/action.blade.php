<a href="#complete" data-toggle="modal" class="btn btn-brand-01 btn-sm btn-uppercase flex-fill">Lengkap</a>
<a href="#seminar_reject" data-toggle="modal" class="btn btn-white btn-sm btn-uppercase flex-fill mg-l-5">Tolak</a>
<div class="modal fade" id="complete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Verifikasi</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mg-b-0">Anda yakin data persyaratan seminar proposal sudah lengkap? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="{{ url('college_student_thesis/proposal_seminar_requirement_complete', $college_student->id) }}"><button type="button" class="btn btn-primary">Lengkap</button></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="seminar_reject" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Form Alasan Penolakan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <form action="{{ url('college_student_thesis/proposal_seminar_requirement_rejected', $college_student->id) }}" method="POST">
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