<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use DB;

class admin_model extends Model
{
        public $patient_record_id;
        public $doctor_id ;   
        public $major_id ;   
        public $record_date   ; 
        public $shift_id  ;  
        public $patient_id  ;          
        public $result ;   
    // login_model
    public function login_admin(){
        $array = DB::select('select * from admins where email=? and password = ?',[

            $this->email,
            $this->password

        ]);

        return $array;
    }


     // admin_model

    static function admins(){
        $sql = "select * from admins ";
        $result = DB::select($sql);

        return $result;
        
    }



    public function process_add_admin(){

        $sql = "insert into admins (email,password,name,age,phone_numb,profile_image,address,level) values ('$this->email','$this->password','$this->name','$this->age','$this->phone_numb','$this->profile_image','$this->address','$this->level')";
        DB::insert($sql);
    }

    public function get_one_admin(){
        $sql = "select * from admins where admin_id='$this->admin_id' ";
        $result = DB::select($sql);

        return $result;
    }
    
    public function process_update_admin(){
        $sql = "update admins set  password = '$this->password' where admin_id='$this->admin_id' ";
        DB::update($sql);


        
    }
    public function delete_admin(){
        $sql = "delete from admins where admin_id = '$this->admin_id'";
        DB::delete($sql);
    }


    // major_model
     static function majors(){
        $sql = "select * from majors ";
        $result = DB::select($sql);

        return $result;
        
    }

    public function process_add_major(){
        $sql = "insert into majors (major_name) values ('$this->major_name')";
        DB::insert($sql);
    }

    public function get_one_major(){
        $sql = "select * from majors where major_id='$this->major_id' ";
        $result = DB::select($sql);

        return $result;
    }

    public function check_major(){
        $sql = "select * from majors where major_name='$this->major_name' ";
        $result = DB::select($sql);
        // dd($result);

        return $result;
    }

    public function check_major_for_delete(){
        $sql = "select * from doctors where major_id='$this->major_id' ";
        $result = DB::select($sql);
        // dd($result);

        return $result;
    }
    
    public function process_update_major(){
        $sql = "update majors set major_name = '$this->major_name' where major_id='$this->major_id' ";
        // die($sql);
        DB::update($sql);


        
    }
    public function delete_major(){
        $sql = "delete from majors where major_id = '$this->major_id'";
        DB::delete($sql);
    }


    // new_category_model
      static function new_categories(){
        $sql = "select * from new_categories ";
        $result = DB::select($sql);

        return $result;
        
    }
    public function check_new_category(){
        $sql = "select * from new_categories where new_category_name='$this->new_category_name' ";
        $result = DB::select($sql);

        return $result;
    }

    public function process_add_new_category(){
        $sql = "insert into new_categories (new_category_name) values ('$this->new_category_name')";
        DB::insert($sql);
    }

    public function get_one_new_category(){
        $sql = "select * from new_categories where new_category_id='$this->new_category_id' ";
        $result = DB::select($sql);

        return $result;
    }
    
    public function process_update_new_category(){
        $sql = "update new_categories set new_category_name = '$this->new_category_name' where new_category_id='$this->new_category_id' ";
        
        DB::update($sql);


        
    }

        public function check_new_category_to_delete(){
        $sql = "select * from news where new_category_id='$this->new_category_id' ";
        $result = DB::select($sql);
        // dd($result);

        return $result;
    }

    public function delete_new_category(){
        $sql = "delete from new_categories where new_category_id = '$this->new_category_id'";
        DB::delete($sql);
    }




    // news_model
     static function news(){
        $sql = "select * from news join new_categories on news.new_category_id = new_categories.new_category_id  ";
        $result = DB::select($sql);

        return $result;
        
    }

    public function process_add_new(){
        $sql    = "insert into news (subject,content,date,admin_id,new_category_id) values ('$this->subject','$this->content','$this->date','$this->admin_id','$this->new_category_id')";
        DB::insert($sql);
    }

    public function get_one_new(){
        $sql    = "select * from news join new_categories on news.new_category_id = new_categories.new_category_id where new_id='$this->new_id' ";
        $result = DB::select($sql);

        return $result;
    }
    
    public function process_update_new(){
        $sql    = "update news set subject = '$this->subject' , content = '$this->content', date = '$this->date' , new_category_id = '$this->new_category_id' where new_id='$this->new_id' ";
        DB::update($sql);
   
    }
    public function delete_new(){
        $sql    = "delete from news where new_id='$this->new_id'";
        DB::delete($sql);
    }

    // patient_model

     static function patients(){
        $sql = "select * from patients ";
        $result = DB::select($sql);

        return $result;
        
    }

    public function check_patient_exits(){
        $sql = "select * from patients where email='$this->email' OR phone_numb='$this->phone_numb'";
        $result = DB::select($sql);

        return $result;
    }

    public function process_add_patient(){
        $sql = "insert into patients (name,email,password,dob,gender,address,phone_numb) values ('$this->name','$this->email','$this->password','$this->dob','$this->gender','$this->address','$this->phone_numb')";
        DB::insert($sql);


        
    }

   

    public function get_one_patient(){
        $sql = "select * from patients where patient_id='$this->patient_id' ";
        $result = DB::select($sql);

        return $result;
    }
    
    public function process_update_patient(){
        $sql = "update patients set name = '$this->name',email = '$this->email' ,password = '$this->password' ,dob = '$this->dob' ,gender = '$this->gender' ,address = '$this->address' ,phone_numb = '$this->phone_numb' where patient_id='$this->patient_id' ";
        DB::update($sql);


        
    }
    public function delete_patient(){
        $sql = "delete from patients where patient_id = '$this->patient_id'";
        DB::delete($sql);
    }


    // patient_record_model


     static function get_patient_name(){
        $sql = "select * from patients ";
        $patient_name = DB::select($sql);

        return $patient_name;
        
    }

    static function patient_records(){
        $sql = "select * from patient_records join patients on patient_records.patient_id=patients.patient_id join doctors on  patient_records.doctor_id=doctors.doctor_id join shifts on patient_records.shift_id=shifts.shift_id ";
        $result = DB::select($sql);

        return $result;
        
    }

    public function process_add_patient_record(){
        $sql   = "insert into patient_records (doctor_id,date,shift_id,patient_id,result) values ('$this->doctor_id','$this->date','$this->shift_id','$this->patient_id','$this->result')";
        DB::insert($sql);   


        
    }

    
    public function get_one_patient_record(){
        $sql = "select * from patient_records where patient_record_id='$this->patient_record_id' ";
        $result = DB::select($sql);

        return $result;
    }
    
    public function process_update_patient_record(){
        $sql = "update patient_records set email = '$this->email' , password = '$this->password' , name = '$this->name' , age = '$this->age' , address = '$this->address' where patient_record_id='$this->patient_record_id' ";
        DB::update($sql);


        
    }
    public function delete_patient_record(){
        $sql = "delete from patient_records where patient_record_id = '$this->patient_record_id'";
        DB::delete($sql);
    }





      // doctors_model
     static function doctors_mgt(){
        $sql = "select * from doctors join majors on doctors.major_id=majors.major_id ";
        $result = DB::select($sql);

        return $result;
        
    }

     public function check_doctor_exits(){
        $sql    = "select * from doctors  where email='$this->email' ";
        $result = DB::select($sql);

        return $result;
    }

    public function process_add_doctor(){
        $sql    = "insert into doctors (email,password,name,phone_numb,profile_image,major_id) values ('$this->email','$this->password','$this->name','$this->phone_numb','$this->profile_image','$this->major_id')";
        DB::insert($sql);
    }

    public function get_one_doctor(){
        $sql    = "select * from doctors join majors on doctors.major_id=majors.major_id where doctor_id='$this->doctor_id' ";
        $result = DB::select($sql);

        return $result;
    }
    
    public function process_update_doctor(){
        $sql    = "update doctors set email = '$this->email' , password = '$this->password', name = '$this->name', phone_numb = '$this->phone_numb', major_id = '$this->major_id' where doctor_id='$this->doctor_id' ";
        DB::update($sql);
   
    }
    public function delete_doctor(){
        $sql    = "delete from doctors where doctor_id='$this->doctor_id'";
        DB::delete($sql);
    }

    static function get_doctor_by_major($major_id){

        $sql    = "select * from doctors where major_id='$major_id'";
        // die($sql);
        $doctor_name = DB::select($sql);
        
                                
        return $doctor_name;
    }


    static function get_shift_by_doctor($doctor_id,$date){
        $doctor_shift = DB::select("select * from shifts where shift_id not in (select shift_id from patient_records where date=? and doctor_id=?)",[
            $date,
            $doctor_id
        ]);
        // $sql = "select * from shifts where shift_id not in (select shift_id from patient_records where record_date='$record_date' and doctor_id=$doctor_id )";

        // $sql    = "select * from shifts join patient_records on shifts.shift_id=patient_records.shift_id where patient_records.record_date='$record_date' and patient_records.doctor_id=$doctor_id ";

        // $doctor_shift = DB::select($sql);
        // dd($doctor_shift);
                                
        return $doctor_shift;
    }


    static function get_stat_doctors_daily($date){
        // dd($date);
        $sql ="select count(record_id) as total_records,doctors.name from patient_records join doctors on patient_records.doctor_id=doctors.doctor_id  where patient_records.date='$date' GROUP BY patient_records.doctor_id";
        // die($sql);
        $result = DB::select($sql);
        // dd($result);
        return $result;

        
    }


    static function get_stat_doctors_monthly($record_year,$record_month){
        $sql ="select count(record_id) as total_records,doctors.name from patient_records join doctors on patient_records.doctor_id=doctors.doctor_id  where YEAR(patient_records.date) = '$record_year' AND MONTH(patient_records.date) = '$record_month' GROUP BY patient_records.doctor_id ";
        $result = DB::select($sql);
        return $result;
        
    }

  


    

    


    
}



