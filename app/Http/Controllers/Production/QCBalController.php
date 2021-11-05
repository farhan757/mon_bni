<?php

namespace App\Http\Controllers\Production;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QCBalController extends Controller
{
    //
    public function index()
    {
        return view('production.qcbalancing.index');
    }
}
