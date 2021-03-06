<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title="Data Mahasiswa";
        $data['mahasiswa']=array(
            'nim'=>'1905021016',
            'nama'=>'Putu Krisna putra',
            'alamat'=>'pantai penimbangan gang balbo',
            'nohp'=>'085978648464',
            'email'=>'putu.krisna@undiksha.ac.id'
        );
        return view('admin.beranda', compact('title','data'));
    }
    public function dashboard(){
        $title="Data Dashboard";

        return view('admin.dashboard', compact('title'));
    }
}