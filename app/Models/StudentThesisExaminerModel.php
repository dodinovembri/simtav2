<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentThesisExaminerModel extends Model {

    public $table ='student_thesis_examiner';
    public $guarded ='[]';

    public function person()
    {
        return $this->belongsTo('App\Models\PersonModel', 'lecturer_id', 'id');
    }    

}
