<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('frontend.products.product_list');
    }

    public function product_detail($product_name) {
        return view('frontend.products.product_detail');
    }
}
