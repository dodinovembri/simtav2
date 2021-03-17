<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentThesisModel extends Model {

    public $table ='student_thesis';
    public $guarded ='[]';

    public function person()
    {
        return $this->belongsTo('App\Models\PersonModel', 'college_student_id', 'id');
    }

}
