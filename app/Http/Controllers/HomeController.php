<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        return view("home0260");
    }

    public function create(){
        return view("create0260");
    }

    public function update(Request $id){
        $pasien = DB::table('pasien')->where('pasien',$id)->get();
        return view("update0260", ['pasien' => $pasien]);
    }

    public function read(){
        $pasien = DB::table('pasien')->get();
 
    	return view('read0260',['pasien' => $pasien]);
    }

    public function store(Request $request)
    {
	
	DB::table('pasien')->insert([
		'nama' => $request->nama,
		'alamat' => $request->alamat,
		
	]);
	
	return redirect('/hal_read');
    
    }

    public function up(Request $request)
{
	
	DB::table('pasien')->where('id',$request->id)->update([
		'nama' => $request->nama,
		'alamat' => $request->alamat
	]);
	
	return redirect('/hal_read');
}


}
