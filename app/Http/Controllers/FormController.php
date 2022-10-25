<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class FormController extends Controller
{
    public function index()
    {
        return view('form', ['title' => 'Control Escolar']);
    }
}
    