<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DataController extends Controller
{
    public function getUser(Request $request){
        // dd($request->all());
       
        $columns = array(
            0 => 'name',
            1 => 'email',
            2 => 'action'
        );
            $totalData = User::count();
            // dd($totalData);
            $limit = $request->input('length');
            $start = $request->input('start');
            $order = $columns[$request->input('order.0.column')];
            $dir = $request->input('order.0.dir');

            if(empty($request->input('search.value'))){
                $posts = User::offset($start)
                        ->limit($limit)
                        ->orderBy($order,$dir)
                        ->get();
                $totalFiltered = User::count();
            }else{
                $search =$request->input('search.value');
                $posts = User::where('name', 'like',"%{$search}%")
                            ->orWhere('email','like',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();
                $totalFiltered = User::where('name','like',"{$search}%")
                           ->orWhere('email','like',"%{$search}%")
                           ->count();
            }

            // $post =User::offset($start)
            //             ->limit($limit)
            //             ->orderBy($order,$dir)
            //             ->get();
            $data = array();
            if($posts){
                foreach($posts as $r){
                    $nesteData['id'] = $r->id;
                    $nesteData['name'] = $r->name;
                    $nesteData['email'] = $r->email;
                    $nesteData['action'] = '
                               <a href ="#edit-'.$r->id.'" class="btn btn-warning">Edit</a>
                               <a href ="#" class="btn btn-danger">Delete</a>';
                               $data[] = $nesteData;
                }
            }

            $json_data = array(
                "draw"         => intval($request->input('draw')),
                "recordsTotal" => intval($totalData),
                "recordsFiltered" => intval($totalFiltered),
                "data"          => $data
            );
            echo json_encode($json_data);
    }
}
