<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    //
    public function index(){
        $list_pasien = Pasien::all();
        return view('admin.pasien', compact('list_pasien'));
    }
}
