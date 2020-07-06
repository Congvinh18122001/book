<?php

namespace App\Http\Controllers\migration;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class studentController extends Controller
{
    //
    function showInput(Request $request){
 
        return view('migration.inputForm');
    }
    function insertStudent(Request $request){
 
        $fullname = $request->name;
        $age = $request->age;
        $address = $request->address;
        DB::table('student')->insert([
            'name'=>$fullname,
            'age'=>$age,
            'address' => $address
        ]);
        return redirect()->route('display');
    }
    function getStudent(Request $request){
       $index=0;
       $stdList = DB::table('student')->paginate(2);;
       return view('migration.display')->with([
           'stdList' => $stdList,
           'index'=>$index
       ]);
    }
    function deleteStudent($rollno){
        DB::table('student')->where('rollno', '=', $rollno)->delete();
         return redirect()->route('display');

    }
}
?>
