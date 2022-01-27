<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Carbon\Carbon;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $all=User::orderBy('id','DESC')->get();
        return view('admin.user.all', compact('all'));
    }

    public function add(){
        return view('admin.user.add');
    }

    public function edit(){
        return view('admin.user.edit');
    }

    public function view(){
        return view('admin.user.view');
    }

    public function insert(){

    }

    public function update(){

    }

    public function softdelete(){

    }

    public function restore(){

    }

    public function delete(){

    }
}
