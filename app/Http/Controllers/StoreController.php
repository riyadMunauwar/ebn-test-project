<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Store;
use App\Models\Product;

class StoreController extends Controller
{

    // show Store
    public function showStore($_storeSlug){
        $store = Store::with('user')->where('slug', $_storeSlug)->firstOrFail();
        $products = Product::where('store_id', $store->id)->get();

        return view('singleStorePage', ['store' => $store, 'products' => $products]);
    }



    // Show Store Create Page to FrontEnd
    public function createPage(){
        return view('createStorePage');
    }


    // Create Store
    public function createStore(Request $request){
        
        $validated = $request->validate([
            'name' => 'required',
            'slug' => 'required|unique:stores',
            'country' => 'required',
            'district' => 'required',
            'email' => 'email|unique:stores,email'

        ]);
        

        $path = $request->file('logo')->store('public/uploads/images');
        Store::create([
            'name' => $request->name,
            'slug' => $request->slug,
            'logo' => $path,
            'type' => $request->type,
            'country' => $request->country,
            'district' => $request->district,
            'upazila' => $request->upazila,
            'adress' => $request->adress,
            'post_code' => $request->postcode,
            'phone' => $request->phone,
            'email' => $request->email,
            'user_id' => Auth::id()
        ]);
        
            
        return view('storeDashboardPage');
    }
}
