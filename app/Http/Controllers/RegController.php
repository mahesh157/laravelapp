<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class RegController extends Controller
{

    public function Signin() {
        $url = url('/Signin');
        $title = 'Employee Sign In'; // You can adjust the title as needed

        $data = [
            'url' => $url,
            'title' => $title,
        ];

        return view('form')->with($data);
    }

    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'cpassword' => 'required|same:password',
        ]);
        // insert Query

          $employee =new Employee;
          $employee->name = $request['name'];
          $employee->email = $request['email'];
          $employee->password = $request['password'];
          $employee->cpassword = md5($request['cpassword']);
          $employee ->save();
          return redirect('/register/view');

    }
    public function view(){
        $employee =Employee::all();
        $data=compact('employee');
       return view('view')->with($data);

   }
   public function trash(){
    $employee =Employee:: onlyTrashed()->get();
    $data=compact('employee');
    return view('employee-trash')->with($data);
   }
   public function delete($id){
    $employee = Employee::find($id);
    if(!is_null($employee)){
        $employee ->delete();
    }
    return redirect('register/view');
   }
   public function restore($id){
    $employee = Employee::withTrashed()->find($id);
    if(!is_null($employee)){
        $employee ->restore();
    }
    return redirect('register/view');
   }
   public function edit($id) {
    $employee = Employee::find($id);

    if (is_null($employee)) {
        return redirect('register/view');
    } else {
        $title = 'Update Registration';
        $url = url('/register/update') . "/" . $id;
        $data = [
            'employee' => $employee,
            'url' => $url,
            'title' => $title,
        ];

        return view('form')->with($data);
    }
}
public function update($id,Request $request){
    $employee = Employee::find($id);
    $employee->name = $request['name'];
    $employee->email = $request['email'];
    $employee ->save();
   return redirect('/register/view');
}

}
