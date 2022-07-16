<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    //


    public function showSingleProduct($productID){

        $product = Product::Find($productID);

        return view('singleProductPage', ['product' => $product]);
    }
}
