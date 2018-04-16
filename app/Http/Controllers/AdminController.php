<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;
use Illuminate\Support\Facades\Session;
use Yajra\DataTables\Facades\DataTables;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins=User::all();
        return view('holiday.admin.index',compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $name = $request->input('name');
      $email = $request->input('email');
      // $today = date("y/m/d");
      $phone = $request->input('phone');
        $password = bcrypt($request->input(['password']));
        $role = $request->input('role');
        $location = $request->input('location');
      $data=DB::insert("insert into users(name,email,phone,password,role,location) values('$name','$email','$phone','$password','$role','$location')");
     
      Session::flash('message','Record Inserted Successfully');
      return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $admin_edit=User::where('id',$id)->get();
       return view('holiday.admin.edit',compact('admin_edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
       $postData = $request->all();
       dd($postdata);
       /*$data=User::find($id)->update($postData);*/
       /* $name = $request->input('name');
        $id = $request->input('id');
        $email = $request->input('email');
      // $today = date("y/m/d");
         $phone = $request->input('phone');
        $password = $request->input('password');
        $role = $request->input('role');
         $location = $request->input('location');
      */
   /*  $data= DB::update("UPDATE `tbl_webusers` SET `name`='$name',`email`='$email',`phone`='$phone',`password`='$password',`role`='$role',`location`='$location' WHERE `id`= $id");
         dd($admin_update);*/
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $admin_delete=User::where('id',$id)->delete();
       Session::flash('message','Record Deleted Successfully');
       return back();
    }
}
