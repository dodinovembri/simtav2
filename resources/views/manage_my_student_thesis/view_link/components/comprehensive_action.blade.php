<a href="#ready" data-toggle="modal" class="btn btn-brand-01 btn-sm btn-uppercase flex-fill">Bersedia</a>
<a href="#not_ready" data-toggle="modal" class="btn btn-white btn-sm btn-uppercase flex-fill mg-l-5">Tolak</a>
<div class="modal fade" id="ready" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Konfirmasi</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <div class="modal-body">
                <p class="mg-b-0">Anda yakin bersedia untuk menguji komprehensif? </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <a href="{{ url('manage_my_student_thesis/comprehensive_confirm_agree', $college_student->id) }}"><button type="button" class="btn btn-primary">Bersedia</button></a>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="not_ready" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Form Alasan Penolakan</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <form action="{{ url('manage_my_student_thesis/comprehensive_confirm_reject', $college_student->id) }}" method="POST" id="fieldForm">
                <div class="modal-body">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label class="form-label">Masukkan Alasan Penolakan</label>
                    <textarea name="rejected_reason" id="" cols="30" rows="3" class="form-control" required></textarea>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Tolak</button>
                </div>
            </form>
            <script>
                $("#fieldForm").validate();
            </script>
        </div>
    </div>
</div>