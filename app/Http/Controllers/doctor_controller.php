<?php

namespace App\Http\Controllers;
use App\doctor_model;
use Illuminate\Http\Request;
use App\Http\Requests\DoctorRequest;

class doctor_controller extends Controller
{
    public function login_doctor(){
	    return view('doctor.login');

	}

	 public function process_login_doctor(Request $rq){
			$email    = $rq->get('email');
			$password = $rq->get('password');

			$doctor           = new doctor_model();
			$doctor->email    = $email;	 
			$doctor->password = $password;
			$array            = $doctor->login_doctor();
			if (count($array) ==1) {
			$rq->session()->put('doctor_id',$array[0]->doctor_id);
			$rq->session()->put('name',$array[0]->name);
			

			return redirect()->route('doctors');
				
			}
			else{
				return redirect()->route('login_doctor')->with('error','Incorrect email or password');
			}

	 }


	
	  // logout
	 public function logout_doctor(Request $rq){
	    $rq->session()->flush();
	    return redirect()->route('login_doctor')->with('success','You have logged out of the system');

	}




	//   // doctor_controller
	//  public function get_doctors(){
	//     $doctor            = new doctor_model();
	// 	$doctor_id = $request->session()->get('doctor_id');
	// 	$array_doctor      = $doctor->get_one_doctor();
	//     return view('doctor.doctor_information_mgt.doctor_information', compact('array_doctor'));

	// }

	 public function doctors(Request $rq){
	   // $result            = doctor_model::majors();
		$doctor            = new doctor_model();
		$doctor->doctor_id = $rq->session()->get('doctor_id');	
		// dd($doctor_id);
		$result      = $doctor->get_one_doctor();
	    return view('doctor.doctor_information_mgt.doctor_information', compact('result'));

	}

	public function view_update_doctor(Request $rq){
		// $result            = doctor_model::majors();
		$doctor       = new doctor_model();
		$doctor->doctor_id    = $rq->session()->get('doctor_id');	
		$result = $doctor->get_one_doctor();
	    
	    return view('doctor.doctor_information_mgt.update_doctor_information', compact('result'));

	}


	

	public function process_update_doctor(DoctorRequest $rq){
		$doctor             = new doctor_model();
		$doctor->doctor_id  = $rq->doctor_id;
		$doctor->name       = $rq->name;
		$doctor->email      = $rq->email;
		$doctor->password   = $rq->password;
		$doctor->phone_numb = $rq->phone_numb;   
	    $doctor->process_update_doctor();
	    return redirect()->route('doctors');
	}


	public function patient_record_mgt(Request $rq){
		// $result            = doctor_model::majors();
		// $doctor       = new doctor_model();
		// $doctor->doctor_id    = $rq->session()->get('doctor_id');	
		// $result = $doctor->get_one_doctor();
	    
	    return view('doctor.patient_record_mgt.patient_record');

	}

	public function view_todo_list(){
		
	    return view('doctor.todo_list_mgt.get_todo_list');

	}



	public function get_todo_list(Request $rq){
		// $result            = doctor_model::majors();
		$doctor    = new doctor_model();
		$doctor_id = $rq->session()->get('doctor_id');	
		$month     = $rq->month;	
		$year      = $rq->year;	
		$result    = doctor_model::get_todo_list($year,$month,$doctor_id);

	    
	    return view('doctor.todo_list_mgt.update_doctor_information', compact('result'));

	}
}
