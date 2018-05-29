<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
session_start();
use Illuminate\Support\Facades\Redirect;
class SuperAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->authCheck ();
        $admin_home = view('admin.pages.admin_home');
        return view('admin.admin_master')
             ->with('admin_main_content', $admin_home); 
    }
    
    public function addCategory ()
    {
       $this->authCheck ();
       $add_category_page = view('admin.pages.add_category');
        return view('admin.admin_master')
             ->with('admin_main_content', $add_category_page); 
    }


    private function authCheck ()
    {
      $admin_id= Session::get('admin_id');
              if($admin_id != NULL)
              {
                return;  
              }
              else{
                  return Redirect::to('/admin')->send();
              }
    }

    public function logout ()
    {
      Session::put('admin_name','');
      Session::put('admin_id','');
      Session::put('message','You are Successfully Logout !');
      return Redirect::to('/admin');
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
