<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class doctor_model extends Model
{
    // login_model
    public function login_doctor(){
        $array = DB::select('select * from doctors where email=? and password = ?',[

            $this->email,
            $this->password

        ]);

        return $array;
    }
    
    public function get_one_doctor(){
        $sql    = "select * from doctors where doctor_id='$this->doctor_id' ";
        $result = DB::select($sql);
        // dd($sql);

        return $result;
    }

    public function process_update_doctor(){
        $sql    = "update doctors set name ='$this->name' , email = '$this->email' , password = '$this->password', phone_numb = '$this->phone_numb' where doctor_id='$this->doctor_id' ";
        DB::update($sql);
   
    }

    static function get_todo_list($year,$month,$doctor_id){
        $sql ="select * from patient_records join doctors on patient_records.doctor_id=doctors.doctor_id  where YEAR(patient_records.date) = '$year' AND MONTH(patient_records.date) = '$month' AND (patient_records.doctor_id) = '$doctor_id' ";

        $result = DB::select($sql);
        return $result;
    }
}
