<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailController extends Controller
{
    function getDetailController($id){
        return view('detail',['id'=>$id]);
    }
}
