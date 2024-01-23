<?php

namespace Learning\Pkg\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MasterController extends Controller
{
    public function index() {
        /**
         * use 'Learning\Pkg::' namespace for call view file inside of bank package
         */
        return view('Learning\Pkg::welcome');
    }

    public function post(Request $request) {
        $data = $request->all();

        dd($data);
    }

}
