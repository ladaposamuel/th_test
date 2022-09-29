<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list()
    {
        $data = [];
        $products = [];
        $getProducts = Product::all();
        foreach($getProducts as $prd){
            $products[$prd->id] = $prd
                ->specifications()
                ->with(['product','specie','dryMethod','treatement','grade'])
                ->first();
        }
        $data['products'] = $products;
        return view('admin.products.list')->withData($data);
    }

    public function create()
    {
        $data = [];



        return view('admin.products.add')->withData($data);
    }
}
