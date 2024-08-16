<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        //Lấy toàn bộ dữ liệu
        $query = Product::query();

        // Lấy sản phẩm theo Brand
        if ($request->has('brand_id')) {
            $query->where('brand_id', $request->input('brand_id'));
        }
        //Lấy sản phẩm theo loại
        if ($request->has('category_id')) {
            $query->where('category_id', $request->input('category_id'));
        }

        $products = $query->get();

        return view('Client.product', compact('products'));
    }

    //Phương thức xem chi tiết sản phẩm theo id
    public function detail($id){
        $products = Product::find($id);
        $product = Product::where('category_id', $products->category_id)
        ->where('brand_id', $products->brand_id)
        ->where('id', '!=', $id)
        ->take(5)
        ->get();
        return view('Client.detail', compact('products', 'product'));
    }
}
