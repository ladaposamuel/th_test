<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Models\GradeName;
use App\Models\Models\GradeNameOptions;
use App\Models\Models\Product;
use App\Models\Models\ProductSpecification;
use App\Models\Models\SpecDryMethod;
use App\Models\Models\SpecSpecie;
use App\Models\Models\SpecTreatment;
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
        $data['species'] = SpecSpecie::all();
        $data['grade_names'] = GradeName::all();
        $data['grade_name_options'] = GradeNameOptions::all();
        $data['drying_method'] = SpecDryMethod::all();
        $data['treatment'] = SpecTreatment::all();

        return view('admin.products.add')->withData($data);
    }

    public function save(Request $request) {
        $specie = $request->input('specie');
        $grade_name = $request->input('grade_name');
        $grade_name_option = $request->input('grade_name_option');
        $drying_method = $request->input('drying_method');
        $treatment = $request->input('treatment');
        $thickness = $request->input('thickness');
        $width = $request->input('width');
        $length = $request->input('length');

        $request->validate([
            'specie' => 'required',
            'grade_name' => 'required',
            'grade_name_option' => 'required',
            'drying_method' => 'required',
            'thickness' => 'required|numeric',
            'width' => 'required|numeric',
            'length' => 'required|numeric'
        ]);

        //product specifications

        $productSpecifications = new ProductSpecification();
        $productSpecifications->product_thickness =  $thickness;
        $productSpecifications->product_width =  $width;
        $productSpecifications->product_length =  $length;
        $productSpecifications->spec_specie_id =  $specie;
        $productSpecifications->spec_grade_id =  $grade_name;
        $productSpecifications->spec_treatment_id =  $treatment;
        $productSpecifications->spec_dry_method_id =  $drying_method;


        $product = new Product();
        $product->product_code = '00000';
        $product->save();
        $product->specifications()->save($productSpecifications);

        dd($product);

    }
}
