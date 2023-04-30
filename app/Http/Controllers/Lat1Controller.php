<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lat1Controller extends Controller
{
    public function index(){
        $data["nama"]="Rahmalia Rahadi";
        $data["asal"]="Bandung";
       return view('v_latihan1', $data);
    }

    public function method2(){
		$data['title'] = "Daftar Mahasiswa";
		$data['daf_mhs'] = array(
			array("nama" => "Rahma", "asal" => "Bandung"),
	 	   array("nama" => "Rahadi", "asal" => "Jakarta"),
			array("nama" => "RaRa", "asal" => "Surabaya")
		);
		return view('v_latihan2', $data);
	}


}
