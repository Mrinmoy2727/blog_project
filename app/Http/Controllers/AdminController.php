<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;

session_start();
use Illuminate\Support\Facades\Redirect;

  

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    
    public function index()
    {
        //echo 'admin login';
        $admin_id= Session::get('admin_id');
              if($admin_id == NULL)
              {
                return view('admin.admin_login'); 
              }
              else{
                  return Redirect::to('/dashboard')->send();
              }       
    }
        public function adminloginCheck (Request $request)
    {
        $email_address=$request->email_address; 
        $password = $request-> password;
        
        $result = DB::table('tbl_admin')
                ->select('*')
                ->where('email_address', $email_address)
                ->where('password', md5($password))
                ->first();
        
//        echo '<pre>';
//        print_r($result);
//        exit();
        
       if($result)
       {
        Session::put('admin_id', $result->admin_id); 
        Session::put('admin_name', $result->admin_name);
        return Redirect::to('/dashboard');  
        
       } else 
       {
         Session::put('exception','Your User ID or Password Invalid !');  
         return Redirect::to('/admin');   
       }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
}


