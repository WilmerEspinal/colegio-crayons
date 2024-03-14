<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AulaVirtualController extends Controller
{
    //
    public function aulaVirtual()
    {
        return view("aula-virtual.home");
    }
}
