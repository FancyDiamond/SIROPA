<?php

namespace Siropa\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    //controlador principal
    public function index()
    {
    	return view('web.index');
    	//return ('Ok we are in tha main');
    }

    public function admin()
    {
    	return view('admin.index');
    }
}
