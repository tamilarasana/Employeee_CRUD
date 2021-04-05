<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Yajra\DataTables\Facades\DataTables;

class StudentController extends Controller
{
    public function index(){
    	return view('student');
    }


    public function get_dataable(){
    	return Datatables::eloquent(Student::query())->make(true);
    	
    	// return Datatables::of(Student::select('*'))
    	// ->addColumn('action', function ($page) {
     //            return (string) view('student', ['id' => $page->id]);
     //        })->make(true);
    }
}
