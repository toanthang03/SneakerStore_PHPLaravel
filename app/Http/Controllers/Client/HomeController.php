<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        //lấy ra 6 sản phẩm mới nhất
        $products = Product::take(6)->get();
        //Lấy ra sản phẩm đặc biệt
        $specialProduct = Product::whereIn('id', [2, 8, 19])->get();
        $oldProduct = Product::whereIn('id', [14, 15, 16, 17, 18, 10])->get();
        return view('Client.index', compact('products', 'specialProduct', 'oldProduct'));
    }
}
