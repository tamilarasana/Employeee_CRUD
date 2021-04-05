<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\DataTables\EmployeeDataTable;
// use App\DataTables\EmployeeDataTable;
// use Yajra\DataTables\Faccades\DataTables;

class EmployeeController extends Controller
{

    public function index(EmployeeDataTable $datatable){
        return $datatable ->render('employee');
    }

     



    //    public function getAddEditRemoveColumnData()
    // {
    //     dd("hi");
    //     // $users = User::select(['id', 'name', 'email', 'phone', 'salary', 'department','created_at', 'updated_at']);

    //     // return Datatables::of($users)
    //     //     ->addColumn('action', function ($user) {
    //     //         return '<a href="#edit-'.$user->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-edit"></i> Edit</a>';
    //     //     })
    //     //     ->editColumn('id', 'ID: {{$id}}')
    //     //     ->removeColumn('password')
    //     //     ->make(true);
    // }
    // public function addEmployee(){
       
    //     $employee=[ 
    //         ["name" => "Tamil", "email" =>"Tamil@gmail.com", "phone" => "979878989", "salary" => "20000", "department" => "mca"],
    //         ["name" => "sam", "email" =>"sam@gmail.com", "phone" => "979845489", "salary" => "2000032", "department" => "be"],
    //         ["name" => "ram", "email" =>"ram@gmail.com", "phone" => "9234232389", "salary" => "20003", "department" => "mba"],
    //         ["name" => "siva", "email" =>"siva@gmail.com", "phone" => "967678989", "salary" => "200200", "department" => "msc"],
    //         ["name" => "bala", "email" =>"bala@gmail.com", "phone" => "9724323989", "salary" => "23000", "department" => "me"],

    //     ];
    //     Employee::insert($employee);
        
    //     return "Data is inserted";
        
    // }
}
