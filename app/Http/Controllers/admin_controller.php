<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin_model;
use Storage;
use App\Http\Requests\AdminRequest;
use App\Http\Requests\PatientRequest;
use App\Http\Requests\DoctorRequest;
use App\Http\Requests\CategoriesRequest;
use App\Http\Requests\NewsRequest;





class admin_controller extends Controller
{
	 
     // login
	 public function login_admin(){
	    return view('admin.login');

	}

	 public function process_login_admin(Request $rq){
			$email    = $rq->get('email');
			$password = $rq->get('password');

			$admin           = new admin_model();
			$admin->email    = $email;	 
			$admin->password = $password	 ;
			$array           = $admin->login_admin();
			if (count($array)==1) {
			$rq->session()->put('admin_id',$array[0]->admin_id);
			$rq->session()->put('name',$array[0]->name);
			$rq->session()->put('profile_image',$array[0]->profile_image);
			$rq->session()->put('level',$array[0]->level);
			

			return redirect()->route('admins');
				
			}
			else{
				return redirect()->route('login_admin')->with('error','Incorrect email or password');
			}

	 }



	
	  // logout
	 public function logout_admin(Request $rq){
	    $rq->session()->flush();
	    return redirect()->route('login_admin')->with('success','You have logged out of the system');

	}

      // admin_controller
	 public function admins(){
	    $result = admin_model::admins();
	    // dd($result);
	    return view('admin.admin_mgt.admins', compact('result'));

	}
	public function add_admin(){
	    return view('admin.admin_mgt.add_admin');
	}

	public function check_admin_exits(AdminRequest $rq){
		$admin                = new admin_model();
		$email    = $rq->get('email');
		$password = $rq->get('password');
		$array             = $admin->login_admin();

			if (count($array)==1) {
				return redirect()->route('add_admin')->with('error','This Email has already been used');
				
			}
			else{
				$admin                = new admin_model();
				$admin->email         = $email;	 
				$admin->password      = $password;
				$admin->name          = $rq->name;
				$admin->dob           = $rq->dob;
				$admin->phone_numb    = $rq->phone_numb;
				$admin->address       = $rq->address;     
				$admin->level         = $rq->level; 
				$admin->profile_image = Storage::disk('public')->put('profile_image' ,$rq->profile_image);
				$admin->process_add_admin();
				return redirect()->route('admins')->with('success','Admin has been successfully added ');
			}
	}
	
	public function view_update_admin($admin_id){
		$admin           = new admin_model();
		$admin->admin_id = $admin_id;
		$array_admin     = $admin->get_one_admin();
	    return view('admin.admin_mgt.update_admin', compact('array_admin'));

	}

	public function process_update_admin(Request $rq){
		$admin             = new admin_model();
		$admin->admin_id   =$rq->admin_id;
		$admin->password   =$rq->password;
		 $this->validate($rq, [
    			'password' => 'required',
				]);         
	    $admin->process_update_admin();
		
		
	    return redirect()->route('admins')->with('success','Successfully update');
	}
	public function delete_admin($admin_id){
	    $admin       = new admin_model();
	    $admin->admin_id = $admin_id;
	    $admin->delete_admin();
	    return redirect()->route('admins');
	}

	public function your_informations($admin_id){
		$admin           = new admin_model();
		$admin->admin_id = $admin_id;
		$array_admin     = $admin->get_one_admin();
	    return view('admin.admin_mgt.update_information', compact('array_admin'));

	}
		

	// major_controller
	 public function majors(){
        $result = admin_model::majors();
        return view('admin.major_mgt.majors', compact('result'));

    }
    public function add_major(){
        return view('admin.major_mgt.add_major');
    }



    public function check_major_exits(Request $rq){
    	$data = request()->validate([
    		'major_name' => 'required'
    	]);
		

			$major             = new admin_model();
			$major->major_name = $rq->get('major_name'); 
			$result            = $major->check_major();
			if (count($result)==1) {
				return redirect()->route('add_major')->with('error','We already have this major ');
				
			}
			else{
				$major->process_add_major();
       			return redirect()->route('majors')->with('success','Major has been successfully added ');
			}
	}
    
    public function view_update_major($major_id){
		$major           = new admin_model();
		$major->major_id = $major_id;
		$array_major     = $major->get_one_major();                                                                                                            
        return view('admin.major_mgt.update_major', compact('array_major'));

    }

    public function check_major_exits_for_update(Request $rq, $major_id){
		

			$major             = new admin_model();
			$major->major_id   = $major_id;
			$major->major_name = $rq->get('major_name'); 
			$result            = $major->check_major();
			$this->validate($rq, [
    			'major_name' => 'required',
				]);         
			if (count($result)==1) {
				return redirect()->route('view_update_major',['major_id'=>$major_id])->with('error','We already have this major ');
				
			}
			else{
				$major->process_update_major();
        		return redirect()->route('majors')->with('success','Major has been successfully added ');
			}
	}


	public function check_major_for_delete(Request $rq, $major_id){
		

		$major           = new admin_model();
		$major->major_id = $major_id;
		$result          = $major->check_major_for_delete();
		// dd($result);
		if (count($result)>=1) {
			return redirect()->route('majors')->with('error',"We can't delete this major because there still have doctors in this major  ");

		}
		else{
			$major->delete_major();
			return redirect()->route('majors')->with('success','Major has been successfully deleted ');
		}
	}
   
    
    public function delete_major($major_id){
		$major           = new admin_model();
		$major->major_id = $major_id;                                                                                                                                                            
        $major->delete_major();
        return redirect()->route('majors');
    }


	// new_category_controller
	 public function new_categories(){
	    $result = admin_model::new_categories();
	    return view('admin.new_category_mgt.new_categories', compact('result'));

	}
	public function add_new_category(){
	    return view('admin.new_category_mgt.add_new_category');
	}


	public function check_new_category_exits(CategoriesRequest $rq){
		

			$new_category             = new admin_model();
			$new_category->new_category_name = $rq->get('new_category_name'); 
			$result            = $new_category->check_new_category();
			if (count($result)>=1) {
				return redirect()->route('add_new_category')->with('error','We already have this new category ');
				
			}
			else{
				$new_category->process_add_new_category();
	    		return redirect()->route('new_categories')->with('success','New category has been successfully added ');
			}
	}
	
	public function view_update_new_category($new_category_id){
		$new_category                  = new admin_model();
		$new_category->new_category_id = $new_category_id;
		$array_new_category            = $new_category->get_one_new_category();                                                                                                            
	    return view('admin.new_category_mgt.update_new_category', compact('array_new_category'));

	}

	public function process_update_new_category(Request $rq,$new_category_id){
		$new_category                    = new admin_model();
		$new_category->new_category_id   =$new_category_id;
		$new_category->new_category_name =$rq->new_category_name;        
        $this->validate($rq, [
    			'new_category_name' => 'required',
				]);
        $new_category->process_update_new_category();
        
        return redirect()->route('new_categories');
    }

    	public function check_new_category_to_delete(Request $rq, $new_category_id){
		

		$new_category           = new admin_model();
		$new_category->new_category_id = $new_category_id;
		$result          = $new_category->check_new_category_to_delete();
		// dd($result);
		if (count($result)>=1) {
			return redirect()->route('new_categories')->with('error',"We can't delete this category because there still have doctors in this category  ");

		}
		else{
			$new_category->delete_new_category();
			return redirect()->route('new_categories')->with('success','category has been successfully deleted ');
		}
	}
   
	public function delete_new_category($new_category_id){
		$new_category                  = new admin_model();
		$new_category->new_category_id = $new_category_id;                                                                                                                                                            
	    $new_category->delete_new_category();
	    return redirect()->route('new_categories');
	}



	// news_controller
	public function news(){
	    $result = admin_model::news();
	    return view('admin.news_mgt.news', compact('result'));

	}
	public function add_new(){
		 $result = admin_model::new_categories();
	    return view('admin.news_mgt.add_new', compact('result'));
	}
	public function process_add_new(NewsRequest $rq){

		$admin                  = new admin_model();
		$admin->admin_id        = $rq->admin_id;
		$admin->subject         = $rq->subject;
		$admin->content         = $rq->content;
		$admin->date            = $rq->date;
		$admin->new_category_id = $rq->new_category_id;  
	    $admin->process_add_new();
	    return redirect()->route('news');
	    
	    
	    
	}
	public function view_update_new($new_id){
		$result      = admin_model::new_categories();
		$new         = new admin_model();
		$new->new_id = $new_id;
		$array_new   = $new->get_one_new();
	    return view('admin.news_mgt.update_new', compact('result'), compact('array_new'));

	}

	public function process_update_new(Request $rq){
		$new                  = new admin_model();
		$new->new_id          = $rq->new_id;
		$new->subject         = $rq->subject;
		$new->content         = $rq->content;
		$new->date            = $rq->date;
		$new->new_category_id = $rq->new_category_id;   
		 $this->validate($rq, [
    			'new_id' => 'required',
    			'subject' => 'required',
    			'content' => 'required',
    			'date' => 'required',

				]);  
	    $new->process_update_new();
	    return redirect()->route('news');
	}
		public function delete_new($new_id){
		$admin             = new admin_model();
		$admin->new_id = $new_id;
	    $admin->delete_new();
	    return redirect()->route('news');
	}





	// patient_controller
	public function patients(){
	    $result = admin_model::patients();
	    return view('admin.patient_mgt.patients', compact('result'));

	}

	public function view_add_patient(){
	    return view('admin.patient_mgt.add_patient');
	}


	public function check_patient_exits(PatientRequest $rq){
		$email      = $rq->get('email');
		$phone_numb = $rq->get('phone_numb');

			$patient             = new admin_model();
			$result               = $patient->check_patient_exits();
			if (count($result)==1) {
				return redirect()->route('view_add_patient')->with('error','This Email or phone numbers has already been used');
				
			}
			else{
			
			$patient->name       = $rq->name;
			$patient->email      = $rq->email;	 
			$patient->password   = $rq->password;
			$patient->dob        = $rq->dob;
			$patient->gender     = $rq->gender;
			$patient->phone_numb = $rq->phone_numb;
			$patient->address    = $rq->address;
				$patient->process_add_patient();
				return redirect()->route('patients')->with('success','Patient has been successfully added ');
			}
	}

	
	
	public function view_update_patient($patient_id){
		$admin             = new admin_model();
		$admin->patient_id = $patient_id;
		$array_patient     = $admin->get_one_patient();
	    return view('admin.patient_mgt.update_patient', compact('array_patient'));

	}

	public function process_update_patient(Request $rq){
		$admin             = new admin_model();
		$admin->patient_id =$rq->patient_id;
		$admin->email      =$rq->email;
		$admin->password   =$rq->password;
		$admin->name       =$rq->name;
		$admin->dob        =$rq->dob;
		$admin->address    =$rq->address; 
		
		$admin->gender     = $rq->gender;
		$admin->phone_numb = $rq->phone_numb;
		$this->validate($rq, [
				 'email'=> 'required',
				 'password'=> 'required',
				 'name'=> 'required',
				 'dob'=> 'required',
				 'address'=> 'required',
				 'gender'=> 'required',
				 'phone_numb' => 'required',
				]);         
	    $admin->process_update_patient();
	    
	    return redirect()->route('patients');
	}
	public function delete_patient($patient_id){
		$admin             = new admin_model();
		$admin->patient_id = $patient_id;
	    $admin->delete_patient();
	    return redirect()->route('patients');
	}




	// patient_record_controller
	 public function patient_records(){
	    $result = admin_model::patient_records();
	    return view('admin.patient_record_mgt.patient_records', compact('result'));

	}
	


	public function view_add_patient_record(){
		$patient_name = admin_model::get_patient_name();
		$result = admin_model::majors();
		return view('admin.patient_record_mgt.add_patient_record', compact('result'), compact('patient_name'));

	}

	public function process_add_patient_record(Request $rq){
		$admin             = new admin_model();
		$admin->doctor_id  =$rq->doctor_id;
		$admin->date       =$rq->date;
		$admin->shift_id   =$rq->shift_id;
		$admin->patient_id =$rq->patient_id;        
		$admin->result     =$rq->result;
		// dd($admin);        
	    $admin->process_add_patient_record();
	    return redirect()->route('patient_records');
	}


	public function view_update_patient_record($patient_record_id){
		$admin                    = new admin_model();
		$admin->patient_record_id = $patient_record_id;
		$array_patient_record     = $admin->get_one_patient_record();
	    return view('admin.patient_record_mgt.update_patient_record', compact('array_patient_record'));

	}

	public function process_update_patient_record(AdminRequest $rq){
		$admin                    = new admin_model();
		$admin->patient_record_id =$rq->patient_record_id;
		$admin->email             =$rq->email;
		$admin->password          =$rq->password;
		$admin->name              =$rq->name;
		$admin->dob               =$rq->dob;
		$admin->address           =$rq->address;          
	    $admin->process_update_patient_record();
	    return redirect()->route('patient_records');
	}
	public function delete_patient_record($patient_record_id){
		$admin                    = new admin_model();
		$admin->patient_record_id = $patient_record_id;
	    $admin->delete_patient_record();
	    return redirect()->route('patient_records');
	}



	// doctors_controller
	public function doctors_mgt(){
	    $result = admin_model::doctors_mgt();
	    return view('admin.doctors_mgt.doctors', compact('result'));

	}



	public function select_doctor(){
		$result = admin_model::majors();
	    return view('admin.doctors_mgt.select_doctor', compact('result'), compact('doctor_name'));

	}
	public function add_doctor(){
		$result = admin_model::majors();
	    return view('admin.doctors_mgt.add_doctor', compact('result'));
	}


	public function check_doctor_exits(DoctorRequest $rq){
		$doctor                = new admin_model();
		$doctor->email         = $rq->email;	 
		$doctor->password      = $rq->password;
		$doctor->name          = $rq->name;
		$doctor->phone_numb    = $rq->phone_numb;
		$doctor->major_id      = $rq->major_id;
		$doctor->profile_image = Storage::disk('public')->put('profile_image' ,$rq->profile_image);

		
		$result               = $doctor->check_doctor_exits();
		if (count($result)==1) {
			return redirect()->route('add_doctor')->with('error','This Email or phone numbers has already been used');
			
		}
		else{
			$doctor->process_add_doctor();
    		return redirect()->route('doctors_mgt')->with('success','Doctor has been successfully added ');
		}
	}
	
	public function view_update_doctor($doctor_id){
		$result            = admin_model::majors();
		$doctor            = new admin_model();
		$doctor->doctor_id = $doctor_id;
		$array_doctor      = $doctor->get_one_doctor();
	    
	    return view('admin.doctors_mgt.update_doctor', compact('result'), compact('array_doctor'));

	}

	public function process_update_doctor(AdminRequest $rq){
		$doctor             = new admin_model();
		$doctor->doctor_id  = $rq->doctor_id;
		$doctor->email      = $rq->email;
		$doctor->password   = $rq->password;
		$doctor->name       = $rq->name;
		$doctor->phone_numb = $rq->phone_numb;   
		$doctor->major_id   = $rq->major_id;   
	    $doctor->process_update_doctor();
	    return redirect()->route('doctors');
	}
	public function delete_doctor($doctor_id){
		$doctor            = new admin_model();
		$doctor->doctor_id = $doctor_id;
	    $doctor->delete_doctor();
	    return redirect()->route('doctors');
	}


	// demo
	public function get_doctor_by_major(Request $rq){
		$doctor_id   = $rq->doctor_id;
		$doctor_name = admin_model::get_doctor_by_major($doctor_id);
		$doctor_option = "<option value='0'>-Select doctor-</option>";
		foreach ($doctor_name as $each) {
			$doctor_option .= "<option value='$each->doctor_id'>$each->name</option>";
		}
		echo $doctor_option;
	}


	public function get_shift_by_doctor(Request $rq){
		// dd('abc');
			$doctor_id     = $rq->doctor_id;
			$record_date          = $rq->record_date;
			// dd($doctor_id);
			// dd($date);
			$doctor_shift  = admin_model::get_shift_by_doctor($doctor_id,$record_date);
			// dd($doctor_shift);
			// dd($doctor_shift);
			$shift_option = "<option value='0'>-Select shifts-</option>";
			foreach ($doctor_shift as $each) {
				$shift_option .= "<option value='$each->shift_id'>$each->begin - $each->end</option>";
			}
		echo $shift_option;
	}

	// Get_stat
	public function get_stat_doctors_daily(Request $rq){
		$doctor            = new admin_model();
		$date              = $rq->date;
		// dd($date);
		$result            = admin_model::get_stat_doctors_daily($date);
		$array_name_doctor = array_pluck($result,'name');
		$array_count = array_pluck($result,'total_records');



		$data = [];
		$data['array_name_doctor'] = $array_name_doctor;
		$data['array_count'] = $array_count;
		// dd($data);
		return $data;
		
	    
	}



	public function get_stat_doctors_monthly(Request $rq){
		$doctor            = new admin_model();
		$record_year          = $rq->record_year;
		$record_month          = $rq->record_month;
		$result = admin_model::get_stat_doctors_monthly($record_year,$record_month);

		$array_name_doctor = array_pluck($result,'name');
		$array_count = array_pluck($result,'total_records');


		$data = [];
		$data['array_name_doctor'] = $array_name_doctor;
		$data['array_count'] = $array_count;
		return $data;
	    
	}

	// chart
	public function get_chart(){
	    return view('admin.chart_mgt.chart');

	}

	public function get_chart_monthly(){
	    return view('admin.chart_mgt.chart2');

	}

	public function picture(){
		return view('admin.picture');
	}


	public function post_picture(Request $rq){
		Storage::disk('public')->put('photo',$rq->picture);
		return view('admin.picture');
	}


   
}


