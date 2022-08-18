<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(Request $request) {
        return redirect()->route('auth.login');
    }
}
