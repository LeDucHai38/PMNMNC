<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        $title = "Danh sach san pham";
        return view('product.index', ['title' => $title], [
            'products' => [
                ['id' => 1, 'name' => 'Product A', 'price' => 100],
                ['id' => 2, 'name' => 'Product B', 'price' => 200],
                ['id' => 3, 'name' => 'Product C', 'price' => 300],
            ]
        ]);
    }
    public function getDetail(string $id = '123'){
        return view('product.detail', data: ['id' => $id]);
    }
}
