<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Test;
use App\Models\Gender;
use Illuminate\Support\Facades\Session;

class TestController extends Controller {
	//Index Page
	public function index() {
		$tests = Test::orderBy('name','ASC')->get();
		return view('admin.test.index',compact('tests'));
	}

	//Add Test
	public function add() {
		return view('admin.test.add');

	}

	//Store Test
    public function store(Request $request){
		$data = $request->all();
		$rules = [
		 'name' => 'required|max:255',
		 'gender' => 'required|max:255',
		 'email' => 'required',
		 'phone'=>'numeric', 
		 'dob'=>'required',
		 'address'=>'required',
		 'nationality'=>'required',
		 'education_background'=>'required',	 
	 ];
	$customMessages = [
		'name.required' => ' Name is required',
		'name.unique' => ' Name already exist',
		'gender.required'=>'Gender is required',
		'email.required'=>'Email is required',
		'phone.required'=>'Phone number is required',
		'phone.unique'=>'phone shound be integer',
		'dob.required'=>'Date of Birth is required',
		'address.required'=>'Address is required',
		'nationality.required'=>'nationality is required',
		'education_background.required'=>' Education is required'
	];
	$this->validate($request, $rules, $customMessages);
	
	 $test = new  Test();
	 $test->name = $data['name'];
	 $test->gender = $data['gender'];
	 $test->email = $data['email'];
	 $test->phone = $data['phone'];
	 $test->address = $data['address'];
	$test->dob = $data['dob'];
	$test->nationality  = $data['nationality'];
	$test->education_background = $data['education_background'];
		 $test->save();
		 $notification = array(
		   'alert-type' => 'success',
		   'message' => 'test has been Added Successfully'
		 );
		 return redirect()->route('test.index');
 
 
	 }



	 public function dataTable(){
        $model = Test::orderBy('priority', 'ASC')->get();
        return DataTables::of($model)
        ->addColumn('action', function($model){
            return view('admin.test._actions',[
               'model' => $model,
               'url_show' => route('test.show', $model->id),
               'url_edit' => route('test.edit', $model->id),
               'url_delete' => route('test.delete', $model->id)



            ]);
        })
        ->addIndexColumn()
        ->rawColumns(['action'])
        ->make(true);
        

            }

	 public function show($id){
		$model= Test::findOrfail($id);
		return view('admin.test.show', compact('model'));
	    }
 

		// 	//edit Test
		public function edit($id){
			$test= Test::findOrfail($id);
			return view('admin.test.edit', compact('test'));
		}

	//test Update
     
	public function update(Request $request, $id){
        $data = $request->all();
		//  $test = Test::findOrFail($id);
        $rules = [
            'name' => 'required|max:255',
			'gender'=>'required',
        ];
        $customMessages = [
            'name.required' => 'test Name is required',
            'name.unique' => 'test Name already exists in our database',
			
        ];
        $this->validate($request, $rules, $customMessages);
		 $test = Test::findOrFail($id);
        $test->name = $data['name'];
		$test->gender = $data['gender'];  
        $test->save();
        Session::flash('success_message', 'test has been Updated Successfully');
		return redirect()->route('test.index');
    }

    public function delete($id){
        $test = Test::findOrFail($id);
        $test->delete();
        Session::flash('success_message', 'test has been Deleted Successfully');
        return redirect()->back();
    }

}
