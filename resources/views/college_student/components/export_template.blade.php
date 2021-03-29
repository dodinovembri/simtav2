<div class="modal fade" id="export_template" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="modal-title" id="exampleModalLabel">Download Template</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i data-feather="x"></i></span>
                </button>
            </div>
            <form action="{{ url('college_student/download_template') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-label">Jurusan</label>
                        <select class="form-control" name="majors" required>
                            <option label="Choose one"></option>
                            <?php foreach ($majors as $key => $value) { ?>
                                <option value="{{ $value->majors_name }}">{{ $value->majors_name }}</option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Angkatan</label>
                        <select class="form-control" name="year_of_education" required>
                            <option label="Choose one"></option>
                            <?php foreach ($year_of_educations as $key => $value) { ?>
                                <option value="{{ $value->year_of_education_name }}">{{ $value->year_of_education_name }}</option>
                            <?php } ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Download</button>
                </div>
            </form>
        </div>
    </div>
</div>