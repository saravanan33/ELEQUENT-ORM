<?php

namespace App\Http\Controllers;

use App\Models\School;
use App\Models\Parents;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function userData($id){
        $userDetails=School::where('id',$id)->with('getBelongTo')->first();
        return $userDetails;
        
    }
    public function details($id)
    {
        $details=Student::where('id',$id)->with('getSchool')->first()->toArray()   ;
        return $details;
    }
    public function studentToParent($id){
        $a=Student::where('id',$id)->with('parent')->first()->toArray();
        // print_r(json_encode($a));exit;
        // return $a;  
        dd($a);exit; 
        foreach($a as $key=>$val) { 
            echo $key.'='.$val."<br>  ";
            // if($val==array()){
                print_r('hi');
                foreach($val as $kay=>$value)
                {
                    echo $kay."<br>".$value;
                }
            // }          
        }
    }
    public function parentToStudent($id){
        $parentToStudent=Parents::where('id',$id)->with('student')->first();
        // dd($parentToStudent);
        // return $parentToStudent;
        dd($parentToStudent);exit;
        print_r($parentToStudent);exit;
        // foreach($parentToStudent as $key=>$val)
        // {
        //         echo $key.$val."<br>" ;
        // }        
    }
}
