<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class MtappController extends Controller
{
    public function index()
    {

        return view('mtapp.index');
    }
}
