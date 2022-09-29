<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list()
    {
        $data = [];



        return view('admin.products.list')->withData($data);
    }

    public function create()
    {
        $data = [];



        return view('admin.products.add')->withData($data);
    }
}
