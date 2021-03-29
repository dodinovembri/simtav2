<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PersonModel extends Model {

    public $table ='person';
    public $guarded ='[]';


    public function student_thesis()
    {
        return $this->belongsTo('App\Models\PersonModel', 'id', 'college_student_id');
    }

}
