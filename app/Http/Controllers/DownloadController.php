<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downfunc(){
        $downloads=DB::table('users')->get();
        return view('download.viewfile',compact('downloads'));

    }
}
